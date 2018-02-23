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
include_once(_PS_MODULE_DIR_.'jmspagebuilder/classes/jmsHelper.php');
include_once(_PS_MODULE_DIR_.'jmspagebuilder/params.php');
include_once(_PS_MODULE_DIR_.'jmspagebuilder/styling.php');
class JmsPageBuilder extends Module
{
    private $_themeskins = array();
    private $_producthovers = array();
    private $_productboxs = array();
    private $fields_options = array();
    public function __construct()
    {
        $this->name = 'jmspagebuilder';
        $this->tab = 'front_office_features';
        $this->version = '3.1.1';
        $this->author = 'joommasters';
        $this->need_instance = 0;
        $this->bootstrap = true;
        $this->id_homepage = Configuration::get('JPB_HOMEPAGE');
        parent::__construct();
        if (_JPB_THEMESKINS_) {
            $this->_themeskins = explode(",", _JPB_THEMESKINS_);
        }
        if (_JPB_PRODUCTHOVERS_) {
            $hover_strs = explode(",", _JPB_PRODUCTHOVERS_);
            foreach ($hover_strs as $hover_str) {
                $_fields = explode(":", $hover_str);
                $this->_producthovers[$_fields[0]] = $_fields[1];
            }
        }
        $this->displayName = $this->trans('Jms Page Builder', array(), 'Modules.JmsPageBuilder');
        $this->description = $this->l('Home Page Builder For Prestashop Theme.');
        $this->root_url = JmsPageBuilderHelper::getRootUrl();
    }

    public function install()
    {
        if (parent::install() && $this->registerHook('header') && $this->registerHook('displayBackOfficeHeader') && $this->registerHook('displayHome') && $this->registerHook('displayTop') && $this->registerHook('displayFooter')) {
            $res = Configuration::updateValue('JPB_SKIN', '');
            $res &= Configuration::updateValue('JPB_PRODUCTHOVER', '');
            $res &= Configuration::updateValue('JPB_PRODUCTCOLOR', 0);
            $res &= Configuration::updateValue('JPB_RTL', '0');
            $res &= Configuration::updateValue('JPB_SETTINGPANEL', 0);
            $res &= Configuration::updateValue('JPB_JCAROUSEL', 1);
            $res &= Configuration::updateValue('JPB_BXSLIDER', 1);
            $res &= Configuration::updateValue('JPB_AWESOME', 1);
            $res &= Configuration::updateValue('JPB_COUNTDOWN', 1);
            $res &= Configuration::updateValue('JPB_ANIMATE', 1);
			$res &= Configuration::updateValue('JPB_FANCYBOX', 1);
            $res &= Configuration::updateValue('JPB_MOBILEMENU', 1);
            $res &= Configuration::updateValue('JPB_CONVERTURL', 0);
            $res &= Configuration::updateValue('JPB_LISTINGLAYOUT', 'category-layout-default.tpl');
            $res &= Configuration::updateValue('JPB_PRODUCTLAYOUT', 'product-layout-default.tpl');
            $res &= Configuration::updateValue('JPB_PRODUCTPERROW', 3);
			$res &= Configuration::updateValue('JPB_GUTTERWIDTH', '30');
			$res &= Configuration::updateValue('JPB_CATEGORYNAME', 0);
			$res &= Configuration::updateValue('JPB_WISHLISTICON', 0);
			$res &= Configuration::updateValue('JPB_ADDTOCARTTYPE', '');	
			$res &= Configuration::updateValue('JPB_LOADINGSTYLE', 4);			
            $res &= Configuration::updateValue('JPB_GRID', 1);
			$res &= Configuration::updateValue('JPB_BODYBG', '');
			$res &= Configuration::updateValue('JPB_HEADERBG', '');
			$res &= Configuration::updateValue('JPB_TOPBARBG', '');
			$res &= Configuration::updateValue('JPB_FOOTERBG', '');
			$res &= Configuration::updateValue('JPB_BODYCOLOR', '');
			$res &= Configuration::updateValue('JPB_HEADERCOLOR', '');
			$res &= Configuration::updateValue('JPB_TOPBARCOLOR', '');
			$res &= Configuration::updateValue('JPB_FOOTERCOLOR', '');
			$res &= Configuration::updateValue('JPB_HEADINGCOLOR', '');
			$res &= Configuration::updateValue('JPB_PRODUCTNAMECOLOR', '');
			$res &= Configuration::updateValue('JPB_PRICECOLOR', ''); 
            include(dirname(__FILE__).'/install/jmsinstall.php');
            $install_class = new JmsPageBuilderInstall();
            $install_class->createTable();
            $install_class->installDemo();
            $tab_parent_id = $this->getJmsModulesTab();
            $id_tab1 = $this->addTab('Jms Page Builder', 'dashboard', $tab_parent_id, 0);
            $this->addTab('Home Pages', 'homepages', $id_tab1);
            $this->addTab('Media', 'media', $id_tab1, 0, 0 );
            $this->addTab('Setting', 'setting', $id_tab1);
            return $res;
        }
        return false;
    }

