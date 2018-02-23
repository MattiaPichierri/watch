<?php
/**
* 2007-2017 PrestaShop
*
* Jms Mega menu module
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

include_once(_PS_MODULE_DIR_.'jmsmegamenu/class/JmsMegaMenuHelper.php');
class JmsMegaMenu extends Module
{
    private $_html = '';
    private $_postErrors = array();
    public function __construct()
    {
        $this->name = 'jmsmegamenu';
        $this->tab = 'front_office_features';
        $this->version = '1.1.0';
        $this->author = 'Joommasters';
        $this->need_instance = 0;
        $this->configure = 'jmsmegamenu';
        $this->bootstrap = true;
        $this->menu = '';
        $this->mobilemenu = '';
        $this->children = array();
        $this->_items = array();
        $this->gens = array();
        $this->mobile_gens = array();
        parent::__construct();

        $this->displayName = $this->l('Jms MegaMenu.');
        $this->description = $this->l('Megamenu for prestashop site.');
    }

    public function install()
    {
        if (parent::install() && $this->registerHook('header') && $this->registerHook('displayTopColumn') && $this->installSamples()) {
            $res = true;
            Configuration::updateValue('JMSMM_MOUSEEVENT', 'hover');
            Configuration::updateValue('JMSMM_DURATION', 200);
            Configuration::updateValue('JMSMM_LOADBOOTSTRAPCSS', 0);
            $tab_parent_id = $this->getJmsModulesTab();
            $id_tab1 = $this->addTab('Jms MegaMenu', 'dashboard', $tab_parent_id, 3);
            $this->addTab('Menu Manager', 'manager', $id_tab1);
            $this->addTab('Menu Style', 'style', $id_tab1);
            return $res;
        }
        return false;
    }
    public function installSamples()
    {
        $query = '';
        require_once( dirname(__FILE__).'/install/install.sql.php' );
        $return = true;
        if (isset($query) && !empty($query)) {
            if (!(Db::getInstance()->ExecuteS("SHOW TABLES LIKE '"._DB_PREFIX_."jmsmegamenu'"))) {
                $query = str_replace('_DB_PREFIX_', _DB_PREFIX_, $query);
                $query = str_replace('_MYSQL_ENGINE_', _MYSQL_ENGINE_, $query);
                $db_data_settings = preg_split("/;\s*[\r\n]+/", $query);
                foreach ($db_data_settings as $query) {
                    $query = trim($query);
                    if (!empty($query)) {
                        if (!Db::getInstance()->Execute($query)) {
                            $return = false;
                        }
                    }
                }
            }
        } else {
            $return = false;
        }
        return $return;
    }
    public function uninstall()
    {
        /* Deletes Module */
        if (parent::uninstall()) {
            /* Deletes tables */
            $this->removeTab('manager');
            $this->removeTab('style');
            $this->removeTab('dashboard');
            $res = $this->deleteTables();
            /* Unsets configuration */
            Configuration::deleteByName('JMSMM_MOUSEEVENT');
            Configuration::deleteByName('JMSMM_DURATION');
            Configuration::deleteByName('JMSMM_LOADBOOTSTRAPCSS');
            return $res;
        }
        return false;
    }
    private function getJmsModulesTab()
    {
        $result = Db::getInstance()->executeS('
            SELECT `id_tab`
            FROM `'._DB_PREFIX_.'tab`
            WHERE `class_name` = \'JMS-MODULES\' LIMIT 0,1
        ');
        if (count($result) > 0) {
            return $result[0]['id_tab'];
        }
        return $this->addTab('Jms Modules', 'JMS-MODULES');
    }
    private function addTab($title, $class_sfx = '', $parent_id = 0, $position = 0)
    {
        if ($parent_id > 0) {
            $class = 'Admin'.Tools::ucfirst($this->name).Tools::ucfirst($class_sfx);
        } else {
            $class = $class_sfx;
        }
        @Tools::copy(_PS_MODULE_DIR_.$this->name.'/logo.gif', _PS_IMG_DIR_.'t/'.$class.'.gif');
        $_tab = new Tab();
        $_tab->class_name = $class;
        $_tab->module = $this->name;
        $_tab->id_parent = $parent_id;
        $_tab->position = $position;
        $langs = Language::getLanguages(false);
        foreach ($langs as $l) {
            $_tab->name[$l['id_lang']] = $title;
        }
        if ($parent_id == -1) {
            $_tab->id_parent = -1;
            $_tab->add();
        } else {
            $_tab->add(true, false);
        }
        return $_tab->id;
    }

    private function removeTab($class_sfx = '')
    {
        $tabClass = 'Admin'.Tools::ucfirst($this->name).Tools::ucfirst($class_sfx);
        $idTab = Tab::getIdFromClassName($tabClass);
        if ($idTab != 0) {
            $tab = new Tab($idTab);
            $tab->delete();
            return true;
        }
        return false;
    }
    /**
     * deletes tables
     */
    protected function deleteTables()
    {
        Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'jmsmegamenu`;');
        Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'jmsmegamenu_lang`;');
        return true;
    }

    public function clearCache()
    {
        $this->_clearCache('jmsmegamenu.tpl');
    }

    public function beginmenu()
    {
        $this->menu .= '<div id="jms-megamenu-container" class="navbar clearfix"><div class="jms-megamenu"><ul class="nav level0">';
    }

    public function endmenu()
    {
        $this->menu .= '</ul></div></div>';
    }

    public function nav()
    {
        $context = Context::getContext();
        $id_shop = $context->shop->id;
        $id_lang = $context->language->id;
        $sql = 'SELECT a.`mitem_id`
                FROM '._DB_PREFIX_.'jmsmegamenu AS a
                INNER JOIN '._DB_PREFIX_.'jmsmegamenu_lang AS b
                ON a.`mitem_id` = b.`mitem_id`
                WHERE a.`active` = 1 AND `parent_id` = 0 AND (a.`id_shop` = '.(int)$id_shop.')
                AND b.`id_lang` = '.(int)$id_lang.
                ' ORDER BY a.`ordering`';
        $items = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        foreach ($items as $item) {
            $this->genItem($item['mitem_id']);
        }
    }

    public function genItem($itemid)
    {
        $item = $this->_items[$itemid];
        $this->context = Context::getContext();
        $lvl     = $this->_items[$itemid]['level'];
        $params = isset($item['params']) ? $item['params'] : array();
        if ($params) {
            $setting = (array)Tools::jsonDecode($params);
        }
        if (!in_array($itemid, $this->gens)) {
            $class = 'class="menu-item';
            $data = ' data-id="'.$itemid.'" data-level="'.$lvl.'"';
            if (isset($this->children[$itemid])) {
                $class .= ' mega';
            }
            if (isset($setting['group'])) {
                $class .= ' group';
                $data .= ' data-group="'.$setting['group'].'"';
            }
			if (isset($setting['sub']->fullwidth) && ((int)$setting['sub']->fullwidth==1)) {
                $class .= ' item-fullwidth';
                $data .= ' data-fullwidth="1"';
            }
            if (isset($setting['title']) && ((int)$setting['title']==0)) {
                $data .= ' data-title="0"';
            } else {
                $data .= ' data-title="1"';
            }
            if (isset($setting['class'])) {
                $class .= ' '.$setting['class'];
                $data .= ' data-class="'.$setting['class'].'"';
            }
            if (isset($setting['align'])) {
                $class .= ' menu-align-'.$setting['align'];
                $data .= ' data-align="'.$setting['align'].'"';
            }
            if (isset($setting['icon'])) {
                $data .= ' data-icon="'.$setting['icon'].'"';
            }
            $this->menu .= '<li '.$class.'"'.$data.'>';
            if (!isset($setting['title']) || ((int)$setting['title']==1)) {
                $this->menu .= '<a href="'.$item['link'].'" target="'.$item['target'].'">';
                if (isset($setting['icon'])) {
                    $this->menu .= '<i class="'.$setting['icon'].'"></i>';
                }
                $this->menu .=  "<span>".$item['name']."</span>";
                if (($item['level'] == 0) && isset($this->children[$itemid])) {
                    $this->menu .= '<em class="caret"></em>';
                }
                $this->menu .= '</a>';
            }

            if ($item['type'] == 'module' || $item['type'] == 'html') {
                $this->menu .= '<div class="mod-content">'.$item['content'].'</div>';
            }
            if (isset($this->children[$itemid])) {
                $this->beginDropdown($itemid);
                $this->mega($itemid);
                $this->endDropdown();
            }
            $this->menu .= '</li>';
        }
        $this->gens[] = $itemid;
    }
    public function beginDropdown($itemid)
    {
        $params = isset($this->_items[$itemid]['params']) ? $this->_items[$itemid]['params'] : array();
        if ($params) {
            $params_arr = (array)Tools::jsonDecode($params);
            if (isset($params_arr['sub'])) {
                $setting = $params_arr['sub'];
            }
        }
        $extra_class = '';
        $extra_data = '';
        $extra_style = '';
        if (isset($setting->class) && $setting->class) {
            $extra_class .= ' '.$setting->class;
            $extra_data .= ' data-class="'.$setting->class.'"';
        }
        if (isset($setting->fullwidth) && (int)$setting->fullwidth) {
            $extra_class .= ' fullwidth';
            $extra_data .= ' data-fullwidth="1"';
        }
        if (isset($setting->width) && (int)$setting->width) {
            $extra_style = ' style="width:'.$setting->width.'px"';
            $extra_data .= ' data-width="'.$setting->width.'"';
        }
        $this->menu .= '<div class="nav-child dropdown-menu mega-dropdown-menu'.$extra_class.'"'.$extra_data.$extra_style.'><div class="mega-dropdown-inner">';
    }
    public function endDropdown()
    {
        $this->menu .= '</div></div>';
    }
    public function beginRow()
    {
        $this->menu .= '<div class="row">';
    }
    public function endRow()
    {
        $this->menu .= '</div>';
    }

    public function mega($itemid)
    {

        $item = $this->_items[$itemid];
        $params = isset($item['params']) ? $item['params'] : array();
        $setting = (array)Tools::jsonDecode($params);
        if (isset($setting['sub'])) {
            $rows = $setting['sub']->row;
            $i = 0;
            foreach ($rows as $row) {
                $row_show = 0;
                foreach ($row as $col) {
                    $col_show = 0;
                    foreach ($col->items as $_item) {
                        if (isset($this->_items[$_item->item]['parent_id']) && (int)$this->_items[$_item->item]['parent_id'] == $itemid) {
                            $col_show++;
                        }
                    }
                    $col->col_show = $col_show;
                    $row_show += $col_show;
                }
                $rows[$i]['row_show'] = $row_show;
                $i++;
            }
            foreach ($rows as $row) {
                if ((int)$row['row_show'] == 0) {
                    continue;
                }
                $this->beginRow();
                foreach ($row as $col) {
                    $width = isset($col->width) ? $col->width : 12;
                    $col_class = isset($col->class) ? $col->class : '';
                    if (!isset($col->col_show) || (((int)$col->col_show) == 0)) {
                        continue;
                    }
                    $this->beginCol($width, $col_class);
                    foreach ($col->items as $_item) {
                        if (isset($this->_items[$_item->item]['parent_id']) && (int)$this->_items[$_item->item]['parent_id'] == $itemid) {
                            $this->genItem($_item->item);
                        }
                    }
                    $this->endCol();
                }
                $this->endRow();
            }
        }
        $items = isset($this->children[$itemid]) ? $this->children[$itemid] : array();
        $rest_itemids = array();
        foreach ($items as $_item) {
            if (!in_array($_item['mitem_id'], $this->gens)) {
                $rest_itemids[] = $_item['mitem_id'];
            }
        }
        if (count($rest_itemids) > 0) {
            $this->beginRow();
            $this->beginCol(12);
            foreach ($rest_itemids as $_itemid) {
                $this->genItem($_itemid);
            }
            $this->endCol();
            $this->endRow();
        }
    }

    public function beginCol($width = 12, $class = '')
    {
        $exclass = '';
        $data = ' data-width="'.$width.'"';
        if ($class) {
            $exclass .= ' '.$class;
            $data .= ' data-class="'.$class.'"';
        }
        $this->menu .= '<div class="mega-col-nav col-sm-'.$width.$exclass.'"'.$data.'><div class="mega-inner"><ul class="mega-nav">';
    }

    public function endCol()
    {
        $this->menu .= '</ul>';
        $this->menu .= '</div></div>';
    }

    public function mobileBeginMenu()
    {
        $this->mobilemenu .= '<ul class="nav nav-pills nav-stacked level0">';
    }

    public function mobileEndMenu()
    {
        $this->mobilemenu .= '</ul>';
    }

    public function mobileNav()
    {
        $context = Context::getContext();
        $id_shop = $context->shop->id;
        $id_lang = $context->language->id;
        $sql = 'SELECT a.`mitem_id`
                FROM '._DB_PREFIX_.'jmsmegamenu AS a
                INNER JOIN '._DB_PREFIX_.'jmsmegamenu_lang AS b
                ON a.`mitem_id` = b.`mitem_id`
                WHERE a.`active` = 1 AND `parent_id` = 0 AND (a.`id_shop` = '.(int)$id_shop.')
                AND b.`id_lang` = '.(int)$id_lang.
                ' ORDER BY a.`ordering`';
        $items = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        foreach ($items as $item) {
            $this->mobileGenItem($item['mitem_id']);
        }
    }

    public function mobileGenItem($itemid)
    {
        $item = $this->_items[$itemid];
        $this->context = Context::getContext();
        $lvl     = $this->_items[$itemid]['level'];
        $params = isset($item['params']) ? $item['params'] : array();
        if ($params) {
            $setting = (array)Tools::jsonDecode($params);
        }
        if (!in_array($itemid, $this->mobile_gens)) {
            $class = 'class="menu-item';
            $data = ' data-id="'.$itemid.'" data-level="'.$lvl.'"';
            if (isset($this->children[$itemid])) {
                $class .= ' mega';
                $data .= ' ';
            }

            if (isset($setting['group'])) {
                $class .= ' group';
                $data .= ' data-group="'.$setting['group'].'"';
            }
            if (isset($setting['title']) && ((int)$setting['title']==0)) {
                $data .= ' data-title="0"';
            } else {
                $data .= ' data-title="1"';
            }
            if (isset($setting['class'])) {
                $class .= ' '.$setting['class'];
                $data .= ' data-class="'.$setting['class'].'"';
            }
            if (isset($setting['align'])) {
                $class .= ' menu-align-'.$setting['align'];
                $data .= ' data-align="'.$setting['align'].'"';
            }
            if (isset($setting['icon'])) {
                $data .= ' data-icon="'.$setting['icon'].'"';
            }
            $this->mobilemenu .= '<li '.$class.'"'.$data.'>';
            if (!isset($setting['title']) || ((int)$setting['title']==1)) {
                $this->mobilemenu .= '<a href="'.$item['link'].'" target="'.$item['target'].'">';
                if (isset($setting['icon'])) {
                    $this->mobilemenu .= '<i class="'.$setting['icon'].'"></i>';
                }
                $this->mobilemenu .=    $item['name'];
                if (($item['level'] == 0) && isset($this->children[$itemid])) {
                    $this->mobilemenu .= '<em class="fa fa-angle-right"></em>';
                }
                $this->mobilemenu .= '</a>';
            }

            if ($item['type'] == 'module' || $item['type'] == 'html') {
                $this->mobilemenu .= '<div class="mod-content">'.$item['content'].'</div>';
            }
            if (isset($this->children[$itemid])) {
                $this->mobileMega($itemid);
            }
            $this->mobilemenu .= '</li>';
        }
        $this->mobile_gens[] = $itemid;
    }

    public function mobileMega($itemid)
    {

        $item = $this->_items[$itemid];
        $childs = $this->children[$itemid];
        $this->mobileBeginDropdown();
        foreach ($childs as $_item) {
            $this->mobileGenItem($_item['mitem_id']);
        }
        $this->mobileEndDropdown();
    }
    public function mobileBeginDropdown()
    {
        $this->mobilemenu .= '<ul class="dropdown-menu">';
    }
    public function mobileEndDropdown()
    {
        $this->mobilemenu .= '</ul>';
    }
    public static function MNexec($hook_name, $hookArgs = array(), $module_name = null)
    {
        if (empty($module_name) || !Validate::isHookName($hook_name)) {
            die(Tools::displayError());
        }

        $context = Context::getContext();
        if (!isset($hookArgs['cookie']) || !$hookArgs['cookie']) {
            $hookArgs['cookie'] = $context->cookie;
        }
        if (!isset($hookArgs['cart']) || !$hookArgs['cart']) {
            $hookArgs['cart'] = $context->cart;
        }

        if (!($moduleInstance = Module::getInstanceByName($module_name))) {
            return;
        }
        $retro_hook_name = Hook::getRetroHookName($hook_name);

        $hook_callable = is_callable(array($moduleInstance, 'hook'.$hook_name));
        $hook_retro_callable = is_callable(array($moduleInstance, 'hook'.$retro_hook_name));
        $output = '';

        if (($hook_callable || $hook_retro_callable) && Module::preCall($moduleInstance->name)) {
            if ($hook_callable) {
                $output = $moduleInstance->{'hook'.$hook_name}($hookArgs);
            } else if ($hook_retro_callable) {
                $output = $moduleInstance->{'hook'.$retro_hook_name}($hookArgs);
            }
        }
        return $output;
    }
    public function hookHeader()
    {
        $this->context->controller->addJS(($this->_path).'views/js/jmsmegamenu.js');
        $this->context->controller->addJS(($this->_path).'views/js/mobile_menu.js');
        if ((int)configuration::get('JMSMM_LOADBOOTSTRAPCSS')) {
            $this->context->controller->addCSS(($this->_path).'views/css/bootstrap.css', 'all');
        }
        $this->context->controller->addCSS(($this->_path).'views/css/style.css', 'all');
        $this->context->controller->addCSS(($this->_path).'views/css/off-canvas.css', 'all');
    }
    public function hookDisplayTop()
    {
        $context = Context::getContext();
        $id_shop = $context->shop->id;
        $id_lang = $context->language->id;
        $this->page_name = Dispatcher::getInstance()->getController();
        $sql = 'SELECT *
                FROM '._DB_PREFIX_.'jmsmegamenu AS a
                INNER JOIN '._DB_PREFIX_.'jmsmegamenu_lang AS b
                ON a.`mitem_id` = b.`mitem_id`
                WHERE a.`active` = 1 AND `parent_id` = 0 AND (a.`id_shop` = '.(int)$id_shop.')
                AND b.`id_lang` = '.(int)$id_lang.
                ' ORDER BY a.`ordering`';
        $rows = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        $jmshelper = new JmsMegaMenuHelper();
        $items = $jmshelper->getMenuTree($rows, '1');
        foreach ($items as &$item) {
            switch ($item['type'])
            {
                case 'product':
                    $product = new Product((int)$item['value'], true, (int)$id_lang);
                    $item['link'] = $product->getLink();
                    break;
                case 'category':
                    $category = new Category((int)$item['value'], (int)$id_lang);
                    $item['link'] = $category->getLink();

                    break;
                case 'link':
                    $item['link'] = $item['value'];
                    break;
                case 'cms':
                    $id_cms = $item['value'];
                    $cms = CMS::getLinks((int)$id_lang, array($id_cms));
					if(isset($cms[0]['link']))
						$item['link'] = $cms[0]['link'];
					else 
						$item['link'] = '#';
                    break;
                case 'manufacturer':
                    $manufacturer = new Manufacturer((int)$item['value'], (int)$id_lang);
                    if (!is_null($manufacturer->id)) {
                        if ((int)Configuration::get('PS_REWRITING_SETTINGS')) {
                            $manufacturer->link_rewrite = Tools::link_rewrite($manufacturer->name, false);
                        } else {
                            $manufacturer->link_rewrite = 0;
                        }
                        $link = new Link;
                        $item['link'] = $link->getManufacturerLink((int)$item['value'], $manufacturer->link_rewrite);
                    }
                    break;
                case 'supplier':
                    $supplier = new Supplier((int)$item['value'], (int)$id_lang);
                    if (!is_null($supplier->id)) {
                        $link = new Link;
                        $item['link'] = $link->getSupplierLink((int)$item['value'], $supplier->link_rewrite);
                    }
                    break;
                case 'module':
                    $item['link'] = '';
                    $_arr = explode('-', $item['value']);
                    $item['content'] = $this->MNexec($_arr[0], array(), $_arr[1]);
                    break;
                case 'seperator':
                    $item['link'] = '#';
                    break;
                case 'html':
                    $item['link'] = '';
                    $item['content'] = $item['html_content'];
                    break;
                case 'jmsblog-categories':
                    $item['selected'] = ($this->page_name == 'module-jmsblog-categories') ? true : false;
                    $link = new Link;
                    $item['link'] = 'index.php?fc=module&module=jmsblog&controller=categories';
                    break;
                case 'jmsblog-singlepost':
                    $item['link'] = 'index.php?fc=module&module=jmsblog&controller=post&post_id='.$item['value'];
                    break;
                case 'jmsblog-category':
                    $item['link'] = 'index.php?fc=module&module=jmsblog&controller=category&category_id='.$item['value'];
                    break;
                case 'jmsblog-tag':
                    $item['link'] = 'index.php?fc=module&module=jmsblog&controller=tag&tag='.$item['value'];
                    break;
                case 'jmsblog-archive':
                    $item['link'] = 'index.php?fc=module&module=jmsblog&controller=archive&archive='.$item['value'];
                    break;
                case 'theme-logo':
                    $force_ssl = Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE');
                    $protocol_link = (Configuration::get('PS_SSL_ENABLED') || Tools::usingSecureMode()) ? 'https://': 'http://';

                    if (isset($force_ssl) && $force_ssl) {
                        $item['link'] = $protocol_link.Tools::getShopDomainSsl().__PS_BASE_URI__;
                    } else {
                        $item['link'] = _PS_BASE_URL_.__PS_BASE_URI__;
                    }

                    break;
            }
            $parent = isset($this->children[$item['parent_id']]) ? $this->children[$item['parent_id']] : array();
            $parent[] = $item;
            $this->children[$item['parent_id']] = $parent;

            $this->_items[$item['mitem_id']] = $item;
        }

        foreach ($items as &$item) {
            $item['dropdown'] = 0;
            if ((isset($this->children[$item['mitem_id']]))) {
                $item['dropdown'] = 1;
            }
                $item['title'] = htmlspecialchars($item['name'], ENT_COMPAT, 'UTF-8', false);
                $this->_items[(int)$item['mitem_id']] = $item;
        }
        $this->menu = '';
        $this->beginmenu();
        $this->nav();
        $this->endmenu();
        $this->smarty->assign(array(
            'menu_html' => $this->menu,
            'JMSMM_MOUSEEVENT' => configuration::get('JMSMM_MOUSEEVENT'),
            'JMSMM_DURATION' => configuration::get('JMSMM_DURATION')
        ));
        return $this->display(__FILE__, 'jmsmegamenu.tpl');
    }
    public function hookDisplayTopColumn()
    {
        $context = Context::getContext();
        $id_shop = $context->shop->id;
        $id_lang = $context->language->id;
        $this->page_name = Dispatcher::getInstance()->getController();
        $sql = 'SELECT *
                FROM '._DB_PREFIX_.'jmsmegamenu AS a
                INNER JOIN '._DB_PREFIX_.'jmsmegamenu_lang AS b
                ON a.`mitem_id` = b.`mitem_id`
                WHERE a.`active` = 1 AND `parent_id` = 0 AND (a.`id_shop` = '.(int)$id_shop.')
                AND b.`id_lang` = '.(int)$id_lang.
                ' ORDER BY a.`ordering`';
        $rows = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        $jmshelper = new JmsMegaMenuHelper();
        $items = $jmshelper->getMenuTree($rows, '1');
        foreach ($items as &$item) {
            switch ($item['type'])
            {
                case 'product':
                    $product = new Product((int)$item['value'], true, (int)$id_lang);
                    $item['link'] = $product->getLink();
                    break;
                case 'category':
                    $category = new Category((int)$item['value'], (int)$id_lang);
                    $item['link'] = $category->getLink();

                    break;
                case 'link':
                    $item['link'] = $item['value'];
                    break;
                case 'cms':
                    $id_cms = $item['value'];
                    $cms = CMS::getLinks((int)$id_lang, array($id_cms));
					if(isset($cms[0]['link']))
						$item['link'] = $cms[0]['link'];
					else 
						$item['link'] = '#';
                    break;
                case 'manufacturer':
                    $manufacturer = new Manufacturer((int)$item['value'], (int)$id_lang);
                    if (!is_null($manufacturer->id)) {
                        if ((int)Configuration::get('PS_REWRITING_SETTINGS')) {
                            $manufacturer->link_rewrite = Tools::link_rewrite($manufacturer->name, false);
                        } else {
                            $manufacturer->link_rewrite = 0;
                        }
                        $link = new Link;
                        $item['link'] = $link->getManufacturerLink((int)$item['value'], $manufacturer->link_rewrite);
                    }
                    break;
                case 'supplier':
                    $supplier = new Supplier((int)$item['value'], (int)$id_lang);
                    if (!is_null($supplier->id)) {
                        $link = new Link;
                        $item['link'] = $link->getSupplierLink((int)$item['value'], $supplier->link_rewrite);
                    }
                    break;
                case 'module':
                    $item['link'] = '';
                    $_arr = explode('-', $item['value']);
                    $item['content'] = $this->MNexec($_arr[0], array(), $_arr[1]);
                    break;
                case 'seperator':
                    $item['link'] = '#';
                    break;
                case 'html':
                    $item['link'] = '';
                    $item['content'] = $item['html_content'];
                    break;
                case 'jmsblog-categories':
                    $item['selected'] = ($this->page_name == 'module-jmsblog-categories') ? true : false;
                    $link = new Link;
                    $item['link'] = 'index.php?fc=module&module=jmsblog&controller=categories';
                    break;
                case 'jmsblog-singlepost':
                    $item['link'] = 'index.php?fc=module&module=jmsblog&controller=post&post_id='.$item['value'];
                    break;
                case 'jmsblog-category':
                    $item['link'] = 'index.php?fc=module&module=jmsblog&controller=category&category_id='.$item['value'];
                    break;
                case 'jmsblog-tag':
                    $item['link'] = 'index.php?fc=module&module=jmsblog&controller=tag&tag='.$item['value'];
                    break;
                case 'jmsblog-archive':
                    $item['link'] = 'index.php?fc=module&module=jmsblog&controller=archive&archive='.$item['value'];
                    break;
                case 'theme-logo':
                    $force_ssl = Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE');
                    $protocol_link = (Configuration::get('PS_SSL_ENABLED') || Tools::usingSecureMode()) ? 'https://' : 'http://';

                    if (isset($force_ssl) && $force_ssl) {
                        $item['link'] = $protocol_link.Tools::getShopDomainSsl().__PS_BASE_URI__;
                    } else {
                        $item['link'] = _PS_BASE_URL_.__PS_BASE_URI__;
                    }

                    break;
            }
            $parent = isset($this->children[$item['parent_id']]) ? $this->children[$item['parent_id']] : array();
            $parent[] = $item;
            $this->children[$item['parent_id']] = $parent;

            $this->_items[$item['mitem_id']] = $item;
        }

        foreach ($items as &$item) {
            $item['dropdown'] = 0;
            if ((isset($this->children[$item['mitem_id']]))) {
                $item['dropdown'] = 1;
            }
                $item['title'] = htmlspecialchars($item['name'], ENT_COMPAT, 'UTF-8', false);
                $this->_items[(int)$item['mitem_id']] = $item;
        }
        $this->mobilemenu = '';
        $this->mobileBeginMenu();
        $this->mobileNav();
        $this->mobileEndMenu();
        $this->smarty->assign(array(
            'menu_html' => $this->mobilemenu
        ));
        return $this->display(__FILE__, 'jmsmegamenu-mobile.tpl');
    }
}
