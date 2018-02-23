<?php
/**
* 2007-2017 PrestaShop
*
* Jms Product Tab
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

if (!defined('_PS_VERSION_'))
    exit;
include_once(_PS_MODULE_DIR_.'jmsproducttab/JmsTab.php');
class jmsproducttab extends Module
{
   
    public function __construct()
    {
        $this->name = 'jmsproducttab';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'joommasters';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Jms Product Tab');
        $this->description = $this->l('Add custom tab to product page.');

    }

    public function install()
    {
        if (parent::install() && $this->registerHook('displayAdminProductsExtra') && $this->registerHook('actionProductSave') && $this->registerHook('displayProductExtraContent')) {
			$res = $this->createTables();
            return $res;
        }
        return false;
    }

    public function uninstall()
    {
        if (parent::uninstall()) {
            $this->deleteTables();
            return true;
        }
        return false;
    }
    protected function createTables()
    {		
		$res = (bool)Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'jms_producttab` (
                `tab_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                `id_shop` int(10) unsigned NOT NULL,
                PRIMARY KEY (`tab_id`, `id_shop`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
        ');
        $res &= Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'jms_producttab_ctab` (
              `tab_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `product_id` int(10) unsigned NOT NULL DEFAULT \'0\',              
              PRIMARY KEY (`tab_id`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
        ');
        $res &= (bool)Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'jms_producttab_ctab_lang` (
                `tab_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                `id_lang` int(10) unsigned NOT NULL,
                `tab_title` varchar(255) NOT NULL,
                `html_content` text NOT NULL,
                PRIMARY KEY (`tab_id`, `id_lang`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
        ');	
        return $res;
    }
    protected function deleteTables()
    {
        $drop = Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'jms_producttab_ctab_lang`;');
		$drop &= Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'jms_producttab_ctab`;');
		$drop &= Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'jms_producttab`;');
        return $drop;
    }	
	
	public function prepareNewTab($params)
	{
		$id_product = $params['id_product'];
		$languages = $this->context->controller->_languages;
		$tab_id = Db::getInstance()->getValue("SELECT tab_id FROM `"._DB_PREFIX_."jms_producttab_ctab` WHERE product_id =".(int)$id_product);			
		$tabcontent = new JmsTab($tab_id);				
		if (!$tabcontent)
			$tabcontent = null;		
		$this->context->smarty->assign(array(
			'languages' => $languages,
			'tabcontent' => $tabcontent,			
			'id_lang_default' => (int)$this->context->language->id
		));	 
	}
	
	public function hookDisplayAdminProductsExtra($params)
	{		
		if (Validate::isLoadedObject($product = new Product($params['id_product'])))
		{
			$this->prepareNewTab($params);
			$this->html = $this->display(__FILE__, 'jmsproducttab.tpl');			
			return $this->html;
		}
	}  
	public function hookActionProductSave($params)
	{
		$id_product = $params['id_product'];
		$tabtitle = Tools::getValue('tabtitle');
		$tabhtml = Tools::getValue('tabcontent');		
		$tab_id = Db::getInstance()->getValue("SELECT tab_id FROM `"._DB_PREFIX_."jms_producttab_ctab` WHERE product_id =".(int)$id_product);	
		if((int)$tab_id > 0)
			$tabcontent = new JmsTab((int)$tab_id);
		else 	
			$tabcontent = new JmsTab();
		$tabcontent->product_id = $id_product;
		$languages = Language::getLanguages(false);
        foreach ($languages as $language) {
			$id_lang = $language['id_lang'];
            $tabcontent->tab_title[$id_lang] = $tabtitle[$id_lang];                
            $tabcontent->html_content[$id_lang] = $tabhtml[$id_lang];  
        }
        if ((int)$tab_id > 0) {
			$tabcontent->update();                
        } else {
			$tabcontent->add();
        }
	}
	public function getProductTab() 
	{
		$id_product = (int)Tools::getValue('id_product');						
		$producttab = Db::getInstance()->getRow("SELECT ctlang.tab_title,ctlang.html_content FROM `"._DB_PREFIX_."jms_producttab_ctab_lang` ctlang INNER JOIN  `"._DB_PREFIX_."jms_producttab_ctab` ct  on ctlang.tab_id = ct.tab_id WHERE ct.product_id =".(int)$id_product." and ctlang.id_lang=".(int)$this->context->language->id);		
		return $producttab;
	}
	public function hookdisplayProductExtraContent($params)
	{
		$producttab = $this->getProductTab();
		if($producttab['tab_title'] == '' || $producttab['html_content'] == '') return array();			
		$_array = array();
		$templateFile = 'module:jmsproducttab/views/templates/hook/tabcontent.tpl'; 
		$this->context->smarty->assign(array(
			'html_content'	=>	$producttab['html_content']
		));
		$_array[] = (new PrestaShop\PrestaShop\Core\Product\ProductExtraContent()) ->setTitle($producttab['tab_title']) ->setContent($this->fetch($templateFile)); 
		return $_array;
	}
}
