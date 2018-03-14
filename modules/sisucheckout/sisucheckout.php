<?php
/**
 * This file is part of the simplesurance GmbH checkout plugin for PrestaShop.
 *
 * @author simplesurance GmbH
 * @copyright (C) simplesurance GmbH
 * @license see /LICENCE
 */

class SisuCheckout extends Module
{
    /**
     * Merchant can choose which identifier he wants to use
     */
    const IDENTIFIER_ORDER_ID = 'order_id';
    const IDENTIFIER_ORDER_REFERENCE = 'order_reference';
    
    /**
     * Holds the customer data in json
     *
     * @var string|boolean
     */
    protected $customerData = false;

    /**
     * Order id
     *
     * @var string
     */
    protected $orderId;

    /**
     * Cart products
     *
     * @var array
     */
    protected $products = array();

    /**
     * Configuration value for shop id
     *
     * @var int
     */
    protected $shopId;

    /**
     * Configuration value for partner id
     *
     * @var int
     */
    protected $partnerId;

    /**
     * Configuration value for category export
     *
     * @var bool
     */
    protected $allowCategoryExport = false;

    /**
     * Configuration value for js checkout url
     *
     * @var string
     */
    protected $checkoutUrl = 'www.schutzklick.de/jsapi/sisu-checkout-2.x.min.js';

    /**
     * Service registration url
     *
     * @var string
     */
    protected $registrationUrl = 'https://www.schutzklick.de/plugin/registrierung/default';

    /**
     * Html for admin form
     *
     * @var string
     */
    private $html = '';

    /**
     * Admin form errors container
     *
     * @var array
     */
    private $postErrors = array();

    /**
     * Initialize module
     */
    public function __construct()
    {
        $this->name = 'sisucheckout';
        $this->displayName = 'Simplesurance Checkout Plugin';
        $this->tab = 'payments_gateways';
        $this->version = '1.0.9';
        $this->author = 'simplesurance GmbH';
        $this->bootstrap = true;

        $this->initConfiguration();

        parent::__construct();
        
        $this->description = $this->l('Simplesurance checkout integration');
        $this->module_key = '8798b9d4234e862a46b5fad5413d3d31';

        $this->checkForConfigurationValues();
    }

    /**
     * Install module
     *
     * @return boolean
     */
    public function install()
    {
        if (!parent::install()
            || !$this->registerHook('actionFrontControllerSetMedia')
            || !$this->registerHook('displayHome')) {
            return false;
        }

        return true;
    }

    /**
     * Uninstall module
     *
     * @return boolean
     */
    public function uninstall()
    {
        if (!Configuration::deleteByName('SISU_SHOP_ID')
            || !Configuration::deleteByName('SISU_PARTNER_ID')
            || !Configuration::deleteByName('SISU_ALLOW_CATEGORY_EXPORT')
            || !parent::uninstall()) {
            return false;
        }

        return true;
    }

    /**
     * Include javascript
     *
     * @param array $params
     */
    public function hookActionFrontControllerSetMedia($params)
    {
        if ($this->context->controller instanceof OrderConfirmationController) {
            // Include JS for order confirmation page
            Media::addJsDef($this->getOrderConfirmationData());
            $this->addJs(
                'modules/'.$this->name.'/views/js/order-confirmation.js',
                'sisucheckout-order-confirmation',
                array('position' => 'bottom', 'priority' => 150)
            );
        } elseif ($this->isCartPage()) {
            // Include JS for cart page
            Media::addJsDef($this->getPaymentData());
            $this->addJs(
                'modules/'.$this->name.'/views/js/footer.js',
                'sisucheckout-footer',
                array('position' => 'bottom', 'priority' => 150)
            );
        } elseif ($this->isPaymentPage()) {
            Media::addJsDef($this->getPaymentData());
            $this->addJs(
                'modules/'.$this->name.'/views/js/payment.js',
                'sisucheckout-payment',
                array('position' => 'bottom', 'priority' => 150)
            );
        }
    }

    /**
     * Add JS wrapper, compatible with PS 1.7 and 1.6
     *
     * @param string $path path to JS file, relative to ps root
     * @param string|null $staticName required for PS 1.7
     * @param array $params required for PS 1.7
     */
    public function addJs($path, $staticName = null, $params = array())
    {
        if (version_compare(_PS_VERSION_, '1.7', '>=')) {
            $this->context->controller->registerJavascript(
                $staticName,
                $path,
                $params
            );
        } else {
            $this->context->controller->addJS(__PS_BASE_URI__.$path);
        }
    }

