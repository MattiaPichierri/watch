<?php
/**
* 2007-2017 PrestaShop
*
* Jms Mega Menu
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

include_once(_PS_MODULE_DIR_.'jmsmegamenu/class/JmsMenu.php');
include_once(_PS_MODULE_DIR_.'jmsmegamenu/class/JmsMegaMenuHelper.php');
class AdminJmsmegamenuManagerController extends ModuleAdminController
{
    public function __construct()
    {
        $this->name = 'jmsmegamenu';
        $this->tab = 'front_office_features';
        $this->bootstrap = true;
        $this->lang = true;
        $this->context = Context::getContext();
        $this->secure_key = Tools::encrypt($this->name);
        $this->url_root = JmsMegaMenuHelper::getUrl();
        $this->type = array();
        $this->type[] = array('value'=>'product','text'=>'product');
        $this->type[] = array('value'=>'category','text'=>'category');
        $this->type[] = array('value'=>'cms','text'=>'cms');
        $this->type[] = array('value'=>'link','text'=>'link');
        $this->type[] = array('value'=>'manufacturer','text'=>'manufacturer');
        $this->type[] = array('value'=>'supplier','text'=>'supplier');
        $this->type[] = array('value'=>'module','text'=>'module');
        $this->type[] = array('value'=>'seperator','text'=>'seperator');
        $this->type[] = array('value'=>'html','text'=>'html');
        if (Module::isInstalled('jmsblog')) {
            $this->type[] = array('value'=>'jmsblog-singlepost','text'=>'JmsBlog - Single Post');
            $this->type[] = array('value'=>'jmsblog-categories','text'=>'JmsBlog - Categories');
            $this->type[] = array('value'=>'jmsblog-category','text'=>'JmsBlog - Category');
            $this->type[] = array('value'=>'jmsblog-tag','text'=>'JmsBlog - Tag');
            $this->type[] = array('value'=>'jmsblog-archive','text'=>'JmsBlog - Archive');
        }
        $this->type[] = array('value'=>'theme-logo','text'=>'Theme Logo');
        parent::__construct();
    }

    public function renderList()
    {

        $this->_html = $this->headerHTML();
        /* Validate & process */
        if (Tools::isSubmit('submitMenu') || Tools::isSubmit('deleteMenu') || Tools::isSubmit('cStatus') || Tools::isSubmit('submitConfig')) {
            if ($this->_postValidation()) {
                $this->_postProcess();
            }
            $this->_html .= $this->renderMenuConfig();
            $this->_html .= $this->renderMenuList();
        } else if (Tools::isSubmit('reorder') || Tools::isSubmit('saveorder')) {
            $this->_postProcess();
            $this->_html .= $this->renderMenuConfig();
            $this->_html .= $this->renderMenuList();
        } elseif (Tools::isSubmit('addMenu') || (Tools::isSubmit('mitem_id'))) {
            $this->_html .= $this->_displayAddForm();

        } else {
            $this->_html .= $this->renderMenuConfig();
            $this->_html .= $this->renderMenuList();
        }
        return $this->_html;
    }

    private function _postValidation()
    {
        $errors = array();

        /* Validation for Slider configuration */
        if (Tools::isSubmit('submitMenu')) {
            /* Checks position */
            if (!Validate::isInt(Tools::getValue('ordering')) || (Tools::getValue('ordering') < 0)) {
                $errors[] = $this->l('Invalid Menu ordering');
            }
            /* If edit : checks id_slide */
            if (Tools::isSubmit('mitem_id')) {
                if (!Validate::isInt(Tools::getValue('mitem_id'))) {
                    $errors[] = $this->l('Invalid mitem_id');
                }
            }

            $languages = Language::getLanguages(false);
            foreach ($languages as $language) {

                if (Tools::strlen(Tools::getValue('name_'.$language['id_lang'])) > 255) {
                    $errors[] = $this->l('The name is too long.');
                }
            }



            $id_lang_default = (int)Configuration::get('PS_LANG_DEFAULT');
            if (Tools::strlen(Tools::getValue('name_'.$id_lang_default)) == 0) {
                $errors[] = $this->l('The name is not set.');
            }

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
        if (Tools::isSubmit('submitMenu')) {
            /* Sets ID if needed */
            if (Tools::getValue('mitem_id')) {
                $menu = new JmsMenu((int)Tools::getValue('mitem_id'));
                if (!Validate::isLoadedObject($menu)) {
                    $this->_html .= $this->displayError($this->l('Invalid mitem_id'));
                    return;
                }
            } else {
                $menu = new JmsMenu();
            }
            /* Sets ordering */
            $context = Context::getContext();
            $id_shop = $context->shop->id;
            $menu->id_shop      = $id_shop;
            $menu->parent_id    = (int)Tools::getValue('parent_id');
            if (Tools::getValue('mitem_id')) {
                $menu->ordering     = (int)Tools::getValue('ordering');

            } else {
                $menu->ordering = $this->getNextPosition((int)$menu->parent_id);
            }
            $menu->active       = (int)Tools::getValue('active');
            $menu->type         = Tools::getValue('type');
            $menu->target       = Tools::getValue('target');
            switch ($menu->type)
            {
                case 'product':
                    $menu->value = Tools::getValue('product_id');
                    break;
                case 'category':
                    $menu->value = Tools::getValue('category_id');
                    break;
                case 'cms':
                    $menu->value = Tools::getValue('cms_id');
                    break;
                case 'link':
                    $menu->value = Tools::getValue('link');
                    break;
                case 'manufacturer':
                    $menu->value = Tools::getValue('manufacturer_id');
                    break;
                case 'supplier':
                    $menu->value = Tools::getValue('supplier_id');
                    break;
                case 'module':
                    $menu->value = Tools::getValue('hook_name')."-".Tools::getValue('module');
                    break;
                case 'seperator':
                    $menu->value = '#';
                    break;
                case 'html':
                    $menu->value = 'html_content';
                    $menu->html_content = Tools::getValue('html_content');
                    break;
                case 'jmsblog-categories':
                    $menu->value = 'jmsblog_categories';
                    break;
                case 'jmsblog-singlepost':
                    $menu->value = Tools::getValue('jmsblog_post_id');
                    break;
                case 'jmsblog-category':
                    $menu->value = Tools::getValue('jmsblog_category_id');
                    break;
                case 'jmsblog-tag':
                    $menu->value = Tools::getValue('jmsblog_tag');
                    break;
                case 'jmsblog-archive':
                    $menu->value = Tools::getValue('jmsblog_archive');
                    break;
                case 'theme-logo':
                    $menu->value = 'logo';
                    break;

            }
            //echo $menu->type.'-'.$menu->value;  exit;
            /* Sets each langue fields */
            $languages = Language::getLanguages(false);
            foreach ($languages as $language) {
                $menu->name[$language['id_lang']] = Tools::getValue('name_'.$language['id_lang']);
            }

            /* Processes if no errors  */
            if (!$errors) {
                /* Adds */
                if (!Tools::getValue('mitem_id')) {
                    if (!$menu->add()) {
                        $errors[] = $this->displayError($this->l('The menu could not be added.'));
                    }
                } elseif (!$menu->update()) {
                /* Update */
                    $errors[] = $this->displayError($this->l('The menu could not be updated.'));
                }
            }
        } elseif (Tools::isSubmit('deleteMenu')) {
            $cid = Tools::getValue('cid');
            $count_cid = count($cid);
            for ($i = 0; $i < $count_cid; $i++) {

                if ($this->hasChild((int)$cid[$i])) {
                    $this->_html .= $this->displayError('Could not delete item has childs');
                    $res = false;
                } else {
                    $menu = new JmsMenu((int)$cid[$i]);
                    $res = $menu->delete();
                }
            }

            if (!$res) {
                $this->_html .= $this->displayError('Could not delete');
            } else {
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmsmegamenuManager', true).'&conf=1&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
            }

        } elseif (Tools::isSubmit('cStatus')) {
            $cid = Tools::getValue('cid');
            $status = Tools::getValue('status');
            $sql = 'UPDATE '._DB_PREFIX_.'jmsmegamenu ';

            $sql .= 'SET active = '.$status.' WHERE mitem_id IN ('.implode(',', $cid).')';
            $res = Db::getInstance(_PS_USE_SQL_SLAVE_)->execute($sql);

            if (!$res) {
                $this->_html .= $this->displayError('Could not change Status');
            }
        } elseif (Tools::isSubmit('saveorder')) {
            $order = Tools::getValue('order');
            $cid = Tools::getValue('cid');
            $total      = count($cid);
            for ($i = 0; $i < $total; $i ++) {
                $menu = new JmsMenu((int)$cid[$i]);
                $menu->ordering = $order[$i];
                $res = $menu->update();
            }
            if (!$res) {
                $this->_html .= $this->displayError('Could not change order');
            }
        } elseif (Tools::isSubmit('reorder')) {
            $mitem_id = Tools::getValue('boxchecked');
            $direction = Tools::getValue('direction');
            $res = JmsMegaMenuHelper::reorder($mitem_id, $direction);
            if (!$res) {
                $this->_html .= $this->displayError('Could not change order');
            }
        } elseif (Tools::isSubmit('submitConfig')) {
            Configuration::updateValue('JMSMM_MOUSEEVENT', Tools::getValue('JMSMM_MOUSEEVENT'));
            Configuration::updateValue('JMSMM_DURATION', (int)Tools::getValue('JMSMM_DURATION'));
            Configuration::updateValue('JMSMM_LOADBOOTSTRAPCSS', (int)Tools::getValue('JMSMM_LOADBOOTSTRAPCSS'));
        }
        if (count($errors)) {
            $this->_html .= $this->displayError(implode('<br />', $errors));
        } elseif (Tools::isSubmit('submitMenu') && Tools::getValue('mitem_id')) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmsmegamenuManager', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
        } elseif (Tools::isSubmit('cStatus')) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmsmegamenuManager', true).'&conf=5&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
        } elseif (Tools::isSubmit('submitMenu')) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmsmegamenuManager', true).'&conf=3&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
        } elseif (Tools::isSubmit('submitConfig')) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmsmegamenuManager', true).'&conf=3&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
        }
    }

    public function getMenus()
    {
        $this->context = Context::getContext();
        $id_shop = $this->context->shop->id;
        $id_lang = $this->context->language->id;

        $sql = 'SELECT *
            FROM '._DB_PREFIX_.'jmsmegamenu AS a
            INNER JOIN '._DB_PREFIX_.'jmsmegamenu_lang AS b
            ON a.`mitem_id` = b.`mitem_id`
            WHERE `parent_id` = 0 AND (a.`id_shop` = '.(int)$id_shop.')
            AND b.`id_lang` = '.(int)$id_lang.
            ' ORDER BY a.`ordering`';

        $rows = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        $jmshelper = new JmsMegaMenuHelper();
        $menus = $jmshelper->getMenuTree($rows);
        return $menus;
    }
    public function renderMenuConfig()
    {
        $tpl = $this->createTemplate('menuconfig.tpl');
        $tpl->assign(array(
                'link' => $this->context->link,
                'JMSMM_MOUSEEVENT' => configuration::get('JMSMM_MOUSEEVENT'),
                'JMSMM_DURATION' => configuration::get('JMSMM_DURATION'),
                'JMSMM_LOADBOOTSTRAPCSS' => (int)configuration::get('JMSMM_LOADBOOTSTRAPCSS'),
                'base_url' => $this->url_root
            ));
        return $tpl->fetch();
    }
    public function renderMenuList()
    {
        $menus = $this->getMenus();
        $tpl = $this->createTemplate('menulist.tpl');
        $tpl->assign(array(
                'link' => $this->context->link,
                'menus' => $menus,
                'base_url' => $this->url_root
            ));
        return $tpl->fetch();
    }

    public function headerHTML()
    {
        $this->context->controller->addCSS(_MODULE_DIR_.$this->module->name.'/views/css/admin_style.css', 'all');
        $this->context->controller->addJS(_MODULE_DIR_.$this->module->name.'/views/js/admin_script.js', 'all');
        $this->context->controller->addJqueryUI('ui.sortable');
    }

    public function getChilds($mitem_id)
    {
        $sql = 'SELECT `mitem_id` FROM '._DB_PREFIX_.'jmsmegamenu ';
        $sql .= 'WHERE `parent_id` = '.$mitem_id;
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->ExecuteS($sql);
        return $result;
    }

    public function getNextPosition($parent_id = 0)
    {
        $sql = 'SELECT MAX(a.`ordering`) AS `next_position`
                FROM `'._DB_PREFIX_.'jmsmegamenu` a
                WHERE a.`id_shop` = '.(int)$this->context->shop->id.' AND parent_id = '.(int)$parent_id;
        $row = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($sql);
        return (++$row['next_position']);
    }

    public function displayError($error)
    {
        $output = '
        <div class="bootstrap">
        <div class="module_error alert alert-danger" >
            <button type="button" class="close" data-dismiss="alert">&times;</button>';

        if (is_array($error)) {
            $output .= '<ul>';
            foreach ($error as $msg) {
                $output .= '<li>'.$msg.'</li>';
            }
            $output .= '</ul>';
        } else {
            $output .= $error;
        }

        // Close div openned previously
        $output .= '</div></div>';

        $this->error = true;
        return $output;
    }
    public function hasChild($mitem_id)
    {
        $sql = 'SELECT count(*) FROM '._DB_PREFIX_.'jmsmegamenu ';
        $sql .= 'WHERE parent_id = '.$mitem_id;
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue($sql);
        return $result;
    }

    public function _displayAddForm()
    {
        $jmshelper = new JmsMegaMenuHelper();
        $parents = $jmshelper->getParentList();

        if (Tools::isSubmit('mitem_id') && $this->menuExists((int)Tools::getValue('mitem_id'))) {
            $menuitem = new JmsMenu((int)Tools::getValue('mitem_id'));
        }

        if (isset($menuitem) && ($menuitem->type == 'category')) {
            $selected_cat = (int)$menuitem->value;
        } else {
            $selected_cat = 0;
        }
        $modules = array();
        $cms_pages = $jmshelper->getCMSPages();
        $manufacturers = $jmshelper->getManufacturers();
        $suppliers = $jmshelper->getSuppliers();
        $hmodules = $jmshelper->getModules();
        foreach ($hmodules as $_module) {
            if ($jmshelper->checkModuleCallable($_module['id_module'])) {
                $modules[] = $_module;
            }
        }
        $hookAssign = array();
        $hookAssign[] = array('name' => 'top');
        $hookAssign[] = array('name' => 'displaynav');
        $hookAssign[] = array('name' => 'topcolumn');
        $hookAssign[] = array('name' => 'rightcolumn');
        $hookAssign[] = array('name' => 'leftcolumn');
        $hookAssign[] = array('name' => 'home');
        $hookAssign[] = array('name' => 'footer');
        $targets = array();
        $targets[] = array('name' => '_self');
        $targets[] = array('name' => '_parent');
        $targets[] = array('name' => '_blank');
        $targets[] = array('name' => '_top');
        if (Module::isInstalled('jmsblog')) {
            $jmsblog_posts = $jmshelper->getJmsBlogPost();
            $jmsblog_categories = $jmshelper->getJmsBlogCategory();
        }
        $input_arr = array();
        $input_arr[] = array(
                        'type' => 'text',
                        'label' => $this->l('Menu Title'),
                        'name' => 'name',
                        'class' => ' fixed-width-xl',
                        'lang' => true,
                    );
        $input_arr[] = array(
                        'type' => 'select',
                        'label' => $this->l('Parent'),
                        'name' => 'parent_id',
                        'desc' => $this->l('Please Select a Parent'),
                        'options' => array('query' => $parents,'id' => 'mitem_id','name' => 'name')
                    );
        $input_arr[] =  array(
                        'type' => 'select',
                        'label' => $this->l('Menu Type'),
                        'name' => 'type',
                        'options' => array('query' => $this->type,'id' => 'value','name' => 'text')
                    );
        $input_arr[] =  array(
                        'type' => 'text',
                        'label' => $this->l('Product ID'),
                        'name' => 'product_id',
                        'form_group_class' => 'jms-box product',
                        'class' => ' fixed-width-xl'
                    );
        $input_arr[] =  array(
                        'type' => 'categories',
                        'label' => 'Category',
                        'name' => 'category_id',
                        'tree' => array(
                            'root_category' => 1,
                            'id' => 'id_category',
                            'name' => 'name_category',
                            'selected_categories' => array($selected_cat),
                        ),
                        'form_group_class' => 'jms-box category',
                        'class' => ' fixed-width-xl'
                    );
        $input_arr[] =  array(
                        'type' => 'select',
                        'label' => $this->l('CMS Page'),
                        'name' => 'cms_id',
                        'form_group_class' => 'jms-box cms',
                        'options' => array('query' => $cms_pages,'id' => 'id_cms','name' => 'meta_title')
                    );
        $input_arr[] =  array(
                        'type' => 'select',
                        'label' => $this->l('Manufacturer'),
                        'name' => 'manufacturer_id',
                        'form_group_class' => 'jms-box manufacturer',
                        'options' => array('query' => $manufacturers,'id' => 'id_manufacturer','name' => 'name')
                    );
        $input_arr[] =  array(
                        'type' => 'select',
                        'label' => $this->l('Supplier'),
                        'name' => 'supplier_id',
                        'form_group_class' => 'jms-box supplier',
                        'options' => array('query' => $suppliers,'id' => 'id_supplier','name' => 'name')
                    );
        $input_arr[] =  array(
                        'type' => 'textarea',
                        'label' => $this->l('Html'),
                        'name' => 'html_content',
                        'form_group_class' => 'jms-box html',
                        'autoload_rte' => true,
                    );
        $input_arr[] =  array(
                        'type' => 'select',
                        'label' => $this->l('Module'),
                        'name' => 'module',
                        'form_group_class' => 'jms-box module',
                        'options' => array('query' => $modules,'id' => 'name','name' => 'name')
                    );
        $input_arr[] =  array(
                        'type' => 'select',
                        'label' => $this->l('Hook'),
                        'name' => 'hook_name',
                        'desc' => $this->l('Select a Hook'),
                        'form_group_class' => 'jms-box module',
                        'options' => array('query' => $hookAssign,'id' => 'name','name' => 'name')
                    );
        $input_arr[] =  array(
                        'type' => 'text',
                        'label' => $this->l('Menu Link'),
                        'name' => 'link',
                        'class' => ' fixed-width-xl',
                        'form_group_class' => 'jms-box link',
                    );
        if (Module::isInstalled('jmsblog')) {
            $input_arr[] =  array(
                        'type' => 'select',
                        'label' => $this->l('JmsBlog Post'),
                        'name' => 'jmsblog_post_id',
                        'desc' => $this->l('Select a Blog Post'),
                        'form_group_class' => 'jms-box jmsblog-singlepost',
                        'options' => array('query' => $jmsblog_posts,'id' => 'post_id','name' => 'title')
                    );
            $input_arr[] =  array(
                        'type' => 'select',
                        'label' => $this->l('JmsBlog Category'),
                        'name' => 'jmsblog_category_id',
                        'desc' => $this->l('Select a Blog Category'),
                        'form_group_class' => 'jms-box jmsblog-category',
                        'options' => array('query' => $jmsblog_categories,'id' => 'category_id','name' => 'title')
                    );
            $input_arr[] =  array(
                        'type' => 'text',
                        'label' => $this->l('JmsBlog Tag'),
                        'name' => 'jmsblog_tag',
                        'desc' => $this->l('Enter Tag, like : \'fashion\'.'),
                        'class' => ' fixed-width-xl',
                        'form_group_class' => 'jms-box jmsblog-tag',
                    );
            $input_arr[] =  array(
                        'type' => 'text',
                        'label' => $this->l('JmsBlog Archive'),
                        'name' => 'jmsblog_archive',
                        'desc' => $this->l('Enter Archive, like : \'2015-09\'.'),
                        'class' => ' fixed-width-xl',
                        'form_group_class' => 'jms-box jmsblog-archive',
                    );
        }
        $input_arr[] =  array(
                        'type' => 'select',
                        'lang' => true,
                        'label' => $this->l('Target'),
                        'name' => 'target',
                        'options' => array('query' => $targets,'id' => 'name','name' => 'name')
                    );
        $input_arr[] =  array(
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
                        )
                    );
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Menu Item Informations'),
                    'icon' => 'icon-cogs'
                ),
                'input' => $input_arr,
                'submit' => array(
                    'title' => $this->l('Save'),
                )
            ),
        );

        if (Tools::isSubmit('mitem_id') && $this->menuExists((int)Tools::getValue('mitem_id'))) {
            $fields_form['form']['input'][] = array('type' => 'hidden', 'name' => 'mitem_id');
            $fields_form['form']['input'][] = array('type' => 'hidden', 'name' => 'ordering');
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
        $helper->submit_action = 'submitMenu';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminJmsmegamenuManager', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminJmsmegamenuManager');
        $language = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->tpl_vars = array(
            'base_url' => $this->url_root,
            'language' => array(
                'id_lang' => $language->id,
                'iso_code' => $language->iso_code
            ),
            'fields_value' => $this->getAddFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );

        $helper->override_folder = '/';
        return $helper->generateForm(array($fields_form));
    }

    public function getAddFieldsValues()
    {
        $fields = array();

        if (Tools::isSubmit('mitem_id') && $this->menuExists((int)Tools::getValue('mitem_id'))) {
            $menuitem = new JmsMenu((int)Tools::getValue('mitem_id'));
            $fields['mitem_id'] = (int)Tools::getValue('mitem_id', $menuitem->id);
            $fields['ordering'] = (int)Tools::getValue('ordering', $menuitem->ordering);
        } else {
            $menuitem = new JmsMenu();
        }

        $fields['active'] = Tools::getValue('active', $menuitem->active);
        $fields['parent_id'] = Tools::getValue('parent_id', $menuitem->parent_id);
        $fields['type'] = Tools::getValue('type', $menuitem->type);
        if ($menuitem && ($menuitem->type == 'product')) {
            $fields['product_id'] = Tools::getValue('product_id', $menuitem->value);
        } else {
            $fields['product_id'] = Tools::getValue('product_id');
        }
        $fields['html_content'] = Tools::getValue('html_content', $menuitem->html_content);
        if ($menuitem && ($menuitem->type == 'cms')) {
            $fields['cms_id'] = Tools::getValue('cms_id', $menuitem->value);
        } else {
            $fields['cms_id'] = Tools::getValue('cms_id');
        }
        if ($menuitem && ($menuitem->type == 'manufacturer')) {
            $fields['manufacturer_id'] = Tools::getValue('manufacturer_id', $menuitem->value);
        } else {
            $fields['manufacturer_id'] = Tools::getValue('manufacturer_id');
        }
        if ($menuitem && ($menuitem->type == 'supplier')) {
            $fields['supplier_id'] = Tools::getValue('supplier_id', $menuitem->value);
        } else {
            $fields['supplier_id'] = Tools::getValue('supplier_id');
        }
        if ($menuitem && ($menuitem->type == 'module')) {
            $_arr = explode('-', $menuitem->value);
            $fields['module'] = Tools::getValue('module', $_arr[1]);
            $fields['hook_name'] = Tools::getValue('hook_name', $_arr[0]);
        } else {
            $fields['module'] = Tools::getValue('module');
            $fields['hook_name'] = Tools::getValue('hook_name');
        }
        if ($menuitem && ($menuitem->type == 'link')) {
            $fields['link'] = Tools::getValue('link', $menuitem->value);
        } else {
            $fields['link'] = Tools::getValue('link');
        }
        if ($menuitem && ($menuitem->type == 'jmsblog-siglepost')) {
            $fields['jmsblog_post_id'] = Tools::getValue('jmsblog_post_id', $menuitem->value);
        } else {
            $fields['jmsblog_post_id'] = Tools::getValue('jmsblog_post_id');
        }
        if ($menuitem && ($menuitem->type == 'jmsblog-category')) {
            $fields['jmsblog_category_id'] = Tools::getValue('jmsblog_category_id', $menuitem->value);
        } else {
            $fields['jmsblog_category_id'] = Tools::getValue('jmsblog_category_id');
        }
        if ($menuitem && ($menuitem->type == 'jmsblog-tag')) {
            $fields['jmsblog_tag'] = Tools::getValue('jmsblog_tag', $menuitem->value);
        } else {
            $fields['jmsblog_tag'] = Tools::getValue('jmsblog_tag');
        }
        if ($menuitem && ($menuitem->type == 'jmsblog-archive')) {
            $fields['jmsblog_archive'] = Tools::getValue('jmsblog_archive', $menuitem->value);
        } else {
            $fields['jmsblog_archive'] = Tools::getValue('jmsblog_archive');
        }
        $fields['target'] = Tools::getValue('target', $menuitem->target);
        $languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            $fields['name'][$lang['id_lang']] = Tools::getValue('name_'.(int)$lang['id_lang'], $menuitem->name[$lang['id_lang']]);
        }

        return $fields;
    }

    public function menuExists($id_mitem)
    {
        $req = 'SELECT hs.`mitem_id` as id_mitem
                FROM `'._DB_PREFIX_.'jmsmegamenu` hs
                WHERE hs.`mitem_id` = '.(int)$id_mitem;
        $row = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($req);

        return ($row);
    }
}
