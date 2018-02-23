<?php
/**
* 2007-2016 PrestaShop
*
* Jms Page Builder
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2016 Joommasters
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
class JmsAddonCategoryProduct extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'categoryproduct';
        $this->modulename = 'jmspagebuilder';
        $this->addontitle = 'Category Product';
        $this->addondesc = 'Show Category Products';
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
                'name' => 'category',
                'label' => $this->l('Categories'),
                'lang' => '0',
                'desc' => 'Enter Category Id',
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
    public function returnValue($addon)
    {
        $context = $this->context;
		$id_lang = $this->context->language->id;
        $id_category = $addon->fields[1]->value;
        $order_by = $addon->fields[2]->value;
        $order_way = $addon->fields[3]->value;
        $total_config = (int)$addon->fields[4]->value;
        $rows = (int)$addon->fields[5]->value;
        $cols = (int)$addon->fields[6]->value;
        $categories = array();
            $category = new Category($id_category, (int)Context::getContext()->language->id);
            $categories['id_category'] = $id_category;
            $categories['name'] = $category->name;
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
            $_products = [];

            foreach ($result as $rawProduct) {
                $_products[] = $presenter->present(
                    $presentationSettings,
                    $assembler->assembleProduct($rawProduct),
                    $context->language
                );
            }

            $categories['products'] = JmsProductHelper::sliceProducts($_products, $rows, $cols, $total_config);
		$addon_tpl_dir = $this->loadTplDir();
        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'categories' => $categories,
                'icon_class' => $addon->fields[0]->value,
                'cols'  => $addon->fields[6]->value,
                'cols_md'   => $addon->fields[7]->value,
                'cols_sm'   => $addon->fields[8]->value,
                'cols_xs'   => $addon->fields[9]->value,
                'navigation' => $addon->fields[10]->value,
                'pagination' => $addon->fields[11]->value,
                'autoplay' => $addon->fields[12]->value,
                'rewind' => $addon->fields[13]->value,
                'slidebypage' => $addon->fields[14]->value,
				'addon_tpl_dir' => $addon_tpl_dir
            )
        );
		$this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
