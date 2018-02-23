<?php
/**
* 2007-2017 PrestaShop
*
* Jms Page Builder
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

include_once(_PS_MODULE_DIR_.'jmspagebuilder/jmsHomepage.php');
require_once(_PS_MODULE_DIR_.'jmspagebuilder/classes/jmsHelper.php');
require_once(_PS_MODULE_DIR_.'jmspagebuilder/classes/jmsImportExport.php');
class AdminJmspagebuilderHomepagesController extends ModuleAdminControllerCore
{
    public function __construct()
    {
        $this->name = 'jmspagebuilder';
        $this->tab = 'front_office_features';
        $this->bootstrap = true;
        $this->lang = true;
        $this->context = Context::getContext();
        $this->secure_key = Tools::encrypt($this->name);
        $_controller = Tools::getValue('controller');
        $this->classname = $_controller;
        $this->addon_folder = _PS_ROOT_DIR_.'/modules/jmspagebuilder/addons';
        $ffs = scandir($this->addon_folder);
        $addons_arr = array();
        $i = 0;
        foreach ($ffs as $ff) {
            $ext = pathinfo($ff, PATHINFO_EXTENSION);
            if (!is_dir($this->addon_folder.'/'.$ff) && ($ext == 'php') && !in_array($ff, array('index.php','addonbase.php'))) {
                $addons_arr[$i] = Tools::substr($ff, 5, Tools::strlen($ff) - 9);
                $i++;
            }
        }
        $this->addons = $addons_arr;
        $this->json_path = _PS_ROOT_DIR_.'/modules/jmspagebuilder/json/';
        $this->root_url = JmsPageBuilderHelper::getRootUrl();
        parent::__construct();
    }
    public function initPageHeaderToolbar()
    {
        if (Tools::getValue('config_id_homepage')) {
            $this->page_header_toolbar_btn['new'] = array(
                'short' => 'AddRow',
                'href' => 'javascript:;',
                'desc' => $this->l('Add Row'),
                'confirm' => 1
            );
            $this->page_header_toolbar_btn['save'] = array(
                'short' => 'SaveLayout',
                'href' => 'javascript:;',
                'desc' => $this->l('Save Layout'),
                'confirm' => 1
            );
        }
        parent::initPageHeaderToolbar();
    }
    public function renderList()
    {
        $this->_html = $this->headerHTML();
        /* Validate & process */
        if (Tools::isSubmit('addHome') || (Tools::isSubmit('edit_id_homepage') && $this->homeExists((int)Tools::getValue('edit_id_homepage')))) {
            $this->_html .= $this->renderNavigation();
            $this->_html .= $this->renderAddHome();
        } elseif (Tools::isSubmit('submitHome') || Tools::isSubmit('delete_id_homepage') || Tools::isSubmit('status_id_homepage') || Tools::isSubmit('export_id_homepage') || Tools::isSubmit('import_id_homepage') || (Tools::isSubmit('duplicate_id_homepage') && $this->homeExists((int)Tools::getValue('duplicate_id_homepage'))) || Tools::isSubmit('saveLayout') || Tools::isSubmit('lang_id_homepage')) {
            if ($this->_postValidation()) {
                $this->_postProcess();
                $this->_html .= $this->renderListHome();
            } else {
                $this->_html .= $this->renderAddHome();
            }
        } elseif (Tools::isSubmit('config_id_homepage') && $this->homeExists((int)Tools::getValue('config_id_homepage'))) {
            $this->_html .= $this->renderHomeLayout();
        } else {
            $this->_html .= $this->renderListHome();
        }
        return $this->_html;
    }

    private function _postValidation()
    {
        $errors = array();
        /* Validation for configuration */
        if (Tools::isSubmit('submitHome')) {
            if (Tools::strlen(Tools::getValue('title')) > 255) {
                $errors[] = $this->l('The title is too long.');
            }
            if (Tools::strlen(Tools::getValue('title')) == 0) {
                $errors[] = $this->l('The title is not set.');
            }
        } elseif (Tools::isSubmit('delete_id_homepage')) {
            if ((!Validate::isInt(Tools::getValue('delete_id_homepage')) || !$this->homeExists((int)Tools::getValue('delete_id_homepage')))) {
                $errors[] = $this->l('Invalid id_homepage');
            }
        } elseif (Tools::isSubmit('export_id_homepage')) {
            if ((!Validate::isInt(Tools::getValue('export_id_homepage')) || !$this->homeExists((int)Tools::getValue('export_id_homepage')))) {
                $errors[] = $this->l('Invalid id_homepage');
            }
        }
        /* Display errors if needed */
        if (count($errors)) {
            $this->_html .= Tools::displayError(implode('<br />', $errors));
            return false;
        }
        /* Returns if validation is ok */
        return true;
    }
    private function _postProcess()
    {
        $errors = array();
        if (Tools::isSubmit('submitHome')) {
            if (Tools::getValue('id_homepage')) {
                $id_homepage = Tools::getValue('id_homepage');
            } else {
                $id_homepage = null;
            }
            $errors = array();
            if ($id_homepage) {
                $homepage = new JmsHomepage($id_homepage);
            } else {
                $homepage = new JmsHomepage();
            }
            $homepage->title = Tools::getValue('title');
            $homepage->css_file = Tools::getValue('css_file');
            $homepage->js_file = Tools::getValue('js_file');
            $homepage->home_class = Tools::getValue('home_class');
            $homepage->active = Tools::getValue('active');
            if ((int)$id_homepage == 0) {
                if (!$homepage->add()) {
                    $errors[] = $this->displayError($this->l('The item could not be added.'));
                }
            } elseif (!$homepage->update()) {
                $errors[] = $this->displayError($this->l('The item could not be updated.'));
            }
        } elseif (Tools::isSubmit('delete_id_homepage') && $this->homeExists(Tools::getValue('delete_id_homepage'))) {
            $homepage = new JmsHomepage(Tools::getValue('delete_id_homepage'));
            if (!$homepage->delete()) {
                $this->_html .= Tools::displayError('Could not delete');
            } else {
                $sql = "DELETE FROM `"._DB_PREFIX_."jmspagebuilder` WHERE `id_homepage` = ".(int)Tools::getValue('delete_id_homepage');
                $res = Db::getInstance()->Execute($sql);
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmspagebuilderHomepages', true).'&conf=1&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
            }
        } elseif (Tools::isSubmit('duplicate_id_homepage')) {
            $newHome = new JmsHomepage(Tools::getValue('duplicate_id_homepage'));
            $duplicateHome = $newHome->duplicateObject();
            $duplicateHome->title = $duplicateHome->title.'- Copy';
            $duplicateHome->params = $newHome->params;
            if (!$duplicateHome->update()) {
                $errors[] = 'The duplicated Homepage Error.';
            }
        } elseif (Tools::isSubmit('export_id_homepage')) {
            $jms_importexport = new JmsImportExport();
            $res = $jms_importexport->exportHomepage(Tools::getValue('export_id_homepage'));
        } elseif (Tools::isSubmit('import_id_homepage')) {
            $import_file = Tools::getValue('import_file');
            $jsonfile = fopen($this->json_path.$import_file, "r") or die("Unable to open file!");
            $jsontext = fread($jsonfile, filesize($this->json_path.$import_file));
            $homepage = new JmsHomepage((int)Tools::getValue('import_id_homepage'));
            $homepage->params = $jsontext;
            $res = $homepage->update();
            fclose($jsonfile);
            if (!$res) {
                $this->_html .= Tools::displayError('The Import is error.');
            } else {
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmspagebuilderHomepages', true).'&conf=4&config_id_homepage='.Tools::getValue('import_id_homepage'));
            }
        } elseif (Tools::isSubmit('status_id_homepage')) {
            $homepage = new JmsHomepage((int)Tools::getValue('status_id_homepage'));
            if ($homepage->active == 0) {
                $homepage->active = 1;
            } else {
                $homepage->active = 0;
            }
            $res = $homepage->update();
            if (!$res) {
                $this->_html .= Tools::displayError('The status could not be updated.');
            } else {
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmspagebuilderHomepages', true).'&conf=5&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
            }
        } elseif (Tools::isSubmit('saveLayout')) {
            $jsonparams = Tools::getValue('jmsformjson');
            $home_id = (int)Tools::getValue('json_home_id');
            $homepage = new JmsHomepage($home_id);
            $homepage->params = $jsonparams;
            $res = $homepage->update();
            if (!$res) {
                $this->_html .= Tools::displayError('The layout could not be saved.');
            } else {
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmspagebuilderHomepages', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name.'&config_id_homepage='.$home_id);
            }
        } elseif (Tools::isSubmit('lang_id_homepage')) {
            $home_id = (int)Tools::getValue('lang_id_homepage');
            $src_lang_id = (int)Tools::getValue('src_lang_id');
            $res = $this->cloneLangData($home_id, $src_lang_id);
            if (!$res) {
                $this->_html .= Tools::displayError('The clone data havent finished.');
            } else {
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmspagebuilderHomepages', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name.'&config_id_homepage='.$home_id);
            }
        }
        if (count($errors)) {
            $this->_html .= Tools::displayError(implode('<br />', $errors));
        } elseif (Tools::isSubmit('submitHome') && Tools::getValue('id_homepage')) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmspagebuilderHomepages', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
        } elseif (Tools::isSubmit('delete_id_homepage') && Tools::getValue('delete_id_homepage')) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmspagebuilderHomepages', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
        } elseif (Tools::isSubmit('changeHomePageStatus') && Tools::getValue('id_homepage')) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmspagebuilderHomepages', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
        } elseif (Tools::getValue('duplicate_id_homepage')) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmspagebuilderHomepages', true).'&conf=3&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
        }
    }
    public function cloneLangData($id_homepage, $src_lang_id)
    {
        $langids = Language::getIDs();
        $id_homepage = Tools::getValue('lang_id_homepage');
        $homepage = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('SELECT * FROM '._DB_PREFIX_.'jmspagebuilder_homepages '.($id_homepage ? ' WHERE `id_homepage` = '.$id_homepage : ''));
        $params = $homepage['params'];
        $rows = (array)Tools::jsonDecode($params);
        foreach ($rows as $key => $row) {
            $columns = $rows[$key]->cols;
            foreach ($columns as $ckey => $column) {
                $addons = $column->addons;
                foreach ($addons as $akey => $addon) {
                    $fields = $addon->fields;
                    foreach ($fields as $fkey => $field) {
                        if ($field->multilang == '1') {
                            foreach ($langids as $lang_id) {
                                $rows[$key]->cols[$ckey]->addons[$akey]->fields[$fkey]->value->$lang_id = $field->value->$src_lang_id;
                            }
                        }
                    }
                }
            }
        }

        $new_params = Tools::jsonEncode($rows);
        //$sql = "UPDATE `"._DB_PREFIX_."jmspagebuilder_homepages` ph SET `params` = '".$new_params."' WHERE `id_homepage` = ".$id_homepage;
        //return Db::getInstance()->Execute($sql);
        $homepage = new JmsHomepage($id_homepage);
        $homepage->params = $new_params;
        return $homepage->update();
    }
    public function getModules()
    {
        $not_module = array($this->name, 'themeconfigurator', 'themeinstallator', 'cheque', 'autoupgrade', 'statsbestcategories', 'statsbestcustomers','statsbestproducts', 'statsbestsuppliers', 'statsbestvouchers', 'statscarrier', 'statscatalog', 'statscheckup', 'statsequipment', 'statsforecast', 'statslive', 'statsnewsletter', 'statsorigin', 'statspersonalinfos', 'statsproduct', 'statsregistrations', 'statssales', 'statssearch', 'statsstock', 'statsvisits', 'cronjobs', 'pagesnotfound', 'sekeywords', 'gamification', 'gridhtml', 'graphnvd3','jmsblog','jmstestimonials','jmsmaplocation','jmsbrands','jmsexplorer','jmsslider');
        $where = '';
        if (count($not_module) == 1) {
            $where = ' WHERE m.`name` <> \''.$not_module[0].'\'';
        } elseif (count($not_module) > 1) {
            $where = ' WHERE m.`name` NOT IN (\''.implode("','", $not_module).'\')';
        }
        $context = Context::getContext();
        $id_shop = $context->shop->id;
        $sql = 'SELECT m.name, m.id_module
                FROM `'._DB_PREFIX_.'module` m
                JOIN `'._DB_PREFIX_.'module_shop` ms ON (m.`id_module` = ms.`id_module` AND ms.`id_shop` = '.(int)$id_shop.')
                '.$where;
        $module_list = Db::getInstance()->ExecuteS($sql);
        $module_info = ModuleCore::getModulesOnDisk(true);
        $modules = array();
        foreach ($module_list as $m) {
            foreach ($module_info as $mi) {
                if ($m['name'] === $mi->name) {
                    $m['description'] = (isset($mi->description) && $mi->description) ? $mi->description : '';
                    $sub = '';
                    if (isset($mi->description) && $mi->description) {
                        // Get sub word 40 words from description
                        $sub = Tools::substr($mi->description, 0, 40);
                        $spo = Tools::strrpos($sub, ' ');
                        $sub = Tools::substr($mi->description, 0, ($spo != -1 ? $spo : 0)).'...';
                    }
                    $m['short_desc'] = $sub;
                    break;
                }
            }
            $modules[] = $m;
        }
        return $modules;
    }
    public function genAddonsList()
    {
        $addons = $this->addons;
        $result = array();
        foreach ($addons as $addon) {
            $addonfile = 'addon'.$addon.'.php';
            $addonclass = 'JmsAddon'.Tools::ucfirst($addon);
            if (file_exists(_PS_MODULE_DIR_.'jmspagebuilder/addons/'.$addonfile)) {
                require_once(_PS_MODULE_DIR_.'jmspagebuilder/addons/'.$addonfile);
            }
            $addon_instance = new $addonclass();
            $result[] = $addon_instance->genAddonList($addon);
        }
        return $result;
    }


    public function homeExists($id_homepage)
    {
        $req = 'SELECT hs.`id_homepage`
                FROM `'._DB_PREFIX_.'jmspagebuilder_homepages` hs
                WHERE hs.`id_homepage` = '.(int)$id_homepage;
        $homepage = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($req);
        return ($homepage);
    }

    public function renderListHome()
    {
        $this->context->controller->addCSS(_MODULE_DIR_.$this->module->name.'/views/css/admin_style.css', 'all');
        $this->context->controller->addJqueryUI('ui.draggable');
        $homepages = JmsPageBuilderHelper::getHomePages();
        $this->override_folder = 'jmspagebuilder_homepages/';
        $tpl = $this->createTemplate('listhome.tpl');
        $tpl->assign(array('link' => $this->context->link,'homepages' => $homepages,'adminlink' => $this->context->link->getAdminLink($this->classname)));
        return $tpl->fetch();
    }
    public function renderNavigation()
    {
        $html = '<div class="navigation">';
        $html .= '<a class="btn btn-default" href="'.AdminController::$currentIndex.
            '&configure='.$this->name.'
                &token='.Tools::getAdminTokenLite($this->classname).'" title="Back to Dashboard"><i class="icon-home"></i>Back to Dashboard</a>';
        $html .= '</div>';
        return $html;
    }
    public function renderAddHome()
    {
        $this->context->controller->addCSS(_MODULE_DIR_.$this->module->name.'/views/css/admin_style.css', 'all');
        $this->context->controller->addJqueryUI('ui.draggable');
        $this->fields_form = array(
            'legend' => array(
                'title' => $this->l('Homepage Informations'),
                'icon' => 'icon-cogs'
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('Title'),
                    'name' => 'title',
                    'class' => 'fixed-width-xl',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Css File'),
                    'name' => 'css_file',
                    'class' => 'fixed-width-xl',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Javascript File'),
                    'name' => 'js_file',
                    'class' => 'fixed-width-xl',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Home Class'),
                    'name' => 'home_class',
                    'class' => 'fixed-width-xl',
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Active'),
                    'name' => 'active',
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
                'name' => 'submitHome'
            )
        );
        if (Tools::isSubmit('edit_id_homepage')) {
            $this->fields_form['input'][] = array('type' => 'hidden', 'name' => 'id_homepage');
        }
        $this->fields_value = $this->getHomeFieldsValues();
        return adminController::renderForm();
    }
    public function getHomeFieldsValues()
    {
        $id_homepage = (int)Tools::getValue('edit_id_homepage');
        $fields = array();
        if ($id_homepage) {
            $homepage = new JmsHomepage($id_homepage);
            $fields['id_homepage']  = (int)Tools::getValue('edit_id_homepage', $homepage->id);
        } else {
            $homepage = new JmsHomepage();
        }
        $fields['title'] = Tools::getValue('title', $homepage->title);
        $fields['css_file'] = Tools::getValue('css_file', $homepage->css_file);
        $fields['js_file'] = Tools::getValue('js_file', $homepage->js_file);
        $fields['home_class'] = Tools::getValue('home_class', $homepage->home_class);
        $fields['active'] = Tools::getValue('active', $homepage->active);
        return $fields;
    }

    public function headerHTML()
    {
        if (Tools::getValue('controller') != 'AdminJmspagebuilderHomepages' && Tools::getValue('configure') != $this->name) {
            return;
        }
        $this->context->controller->addJqueryUI('ui.resizable');
        $this->context->controller->addJqueryUI('ui.sortable');
        /* Style & js for fieldset 'rows configuration' */
        $html = '<script type="text/javascript">
            $(function() {
                var $myhomepages = $(".homepage");

                $myhomepages.sortable({
                    opacity: 0.6,
                    cursor: "move",
                    update: function() {
                        var order = $(this).sortable("serialize") + "&action=updateHomesOrdering";
                        $.post("'.$this->context->shop->physical_uri.$this->context->shop->virtual_uri.'modules/'.$this->name.'/ajax_'.$this->name.'.php?secure_key='.$this->secure_key.'", order);
                    },
                    stop: function( event, ui ) {
                        showSuccessMessage("Saved!");
                    }
                });
                $myhomepages.hover(function() {
                    $(this).css("cursor","move");
                    },
                    function() {
                    $(this).css("cursor","auto");
                });
            });
        </script>';

        return $html;
    }

    public function loadAddon($addon)
    {
        $addonfile = 'addon'.$addon->type.'.php';
        $addonclass = 'JmsAddon'.Tools::ucfirst($addon->type);
        if (file_exists(_PS_MODULE_DIR_.'jmspagebuilder/addons/'.$addonfile)) {
            require_once(_PS_MODULE_DIR_.'jmspagebuilder/addons/'.$addonfile);
        }
        $addon_instance = new $addonclass();
        return $addon_instance->genAddonLayout($addon);
    }
    public function getJsonFiles()
    {
        $ffs = scandir($this->json_path);
        $result = array();
        $i = 0;
        foreach ($ffs as $ff) {
            $ext = pathinfo($ff, PATHINFO_EXTENSION);
            if (!is_dir($this->json_path.$ff) && in_array($ext, array('txt'))) {
                $result[$i] = $ff;
                $i++;
            }
        }
        return $result;
    }
    public function renderHomeLayout()
    {
        $languages = Language::getLanguages(false);
        $this->context->controller->addJS(_PS_JS_DIR_.'tiny_mce/tiny_mce.js');
        $version = Configuration::get('PS_INSTALL_VERSION');
        $tiny_path = ($version >= '1.6.0.13') ? 'admin/' : '';
        $tiny_path .= 'tinymce.inc.js';
        $this->context->controller->addJS(_PS_JS_DIR_.$tiny_path);
        $this->context->controller->addCSS(_MODULE_DIR_.$this->module->name.'/views/css/admin_style.css', 'all');
        $this->context->controller->addCSS(_MODULE_DIR_.$this->module->name.'/views/css/responsive.css', 'all');
        $this->context->controller->addCSS(_MODULE_DIR_.$this->module->name.'/views/css/modal.css', 'all');
        $this->context->controller->addJS(_MODULE_DIR_.$this->module->name.'/views/js/admin_script.js', 'all');
        $this->context->controller->addJqueryUI('ui.draggable');
        $id_homepage = Tools::getValue('config_id_homepage');
        $homepage = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('SELECT * FROM '._DB_PREFIX_.'jmspagebuilder_homepages '.($id_homepage ? ' WHERE `id_homepage` = '.$id_homepage : ''));
        $params = $homepage['params'];
        $rows = (array)Tools::jsonDecode($params);
        foreach ($rows as $key => $row) {
            $columns = $rows[$key]->cols;
            foreach ($columns as $ckey => $column) {
                $addons = $column->addons;
                foreach ($addons as $akey => $addon) {
                    $rows[$key]->cols[$ckey]->addons[$akey]->addon_box = $this->loadAddon($addon);
                }
            }
        }
        $modules = $this->getModules();
        $this->override_folder = 'jmspagebuilder_homepages/';
        $tpl = $this->createTemplate('homelayout.tpl');
        $defaultFormLanguage = (int)(Configuration::get('PS_LANG_DEFAULT'));
        $mediatoken = Tools::getAdminTokenLite('AdminJmspagebuilderMedia');
        $homepages = JmsPageBuilderHelper::getHomePages();
        $jsonfiles = $this->getJsonFiles();
        $tpl->assign(
            array(
                'link' => $this->context->link,
                'modules_url' => $this->root_url.'modules/',
                'rows' => $rows,
                'modules' => $modules,
                'homepage' => $homepage,
                'homepages' => $homepages,
                'mediatoken' => $mediatoken,
                'addonslist' => $this->genAddonsList(),
                'jsonfiles' => $jsonfiles,
                'languages' => $languages,
                'defaultFormLanguage' => $defaultFormLanguage,
                'ad' => __PS_BASE_URI__.basename(_PS_ADMIN_DIR_),
                'converturl' => (int)Configuration::get('JPB_CONVERTURL'),
                'ajax_url' => $this->root_url.'modules/'.$this->name.'/ajax_'.$this->name.'.php',
                'root_url' => $this->root_url
                )
        );
        return $tpl->fetch();
    }
}
