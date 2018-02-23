<?php
/**
* 2007-2017 PrestaShop
*
* Jms Ajax Search
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

class JmsAjaxsearch extends Module
{
    private $_html = '';
    private $_postErrors = array();

    public function __construct()
    {
        $this->name = 'jmsajaxsearch';
        $this->tab = 'front_office_features';
        $this->version = '1.1.1';
        $this->author = 'Joommasters';
        $this->need_instance = 0;
        $this->morecharacter = $this->l('Please enter at least 3 characters');
        $this->no_products = $this->l('There is no product');
        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('JMS AJAX Search');
        $this->description = $this->l('AJAX Search module');
    }

    public function install()
    {
        $res = true;
        if (parent::install() && $this->registerHook('header')) {
            $res &= Configuration::updateValue('JMS_AJAXSEARCH_COUNT', '5');
            $res &= Configuration::updateValue('JMS_AJAXSEARCH_SHOW_DESC', '0');
            $res &= Configuration::updateValue('JMS_AJAXSEARCH_DESC_COUNT', '100');
            $res &= Configuration::updateValue('JMS_AJAXSEARCH_SHOW_PRICE', '1');
            $res &= Configuration::updateValue('JMS_AJAXSEARCH_SHOW_IMAGE', '1');
            return $res;
        }
        return false;
    }
    public function uninstall()
    {
        /* Deletes Module */
        $res = true;
        if (parent::uninstall()) {
            /* Unsets configuration */
            $res &= Configuration::deleteByName('JMS_AJAXSEARCH_COUNT');
            $res &= Configuration::deleteByName('JMS_AJAXSEARCH_SHOW_DESC');
            $res &= Configuration::deleteByName('JMS_AJAXSEARCH_DESC_COUNT');
            $res &= Configuration::deleteByName('JMS_AJAXSEARCH_SHOW_PRICE');
            $res &= Configuration::deleteByName('JMS_AJAXSEARCH_SHOW_IMAGE');
            return (bool)$res;
        }

        return false;
    }
    public function getContent()
    {
        $errors = array();
        $this->html_ = null;
        if (Tools::isSubmit('submitConfig')) {
            $count = (int)(Tools::getValue('JMS_AJAXSEARCH_COUNT'));
            if (!$count || $count <= 0 || !Validate::isInt($count)) {
                $errors[] = $this->l('An invalid number of products has been specified.');
            } else {
                Configuration::updateValue('JMS_AJAXSEARCH_COUNT', (int)(Tools::getValue('JMS_AJAXSEARCH_COUNT')));
                Configuration::updateValue('JMS_AJAXSEARCH_SHOW_DESC', (int)(Tools::getValue('JMS_AJAXSEARCH_SHOW_DESC')));
                Configuration::updateValue('JMS_AJAXSEARCH_DESC_COUNT', (int)(Tools::getValue('JMS_AJAXSEARCH_DESC_COUNT')));
                Configuration::updateValue('JMS_AJAXSEARCH_SHOW_PRICE', (int)(Tools::getValue('JMS_AJAXSEARCH_SHOW_PRICE')));
                Configuration::updateValue('JMS_AJAXSEARCH_SHOW_IMAGE', (int)(Tools::getValue('JMS_AJAXSEARCH_SHOW_IMAGE')));
            }

            if (isset($errors) && count($errors)) {
                $this->html_ .= $this->displayError(implode('<br />', $errors));
            } else {
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
            }
        }
        $this->html_ .= $this->displayForm();
        return $this->html_;
    }
    public function displayForm()
    {
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => $this->l('Number of products to be displayed'),
                        'name' => 'JMS_AJAXSEARCH_COUNT',
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Show Description'),
                        'name' => 'JMS_AJAXSEARCH_SHOW_DESC',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Yes')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('No')
                            )
                        ),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Description character limit'),
                        'name' => 'JMS_AJAXSEARCH_DESC_COUNT',
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Show Price'),
                        'name' => 'JMS_AJAXSEARCH_SHOW_PRICE',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Yes')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('No')
                            )
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Show Image'),
                        'name' => 'JMS_AJAXSEARCH_SHOW_IMAGE',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Yes')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('No')
                            )
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                )
            ),
        );

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $this->fields_form = array();
        $helper->module = $this;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitConfig';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $language = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $base_url = '';
        $force_ssl = Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE');
        $protocol_link = (Configuration::get('PS_SSL_ENABLED') || Tools::usingSecureMode()) ? 'https://' : 'http://';
        if (isset($force_ssl) && $force_ssl) {
            $base_url = $protocol_link.Tools::getShopDomainSsl().__PS_BASE_URI__;
        } else {
            $base_url = _PS_BASE_URL_.__PS_BASE_URI__;
        }
        $helper->tpl_vars = array(
            'base_url' => $base_url,
            'language' => array(
                'id_lang' => $language->id,
                'iso_code' => $language->iso_code
            ),
            'fields_value' => $this->getAddFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
            'image_baseurl' => $this->_path.'views/img/'
        );
        $helper->override_folder = '/';
        return $helper->generateForm(array($fields_form));
    }
    public function getAddFieldsValues()
    {
        return array(
            'JMS_AJAXSEARCH_COUNT' => Configuration::get('JMS_AJAXSEARCH_COUNT'),
            'JMS_AJAXSEARCH_SHOW_DESC' => Configuration::get('JMS_AJAXSEARCH_SHOW_DESC'),
            'JMS_AJAXSEARCH_DESC_COUNT' => Configuration::get('JMS_AJAXSEARCH_DESC_COUNT'),
            'JMS_AJAXSEARCH_SHOW_PRICE' => Configuration::get('JMS_AJAXSEARCH_SHOW_PRICE'),
            'JMS_AJAXSEARCH_SHOW_IMAGE' => Configuration::get('JMS_AJAXSEARCH_SHOW_IMAGE')
        );
    }

    public function hookDisplayHeader()
    {
        $this->context->controller->addJS(($this->_path).'views/js/ajaxsearch.js', 'all');
        $this->context->controller->addCSS(($this->_path).'views/css/style.css', 'all');
    }
    public function hookdisplayTop()
    {
        $root_url = _PS_BASE_URL_.__PS_BASE_URI__;

        $this->smarty->assign(array(
            'root_url' => $root_url
        ));
        return $this->display(__FILE__, 'jmsajaxsearch.tpl');
    }

    public function hookRightColumn()
    {
        $root_url = _PS_BASE_URL_.__PS_BASE_URI__;
        $this->context->controller->addCSS(($this->_path).'views/css/style.css', 'all');

        $this->smarty->assign(array(
            'root_url' => $root_url
        ));
        return $this->display(__FILE__, 'jmsajaxsearch-right.tpl');
    }
}
