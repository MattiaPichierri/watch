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
include_once(_PS_MODULE_DIR_.'jmspagebuilder/addons/addonbase.php');
include_once(_PS_MODULE_DIR_.'jmspagebuilder/classes/productHelper.php');

use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Core\Product\ProductListingPresenter;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;

class JmsAddonInstantShop extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'instantshop';
        $this->modulename = 'jmspagebuilder';
        $this->addontitle = 'Instant Shop';
        $this->addondesc = 'Instant Shop';
        $this->overwrite_tpl = '';
        $this->context = Context::getContext();

    }
    public function getInputs()
    {
        $inputs = array(
            array(
                'type' => 'text',
                'name' => 'title',
                'label' => $this->l('Title'),
                'lang' => '1',
                'desc' => 'Enter text which will be used as addon title. Leave blank if no title is needed.',
                'default' => 'Our Products'
            ),
            array(
                'type' => 'text',
                'name' => 'desc',
                'label' => $this->l('Description'),
                'lang' => '1',
                'desc' => 'Enter text which will be used as addon description. Leave blank if no description is needed.',
                'default' => 'Easy to find product following category'
            ),
			array(
                'type' => 'switch',
                'name' => 'alltab',
                'label' => $this->l('Show All Tab'),
                'lang' => '0',
                'desc' => 'Enanble/Disable All Tab',
                'default' => '1'
            ),			
            array(
                'type' => 'categories',
                'name' => 'ctcategories',
                'label' => $this->l('Categories'),
                'lang' => '0',
                'desc' => 'Select Categories to Show',
                'default' => '',
                'usecheckbox' => '1'
            ),
            array(
                'type' => 'select',
                'name' => 'order_by',
                'label' => $this->l('Order By'),
                'lang' => '0',
                'desc' => 'Order By Column',
                'options' => array('position', 'id_product', 'date_add', 'date_upd', 'name', 'manufacturer_name', 'price'),
                'default' => 'position'
            ),
            array(
                'type' => 'select',
                'name' => 'order_way',
                'label' => $this->l('Order Way'),
                'lang' => '0',
                'desc' => 'Order Way Or Order Direction',
                'options' => array('DESC','ASC'),
                'default' => 'DESC'
            ),
            array(
                'type' => 'text',
                'name' => 'items_total',
                'label' => $this->l('Total Items'),
                'lang' => '0',
                'desc' => 'Total Number Items. Leave blank it will load all item.',
                'default' => 20
            ),
			array(
                'type' => 'select',
                'name' => 'items_per_row',
                'label' => $this->l('Item per Row'),
                'lang' => '0',
                'desc' => 'Number of items show on one row.',
                'options' => array(2, 3, 4, 6),
                'default' => 4
            ),			
            array(
                'type' => 'text',
                'name' => 'rows_limit',
                'label' => $this->l('Row Limit'),
                'lang' => '0',
                'desc' => 'Number of rows show on first load.',
                'default' => 2
            ),     
			array(
                'type' => 'text',
                'name' => 'rows_load',
                'label' => $this->l('number of Row Load'),
                'lang' => '0',
                'desc' => 'Number of rows appear when load.',
                'default' => 1
            ),			
            array(
                'type' => 'select',
                'name' => 'loadmore_type',
                'label' => $this->l('Load More Type'),
                'lang' => '0',
                'desc' => 'Number of items show on one row.',
                'options' => array('loadmore','infinite'),
                'default' => 'loadmore'
            ),           
            array(
                'type' => 'text',
                'name' => 'overwrite_tpl',
                'label' => $this->l('Overwrite Tpl File'),
                'lang' => '0',
                'desc' => 'Use When you want overwrite template file'
            )
        );
        return $inputs;
    }
    public function returnValue($addon)
    {		
		$context = $this->context;
        $id_lang = $this->context->language->id;
		if (file_exists(_PS_THEME_DIR_.'js/modules/jmspagebuilder/views/js/instantshop.js')) { 
            $this->context->controller->addJS($this->root_url.'themes/'._THEME_NAME_.'/modules/jmspagebuilder/views/js/instantshop.js', 'all');
        } else {
            $this->context->controller->addJS($this->root_url.'modules/'.$this->modulename.'/views/js/instantshop.js', 'all');
        }
		if (file_exists(_PS_THEME_DIR_.'css/modules/jmspagebuilder/views/css/instantshop.css')) { 
            $this->context->controller->addCSS($this->root_url.'themes/'._THEME_NAME_.'/modules/jmspagebuilder/views/css/instantshop.css');
        } else {            
			$this->context->controller->addCSS($this->root_url.'modules/'.$this->modulename.'/views/css/instantshop.css');
        }		
		$showall = (int)$addon->fields[2]->value;
		$loadmore_type = $addon->fields[10]->value;
		if($loadmore_type == 'infinite')
			$this->context->controller->addJS($this->root_url.'modules/'.$this->modulename.'/views/js/loadmore-infinite.js', 'all');
		else 
			$this->context->controller->addJS($this->root_url.'modules/'.$this->modulename.'/views/js/loadmore.js', 'all');
        $id_lang = $this->context->language->id;                
		if ($addon->fields[3]->value) {
            $category_ids = explode(',', $addon->fields[3]->value);
        }				
        $order_by = $addon->fields[4]->value;
        $order_way = $addon->fields[5]->value;
        $total_config = (int)$addon->fields[6]->value;	
		if((int)$addon->fields[7]->value > 0)		
			$items_per_row = (int)$addon->fields[7]->value;
		else 
			$items_per_row = 4;
        $rows_limit = (int)$addon->fields[8]->value;		
		$rows_load = (int)$addon->fields[9]->value;
        $categories = array();        
		$_products = array();		
		if($showall) {
			$_products = JmsProductHelper::getProducts($total_config, $order_by, $order_way);
		} else {
			$category = new Category($category_ids[0], (int)Context::getContext()->language->id);            
            $result = array();
            $result = $category->getProducts((int)Context::getContext()->language->id, 0, $total_config, $order_by, $order_way);
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
		}
		$k = 0;	
        foreach ($category_ids as $id_category) {
			$category = new Category($id_category, (int)Context::getContext()->language->id);
            $categories[$k]['id_category'] = $id_category;
            $categories[$k]['name'] = $category->name;
			$k++;
		}		
        $addon_tpl_dir = $this->loadTplDir();
        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
				'products' => $_products,
                'categories' => $categories,
                'addon_title' => JmsPageBuilderHelper::decodeHTML($addon->fields[0]->value->$id_lang),
                'addon_desc' => JmsPageBuilderHelper::decodeHTML($addon->fields[1]->value->$id_lang),
				'showall' => $showall,
				'total_config' => $total_config,
				'order_by' => $order_by,
				'order_way' => $order_way,
				'col_class' => 12/$items_per_row,
                'limit' => $items_per_row*$rows_limit,                
				'load' => $items_per_row*$rows_load,
                'loadmore_type' => $loadmore_type,                
                'addon_tpl_dir' => $addon_tpl_dir
            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
