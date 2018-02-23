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
include_once(_PS_MODULE_DIR_.'jmspagebuilder/classes/productHelper.php');
use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Core\Product\ProductListingPresenter;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;
class JmsAjaxController extends Module
{    
    public function __construct()
    {
        $this->name = 'jmsajaxcontroller';
        $this->tab = 'front_office_features';
        $this->version = '3.1.0';
        $this->author = 'joommasters';
        $this->need_instance = 0;
        $this->bootstrap = true;        
        parent::__construct();        
        $this->displayName = $this->l('Jms Ajax Controller');
        $this->description = $this->l('Ajax Controller for Pagebuilder');
        $this->root_url = JmsPageBuilderHelper::getRootUrl();
		$tpl_dir = _PS_MODULE_DIR_.'jmspagebuilder/views/templates/hook/';
        if (file_exists(_PS_THEME_DIR_.'modules/jmspagebuilder/views/templates/hook/')) {
            $tpl_dir = _PS_THEME_DIR_.'modules/jmspagebuilder/views/templates/hook/';
        }
        $this->tpl_dir = $tpl_dir;
    }

    
    public function genInstantProducts($id_category, $params)
    {		
		$context = $this->context;
        $id_lang = $this->context->language->id;
		$_products = array();
		if((int)$id_category > 0 ) {						
			$category = new Category($id_category, (int)Context::getContext()->language->id);            
            $result = array();
            $result = $category->getProducts((int)Context::getContext()->language->id, 0, $params['total'], $params['order_by'], $params['order_way']);
            $assembler = new ProductAssembler($context);
            $presenterFactory = new ProductPresenterFactory($context);
            $presentationSettings = $presenterFactory->getPresentationSettings();
            $presenter = new ProductListingPresenter(
                new ImageRetriever(
                    $context->link
                ),
                $context->link,
                new PriceFormatter(),
                new ProductColorsRetriever(),
                $context->getTranslator()
            );
            if ($result == null) {
                return;
            }
            foreach ($result as $rawProduct) {
                $_products[] = $presenter->present(
                    $presentationSettings,
                    $assembler->assembleProduct($rawProduct),
                    $context->language
                );
            }				
		} else {
			$_products = JmsProductHelper::getProducts($params['total'], $params['order_by'], $params['order_way']);
		}			
		$this->context->smarty->assign(
            array(
                'link' => $this->context->link,
				'products' => $_products,
				'limit' => $params['limit'],
				'load' => $params['load'],
				'loadmore_type' => $params['loadmore_type'],
				'col_class' => $params['col_class'],
                'addon_tpl_dir' => $this->tpl_dir
            )
        );        
        $template_path = _PS_MODULE_DIR_.'jmspagebuilder/views/templates/hook/addoninstantshop-content.tpl';
        return $this->context->smarty->fetch($template_path);
    }    
}