    /**
     * Gets array of variables needed to render order confirmation page
     * @return array
     */
    public function getOrderConfirmationData()
    {
        $this->initCustomerData();
        $this->initOrderData();

        return array(
            'sisuCountry' => $this->getCountry(),
            'sisuPartnerId' => (int)$this->getPartnerId(),
            'sisuShopId' => (int)$this->getShopId(),
            'sisuOrderId' => $this->orderId,
            'sisuCustomerData' => json_encode($this->customerData),
            'sisuCheckoutUrl' => $this->getCheckoutUrl(),
            'sisuIsSandbox' => isset($_SERVER['SISU_SANDBOX']),
            'sisuIsDebug' => isset($_SERVER['SISU_DEBUG']),
        );
    }

    /**
     * Gets array of variables needed to render payment page
     * @return array
     */
    public function getPaymentData()
    {
        $this->initProducts();

        return array(
            'sisuAddressesCountries' => $this->getCustomerAddressesCountries(),
            'sisuCountry' => $this->getCountry(),
            'sisuProducts' => json_encode($this->products),
            'sisuPartnerId' => (int)$this->getPartnerId(),
            'sisuShopId' => (int)$this->getShopId(),
            'sisuCheckoutUrl' => $this->getCheckoutUrl(),
            'sisuIsSandbox' => isset($_SERVER['SISU_SANDBOX']),
            'sisuIsDebug' => isset($_SERVER['SISU_DEBUG']),
            'sisuIsAjax' => Tools::getValue('ajax'),
            'isOrderOpc' => $this->isOrderOpcPage(),
            'sisuPage' => $this->getPage(),
        );
    }

    /**
     * Gets page parameter value for sisu request
     *
     * @return string
     */
    public function getPage()
    {
        if ($this->context->controller instanceof OrderOpcController ||
            $this->context->controller instanceof OrderController &&
            ((isset($this->context->controller->step) && 3 == $this->context->controller->step) || $this->isPs17())) {
            return 'checkout';
        }
        
        return 'cart';
    }

    /**
      * Dump shop categories in JSON format
      *
      * @param array $params
      * @return string
      */
    public function hookDisplayHome($params)
    {
        if (!Tools::getIsset('schutzklickCategoryExport') ||
            !$this->isCategoryExportAllowed()) {
            return;
        }

        header('Content-Type: application/json');
        echo json_encode($this->getCategories());
        die();
    }

    /**
     * Check if current page is one page checkout
     * PS 1.7 does not have an opc or non-opc - it's just one regular checkout,
     * therefore this method always returns true on PS 1.7
     *
     * @return bool is one page checkout page or not
     */
    protected function isOrderOpcPage()
    {
        if (version_compare(_PS_VERSION_, '1.7', '>=')) {
            return true;
        }

        return $this->context->controller instanceof OrderOpcController;
    }

    /**
     * Check if current page is shopping cart page
     */
    protected function isCartPage()
    {
        if ($this->context->controller instanceof CartController && $this->isPs17()) {
            return true;
        }

        return !$this->isPs17() && ($this->context->controller instanceof CartController ||
                $this->context->controller instanceof OrderController && !Tools::isSubmit('step'));
    }

    /**
     * Check if current page is payment page
     */
    protected function isPaymentPage()
    {

        if ($this->context->controller instanceof OrderController && $this->isPs17()) {
            return true;
        }

        return !$this->isPs17() && ($this->context->controller instanceof OrderOpcController ||
            $this->context->controller instanceof OrderController && 3 == $this->context->controller->step);
    }

    /**
     * Checks if it's PrestaShop 1.7
     */
    protected function isPs17()
    {
        return version_compare(_PS_VERSION_, '1.7', '>');
    }

    /**
     * Init configuration for settings
     */
    protected function initConfiguration()
    {
        $config = Configuration::getMultiple(array('SISU_SHOP_ID', 'SISU_PARTNER_ID', 'SISU_ALLOW_CATEGORY_EXPORT'));

        if (is_numeric($config['SISU_SHOP_ID'])) {
            $this->shopId = (int) $config['SISU_SHOP_ID'];
        }

        if (is_numeric($config['SISU_PARTNER_ID'])) {
            $this->partnerId = (int) $config['SISU_PARTNER_ID'];
        }

        $this->allowCategoryExport = (bool) $config['SISU_ALLOW_CATEGORY_EXPORT'];
    }

