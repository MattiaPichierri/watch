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

class JmsAddonMegaProduct extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'megaproduct';
        $this->modulename = 'jmspagebuilder';
        $this->addontitle = 'Mega Product';
        $this->addondesc = 'Choose one category show subcategories as tab';
        $this->overwrite_tpl = '';
        $this->context = Context::getContext();
    }
    public function getInputs()
    {
        $inputs = array(
            array(
                'type' => 'text',
                'name' => 'categoryid',
                'label' => $this->l('Category ID'),
                'lang' => '0',
                'desc' => 'Enter Category ID to Show',
                'default' => ''
            ),
            array(
                'type' => 'text',
                'name' => 'icon_class',
                'label' => $this->l('Icon Class'),
                'lang' => '0',
                'desc' => 'Use this class to put Icon for this box',
                'default' => ''
            ),
            array(
                'type' => 'text',
                'name' => 'box_class',
                'label' => $this->l('Category Box Class'),
                'lang' => '0',
                'desc' => 'Use this class to style for box',
                'default' => ''
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
                'type' => 'image',
                'name' => 'ver_img',
                'label' => $this->l('Vertical Banner'),
                'lang' => '0',
                'desc' => 'Vertical Banner',
                'default' => ''
            ),
            array(
                'type' => 'image',
                'name' => 'hor_img1',
                'label' => $this->l('Horizonal Banner 1'),
                'lang' => '0',
                'desc' => 'Horizonal Banner 1',
                'default' => ''
            ),
            array(
                'type' => 'image',
                'name' => 'hor_img2',
                'label' => $this->l('Horizonal Banner 2'),
                'lang' => '0',
                'desc' => 'Horizonal Banner 2',
                'default' => ''
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
        $this->context = Context::getContext();
        if ((int)$addon->fields[0]->value == 0) {
            return "Please Enter Parent Category!";
        }
        $id_category = $addon->fields[0]->value;
        $icon_class = $addon->fields[1]->value;
        $box_class = $addon->fields[2]->value;
        $order_by = $addon->fields[3]->value;
        $order_way = $addon->fields[4]->value;
        $total_config = (int)$addon->fields[5]->value;
        $rows = (int)$addon->fields[6]->value;
        $cols = (int)$addon->fields[7]->value;
        $category = new Category($id_category, (int)$context->language->id);
        $subcats  = array();
        $products = array();
        $sublinks = array();
        $subcats = $category->getChildren($id_category, $context->language->id);
        foreach ($subcats as $subkey => $sub) {
            $subcategory = new Category($sub['id_category'], $context->language->id);
            $result = array();
            $result = $subcategory->getProducts((int)$context->language->id, 0, $total_config, $order_by, $order_way);

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

            $products[$subkey] = JmsProductHelper::sliceProducts($_products, $rows, $cols, $total_config);
            $sublinks[$subkey] = $subcategory->getChildren($sub['id_category'], $context->language->id);
        }
        $addon_tpl_dir = $this->loadTplDir();
        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'categoryname' => $category->name,
                'subcats' => $subcats,
                'products' => $products,
                'sublinks' => $sublinks,
                'icon_class' => $icon_class,
                'box_class' => $box_class,
                'cols'  => $addon->fields[7]->value,
                'cols_md'   => $addon->fields[8]->value,
                'cols_sm'   => $addon->fields[9]->value,
                'cols_xs'   => $addon->fields[10]->value,
                'ver_img'   => $addon->fields[11]->value,
                'hor_img1'  => $addon->fields[12]->value,
                'hor_img2'  => $addon->fields[13]->value,
                'navigation' => $addon->fields[14]->value,
                'pagination' => $addon->fields[15]->value,
                'autoplay' => $addon->fields[16]->value,
                'rewind' => $addon->fields[17]->value,
                'slidebypage' => $addon->fields[18]->value,
                'root_url' => $this->root_url,
                'addon_tpl_dir' => $addon_tpl_dir
            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
