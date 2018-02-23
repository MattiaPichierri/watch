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

class JmsAddonProductCarousel extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'productcarousel';
        $this->modulename = 'jmspagebuilder';
        $this->addontitle = 'Product Carousel';
        $this->addondesc = 'Featured/New/Topseller/On-Sale/Special Products';
        $this->overwrite_tpl = '';
        $this->context = Context::getContext();
    }
    public function getInputs()
    {
        $inputs = array(
			array(
                'type' => 'text',
                'name' => 'icon_class',
                'label' => $this->l('Icon Class'),
                'lang' => '0',
                'desc' => 'Enter Icon Class. example : "fa fa-truck" ...',
                'default' => ''
            ),
            array(
                'type' => 'text',
                'name' => 'title',
                'label' => $this->l('Title'),
                'lang' => '1',
                'desc' => 'Enter text which will be used as addon title. Leave blank if no title is needed.',
                'default' => 'Product Carousel'
            ),
            array(
                'type' => 'text',
                'name' => 'desc',
                'label' => $this->l('Description'),
                'lang' => '1',
                'desc' => 'Enter text which will be used as addon description. Leave blank if no description is needed.',
                'default' => 'easy to load product multi rows and columns'
            ),
            array(
                'type' => 'select',
                'name' => 'producttype',
                'label' => $this->l('Product Type'),
                'lang' => '0',
                'desc' => 'Choose Product Type to Show',
                'options' => array('featured', 'topseller', 'new', 'onsale','special'),
                'default' => 'featured'
            ),
            array(
                'type' => 'text',
                'name' => 'items_total',
                'label' => $this->l('Total Items'),
                'lang' => '0',
                'desc' => 'Total Number Items',
                'default' => 10
            ),
            array(
                'type' => 'text',
                'name' => 'rows',
                'label' => $this->l('Number of Rows'),
                'lang' => '0',
                'desc' => 'Number of Rows (Or Number of Product per Column)',
                'default' => 2
            ),
            array(
                'type' => 'text',
                'name' => 'cols',
                'label' => $this->l('Number of Columns'),
                'lang' => '0',
                'desc' => 'Number of Columns (Or Number of Product per Row) ( > 1199px )',
                'default' => 4
            ),
            array(
                'type' => 'text',
                'name' => 'cols_md',
                'label' => $this->l('Number of Columns On Medium Device'),
                'lang' => '0',
                'desc' => 'Number of Columns (Or Number of Product per Row) On Medium Device ( > 991px )',
                'default' => 3
            ),
            array(
                'type' => 'text',
                'name' => 'cols_sm',
                'label' => $this->l('Number of Columns On Tablet'),
                'lang' => '0',
                'desc' => 'Number of Columns (Or Number of Product per Row) On Tablet( >= 768px )',
                'default' => 2
            ),
            array(
                'type' => 'text',
                'name' => 'cols_xs',
                'label' => $this->l('Number of Columns On Mobile'),
                'lang' => '0',
                'desc' => 'Number of Columns (Or Number of Product per Row) On Mobile( >= 320px )',
                'default' => 2
            ),
            array(
                'type' => 'categories',
                'name' => 'pccategories',
                'label' => $this->l('Category'),
                'lang' => '0',
                'desc' => 'Select categories, it will get products in those category else if not select any category it will get in all category.',
                'default' => '',
                'usecheckbox' => '1'
            ),
            array(
                'type' => 'switch',
                'name' => 'navigation',
                'label' => $this->l('Show Navigation'),
                'lang' => '0',
                'desc' => 'Enanble/Disable Navigation',
                'default' => '1'
            ),
            array(
                'type' => 'switch',
                'name' => 'pagination',
                'label' => $this->l('Show Pagination'),
                'lang' => '0',
                'desc' => 'Enanble/Disable Pagination',
                'default' => '0'
            ),
            array(
                'type' => 'switch',
                'name' => 'autoplay',
                'label' => $this->l('Auto Play'),
                'lang' => '0',
                'desc' => 'Enanble/Disable Auto Play',
                'default' => '0'
            ),
            array(
                'type' => 'switch',
                'name' => 'rewind',
                'label' => $this->l('ReWind Navigation'),
                'lang' => '0',
                'desc' => 'Enanble/Disable ReWind Navigation',
                'default' => '1'
            ),
            array(
                'type' => 'switch',
                'name' => 'slidebypage',
                'label' => $this->l('slide By Page'),
                'lang' => '0',
                'desc' => 'Enanble/Disable Slide By Page',
                'default' => '0'
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
    public function getProducts($fields)
    {
        $producttype = $fields[2]->value;
        $total_config = $fields[3]->value;
        $rows = $fields[4]->value;
        $cols = $fields[5]->value;
        $category_ids = array();
        if ($fields[9]->value) {
            $category_ids = explode(',', $fields[9]->value);
        }
        $_products = array();
        if ($producttype == 'onsale') {
            $_products = JmsProductHelper::getonSaleProducts($category_ids, $total_config);
        } elseif ($producttype == 'topseller') {
            $_products = JmsProductHelper::getTopSellerProducts($category_ids, $total_config);
        } elseif ($producttype == 'new') {
            $_products = JmsProductHelper::getNewProducts($category_ids, $total_config);
        } elseif ($producttype == 'special') {
            $_products = JmsProductHelper::getSpecialProducts($total_config);
        } else {
            $_products = JmsProductHelper::getFeaturedProducts($category_ids, $total_config);
        }
        return JmsProductHelper::sliceProducts($_products, $rows, $cols, $total_config);
    }

    public function returnValue($addon)
    {
        $this->context = Context::getContext();       
        $id_lang = $this->context->language->id;
		$fields = $addon->fields;		
		$addon_tpl_dir = $this->loadTplDir();
		$icon_class = '';
		if($addon->fields[0]->name != 'icon_class') {
			$icon_class = $addon->fields[0]->value;
			$products = $this->getProducts($fields);        					
		} else {
			array_shift($fields); 
			$products = $this->getProducts($fields);
		}		
        $this->context->smarty->assign(
			array(
				'link' => $this->context->link,
				'products_slides' => $products,
				'icon_class' => $icon_class,
				'addon_title' => $fields[0]->value->$id_lang,
				'addon_desc' => $fields[1]->value->$id_lang,
				'producttype' => $fields[2]->value,
				'cols'  => $fields[5]->value,
				'cols_md'   => $fields[6]->value,
				'cols_sm'   => $fields[7]->value,
				'cols_xs'   => $fields[8]->value,
				'navigation' => $fields[10]->value,
				'pagination' => $fields[11]->value,
				'autoplay' => $fields[12]->value,
				'rewind' => $fields[13]->value,
				'slidebypage' => $fields[14]->value,
				'addon_tpl_dir' => $addon_tpl_dir
			)
		);
		
		$this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();	
        return $this->context->smarty->fetch($template_path);
    }
}