    /**
     * Add warning on admin if configuration settings are missing
     */
    protected function checkForConfigurationValues()
    {
        if (!isset($this->shopId) || !isset($this->partnerId)) {
            $this->warning = $this->l('Please add your shop id, partner id and sisu checkout url.');
        }
    }

    /**
     * Initialize customer data from current context
     */
    protected function initCustomerData()
    {
        $this->customerData = $this->fetchCustomerData();
    }

    /**
     * Initialize products data
     */
    protected function initProducts()
    {
        $products = $this->context->cart->getProducts();
        $currency = $this->context->currency;

        foreach ($products as $product) {
            $this->products[] = array(
                'id' => $product['id_product'],
                'categories' => $this->getProductCategories($product['id_product']),
                'name' => addslashes($product['name']),
                'price' => $product['price_wt'],
                'currency' => $currency->iso_code,
                'qty' => $product['cart_quantity'],
            );
        }
    }

    /**
     * Init order data
     */
    protected function initOrderData()
    {
        if (self::IDENTIFIER_ORDER_REFERENCE == Configuration::get('SISU_IDENTIFIER')) {
            $order = new Order($this->context->controller->id_order);
            $this->orderId = $order->reference;
        } else {
            $this->orderId = $this->context->controller->id_order;
        }
    }

    /**
     * Get array of current customer data
     *
     * @return array
     */
    protected function fetchCustomerData()
    {
        $address = $this->getCustomerAddress();

        $phoneNumber = !empty($address->phone_mobile)
            ? $address->phone_mobile : $address->phone;

        $addressLine = trim($address->address1 . " " . $address->address2);

        $country = new Country($address->id_country);

        return array(
            'firstname' => $this->context->customer->firstname,
            'lastname' => $this->context->customer->lastname,
            'email' => $this->context->customer->email,
            'phone' => $phoneNumber,
            'street' => $addressLine,
            'street_number' => '',
            'zip' => $address->postcode,
            'city' => $address->city,
            'country' => Tools::strtolower($country->iso_code),
        );
    }

    /**
     * Gets customer customer addresses countries
     *
     * @return array
     */
    protected function getCustomerAddressesCountries()
    {
        $countries = array();
        
        $addresses = $this->context->customer->getAddresses($this->context->language->id);
        
        foreach ($addresses as $address) {
            $countries[$address['id_address']] = Tools::strtolower(Country::getIsoById($address['id_country']));
        }
        
        return $countries;
    }

    /**
     * Get customer address data
     *
     * @return Address
     */
    protected function getCustomerAddress()
    {
        $addressId = (int)$this->context->cart->id_address_invoice;

        if (!$addressId) {
            $addressId = (int)$this->context->cart->id_address_delivery;
        }

        return new Address((int)$addressId);
    }

    protected function getLanguageId()
    {
        $language = new Language();
        $languageId = $language->getIdByIso('de');

        if (empty($languageId)) {
            $languageId = (int)Configuration::get('PS_LANG_DEFAULT');
        }

        return $languageId;
    }

    /**
     * Gets all categories in a normalized format
     * @return array
     */
    protected function getCategories()
    {
        $languageId = $this->getLanguageId();

        $category = new Category();
        $categories = $category->getCategories($languageId, true, false);

        $normalizedCategories = array();

        foreach ($categories as $cat) {
            $normalizedCategories[] = array(
                'id' => $cat['id_category'],
                'parent_id' => $cat['id_parent'],
                'name' => addslashes($cat['name'])
            );
        }

        return $normalizedCategories;
    }

    /**
     * Gets country ISO code from current context
     * @return string
     */
    protected function getCountry()
    {
        return Tools::strtolower($this->context->country->iso_code);
    }

    /**
     * @param int $productId
     * @return array
     */
    protected function getProductCategories($productId)
    {
        $categories    = array();
        $rawCategories = Product::getProductCategoriesFull($productId);

        foreach ($rawCategories as $c) {
            $categories[] = array($c['id_category'] => $c['name']);
        }

        return $categories;
    }

    /**
     * Get shop id
     *
     * @return string
     */
    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * Get partner id
     *
     * @return string
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * Is category export allowed?
     *
     * @return bool
     */
    public function isCategoryExportAllowed()
    {
        return $this->allowCategoryExport;
    }

    /**
     * Get js checkout url
     *
     * @return string
     */
    public function getCheckoutUrl()
    {
        return $this->checkoutUrl;
    }

