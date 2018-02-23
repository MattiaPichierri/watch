<?php
/**
* 2007-2015 PrestaShop
*
* Jms Brand logos
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2015 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

include_once(_PS_MODULE_DIR_.'jmsbrands/JmsBrand.php');
use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

class JmsBrands extends Module implements WidgetInterface
{
    private $_html = '';
    private $_postErrors = array();

    public function __construct()
    {
        $this->name = 'jmsbrands';
        $this->tab = 'front_office_features';
        $this->version = '1.1.0';
        $this->author = 'Joommasters';
        $this->need_instance = 0;
        $this->secure_key = Tools::encrypt($this->name);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->getTranslator()->trans('Jms Brands', array(), 'Admin.JmsBrands');
        $this->description = $this->getTranslator()->trans('Displays Brand logo slider.', array(), 'Admin.JmsBrands');
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        if (parent::install() && $this->registerHook('header') && $this->registerHook('actionShopDataDuplication')) {
            $res = Configuration::updateValue('JMS_BRANDS_AUTO', '1');
            $res &= Configuration::updateValue('JMS_BRANDS_ITEMS', '10');
            $res &= Configuration::updateValue('JMS_BRANDS_ITEMS_SHOW', '5');
            /* Creates tables */
            $res &= $this->createTables();
            if ($res) {
                $this->installSamples();
            }
            return $res;
        }
        return false;
    }
    private function installSamples()
    {
        $languages = Language::getLanguages(false);
        for ($i = 1; $i < 10; ++$i) {
            $brand = new JmsBrand();
            $brand->ordering = $i;
            $brand->active = 1;

            foreach ($languages as $language) {
                $brand->title[$language['id_lang']] = 'Sample Title '.$i;
                $brand->description[$language['id_lang']] = 'Proin ornare quam tortor, a scelerisque turpis elementum mattis. Integer mollis ante at lacus consequat, ac vestibulum dolor semper. Sed molestie nunc at nibh aliquet';
                $brand->url[$language['id_lang']] = '#';
                $brand->image[$language['id_lang']] = 'logo-'.$i.'.png';
            }
            $brand->add();
        }
    }
    public function uninstall()
    {
        /* Deletes Module */
        if (parent::uninstall()) {
            /* Deletes tables */
            $res = $this->deleteTables();
            /* Unsets configuration */
            $res &= Configuration::deleteByName('JMS_BRANDS_AUTO');
            $res &= Configuration::deleteByName('JMS_BRANDS_ITEMS');
            $res &= Configuration::deleteByName('JMS_BRANDS_ITEMS_SHOW');
            return $res;
        }
        return false;
    }
    /**
     * Creates tables
     */
    protected function createTables()
    {
        /* Brands */
        $res = (bool)Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'jmsbrands` (`brand_id` int(10) unsigned NOT NULL AUTO_INCREMENT, `id_shop` int(10) unsigned NOT NULL, PRIMARY KEY (`brand_id`, `id_shop`)) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;');
        $res &= Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'jmsbrands_logos` (`brand_id` int(10) unsigned NOT NULL AUTO_INCREMENT, `ordering` int(10) unsigned NOT NULL DEFAULT \'0\', `active` tinyint(1) unsigned NOT NULL DEFAULT \'0\', PRIMARY KEY (`brand_id`)) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;');
        $res = (bool)Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'jmsbrands_logos_lang` (`brand_id` int(10) unsigned NOT NULL AUTO_INCREMENT, `id_lang` int(10) unsigned NOT NULL, `title` varchar(255) NOT NULL, `description` text NOT NULL, `url` varchar(255) NOT NULL, `image` varchar(255) NOT NULL, PRIMARY KEY (`brand_id`, `id_lang`)) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;');

        return $res;
    }

    /**
     * deletes tables
     */
    protected function deleteTables()
    {
        $brands = $this->getLogos();
        foreach ($brands as $brand) {
            $to_del = new JmsBrand($brand['id_brand']);
            $to_del->delete();
        }
        Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'jmsbrands`;');
        Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'jmsbrands_logos`;');
        Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'jmsbrands_logos_lang`;');
        return true;
    }

    public function getContent()
    {
        $this->_html .= $this->headerHTML();

        /* Validate & process */
        if (Tools::isSubmit('submitLogo') || Tools::isSubmit('delete_id_brand') || Tools::isSubmit('submitBrands') || Tools::isSubmit('changeStatus')) {
            if ($this->_postValidation()) {
                $this->_postProcess();
                $this->_html .= $this->renderForm();
                $this->_html .= $this->renderList();
            } else {
                $this->_html .= $this->renderAddForm();
            }

            $this->clearCache();
        } elseif (Tools::isSubmit('addLogo') || (Tools::isSubmit('id_brand') && $this->logoExists((int)Tools::getValue('id_brand')))) {
            $this->_html .= $this->renderAddForm();
        } else {
            $this->_html .= $this->renderForm();
            $this->_html .= $this->renderList();
        }

        return $this->_html;
    }

    private function _postValidation()
    {
        $errors = array();

        /* Validation for Slider configuration */
        if (Tools::isSubmit('changeStatus')) {
            if (!Validate::isInt(Tools::getValue('brand_id'))) {
                $errors[] = $this->getTranslator()->trans('Invalid Brand', array(), 'Modules.JmsBrands');
            }
        } elseif (Tools::isSubmit('submitLogo')) {
            /* Validation for Slide */
            /* Checks position */
            if (!Validate::isInt(Tools::getValue('ordering')) || (Tools::getValue('ordering') < 0)) {
                $errors[] = $this->getTranslator()->trans('Invalid brand ordering', array(), 'Modules.JmsBrands');
            }
            /* If edit : checks id_slide */
            if (Tools::isSubmit('brand_id')) {
                if (!Validate::isInt(Tools::getValue('brand_id')) && !$this->logoExists(Tools::getValue('brand_id'))) {
                    $errors[] = $this->getTranslator()->trans('Invalid id_brand', array(), 'Modules.JmsBrands');
                }
            }

            $languages = Language::getLanguages(false);

            foreach ($languages as $language) {
                if (Tools::strlen(Tools::getValue('title_'.$language['id_lang'])) > 255) {
                    $errors[] = $this->getTranslator()->trans('The title is too long.', array(), 'Modules.JmsBrands');
                }
                if (Tools::strlen(Tools::getValue('url_'.$language['id_lang'])) > 255) {
                    $errors[] = $this->getTranslator()->trans('The URL is too long.', array(), 'Modules.JmsBrands');
                }
                if (Tools::strlen(Tools::getValue('description_'.$language['id_lang'])) > 4000) {
                    $errors[] = $this->getTranslator()->trans('The description is too long.', array(), 'Modules.JmsBrands');
                }
                if (Tools::strlen(Tools::getValue('url_'.$language['id_lang'])) > 0 && !Validate::isUrl(Tools::getValue('url_'.$language['id_lang']))) {
                    $errors[] = $this->getTranslator()->trans('The URL format is not correct.', array(), 'Modules.JmsBrands');
                }
                if (Tools::getValue('image_'.$language['id_lang']) != null && !Validate::isFileName(Tools::getValue('image_'.$language['id_lang']))) {
                    $errors[] = $this->getTranslator()->trans('Invalid filename', array(), 'Modules.JmsBrands');
                }
                if (Tools::getValue('image_old_'.$language['id_lang']) != null && !Validate::isFileName(Tools::getValue('image_old_'.$language['id_lang']))) {
                    $errors[] = $this->getTranslator()->trans('Invalid filename', array(), 'Modules.JmsBrands');
                }
            }

            $id_lang_default = (int)Configuration::get('PS_LANG_DEFAULT');

            if (Tools::strlen(Tools::getValue('title_'.$id_lang_default)) == 0) {
                $errors[] = $this->getTranslator()->trans('The title is not set.', array(), 'Modules.JmsBrands');
            }
            if (Tools::strlen(Tools::getValue('url_'.$id_lang_default)) == 0) {
                $errors[] = $this->getTranslator()->trans('The URL is not set.', array(), 'Modules.JmsBrands');
            }
            if (!Tools::isSubmit('has_picture') && (!isset($_FILES['image_'.$id_lang_default]) || empty($_FILES['image_'.$id_lang_default]['tmp_name']))) {
                $errors[] = $this->getTranslator()->trans('The image is not set.', array(), 'Modules.JmsBrands');
            }
            if (Tools::getValue('image_old_'.$id_lang_default) && !Validate::isFileName(Tools::getValue('image_old_'.$id_lang_default))) {
                $errors[] = $this->getTranslator()->trans('The image is not set.', array(), 'Modules.JmsBrands');
            }
        } elseif (Tools::isSubmit('delete_id_brand') && (!Validate::isInt(Tools::getValue('delete_id_brand')) || !$this->logoExists((int)Tools::getValue('delete_id_brand')))) {
            /* Validation for deletion */
            $errors[] = $this->getTranslator()->trans('Invalid id_brand', array(), 'Modules.JmsBrands');
        }

        /* Display errors if needed */
        if (count($errors)) {
            $this->_html .= $this->displayError(implode('<br />', $errors));
            return false;
        }

        /* Returns if validation is ok */
        return true;
    }
    private function _postProcess()
    {
        $errors = array();

        /* Processes Slider */
        if (Tools::isSubmit('submitBrands')) {
            $res = Configuration::updateValue('JMS_BRANDS_AUTO', (int)(Tools::getValue('JMS_BRANDS_AUTO')));
            $res &= Configuration::updateValue('JMS_BRANDS_ITEMS', (int)(Tools::getValue('JMS_BRANDS_ITEMS')));
            $res &= Configuration::updateValue('JMS_BRANDS_ITEMS_SHOW', (int)(Tools::getValue('JMS_BRANDS_ITEMS_SHOW')));
            $this->clearCache();
            if (!$res) {
                $errors[] = $this->displayError($this->getTranslator()->trans('The configuration could not be updated.', array(), 'Admin.Notifications.Error'));
            } else {
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=6&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
            }
        } elseif (Tools::isSubmit('changeStatus') && Tools::isSubmit('id_brand')) {
             /* Process Slide status */
            $brand = new JmsBrand((int)Tools::getValue('id_brand'));

            if ($brand->active == 0) {
                $brand->active = 1;
            } else {
                $brand->active = 0;
            }

            $res = $brand->update();
            $this->clearCache();
            $this->_html .= ($res ? $this->displayConfirmation($this->getTranslator()->trans('Configuration updated', array(), 'Admin.Notification.Success')) : $this->displayError($this->getTranslator()->trans('The configuration could not be updated.', array(), 'Admin.Notifications.Error')));
        } elseif (Tools::isSubmit('submitLogo')) {
            /* Processes brand */
            /* Sets ID if needed */
            if (Tools::getValue('id_brand')) {
                $brand = new JmsBrand((int)Tools::getValue('id_brand'));
                if (!Validate::isLoadedObject($brand)) {
                    $this->_html .= $this->displayError($this->getTranslator()->trans('Invalid id_brand.', array(), 'Admin.Notifications.Error'));
                    return;
                }
            } else {
                $brand = new JmsBrand();
            }
            /* Sets ordering */
            $brand->ordering = (int)Tools::getValue('ordering');
            /* Sets ordering */
            $brand->class = Tools::getValue('class');
            /* Sets active */
            $brand->active = (int)Tools::getValue('active');
            /* Sets each langue fields */
            $languages = Language::getLanguages(false);

            foreach ($languages as $language) {
                $brand->title[$language['id_lang']]       = Tools::getValue('title_'.$language['id_lang']);
                $brand->url[$language['id_lang']]         = Tools::getValue('url_'.$language['id_lang']);
                $brand->description[$language['id_lang']] = Tools::getValue('description_'.$language['id_lang']);

                /* Uploads image and sets brand */
                $type = Tools::strtolower(Tools::substr(strrchr($_FILES['image_'.$language['id_lang']]['name'], '.'), 1));
                $imagesize = array();
                $imagesize = @getimagesize($_FILES['image_'.$language['id_lang']]['tmp_name']);
                if (isset($_FILES['image_'.$language['id_lang']]) && isset($_FILES['image_'.$language['id_lang']]['tmp_name']) && !empty($_FILES['image_'.$language['id_lang']]['tmp_name']) && !empty($imagesize) && in_array(Tools::strtolower(Tools::substr(strrchr($imagesize['mime'], '/'), 1)), array('jpg', 'gif', 'jpeg', 'png')) && in_array($type, array('jpg', 'gif', 'jpeg', 'png'))) {
                    $temp_name = tempnam(_PS_TMP_IMG_DIR_, 'PS');
                    $salt = sha1(microtime());
                    if ($error = ImageManager::validateUpload($_FILES['image_'.$language['id_lang']])) {
                        $errors[] = $error;
                    } elseif (!$temp_name || !move_uploaded_file($_FILES['image_'.$language['id_lang']]['tmp_name'], $temp_name)) {
                        return false;
                    } elseif (!ImageManager::resize($temp_name, dirname(__FILE__).'/views/img/'.Tools::encrypt($_FILES['image_'.$language['id_lang']]['name'].$salt).'.'.$type, null, null, $type)) {
                        $errors[] = $this->displayError($this->getTranslator()->trans('An error occurred during the image upload process.', array(), 'Modules.JmsBrands.Admin'));
                    }
                    if (isset($temp_name)) {
                        @unlink($temp_name);
                    }
                    $brand->image[$language['id_lang']] = Tools::encrypt($_FILES['image_'.($language['id_lang'])]['name'].$salt).'.'.$type;
                    //delete old img
                    $old_img = Tools::getValue('image_old_'.$language['id_lang']);
                    if ($old_img && file_exists(dirname(__FILE__).'/views/img/'.$old_img)) {
                        @unlink(dirname(__FILE__).'/views/img/'.$old_img);
                    }
                } elseif (Tools::getValue('image_old_'.$language['id_lang']) != '') {
                    $brand->image[$language['id_lang']] = Tools::getValue('image_old_'.$language['id_lang']);
                }
            }

            /* Processes if no errors  */
            if (!$errors) {
                /* Adds */
                if (!Tools::getValue('id_brand')) {
                    if (!$brand->add()) {
                        $errors[] = $this->displayError($this->getTranslator()->trans('The brand could not be added.', array(), 'Admin.Notifications.Error'));
                    }
                } elseif (!$brand->update()) {
                    $errors[] = $this->displayError($this->getTranslator()->trans('The brand could not be updated.', array(), 'Admin.Notifications.Error'));
                }
                $this->clearCache();
            }
        } elseif (Tools::isSubmit('delete_id_brand')) {
            $brand = new JmsBrand((int)Tools::getValue('delete_id_brand'));
            $res = $brand->delete();
            $this->clearCache();
            if (!$res) {
                $this->_html .= $this->displayError($this->getTranslator()->trans('Could not delete.', array(), 'Admin.Notifications.Error'));
            } else {
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=1&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
            }
        }

        /* Display errors if needed */
        if (count($errors)) {
            $this->_html .= $this->displayError(implode('<br />', $errors));
        } elseif (Tools::isSubmit('submitLogo') && Tools::getValue('id_brand')) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
        } elseif (Tools::isSubmit('submitLogo')) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=3&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
        }
    }
    public function clearCache()
    {
        $this->_clearCache('jmsbrands.tpl');
    }
    public function hookActionShopDataDuplication($params)
    {
        Db::getInstance()->execute('
        INSERT IGNORE INTO '._DB_PREFIX_.'jmsbrands (brand_id, id_shop)
        SELECT brand_id, '.(int)$params['new_id_shop'].'
        FROM '._DB_PREFIX_.'jmsbrands
        WHERE id_shop = '.(int)$params['old_id_shop']);
        $this->clearCache();
    }
    public function headerHTML()
    {
        if (Tools::getValue('controller') != 'AdminModules' && Tools::getValue('configure') != $this->name) {
            return;
        }

        $this->context->controller->addJqueryUI('ui.sortable');
        /* Style & js for fieldset 'slides configuration' */
        $html = '<script type="text/javascript">
            $(function() {
                var $mySlides = $("#slides");
                $mySlides.sortable({
                    opacity: 0.6,
                    cursor: "move",
                    update: function() {
                        var order = $(this).sortable("serialize") + "&action=updateSlidesOrdering";
                        $.post("'.$this->context->shop->physical_uri.$this->context->shop->virtual_uri.'modules/'.$this->name.'/ajax_'.$this->name.'.php?secure_key='.$this->secure_key.'", order);
                        }
                    });
                $mySlides.hover(function() {
                    $(this).css("cursor","move");
                    },
                    function() {
                    $(this).css("cursor","auto");
                });
            });
        </script>';

        return $html;
    }

    public function getNextPosition()
    {
        $row = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('SELECT MAX(hss.`position`) AS `next_position` FROM `'._DB_PREFIX_.'jmsbrands_logos` hss, `'._DB_PREFIX_.'jmsbrands` hs WHERE hss.`brand_id` = hs.`brand_id` AND hs.`id_shop` = '.(int)$this->context->shop->id);
        return (++$row['next_position']);
    }

    public function getLogos($active = null)
    {
        $this->context = Context::getContext();
        $id_shop = $this->context->shop->id;
        $id_lang = $this->context->language->id;

        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('SELECT hs.`brand_id` as id_brand, hssl.`image`, hss.`ordering`, hss.`active`, hssl.`title`, hssl.`url`, hssl.`description` FROM '._DB_PREFIX_.'jmsbrands hs LEFT JOIN '._DB_PREFIX_.'jmsbrands_logos hss ON (hs.brand_id = hss.brand_id) LEFT JOIN '._DB_PREFIX_.'jmsbrands_logos_lang hssl ON (hss.brand_id = hssl.brand_id) WHERE id_shop = '.(int)$id_shop.' AND hssl.id_lang = '.(int)$id_lang. ($active ? ' AND hss.`active` = 1' : ' ').' ORDER BY hss.ordering');
    }

    public function getAllImagesBySlidesId($id_brand, $active = null, $id_shop = null)
    {
        $this->context = Context::getContext();
        $images = array();

        if (!isset($id_shop)) {
            $id_shop = $this->context->shop->id;
        }

        $results = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('SELECT hssl.`image`, hssl.`id_lang` FROM '._DB_PREFIX_.'jmsbrands hs LEFT JOIN '._DB_PREFIX_.'jmsbrands_logos hss ON (hs.brand_id = hss.brand_id) LEFT JOIN '._DB_PREFIX_.'jmsbrands_logos_lang hssl ON (hss.brand_id = hssl.brand_id) WHERE hs.`brand_id` = '.(int)$id_brand.' AND hs.`id_shop` = '.(int)$id_shop.($active ? ' AND hss.`active` = 1' : ' '));

        foreach ($results as $result) {
            $images[$result['id_lang']] = $result['image'];
        }

        return $images;
    }

    public function displayStatus($id_brand, $active)
    {
        $title = ((int)$active == 0 ? $this->getTranslator()->trans('Disabled', array(), 'Modules.JmsBrands.Admin') : $this->getTranslator()->trans('Enabled', array(), 'Modules.JmsBrands.Admin'));
        $icon = ((int)$active == 0 ? 'icon-remove' : 'icon-check');
        $class = ((int)$active == 0 ? 'btn-danger' : 'btn-success');
        $html = '<a class="btn '.$class.'" href="'.AdminController::$currentIndex.
            '&configure='.$this->name.'
                &token='.Tools::getAdminTokenLite('AdminModules').'
                &changeStatus&id_brand='.(int)$id_brand.'" title="'.$title.'"><i class="'.$icon.'"></i> '.$title.'</a>';

        return $html;
    }

    public function logoExists($id_brand)
    {
        $req = 'SELECT hs.`brand_id` as id_brand
                FROM `'._DB_PREFIX_.'jmsbrands` hs
                WHERE hs.`brand_id` = '.(int)$id_brand;
        $row = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($req);

        return ($row);
    }

    public function renderList()
    {
        $brands = $this->getLogos();
        foreach ($brands as $key => $brand) {
            $brands[$key]['status'] = $this->displayStatus($brand['id_brand'], $brand['active']);
        }

        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'brands' => $brands,
                'image_baseurl' => $this->_path.'views/img/'
            )
        );

        return $this->display(__FILE__, 'list.tpl');
    }

    public function renderAddForm()
    {
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->getTranslator()->trans('Brand informations', array(), 'Admin.Global'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'type' => 'file_lang',
                        'label' => $this->getTranslator()->trans('Image', array(), 'Admin.Global'),
                        'name' => 'image',
                        'lang' => true,
                        'desc' => sprintf($this->getTranslator()->trans('Maximum image size: %s.', array(), 'Admin.Global'), ini_get('upload_max_filesize'))
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->getTranslator()->trans('Title', array(), 'Modules.JmsBrands'),
                        'name' => 'title',
                        'lang' => true,
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->getTranslator()->trans('URL', array(), 'Modules.JmsBrands'),
                        'name' => 'url',
                        'lang' => true,
                    ),
                    array(
                        'type' => 'textarea',
                        'label' => $this->getTranslator()->trans('Description', array(), 'Admin.Global'),
                        'name' => 'description',
                        'autoload_rte' => true,
                        'lang' => true,
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->getTranslator()->trans('Enable', array(), 'Admin.Global'),
                        'name' => 'active',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Global')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->getTranslator()->trans('No', array(), 'Admin.Global')
                            )
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->getTranslator()->trans('Save', array(), 'Admin.Actions'),
                )
            ),
        );

        if (Tools::isSubmit('id_brand') && $this->logoExists((int)Tools::getValue('id_brand'))) {
            $brand = new JmsBrand((int)Tools::getValue('id_brand'));
            $fields_form['form']['input'][] = array('type' => 'hidden', 'name' => 'id_brand');
            if (count($brand->image) > 0) {
                $fields_form['form']['images'] = $brand->image;
            }
            $has_picture = true;

            foreach (Language::getLanguages(false) as $lang) {
                if (!isset($brand->image[$lang['id_lang']])) {
                    $has_picture &= false;
                }
            }

            if ($has_picture) {
                $fields_form['form']['input'][] = array('type' => 'hidden', 'name' => 'has_picture');
            }
        }

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $this->fields_form = array();
        $helper->module = $this;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitLogo';
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
                'id_lang'  => $language->id,
                'iso_code' => $language->iso_code
            ),
            'fields_value'  => $this->getAddFieldsValues(),
            'languages'     => $this->context->controller->getLanguages(),
            'id_language'   => $this->context->language->id,
            'image_baseurl' => $this->_path.'views/img/'
        );

        $helper->override_folder = '/';

        $languages = Language::getLanguages(false);

        if (count($languages) > 1) {
            return $this->getMultiLanguageInfoMsg() . $helper->generateForm(array($fields_form));
        } else {
            return $helper->generateForm(array($fields_form));
        }

        return $helper->generateForm(array($fields_form));
    }

    protected function getMultiLanguageInfoMsg()
    {
        return '<p class="alert alert-warning">'.
                    $this->getTranslator()->trans('Since multiple languages are activated on your shop, please mind to upload your image for each one of them', array(), 'Modules.JmsBrands').
                '</p>';
    }

    public function getAddFieldsValues()
    {
        $fields = array();

        if (Tools::isSubmit('id_brand') && $this->logoExists((int)Tools::getValue('id_brand'))) {
            $brand = new JmsBrand((int)Tools::getValue('id_brand'));
            $fields['id_brand'] = (int)Tools::getValue('id_brand', $brand->id);
        } else {
            $brand = new JmsBrand();
        }

        $fields['active']      = Tools::getValue('active', $brand->active);
        $fields['has_picture'] = true;

        $languages = Language::getLanguages(false);

        foreach ($languages as $lang) {
            $fields['image'][$lang['id_lang']]       = Tools::getValue('image_'.(int)$lang['id_lang']);
            $fields['title'][$lang['id_lang']]       = Tools::getValue('title_'.(int)$lang['id_lang'], $brand->title[$lang['id_lang']]);
            $fields['url'][$lang['id_lang']]         = Tools::getValue('url_'.(int)$lang['id_lang'], $brand->url[$lang['id_lang']]);
            $fields['description'][$lang['id_lang']] = Tools::getValue('description_'.(int)$lang['id_lang'], $brand->description[$lang['id_lang']]);
        }

        return $fields;
    }

    public function renderForm()
    {
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->getTranslator()->trans('Settings', array(), 'Admin.Global'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->getTranslator()->trans('Auto Play', array(), 'Modules.JmsBrands'),
                        'name' => 'JMS_BRANDS_AUTO',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Global')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->getTranslator()->trans('No', array(), 'Admin.Global')
                            )
                        ),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->getTranslator()->trans('Number of Items', array(), 'Modules.JmsBrands'),
                        'name' => 'JMS_BRANDS_ITEMS',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->getTranslator()->trans('Number of Items Show', array(), 'Modules.JmsBrands'),
                        'name' => 'JMS_BRANDS_ITEMS_SHOW',
                    ),

                ),
                'submit' => array(
                    'title' => $this->getTranslator()->trans('Save', array(), 'Admin.Actions'),
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

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitBrands';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );

        return $helper->generateForm(array($fields_form));
    }

    public function getConfigFieldsValues()
    {
        return array(
            'JMS_BRANDS_AUTO'       => Tools::getValue('JMS_BRANDS_AUTO', Configuration::get('JMS_BRANDS_AUTO')),
            'JMS_BRANDS_ITEMS'      => Tools::getValue('JMS_BRANDS_ITEMS', Configuration::get('JMS_BRANDS_ITEMS')),
            'JMS_BRANDS_ITEMS_SHOW' => Tools::getValue('JMS_BRANDS_ITEMS_SHOW', Configuration::get('JMS_BRANDS_ITEMS_SHOW')),
        );
    }



    public function forceSSL()
    {
        $force_ssl = Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE');
        $protocol_link = (Configuration::get('PS_SSL_ENABLED') || Tools::usingSecureMode()) ? 'https://' : 'http://';

        if (isset($force_ssl) && $force_ssl) {
            return $protocol_link.Tools::getShopDomainSsl().__PS_BASE_URI__;
        } else {
            return _PS_BASE_URL_.__PS_BASE_URI__;
        }
    }

    public function hookDisplayHeader()
    {
        // $this->context->controller->addJS($this->_path . 'views/js/owl.carousel.min.js');
        // $this->context->controller->addCSS(($this->_path) . 'views/css/owl.carousel.css', 'all');
        // $this->context->controller->addCSS(($this->_path) . 'views/css/owl.theme.css', 'all');
        $this->context->controller->addCSS(($this->_path) . 'views/css/style.css', 'all');
    }

    public function renderWidget($hookName = null, array $configuration = [])
    {
        if (!$this->isCached('jmsbrands.tpl', $this->getCacheId())) {
            $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));
        }

        return $this->display(__FILE__, 'jmsbrands.tpl', $this->getCacheId());
    }

    public function getWidgetVariables($hookName = null, array $configuration = [])
    {
        $brands   = $this->getLogos();
        $root_url = $this->forceSSL();

        return [
            'brands'     => $brands,
            'root_url'   => $root_url,
            'items_show' => Configuration::get('JMS_BRANDS_ITEMS_SHOW'),
            'items'      => Configuration::get('JMS_BRANDS_ITEMS'),
            'auto'       => Configuration::get('JMS_BRANDS_AUTO')
        ];
    }
}
