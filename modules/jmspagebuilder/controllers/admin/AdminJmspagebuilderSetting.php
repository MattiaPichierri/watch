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
require_once(_PS_MODULE_DIR_.'jmspagebuilder/classes/jmsHelper.php');
include_once(_PS_MODULE_DIR_.'jmspagebuilder/params.php');
class AdminJmspagebuilderSettingController extends ModuleAdminController
{
    private $_themeskins = array();
    private $_producthovers = array();
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
        $this->root_url = JmsPageBuilderHelper::getRootUrl();
    }
    public function renderList()
    {
        $this->_html = '';
        /* Validate & process */
        if (Tools::isSubmit('submitSetting')) {
            if ($this->_postValidation()) {
                $this->_postProcess();
            }
        } else {
            $this->_html .= $this->renderSettingForm();
        }
        return $this->_html;
    }

    private function _postValidation()
    {
        return true;
    }

    private function _postProcess()
    {
        $errors = array();
        /* Processes*/
        if (Tools::isSubmit('submitSetting')) {
            $res = Configuration::updateValue('JPB_SKIN', Tools::getValue('JPB_SKIN'));
            $res &= Configuration::updateValue('JPB_HOMEPAGE', (int)(Tools::getValue('JPB_HOMEPAGE')));
            $res &= Configuration::updateValue('JPB_PRODUCTHOVER', Tools::getValue('JPB_PRODUCTHOVER'));
            $res &= Configuration::updateValue('JPB_PRODUCTCOLOR', (int)Tools::getValue('JPB_PRODUCTCOLOR'));
            $res &= Configuration::updateValue('JPB_RTL', (int)(Tools::getValue('JPB_RTL')));
            $res &= Configuration::updateValue('JPB_SETTINGPANEL', (int)(Tools::getValue('JPB_SETTINGPANEL')));
            $res &= Configuration::updateValue('JPB_JCAROUSEL', (int)(Tools::getValue('JPB_JCAROUSEL')));
            $res &= Configuration::updateValue('JPB_AWESOME', (int)(Tools::getValue('JPB_AWESOME')));
            $res &= Configuration::updateValue('JPB_ANIMATE', (int)(Tools::getValue('JPB_ANIMATE')));
			$res &= Configuration::updateValue('JPB_FANCYBOX', (int)(Tools::getValue('JPB_FANCYBOX')));
            $res &= Configuration::updateValue('JPB_COUNTDOWN', (int)(Tools::getValue('JPB_COUNTDOWN')));
            $res &= Configuration::updateValue('JPB_MOBILEMENU', (int)(Tools::getValue('JPB_MOBILEMENU')));
            $res &= Configuration::updateValue('JPB_CONVERTURL', (int)(Tools::getValue('JPB_CONVERTURL')));
            $res &= Configuration::updateValue('JPB_LISTINGLAYOUT', Tools::getValue('JPB_LISTINGLAYOUT'));
            $res &= Configuration::updateValue('JPB_PRODUCTLAYOUT', Tools::getValue('JPB_PRODUCTLAYOUT'));
            $res &= Configuration::updateValue('JPB_PRODUCTPERROW', (int)Tools::getValue('JPB_PRODUCTPERROW'));
            $res &= Configuration::updateValue('JPB_GRID', (int)(Tools::getValue('JPB_GRID')));
			$res &= Configuration::updateValue('JPB_GUTTERWIDTH', (int)(Tools::getValue('JPB_GUTTERWIDTH')));
			$res &= Configuration::updateValue('JPB_WISHLISTICON', (int)(Tools::getValue('JPB_WISHLISTICON')));
			$res &= Configuration::updateValue('JPB_CATEGORYNAME', (int)(Tools::getValue('JPB_CATEGORYNAME')));
			$res &= Configuration::updateValue('JPB_ADDTOCARTTYPE', Tools::getValue('JPB_ADDTOCARTTYPE'));
			$res &= Configuration::updateValue('JPB_LOADINGSTYLE', (int)Tools::getValue('JPB_LOADINGSTYLE'));
			$res &= Configuration::updateValue('JPB_BODYBG', Tools::getValue('JPB_BODYBG'));
			$res &= Configuration::updateValue('JPB_HEADERBG', Tools::getValue('JPB_HEADERBG'));
			$res &= Configuration::updateValue('JPB_TOPBARBG', Tools::getValue('JPB_TOPBARBG'));
			$res &= Configuration::updateValue('JPB_FOOTERBG', Tools::getValue('JPB_FOOTERBG'));
			$res &= Configuration::updateValue('JPB_BODYCOLOR', Tools::getValue('JPB_BODYCOLOR'));
			$res &= Configuration::updateValue('JPB_HEADERCOLOR', Tools::getValue('JPB_HEADERCOLOR'));
			$res &= Configuration::updateValue('JPB_TOPBARCOLOR', Tools::getValue('JPB_TOPBARCOLOR'));
			$res &= Configuration::updateValue('JPB_FOOTERCOLOR', Tools::getValue('JPB_FOOTERCOLOR'));
			$res &= Configuration::updateValue('JPB_HEADINGCOLOR', Tools::getValue('JPB_HEADINGCOLOR'));
			$res &= Configuration::updateValue('JPB_PRODUCTNAMECOLOR', Tools::getValue('JPB_PRODUCTNAMECOLOR'));
			$res &= Configuration::updateValue('JPB_PRICECOLOR', Tools::getValue('JPB_PRICECOLOR'));

        }
        if (!$res) {
            $errors[] = $this->displayError($this->l('The configuration could not be updated.'));
        } else {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmspagebuilderSetting', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
        }
    }

    public function renderSettingForm()
    {
        $this->context->controller->addCSS(_MODULE_DIR_.$this->module->name.'/views/css/setting.css', 'all');
        $homepages = JmsPageBuilderHelper::getHomePages('1');
        $_phovers = array();
        foreach ($this->_producthovers as $phkey => $phvalue) {
            $_phovers[] = array('id' => $phkey, 'name' => $phvalue);
        }
        $_tskins = array();
        foreach ($this->_themeskins as $tsvalue) {
            $_tskins[] = array('id' => $tsvalue, 'name' => $tsvalue);
        }
		$_loadingstyles = array();
        $_loadingstyles[] = array('id' => 1, 'name' => 'Style 1');
        $_loadingstyles[] = array('id' => 2, 'name' => 'Style 2');
		$_loadingstyles[] = array('id' => 3, 'name' => 'Style 3');
		$_loadingstyles[] = array('id' => 4, 'name' => 'Style 4');
		$_loadingstyles[] = array('id' => 5, 'name' => 'Style 5');
		$_loadingstyles[] = array('id' => 6, 'name' => 'Style 6');
		$_loadingstyles[] = array('id' => 0, 'name' => 'No Loading');
        $_productsperrow = array();
        $_productsperrow[] = array('id' => 2);
        $_productsperrow[] = array('id' => 3);
        $_productsperrow[] = array('id' => 4);
		$_productsperrow[] = array('id' => 5);
		$_productsperrow[] = array('id' => 6);
        $input_arr = array();
		$_productlayouts = JmsPageBuilderHelper::getFiles('templates/catalog', 'product-layout');
		$_categorylayouts = JmsPageBuilderHelper::getFiles('templates/catalog/listing','category-layout');
		$_addtocartstyles = array();
        $_addtocartstyles[] = array('id' => '','name' => 'Ajax Default');
        $_addtocartstyles[] = array('id' => 'ajax_popup','name' => 'Ajax Popup');		        
		$_addtocartstyles[] = array('id' => 'ajax_moveimage','name' => 'Ajax Move Image');
		$_addtocartstyles[] = array('id' => 'ajax_cartbottom','name' => 'Ajax With Cart at Bottom');		
        $input_arr = array();
        if (count($this->_themeskins) > 0) {
            $input_arr[] =  array(
                'type' => 'skin',
                'label' => $this->l('Theme Skin'),
                'name' => 'JPB_SKIN',
                'skins' => $this->_themeskins,
                'jpb_skin' => configuration::get('JPB_SKIN'),
                'themename' => _THEME_NAME_,
                'img_url' => $this->root_url.'themes/'._THEME_NAME_.'/skin-icons/',
                'tab' => 'general'
            );
        }
        $input_arr[] =  array(
                'type' => 'select',
                'label' => $this->l('Home Page'),
                'name' => 'JPB_HOMEPAGE',
                'options' => array('query' => $homepages,'id' => 'id_homepage','name' => 'title'),
                'tab' => 'general'
            );
        if (count($_phovers) > 0) {
            $input_arr[] =  array(
                'type' => 'select',
                'label' => $this->l('Product Image Hover'),
                'name' => 'JPB_PRODUCTHOVER',
                'options' => array('query' => $_phovers,'id' => 'id','name' => 'name'),
                'tab' => 'general'
            );
        }
        $input_arr[] =  array(
                'type' => 'switch',
                'label' => $this->l('Product Color Pick'),
                'name' => 'JPB_PRODUCTCOLOR',
                'desc' => $this->l('Product Color Pick : Show color list to pick on product box.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Enabled')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('Disabled'))
                ),
                'tab' => 'general'
            );
        $input_arr[] =  array(
                'type' => 'switch',
                'label' => $this->l('Mobile Menu'),
                'name' => 'JPB_MOBILEMENU',
                'desc' => $this->l('Mobile Menu : Off-Canvas effect for Mobile menu.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Enabled')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('Disabled'))
                ),
                'tab' => 'general'
            );
        $input_arr[] =  array(
                'type' => 'switch',
                'label' => $this->l('RTL'),
                'name' => 'JPB_RTL',
                'desc' => $this->l('Direction : Right to Left.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Enabled')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('Disabled'))
                ),
                'tab' => 'general'
            );
        $input_arr[] =  array(
                'type' => 'switch',
                'label' => $this->l('Setting Panel'),
                'name' => 'JPB_SETTINGPANEL',
                'desc' => $this->l('Show or Hide setting panel on front.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Enabled')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('Disabled'))
                ),
                'tab' => 'general'
            );
		$input_arr[] =  array(
                'type' => 'select',
                'label' => $this->l('Site Loading Style'),
                'name' => 'JPB_LOADINGSTYLE',
                'options' => array('query' => $_loadingstyles,'id' => 'id','name' => 'name'),
                'tab' => 'general'
            );	
        $input_arr[] =  array(
                'type' => 'select',
                'label' => $this->l('Category Layout'),
                'name' => 'JPB_LISTINGLAYOUT',
                'options' => array('query' => $_categorylayouts,'id' => 'file','name' => 'file'),
                'tab' => 'layout'
            );
		$input_arr[] =  array(
                'type' => 'select',
                'label' => $this->l('Product Per Row'),
                'name' => 'JPB_PRODUCTPERROW',
				'desc' => $this->l('Products per Row on Category Page'),
                'options' => array('query' => $_productsperrow,'id' => 'id','name' => 'id'),
                'tab' => 'layout'
            );	
        $input_arr[] =  array(
                'type' => 'select',
                'label' => $this->l('Product Detail Layout'),
                'name' => 'JPB_PRODUCTLAYOUT',
                'options' => array('query' => $_productlayouts,'id' => 'file','name' => 'file'),
                'tab' => 'layout'
            );        
        $input_arr[] =  array(
                'type' => 'switch',
                'label' => $this->l('Grid View'),
                'name' => 'JPB_GRID',
                'desc' => $this->l('Grid or Listing View.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Enabled')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('Disabled'))
                ),
                'tab' => 'layout'
            );
		$input_arr[] =  array(
                'type' => 'select',
                'label' => $this->l('Add to Cart Style'),
                'name' => 'JPB_ADDTOCARTTYPE',
				'desc' => $this->l('Add to Cart Style'),
                'options' => array('query' => $_addtocartstyles,'id' => 'id','name' => 'name'),
                'tab' => 'layout'
            );		
		$input_arr[] =  array(
                'type' => 'text',
                'label' => $this->l('Gutter Width'),
                'name' => 'JPB_GUTTERWIDTH',
				'desc' => $this->l('Min 0 - Max 100, Step : 5, example : 5,10,15,....90,95.'),
                'class' => 'fixed-width-xl',				
                'tab' => 'productbox'
            );    
		$input_arr[] =  array(
                'type' => 'switch',
                'label' => $this->l('Show Category Name'),
                'name' => 'JPB_CATEGORYNAME',
                'desc' => $this->l('Show/Hide Category Name.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Show')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('Hide'))
                ),
                'tab' => 'productbox'
            );
		$input_arr[] =  array(
                'type' => 'switch',
                'label' => $this->l('Show Wishlist Icon'),
                'name' => 'JPB_WISHLISTICON',
                'desc' => $this->l('Show/Hide Wishlist Icon.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Show')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('Hide'))
                ),
                'tab' => 'productbox'
            );		
        $input_arr[] =  array(
                'type' => 'switch',
                'label' => $this->l('Load Jcarousel'),
                'name' => 'JPB_JCAROUSEL',
                'desc' => $this->l('Enable/Disable Jcarousel Library.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Enabled')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('Disabled'))
                ),
                'tab' => 'library'
            );
        $input_arr[] =  array(
                'type' => 'switch',
                'label' => $this->l('Load Awesome Icon'),
                'name' => 'JPB_AWESOME',
                'desc' => $this->l('Enable/Disable Awesome Icon Library.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Enabled')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('Disabled'))
                ),
                'tab' => 'library'
            );
        $input_arr[] =  array(
                'type' => 'switch',
                'label' => $this->l('Load Animate Css'),
                'name' => 'JPB_ANIMATE',
                'desc' => $this->l('Enable/Disable Animate Css Library.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Enabled')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('Disabled'))
                ),
                'tab' => 'library'
            );
        $input_arr[] =  array(
                'type' => 'switch',
                'label' => $this->l('Load Countdown'),
                'name' => 'JPB_COUNTDOWN',
                'desc' => $this->l('Enable/Disable Countdown Library.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Enabled')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('Disabled'))
                ),
                'tab' => 'library'
            );
		$input_arr[] =  array(
                'type' => 'switch',
                'label' => $this->l('Load Fancybox'),
                'name' => 'JPB_FANCYBOX',
                'desc' => $this->l('Enable/Disable Fancybox Library.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Enabled')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('Disabled'))
                ),
                'tab' => 'library'
            );	
        $input_arr[] =  array(
                'type' => 'switch',
                'label' => $this->l('Editor Auto Convert URL'),
                'name' => 'JPB_CONVERTURL',
                'desc' => $this->l('Enable/Disable Auto Convert URL. Auto add site url to image src.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Enabled')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('Disabled'))
                ),
                'tab' => 'library'
            );
		$input_arr[] =  array(
                'type' => 'color',
                'label' => $this->l('Body Background'),
                'name' => 'JPB_BODYBG',
                'desc' => $this->l('Choose background color for Body.'),
                'tab' => 'themestyling'
            );
		$input_arr[] =  array(
                'type' => 'color',
                'label' => $this->l('Header Background'),
                'name' => 'JPB_HEADERBG',
                'desc' => $this->l('Choose background color for Header.'),
                'tab' => 'themestyling'
            );
		$input_arr[] =  array(
                'type' => 'color',
                'label' => $this->l('Topbar Background'),
                'name' => 'JPB_TOPBARBG',
                'desc' => $this->l('Choose background color for Topbar.'),
                'tab' => 'themestyling'
            );
		$input_arr[] =  array(
                'type' => 'color',
                'label' => $this->l('Footer Background'),
                'name' => 'JPB_FOOTERBG',
                'desc' => $this->l('Choose background color for Footer.'),
                'tab' => 'themestyling'
            );
		$input_arr[] =  array(
                'type' => 'color',
                'label' => $this->l('Body Text Color'),
                'name' => 'JPB_BODYCOLOR',
                'desc' => $this->l('Choose color for body text.'),
                'tab' => 'themestyling'
            );
		$input_arr[] =  array(
                'type' => 'color',
                'label' => $this->l('Header Text Color'),
                'name' => 'JPB_HEADERCOLOR',
                'desc' => $this->l('Choose color for header text.'),
                'tab' => 'themestyling'
            );
		$input_arr[] =  array(
                'type' => 'color',
                'label' => $this->l('Topbar Text Color'),
                'name' => 'JPB_TOPBARCOLOR',
                'desc' => $this->l('Choose color for topbar text.'),
                'tab' => 'themestyling'
            );
		$input_arr[] =  array(
                'type' => 'color',
                'label' => $this->l('Footer Text Color'),
                'name' => 'JPB_FOOTERCOLOR',
                'desc' => $this->l('Choose color for footer text.'),
                'tab' => 'themestyling'
            );
		$input_arr[] =  array(
                'type' => 'color',
                'label' => $this->l('Heading Color'),
                'name' => 'JPB_HEADINGCOLOR',
                'desc' => $this->l('Choose color for heading.'),
                'tab' => 'themestyling'
            );
		$input_arr[] =  array(
                'type' => 'color',
                'label' => $this->l('Product Name Color'),
                'name' => 'JPB_PRODUCTNAMECOLOR',
                'desc' => $this->l('Choose color for product name on product box.'),
                'tab' => 'themestyling'
            );
		$input_arr[] =  array(
                'type' => 'color',
                'label' => $this->l('Price Color'),
                'name' => 'JPB_PRICECOLOR',
                'desc' => $this->l('Choose color for price on product box.'),
                'tab' => 'themestyling'
            );	
        $this->fields_form = array(
            'legend' => array(
                'title' => $this->l('Setting'),
                'icon' => 'icon-cogs'
            ),
            'tabs' => array('general' => 'General', 'layout' => 'Shop Layout', 'productbox' => 'Product Box', 'library' => 'Library', 'themestyling' => 'Theme Styling'),
            'input' => $input_arr,
            'submit' => array(
                'title' => $this->l('Save'),
                'name' => 'submitSetting'
            )
        );
        $this->tpl_folder = 'form/';
        $this->fields_value = $this->getConfigFieldsValues();
        return adminController::renderForm();
    }
    public function getConfigFieldsValues()
    {
        return array(
            'JPB_SKIN' => Tools::getValue('JPB_SKIN', Configuration::get('JPB_SKIN')),
            'JPB_HOMEPAGE' => Tools::getValue('JPB_HOMEPAGE', Configuration::get('JPB_HOMEPAGE')),
            'JPB_PRODUCTHOVER' => Tools::getValue('JPB_PRODUCTHOVER', Configuration::get('JPB_PRODUCTHOVER')),
            'JPB_PRODUCTCOLOR' => Tools::getValue('JPB_PRODUCTCOLOR', Configuration::get('JPB_PRODUCTCOLOR')),
            'JPB_RTL' => Tools::getValue('JPB_RTL', Configuration::get('JPB_RTL')),
            'JPB_SETTINGPANEL' => Tools::getValue('JPB_SETTINGPANEL', Configuration::get('JPB_SETTINGPANEL')),
            'JPB_JCAROUSEL' => Tools::getValue('JPB_JCAROUSEL', Configuration::get('JPB_JCAROUSEL')),
            'JPB_AWESOME' => Tools::getValue('JPB_AWESOME', Configuration::get('JPB_AWESOME')),
            'JPB_ANIMATE' => Tools::getValue('JPB_ANIMATE', Configuration::get('JPB_ANIMATE')),
            'JPB_COUNTDOWN' => Tools::getValue('JPB_COUNTDOWN', Configuration::get('JPB_COUNTDOWN')),
			'JPB_FANCYBOX' => Tools::getValue('JPB_FANCYBOX', Configuration::get('JPB_FANCYBOX')),
            'JPB_MOBILEMENU' => Tools::getValue('JPB_MOBILEMENU', Configuration::get('JPB_MOBILEMENU')),
            'JPB_CONVERTURL' => Tools::getValue('JPB_CONVERTURL', Configuration::get('JPB_CONVERTURL')),
            'JPB_PRODUCTLAYOUT' => Tools::getValue('JPB_PRODUCTLAYOUT', Configuration::get('JPB_PRODUCTLAYOUT')),
            'JPB_LISTINGLAYOUT' => Tools::getValue('JPB_LISTINGLAYOUT', Configuration::get('JPB_LISTINGLAYOUT')),
            'JPB_PRODUCTPERROW' => Tools::getValue('JPB_PRODUCTPERROW', Configuration::get('JPB_PRODUCTPERROW')),
            'JPB_GRID' => Tools::getValue('JPB_GRID', Configuration::get('JPB_GRID')),
			'JPB_GUTTERWIDTH' => Tools::getValue('JPB_GUTTERWIDTH', Configuration::get('JPB_GUTTERWIDTH')),
			'JPB_WISHLISTICON' => Tools::getValue('JPB_WISHLISTICON', Configuration::get('JPB_WISHLISTICON')),
			'JPB_CATEGORYNAME' => Tools::getValue('JPB_CATEGORYNAME', Configuration::get('JPB_CATEGORYNAME')),
			'JPB_ADDTOCARTTYPE' => Tools::getValue('JPB_ADDTOCARTTYPE', Configuration::get('JPB_ADDTOCARTTYPE')),
			'JPB_LOADINGSTYLE' => Tools::getValue('JPB_LOADINGSTYLE', Configuration::get('JPB_LOADINGSTYLE')),
			'JPB_BODYBG' => Tools::getValue('JPB_BODYBG', Configuration::get('JPB_BODYBG')),
			'JPB_HEADERBG' => Tools::getValue('JPB_HEADERBG', Configuration::get('JPB_HEADERBG')),
			'JPB_TOPBARBG' => Tools::getValue('JPB_TOPBARBG', Configuration::get('JPB_TOPBARBG')),
			'JPB_FOOTERBG' => Tools::getValue('JPB_FOOTERBG', Configuration::get('JPB_FOOTERBG')),
			'JPB_BODYCOLOR' => Tools::getValue('JPB_BODYCOLOR', Configuration::get('JPB_BODYCOLOR')),
			'JPB_HEADERCOLOR' => Tools::getValue('JPB_HEADERCOLOR', Configuration::get('JPB_HEADERCOLOR')),
			'JPB_TOPBARCOLOR' => Tools::getValue('JPB_TOPBARCOLOR', Configuration::get('JPB_TOPBARCOLOR')),
			'JPB_FOOTERCOLOR' => Tools::getValue('JPB_FOOTERCOLOR', Configuration::get('JPB_FOOTERCOLOR')),
			'JPB_HEADINGCOLOR' => Tools::getValue('JPB_HEADINGCOLOR', Configuration::get('JPB_HEADINGCOLOR')),
			'JPB_PRODUCTNAMECOLOR' => Tools::getValue('JPB_PRODUCTNAMECOLOR', Configuration::get('JPB_PRODUCTNAMECOLOR')),
			'JPB_PRICECOLOR' => Tools::getValue('JPB_PRICECOLOR', Configuration::get('JPB_PRICECOLOR')),
        );
    }
}