    /**
     * Get html content form admin form
     *
     * @return string
     */
    public function getContent()
    {
        if (Tools::isSubmit('btnSubmit')) {
            $this->postValidation();

            if (!count($this->postErrors)) {
                $this->postProcess();
            } else {
                foreach ($this->postErrors as $err) {
                    $this->html .= $this->displayError($err);
                }
            }
        } else {
            $this->html .= '<br />';
        }

        $this->html .= $this->renderForm();

        return $this->html;
    }

    /**
     * Validate admin form submit
     */
    private function postValidation()
    {
        if (Tools::isSubmit('btnSubmit')) {
            if (!Tools::getValue('SISU_SHOP_ID')) {
                $this->postErrors[] = $this->l('Shop id is required.');
            } elseif (!Tools::getValue('SISU_PARTNER_ID')) {
                $this->postErrors[] = $this->l('Partner id is required.');
            }
        }
    }

    /**
     * Process admin form
     */
    private function postProcess()
    {
        if (Tools::isSubmit('btnSubmit')) {
            Configuration::updateValue('SISU_SHOP_ID', Tools::getValue('SISU_SHOP_ID'));
            Configuration::updateValue('SISU_PARTNER_ID', Tools::getValue('SISU_PARTNER_ID'));
            Configuration::updateValue('SISU_IDENTIFIER', Tools::getValue('SISU_IDENTIFIER'));
            Configuration::updateValue('SISU_ALLOW_CATEGORY_EXPORT', Tools::getValue('SISU_ALLOW_CATEGORY_EXPORT'));
        }
        $this->html .= $this->displayConfirmation($this->l('Settings updated'));
    }

    /**
     * Render admin form
     *
     * @return string
     */
    public function renderForm()
    {
        $this->context->smarty->assign('registrationLink', $this->registrationUrl);

        $registrationLink = $this->context->smarty->fetch(
            $this->getLocalPath().'views/templates/admin/registration_link.tpl'
        );
        
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Schutzklick settings'),
                    'icon' => 'icon-cogs'
                ),
                'description' => $registrationLink,
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => $this->l('Partner id'),
                        'name' => 'SISU_PARTNER_ID',
                        'required'  => true,
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Shop id'),
                        'name' => 'SISU_SHOP_ID',
                        'required'  => true,
                    ),
                    array(
                        'label' =>  $this->l('Transmitted Identifier'),
                        'type' => 'select',
                        'name' => 'SISU_IDENTIFIER',
                        'options' => array(
                            'query' => array(
                                array(
                                    'order_identifier' => self::IDENTIFIER_ORDER_ID,
                                    'name' => $this->l('Order ID'),
                                ),
                                array(
                                    'order_identifier' => self::IDENTIFIER_ORDER_REFERENCE,
                                    'name' => $this->l('Order Reference')
                                ),
                            ),
                            'id' => 'order_identifier',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => _PS_VERSION_ >= '1.6' ? 'switch' : 'radio',
                        'label' => $this->l('Allow categories-export?'),
                        'name' => 'SISU_ALLOW_CATEGORY_EXPORT',
                        'is_bool'   => true,
                        'class'     => 't',
                        'values' => array(
                            array(
                                'id'    => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id'    => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            ),
                        )
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save settings'),
                )
            ),
        );

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int) Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ?
            Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $this->fields_form = array();
        $helper->id = (int) Tools::getValue('id_carrier');
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'btnSubmit';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name
            .'&tab_module='.$this->tab
            .'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );

        return $helper->generateForm(array($fields_form));
    }

    /**
     * Get array of config values
     *
     * @return array
     */
    public function getConfigFieldsValues()
    {
        return array(
            'SISU_SHOP_ID' => Tools::getValue('SISU_SHOP_ID', Configuration::get('SISU_SHOP_ID')),
            'SISU_PARTNER_ID' => Tools::getValue('SISU_PARTNER_ID', Configuration::get('SISU_PARTNER_ID')),
            'SISU_IDENTIFIER' => Tools::getValue(
                'SISU_IDENTIFIER',
                Configuration::get('SISU_IDENTIFIER', null, null, null, self::IDENTIFIER_ORDER_ID)
            ),
            'SISU_ALLOW_CATEGORY_EXPORT' => Tools::getValue(
                'SISU_ALLOW_CATEGORY_EXPORT',
                Configuration::get('SISU_ALLOW_CATEGORY_EXPORT')
            ),
        );
    }
}