    public function uninstall()
    {
        /* Deletes Module */
        if (parent::uninstall()) {
            $res = Configuration::deleteByName('JPB_SKIN');
            $res &= Configuration::deleteByName('JPB_PRODUCTHOVER');
            $res &= Configuration::deleteByName('JPB_PRODUCTCOLOR');
            $res &= Configuration::deleteByName('JPB_RTL');
            $res &= Configuration::deleteByName('JPB_SETTINGPANEL');
            $res &= Configuration::deleteByName('JPB_JCAROUSEL');
            $res &= Configuration::deleteByName('JPB_AWESOME');
            $res &= Configuration::deleteByName('JPB_COUNTDOWN');
            $res &= Configuration::deleteByName('JPB_ANIMATE');
			$res &= Configuration::deleteByName('JPB_FANCYBOX');
            $res &= Configuration::deleteByName('JPB_MOBILEMENU');
            $res &= Configuration::deleteByName('JPB_CONVERTURL');
			$res &= Configuration::deleteByName('JPB_LISTINGLAYOUT');
			$res &= Configuration::deleteByName('JPB_PRODUCTLAYOUT');
			$res &= Configuration::deleteByName('JPB_PRODUCTPERROW');
			$res &= Configuration::deleteByName('JPB_GUTTERWIDTH');
			$res &= Configuration::deleteByName('JPB_CATEGORYNAME');
			$res &= Configuration::deleteByName('JPB_WISHLISTICON');
			$res &= Configuration::deleteByName('JPB_ADDTOCARTTYPE');
			$res &= Configuration::deleteByName('JPB_LOADINGSTYLE');
			$res &= Configuration::deleteByName('JPB_GRID');
			$res &= Configuration::deleteByName('JPB_BODYBG');
			$res &= Configuration::deleteByName('JPB_HEADERBG');
			$res &= Configuration::deleteByName('JPB_TOPBARBG');
			$res &= Configuration::deleteByName('JPB_FOOTERBG');
			$res &= Configuration::deleteByName('JPB_BODYCOLOR');
			$res &= Configuration::deleteByName('JPB_HEADERCOLOR');
			$res &= Configuration::deleteByName('JPB_TOPBARCOLOR');
			$res &= Configuration::deleteByName('JPB_FOOTERCOLOR');
			$res &= Configuration::deleteByName('JPB_HEADINGCOLOR');
			$res &= Configuration::deleteByName('JPB_PRODUCTNAMECOLOR');
			$res &= Configuration::deleteByName('JPB_PRICECOLOR');
            $sql = array();
            include(dirname(__FILE__).'/install/uninstall.php');
            foreach ($sql as $s) {
                Db::getInstance()->execute($s);
            }
            Configuration::deleteByName('JPB_HOMEPAGE');
            $this->removeTab('media');
            $this->removeTab('homepages');
            $this->removeTab('setting');
            $this->removeTab('dashboard');
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
    private function addTab($title, $class_sfx = '', $parent_id = 0, $position = 0, $active = 1)
    {
        if ($parent_id > 0) {
            $class = 'Admin'.Tools::ucfirst($this->name).Tools::ucfirst($class_sfx);
			$mod_name = $this->name;
        } else {
            $class = $class_sfx;
			$mod_name = 'jmsmodules';
        }
        @Tools::copy(_PS_MODULE_DIR_.$this->name.'/logo.gif', _PS_IMG_DIR_.'t/'.$class.'.gif');
        $_tab = new Tab();
        $_tab->class_name = $class;
        $_tab->module = $this->name;
        $_tab->id_parent = $parent_id;
        $_tab->position = $position;
		$_tab->active = $active;
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

    public function getCurrentHomePage()
    {
        $id_shop = $this->context->shop->id;
        if ($this->context->cookie->jpb_homepage != '') {
            $homepage_id = $this->context->cookie->jpb_homepage;
        } else {
            $homepage_id = Configuration::get('JPB_HOMEPAGE');
        }
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('SELECT ph.* FROM '._DB_PREFIX_.'jmspagebuilder_homepages ph LEFT JOIN '._DB_PREFIX_.'jmspagebuilder p ON ph.`id_homepage` = p.`id_homepage` WHERE ph.`id_homepage` = '.$homepage_id);
    }

    public function loadAddon($addon)
    {
        if (isset($addon->settings->active) && (int)$addon->settings->active == 0) {
            return;
        }
        if ($addon->type == 'module') {
            return JmsPageBuilderHelper::MNexec($addon->settings->hook, $addon->settings->modulename);
        } else {
            $addonfile = 'addon'.$addon->type.'.php';
            $addonclass = 'JmsAddon'.Tools::ucfirst($addon->type);
            if (file_exists(_PS_MODULE_DIR_.'jmspagebuilder/addons/'.$addonfile)) {
                require_once(_PS_MODULE_DIR_.'jmspagebuilder/addons/'.$addonfile);
            }
            $addon_instance = new $addonclass();
            $addon_instance->root_url = JmsPageBuilderHelper::getRootUrl();
            return $addon_instance->returnValue($addon);
        }
    }

    private function resetSetting()
    {
        $this->context->cookie->__unset('jpb_homepage');
        $this->context->cookie->__unset('jpb_skin');
        $this->context->cookie->__unset('jpb_phover');
        $this->context->cookie->__unset('jpb_pcolor');
        $this->context->cookie->__unset('jpb_rtl');

    }

    public function hookDisplayBackOfficeHeader()
    {
        $this->context->controller->addCSS($this->_path.'views/css/adminicon.css');
    }

    public function hookDisplayHeader()
    {
        if (Tools::isSubmit('settingpanel') && (int)(Tools::getValue('settingpanel')) == 1) {
            if (Tools::isSubmit('jpb_skin')) {
                $this->context->cookie->jpb_skin = Tools::getValue('jpb_skin');
            }
            if (Tools::isSubmit('jpb_homepage')) {
                $this->context->cookie->jpb_homepage = Tools::getValue('jpb_homepage');
            }
            if (Tools::isSubmit('jpb_phover')) {
                $this->context->cookie->jpb_phover = Tools::getValue('jpb_phover');
            }
            if (Tools::isSubmit('jpb_pcolor')) {
                $this->context->cookie->jpb_pcolor = Tools::getValue('jpb_pcolor');
            }
            if (Tools::isSubmit('jpb_rtl')) {
                $this->context->cookie->jpb_rtl = Tools::getValue('jpb_rtl');
            }
            Tools::redirect($this->context->shop->getBaseURL());
        } elseif (Tools::isSubmit('settingreset')) {
            $this->resetSetting();
            Tools::redirect($this->context->shop->getBaseURL());
        } elseif ((int)configuration::get('JPB_SETTINGPANEL') == 0) {
            $this->resetSetting();
        }
        if ($this->context->cookie->jpb_homepage != '') {
            $jpb_homepage = $this->context->cookie->jpb_homepage;
        } else {
            $jpb_homepage = Configuration::get('JPB_HOMEPAGE');
        }
        if ($this->context->cookie->jpb_skin != '') {
            $jpb_skin = $this->context->cookie->jpb_skin;
        } else {
            $jpb_skin = Configuration::get('JPB_SKIN');
        }
        if ($jpb_skin == 'default' || $jpb_skin == 'preset1') {
            $jpb_skin = '';
        }
        if ($this->context->cookie->jpb_phover != '') {
            $jpb_phover = $this->context->cookie->jpb_phover;
        } else {
            $jpb_phover = Configuration::get('JPB_PRODUCTHOVER');
        }
        if ($this->context->cookie->jpb_pcolor != '') {
            $jpb_pcolor = $this->context->cookie->jpb_pcolor;
        } else {
            $jpb_pcolor = Configuration::get('JPB_PRODUCTCOLOR');
        }
        if ($this->context->cookie->jpb_rtl != '') {
            $jpb_rtl = $this->context->cookie->jpb_rtl;
        } else {
            $jpb_rtl = Configuration::get('JPB_RTL');
        }
        $homepage = $this->getCurrentHomePage();
        $this->context->controller->registerStylesheet('jmspb-bootstrap-css', 'modules/'.$this->name.'/views/css/bootstrap.min.css', ['media' => 'all', 'priority' => 0]);
        if ((int)configuration::get('JPB_AWESOME')) {
            $this->context->controller->registerStylesheet('jmspb-awesome', 'modules/'.$this->name.'/views/css/font-awesome.css', ['media' => 'all', 'priority' => 1]);
        }

        if ((int)configuration::get('JPB_JCAROUSEL')) {            
            $this->context->controller->addJS('modules/'.$this->name.'/views/js/jquery.jcarousel.min.js', 'all');
            $this->context->controller->addJS('modules/'.$this->name.'/views/js/owl.carousel.js', 'all');
            $this->context->controller->registerStylesheet('jmspb-jcarousel-css', 'modules/'.$this->name.'/views/css/jcarousel.css', ['media' => 'all', 'priority' => 150]);
            $this->context->controller->registerStylesheet('jmspb-owlcarousel-css', 'modules/'.$this->name.'/views/css/owl.carousel.css', ['media' => 'all', 'priority' => 151]);
            $this->context->controller->registerStylesheet('jmspb-owltheme-css', 'modules/'.$this->name.'/views/css/owl.theme.css', ['media' => 'all', 'priority' => 152]);
        }
        if ((int)configuration::get('JPB_BXSLIDER')) {
            $this->context->controller->addJqueryPlugin('bxslider');
        }
        if ((int)configuration::get('JPB_ANIMATE')) {
            $this->context->controller->registerStylesheet('jmspb-animate', 'modules/'.$this->name.'/views/css/animate.css', ['media' => 'all', 'priority' => 1]);
        }
        if ((int)configuration::get('JPB_COUNTDOWN')) {
            $this->context->controller->addJS('modules/'.$this->name.'/views/js/jquery.plugin.js', 'all');
            $this->context->controller->addJS('modules/'.$this->name.'/views/js/jquery.countdown.js', 'all');
        }
		if ((int)configuration::get('JPB_FANCYBOX')) {
            $this->context->controller->addJqueryPlugin('fancybox');
        }
        if ($homepage['css_file']) {
            $this->context->controller->registerStylesheet('jmspb-home-css', '/assets/css/'.$homepage['css_file'], ['media' => 'all', 'priority' => 1000]);
        }
        if ($homepage['js_file']) {
            $this->context->controller->registerJavascript('jmspb-home-js', '/assets/js/'.$homepage['js_file'], ['position' => 'bottom', 'priority' => 200]);
        }
        if ((int)$jpb_rtl || $this->context->language->is_rtl) {
            $this->context->controller->registerStylesheet('jmspb-home-rtl', '/assets/css/rtl.css', ['media' => 'all', 'priority' => 1000]);
			$this->context->controller->registerStylesheet('jmspb-rtl-page', '/assets/css/rtl-'.$homepage['css_file'], ['media' => 'all', 'priority' => 1000]);
        }
        if ($jpb_skin) {
            $this->context->controller->registerStylesheet('jmspb-skin', '/assets/css/skins/'.$jpb_skin.'.css', ['media' => 'all', 'priority' => 1000]);
			$this->context->controller->registerStylesheet('jmspb-skin-page', '/assets/css/skins/'.$jpb_skin.'-'.$homepage['css_file'], ['media' => 'all', 'priority' => 1000]);
        }

        if ((int)configuration::get('JPB_MOBILEMENU')) {
            $this->context->controller->registerJavascript('jmspb-off-canvas-js', 'modules/'.$this->name.'/views/js/off-canvas.js', ['position' => 'bottom', 'priority' => 200]);
            $this->context->controller->registerStylesheet('jmspb-offcanvas-css', 'modules/'.$this->name.'/views/css/off-canvas.css', ['media' => 'all', 'priority' => 1000]);
        }

        $this->context->controller->registerStylesheet('jmspb-responsive-css', '/assets/css/theme-responsive.css', ['media' => 'all', 'priority' => 1000]);
        if ((int)Configuration::get('JPB_SETTINGPANEL')) {
            $this->context->controller->registerStylesheet('jmspb-settingpanel-css', 'modules/'.$this->name.'/views/css/settingpanel.css', ['media' => 'all', 'priority' => 3]);
            $this->context->controller->addJS($this->_path.'views/js/settingpanel.js');
        }        
		$sidebar = '';
        if (Tools::isSubmit('sidebar') && (Tools::getValue('sidebar')) != '') {
            $sidebar = Tools::getValue('sidebar');
        }
		$jpb_productlayout = '';		
        if (isset($this->context->controller->php_self) && $this->context->controller->php_self == 'product' && Tools::isSubmit('layout') && (Tools::getValue('layout')) != '') {
            $jpb_productlayout = Tools::getValue('layout').'.tpl';
        } else {
			$jpb_productlayout = configuration::get('JPB_PRODUCTLAYOUT');
		}	
		$jpb_categorylayout = '';		
        if (isset($this->context->controller->php_self) && $this->context->controller->php_self == 'category' && Tools::isSubmit('layout') && (Tools::getValue('layout')) != '') {
            $jpb_categorylayout = Tools::getValue('layout').'.tpl';
        } else {
			$jpb_categorylayout = configuration::get('JPB_LISTINGLAYOUT');
		}
		$jpb_productperrow = 3;		
        if (isset($this->context->controller->php_self) && $this->context->controller->php_self == 'category' && Tools::isSubmit('ppr') && (Tools::getValue('ppr')) != '') {
            $jpb_productperrow = (int)Tools::getValue('ppr');
        } else {
			$jpb_productperrow = configuration::get('JPB_PRODUCTPERROW');
		}	
        
        if (Tools::isSubmit('jpb_grid') && (Tools::getValue('jpb_grid')) != '') {
            $jpb_grid = Tools::getValue('jpb_grid');
        } else {
            $jpb_grid = configuration::get('JPB_GRID');
        }
        if ($jpb_grid == '0') {
            $this->context->smarty->assign('jpb_grid', 0);
        } else {
            $this->context->smarty->assign('jpb_grid', 1);
        }
		if (Tools::isSubmit('jpb_gutterwidth') && (Tools::getValue('jpb_gutterwidth')) != '') {
            $jpb_gutterwidth = Tools::getValue('jpb_gutterwidth');
        } else {
            $jpb_gutterwidth = configuration::get('JPB_GUTTERWIDTH');
        }		
		$this->context->smarty->assign('jpb_gutterwidth', $jpb_gutterwidth);        
		if (Tools::isSubmit('jpb_wishlist') && (Tools::getValue('jpb_wishlist')) != '') {
            $jpb_wishlist = Tools::getValue('jpb_wishlist');
        } else {
            $jpb_wishlist = configuration::get('JPB_WISHLISTICON');
        }
		if ($jpb_wishlist == '0') {
            $this->context->smarty->assign('jpb_wishlist', 0);
        } else {
            $this->context->smarty->assign('jpb_wishlist', 1);
        }
		if (Tools::isSubmit('jpb_categoryname') && (Tools::getValue('jpb_categoryname')) != '') {
            $jpb_categoryname = Tools::getValue('jpb_categoryname');
        } else {
            $jpb_categoryname = configuration::get('JPB_CATEGORYNAME');
        }
		if ($jpb_categoryname == '0') {
            $this->context->smarty->assign('jpb_categoryname', 0);
        } else {
            $this->context->smarty->assign('jpb_categoryname', 1);
        }
		if (Tools::isSubmit('jpb_addtocart') && (Tools::getValue('jpb_addtocart')) != '') {
            $jpb_addtocart = Tools::getValue('jpb_addtocart');
        } else {
            $jpb_addtocart = configuration::get('JPB_ADDTOCARTTYPE');
        }		
		if (Tools::isSubmit('jpb_loadingstyle') && (Tools::getValue('jpb_loadingstyle')) != '') {
            $jpb_loadingstyle = (int)Tools::getValue('jpb_loadingstyle');
        } else {
            $jpb_loadingstyle = (int)configuration::get('JPB_LOADINGSTYLE');
        }
		global $css_tags;		
		$jpb_custom_css = array();
		if(configuration::get('JPB_BODYBG')) 
			$jpb_custom_css[] = $css_tags['body'].' {
					background-color: ' . configuration::get('JPB_BODYBG') . ';
				}
			';
		if(configuration::get('JPB_HEADERBG')) 
			$jpb_custom_css[] = $css_tags['header'].' {
					background-color: ' . configuration::get('JPB_HEADERBG') . ';
				}
			';
		if(configuration::get('JPB_TOPBARBG')) 
			$jpb_custom_css[] = $css_tags['topbar'].' {
					background-color: ' . configuration::get('JPB_TOPBARBG') . ';
				}
			';
		if(configuration::get('JPB_FOOTERBG')) 
			$jpb_custom_css[] = $css_tags['footer'].' {
					background-color: ' . configuration::get('JPB_FOOTERBG') . ';
				}
			';
		if(configuration::get('JPB_BODYCOLOR')) 
			$jpb_custom_css[] = $css_tags['bodycolor'].' {
					color: ' . configuration::get('JPB_BODYCOLOR') . ';
				}
			';
		if(configuration::get('JPB_HEADERCOLOR')) 
			$jpb_custom_css[] = $css_tags['headercolor'].' {
					color: ' . configuration::get('JPB_HEADERCOLOR') . ';
				}
			';
		if(configuration::get('JPB_TOPBARCOLOR')) 
			$jpb_custom_css[] = $css_tags['topbarcolor'].' {
					color: ' . configuration::get('JPB_TOPBARCOLOR') . ';
				}
			';
		if(configuration::get('JPB_FOOTERCOLOR')) 
			$jpb_custom_css[] = $css_tags['footercolor'].' {
					color: ' . configuration::get('JPB_FOOTERCOLOR') . ';
				}
			';
		if(configuration::get('JPB_HEADINGCOLOR')) 
			$jpb_custom_css[] = $css_tags['heading'].' {
					color: ' . configuration::get('JPB_HEADINGCOLOR') . ';
				}
			';
		if(configuration::get('JPB_PRODUCTNAMECOLOR')) 
			$jpb_custom_css[] = $css_tags['productname'].' {
					color: ' . configuration::get('JPB_PRODUCTNAMECOLOR') . ';
				}
			';
		if(configuration::get('JPB_PRICECOLOR')) 
			$jpb_custom_css[] = $css_tags['price'].' {
					color: ' . configuration::get('JPB_PRICECOLOR') . ';
				}
			';				
		Media::addJsDef(array('jpb_gutterwidth' => $jpb_gutterwidth,'jpb_addtocart' => $jpb_addtocart));
        $this->context->smarty->assign('themename', _THEME_NAME_);
        $this->context->smarty->assign('jpb_homepage', $jpb_homepage);
        $this->context->smarty->assign('jpb_homeclass', $homepage['home_class']);
        $this->context->smarty->assign('jpb_skin', $jpb_skin);
        $this->context->smarty->assign('jpb_phover', $jpb_phover);
        $this->context->smarty->assign('jpb_pcolor', $jpb_pcolor);
        $this->context->smarty->assign('jpb_rtl', $jpb_rtl);
		$this->context->smarty->assign('sidebar', $sidebar);
		$this->context->smarty->assign('jpb_gutterwidth', $jpb_gutterwidth);
		$this->context->smarty->assign('jpb_productlayout', $jpb_productlayout);
		$this->context->smarty->assign('jpb_categorylayout', $jpb_categorylayout);
		$this->context->smarty->assign('jpb_productperrow', $jpb_productperrow);
		$this->context->smarty->assign('jpb_addtocart', $jpb_addtocart);
        $this->context->smarty->assign('jpb_mobilemenu', (int)configuration::get('JPB_MOBILEMENU'));
		$this->context->smarty->assign('jpb_custom_css', $jpb_custom_css);
		$this->context->smarty->assign('jpb_loadingstyle', $jpb_loadingstyle);
    }

    public function hookdisplayTop()
    {
        if ((int)$this->id_homepage == 0) {
            return "You must select homepage!";
        }
        $homepage = $this->getCurrentHomePage();
        $params = $homepage['params'];
        $tresult = array();
        $t_index = 0;
        $rows = (array)Tools::jsonDecode($params);
        foreach ($rows as $key => $row) {
            if ($row->settings->hook == 'top' && ((isset($row->settings->active) && (int)$row->settings->active == 1) || !isset($row->settings->active))) {
                $tresult[] = $row;
                $columns = $rows[$key]->cols;
                foreach ($columns as $ckey => $column) {
                    $addons = $column->addons;
                    foreach ($addons as $akey => $addon) {
                        $tresult[$t_index]->cols[$ckey]->addons[$akey]->return_value = $this->loadAddon($addon);
                    }
                }
                $t_index++;
            }
        }
        $this->smarty->assign(array(
            'rows' => $tresult,
            'root_url' => $this->root_url
        ));
        return $this->display(__FILE__, 'jmspagebuilder_header.tpl');
    }

    public function hookdisplayHome()
    {
        if ((int)$this->id_homepage == 0) {
            return "You must select homepage!";
        }
        $homepage = $this->getCurrentHomePage();
        $params = $homepage['params'];
        $rows = (array)Tools::jsonDecode($params);
        $bresult = array();
        $b_index = 0;
        foreach ($rows as $key => $row) {
            if (($row->settings->hook == 'body' || $row->settings->hook == '') && ((isset($row->settings->active) && (int)$row->settings->active == 1) || !isset($row->settings->active))) {
                $bresult[] = $row;
                $columns = $rows[$key]->cols;
                foreach ($columns as $ckey => $column) {
                    $addons = $column->addons;
                    foreach ($addons as $akey => $addon) {
                        $bresult[$b_index]->cols[$ckey]->addons[$akey]->return_value = $this->loadAddon($addon);
                    }
                }
                $b_index++;
            }
        }
        $this->smarty->assign(array(
            'rows' => $bresult,
            'root_url' => $this->root_url
        ));
        return $this->display(__FILE__, 'jmspagebuilder_body.tpl');
    }

    public function hookdisplayFooter()
    {
        if ((int)$this->id_homepage == 0) {
            return "You must select homepage!";
        }
        $homepage = $this->getCurrentHomePage();
        $params = $homepage['params'];
        $rows = (array)Tools::jsonDecode($params);
        $fresult = array();
        $f_index = 0;
        foreach ($rows as $key => $row) {
            if ($row->settings->hook == 'footer' && ((isset($row->settings->active) && (int)$row->settings->active == 1) || !isset($row->settings->active))) {
                $fresult[] = $row;
                $columns = $rows[$key]->cols;
                foreach ($columns as $ckey => $column) {
                    $addons = $column->addons;
                    foreach ($addons as $akey => $addon) {
                        $fresult[$f_index]->cols[$ckey]->addons[$akey]->return_value = $this->loadAddon($addon);
                    }
                }
                $f_index++;
            }
        }
        if ((int)Configuration::get('JPB_SETTINGPANEL')) {
            $homepages = JmsPageBuilderHelper::getHomePages('1');
            $this->context->smarty->assign('themeskins', $this->_themeskins);
            if (count($this->_producthovers)) {
                $this->context->smarty->assign('producthovers', $this->_producthovers);
            }
            if (count($homepages)) {
                $this->context->smarty->assign('homepages', $homepages);
            }
        }
        $this->smarty->assign(array(
            'rows' => $fresult,
            'settingpanel' => (int)Configuration::get('JPB_SETTINGPANEL'),
            'root_url' => $this->root_url
        ));
        return $this->display(__FILE__, 'jmspagebuilder_footer.tpl');
    }
    public function getAllImages($id_lang, $where, $order)
    {
        $sql = 'SELECT i.`id_product`, image_shop.`cover`, i.`id_image`, il.`legend`, i.`position`,pl.`link_rewrite`
                FROM `'._DB_PREFIX_.'image` i
                '.Shop::addSqlAssociation('image', 'i').'
                LEFT JOIN `'._DB_PREFIX_.'product_lang` pl ON (i.`id_product` = pl.`id_product`)
                LEFT JOIN `'._DB_PREFIX_.'image_lang` il ON (i.`id_image` = il.`id_image` AND il.`id_lang` = '.(int)$id_lang.')'.$where.' '.$order;

        return Db::getInstance()->executeS($sql);
    }
    public function getSecondImgs($productids)
    {
        $link = $this->context->link;
        $id_lang = Context::getContext()->language->id;
        $where  = ' WHERE i.`id_product` IN ('.$productids.') AND (i.`cover` IS NULL OR i.`cover` = 0)';
        $order  = ' ORDER BY i.`id_product`,`position`';
        $limit  = ' LIMIT 0,1';
        //get product info\
        $listImg = $this->getAllImages($id_lang, $where, $order, $limit);
        $savedImg = array();
        $obj = array();
        $this->smarty->assign(array('homeSize' => Image::getSize(ImageType::getFormatedName('home')),'mediumSize' => Image::getSize(ImageType::getFormatedName('medium')),'smallSize' => Image::getSize(ImageType::getFormatedName('small'))));
        foreach ($listImg as $product) {
            if (!in_array($product['id_product'], $savedImg)) {
                $obj[] = array('id'=>$product['id_product'],'content'=>($link->getImageLink($product['link_rewrite'], $product['id_image'], ImageType::getFormatedName('home'))));
            }
            $savedImg[] = $product['id_product'];
        }
        return $obj;
    }
    public function getColors($productids)
    {
        $product_ids = explode(",", $productids);
        $obj = array();
        $colorproducts = Product::getAttributesColorList($product_ids);
        foreach ($product_ids as $product_id) {
            $tpl = $this->context->smarty->createTemplate(_PS_THEME_DIR_.'product-list-colors.tpl', $colorproducts[$product_id]);
            if (isset($colorproducts[$product_id])) {
                $tpl->assign(array(
                    'id_product'  => $product_id,
                    'colors_list' => $colorproducts[$product_id],
                    'link'        => Context::getContext()->link,
                    'img_col_dir' => _THEME_COL_DIR_,
                    'col_img_dir' => _PS_COL_IMG_DIR_
                ));
            }
            $obj[] = array('id'=>$product_id,'content'=>($tpl->fetch()));
        }
        return $obj;
    }
}
