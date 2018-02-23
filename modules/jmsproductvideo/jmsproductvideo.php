<?php
/**
* 2007-2015 PrestaShop
*
* Jms Product Video
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2015 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

if (!defined('_PS_VERSION_'))
    exit;
class jmsproductvideo extends Module
{
   
    public function __construct()
    {
        $this->name = 'jmsproductvideo';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'joommasters';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Jms Product Video');
        $this->description = $this->l('Display videos to product page.');

    }

    public function install()
    {
        if (parent::install() && $this->registerHook('header') && $this->registerHook('actionProductSave') && $this->registerHook('displayAdminProductsExtra') && $this->registerHook('displayProductExtraContent') && $this->registerHook('displayProductPriceBlock') && $this->registerHook('displayReassurance') && $this->registerHook('displayFooterProduct') && $this->registerHook('displayProductAdditionalInfo')) {
			$this->createTables();
			Configuration::updateValue('PRVD_WIDTH', 700);
			Configuration::updateValue('PRVD_HEIGHT', 500);			
			Configuration::updateValue('PRVD_VIDEO_POSITION', 'displayProductAdditionalInfo');
			Configuration::updateValue('PRVD_SHOW', 0);
			Configuration::updateValue('PRVD_AUTOPLAY', 0);
			
            return true;
        }
        return false;
    }

    public function uninstall()
    {
        if (parent::uninstall()) {
            $this->deleteTables();
			Configuration::deleteByName('PRVD_WIDTH');
			Configuration::deleteByName('PRVD_HEIGHT');
			Configuration::deleteByName('PRVD_VIDEO_POSITION');
			Configuration::deleteByName('PRVD_SHOW');
			Configuration::deleteByName('PRVD_AUTOPLAY');
			
            return true;
        }
        return false;
    }
    protected function createTables()
    {
		$table = Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'jms_product_video` (
              `id` int(11) NOT NULL AUTO_INCREMENT,
              `id_product` int(11) NOT NULL,
              `id_lang` int(11) NOT NULL,
              `title` nvarchar(50) NOT NULL,
              `link` text NOT NULL,
              PRIMARY KEY (`id`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;');
        return $table;
    }
    protected function deleteTables()
    {
        $drop = Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'jms_product_video`;');
        return $drop;
    }
	public function getContent()
	{
		if (Tools::isSubmit("submitItem")) {
			Configuration::updateValue("PRVD_WIDTH", Tools::getValue("PRVD_WIDTH"));
			Configuration::updateValue("PRVD_HEIGHT", Tools::getValue("PRVD_HEIGHT"));
			Configuration::updateValue("PRVD_SHOW", Tools::getValue("PRVD_SHOW"));
			Configuration::updateValue("PRVD_VIDEO_POSITION", Tools::getValue("PRVD_VIDEO_POSITION"));
			Configuration::updateValue("PRVD_AUTOPLAY", Tools::getValue("PRVD_AUTOPLAY"));			
		}
		return $this->renderAddForm();
	}
	public function renderAddForm()
	{				
		$ways =  array(array('id'=>'0', 'title' => 'List' ), array('id'=>'1', 'title' => 'Click on Title to Show Video on Popup' ));
		$hookways =  array(array('id'=>'none'),array('id'=>'displayProductPriceBlock'),array('id'=>'displayProductExtraContent'), array('id'=>'displayFooterProduct'), array('id'=>'displayProductAdditionalInfo'), array('id'=>'displayReassurance', 'title' => 'displayReassurance' ));
		$fields_form = array(
			'form' => array(
				'legend' => array(
					'title' => $this->l('Config'),
					'icon' => 'icon-cogs'
				),
				'input' => array(									
					array(
						'type' => 'text',
						'label' => $this->l('Video Width'),
						'class' => 'fixed-width-xl',
                        'suffix' => 'px',
						'desc' => $this->l('Width of Video in pixel, you can set it = % or auto'),
						'name' => 'PRVD_WIDTH',
					),
					array(
						'type' => 'text',
						'label' => $this->l('Height'),
						'class' => 'fixed-width-xl',
                        'suffix' => 'px',
						'desc' => $this->l('Height of Video in pixel, you can set it = % or auto'),
						'name' => 'PRVD_HEIGHT',
					),
					array(
						'type' => 'select',						
						'label' => $this->l('Video Show'),
						'name' => 'PRVD_SHOW',
						'desc' => $this->l('Choose the way to show video : List or Popup'),
						'options' => array('query' => $ways,'id' => 'id','name' => 'title')
					),	
					array(
						'type' => 'select',						
						'label' => $this->l('Position for Video'),
						'name' => 'PRVD_VIDEO_POSITION',
						'desc' => $this->l('Choose the position to show those video on product page'),
						'options' => array('query' => $hookways,'id' => 'id','name' => 'id')
					),	
					array(
						'type' => 'switch',
						'label' => $this->l('Video Auto Play'),
						'name' => 'PRVD_AUTOPLAY',
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
		$helper->submit_action = 'submitItem';
		$helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$language = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->tpl_vars = array(
			'fields_value' => $this->getAddFieldsValues()
		);
		$helper->override_folder = '/';		
		return $helper->generateForm(array($fields_form));
	}
	public function getAddFieldsValues()
	{
		return array (
			'PRVD_WIDTH' => Tools::getValue("PRVD_WIDTH", Configuration::get("PRVD_WIDTH")),
			'PRVD_HEIGHT' => Tools::getValue("PRVD_HEIGHT", Configuration::get("PRVD_HEIGHT")),
			'PRVD_VIDEO_POSITION' => Tools::getValue("PRVD_VIDEO_POSITION", Configuration::get("PRVD_VIDEO_POSITION")),
			'PRVD_SHOW' => Tools::getValue("PRVD_SHOW", Configuration::get("PRVD_SHOW")),
			'PRVD_AUTOPLAY' => Tools::getValue("PRVD_AUTOPLAY", Configuration::get("PRVD_AUTOPLAY"))
		);
	}
	public function prepareNewTab($params)
	{
		$languages = Language::getLanguages(false);
		$videos = Db::getInstance()->executeS("SELECT * FROM "._DB_PREFIX_."jms_product_video WHERE id_product = ".$params['id_product']);
		$video_arr = array();
		foreach ($languages as $language) {
			$id_lang = $language['id_lang'];
			foreach ($videos as $video)
				if($video['id_lang'] == $id_lang)
					$video_arr[$id_lang] = $video;
			
		}
		if (!$video_arr)
			$video_arr = null;
		$this->context->smarty->assign(array(
			'languages' => $languages,
			'id_lang_default' => $this->context->language->id,
			'videos' => $video_arr,
			'default_language' => (int)Configuration::get('PS_LANG_DEFAULT')
		));
	 
	}
	public function hookDisplayAdminProductsExtra($params)
	{	
		if (Validate::isLoadedObject($product = new Product($params['id_product'])))
		{
			$this->prepareNewTab($params);
			$this->html = $this->display(__FILE__, 'jmsproductvideo.tpl');			
			return $this->html;
		}
	}  	
	public function hookActionProductSave($params)
	{
		$id_product = $params['id_product'];
		$videotitle = Tools::getValue('videotitle');
		$videolink = Tools::getValue('videolink');
		$languages = Language::getLanguages(false);		
		foreach ($languages as $language) {
			$id_lang = $language['id_lang'];
			$video_id = Db::getInstance()->getValue('SELECT id FROM '._DB_PREFIX_.'jms_product_video WHERE id_product = '.$id_product." AND id_lang = ".$id_lang);
			if((int)$video_id) {
				Db::getInstance()->execute("UPDATE "._DB_PREFIX_."jms_product_video SET title = '".$videotitle[$id_lang]."', link = '".$videolink[$id_lang]."' WHERE id = '".$video_id."'");
			} else {
				Db::getInstance()->execute("INSERT INTO "._DB_PREFIX_."jms_product_video (id_product, id_lang, title, link ) VALUES ('".$id_product."', '".$id_lang."', '".$videotitle[$id_lang]."', '".$videolink[$id_lang]."')");
			}
		}
	}
	public function hookDisplayHeader()
    {
		if(Tools::getValue('controller') == 'product')	{
			$this->context->controller->addCSS($this->_path.'views/css/style.css', 'all');		
			$this->context->controller->addJS($this->_path.'views/js/script.js', 'all');
		}	
    }
	public function getProductVideos() 
	{
		$id_product = (int)Tools::getValue('id_product');		
		$product_videos = Db::getInstance()->executeS("SELECT * FROM "._DB_PREFIX_."jms_product_video WHERE id_product=".(int)$id_product." and id_lang=".(int)$this->context->language->id);
		if(count($product_videos) == 0) return null;
		$video_array = array();
		foreach($product_videos as $product_video) {
			if($product_video['link'])
				$video_array[] = $product_video;
		}
		return $video_array;
	}
	public function returnVideos() 
	{
		$product_videos = $this->getProductVideos();		
		if($product_videos == null) return; 				
		$_array = array();		
		$i = 0;
		foreach($product_videos as $product_video) {
			$product_videos[$i]['links'] = explode(",", $product_video['link']);
			$i++;
		}			
		$this->context->smarty->assign(array(
			'product_videos'	=>	$product_videos,
			'video_height'	=>	Configuration::get("PRVD_HEIGHT"),
			'video_show'	=>	Configuration::get("PRVD_SHOW"),
			'video_width'	=>	Configuration::get("PRVD_WIDTH"),
			'video_autoplay'	=>	(int)Configuration::get("PRVD_AUTOPLAY")
		));
		return ($this->display(__FILE__, 'videocontent.tpl'));
	}
	public function hookdisplayProductExtraContent($params)
	{	
		if(Configuration::get("PRVD_VIDEO_POSITION") == 'displayProductExtraContent') {
			$product_videos = $this->getProductVideos();		
			if($product_videos == null) return;
			$_array = array();		
			$i = 0;
			foreach($product_videos as $product_video) {
				$product_videos[$i]['links'] = explode(",", $product_video['link']);
				$i++;
			}		
			$templateFile = 'module:jmsproductvideo/views/templates/hook/videocontent.tpl'; 
			$this->context->smarty->assign(array(
				'product_videos'	=>	$product_videos,
				'video_height'	=>	Configuration::get("PRVD_HEIGHT"),
				'video_show'	=>	Configuration::get("PRVD_SHOW"),
				'video_width'	=>	Configuration::get("PRVD_WIDTH"),
				'video_autoplay'	=>	(int)Configuration::get("PRVD_AUTOPLAY")
			));
			$_array[] = (new PrestaShop\PrestaShop\Core\Product\ProductExtraContent()) ->setTitle('Videos') ->setContent($this->fetch($templateFile)); 
			return $_array;
		} else {
			return array();		
		}			
	}
	public function hookdisplayProductAdditionalInfo($params)
	{	
		if(Configuration::get("PRVD_VIDEO_POSITION") == 'displayProductAdditionalInfo') {						
			return $this->returnVideos();			
		} else {
			return '';		
		}			
	}	
	public function hookdisplayProductPriceBlock($params)
	{	
		if(Configuration::get("PRVD_VIDEO_POSITION") == 'displayProductPriceBlock') {						
			return $this->returnVideos();			
		} else {
			return '';		
		}			
	}
	public function hookdisplayReassurance($params)
	{	
		if(Configuration::get("PRVD_VIDEO_POSITION") == 'displayReassurance') {			
			return $this->returnVideos();			
		} else {
			return '';		
		}			
	}
	public function hookdisplayFooterProduct($params)
	{	
		
		if(Configuration::get("PRVD_VIDEO_POSITION") == 'displayFooterProduct') {						
			return $this->returnVideos();			
		} else {
			return '';		
		}			
	}
}
