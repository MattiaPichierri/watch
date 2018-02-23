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

class JmsAddonBannerProduct extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'bannerproduct';
        $this->modulename = 'jmspagebuilder';
        $this->addontitle = 'Banners + Product Carousel';
        $this->addondesc = 'Show Banners + Product Carousel';
        $this->overwrite_tpl = '';
        $this->context = Context::getContext();

    }
    public function getInputs()
    {
        $inputs = array(
            array(
                'type' => 'text',
                'name' => 'title',
                'label' => $this->getTranslator()->trans('Title', array(), 'Modules.ImageSlider'),
                'lang' => '1',
                'desc' => 'Enter text which will be used as addon title. Leave blank if no title is needed.',
                'default' => 'Banner Product'
            ),
            array(
                'type' => 'text',
                'name' => 'desc',
                'label' => $this->l('Description'),
                'lang' => '1',
                'desc' => 'Enter text which will be used as addon description. Leave blank if no description is needed.',
                'default' => ''
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
                'type' => 'image',
                'name' => 'banner_img1',
                'label' => $this->l('Banner 1'),
                'lang' => '0',
                'desc' => 'Banner 1',
                'default' => ''
            ),
            array(
                'type' => 'editor',
                'name' => 'banner_html1',
                'rows' => '20',
                'cols' => '60',
                'lang' => '1',
                'label' => $this->l('Banner Content 1'),
                'desc' => 'Enter texts for the content of Banner 1.'
            ),
            array(
                'type' => 'text',
                'name' => 'banner_link1',
                'label' => $this->l('Banner Link 1'),
                'lang' => '0',
                'desc' => 'The absolute URL of the banner that will be linked.',
                'default' => '#'
            ),
            array(
                'type' => 'image',
                'name' => 'banner_img2',
                'label' => $this->l('Banner 2'),
                'lang' => '0',
                'desc' => 'Banner 2',
                'default' => ''
            ),
            array(
                'type' => 'editor',
                'name' => 'banner_html2',
                'rows' => '20',
                'cols' => '60',
                'lang' => '1',
                'label' => $this->l('Banner Content 2'),
                'desc' => 'Enter texts for the content of Banner 2.'
            ),
            array(
                'type' => 'text',
                'name' => 'banner_link2',
                'label' => $this->l('Banner Link 2'),
                'lang' => '0',
                'desc' => 'The absolute URL of the banner that will be linked.',
                'default' => '#'
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
            $_products = JmsProductHelper::getTopSellerProduct($category_ids, $total_config);
        } elseif ($producttype == 'new') {
            $_products = JmsProductHelper::getNewProduct($category_ids, $total_config);
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
        $products = $this->getProducts($addon->fields);
        $addon_tpl_dir = $this->loadTplDir();
        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'products_slides' => $products,
                'addon_title' => JmsPageBuilderHelper::decodeHTML($addon->fields[0]->value->$id_lang),
                'addon_desc' => JmsPageBuilderHelper::decodeHTML($addon->fields[1]->value->$id_lang),
                'producttype' => $addon->fields[2]->value,
                'cols'  => $addon->fields[5]->value,
                'cols_md'   => $addon->fields[6]->value,
                'cols_sm'   => $addon->fields[7]->value,
                'cols_xs'   => $addon->fields[8]->value,
                'navigation' => $addon->fields[10]->value,
                'pagination' => $addon->fields[11]->value,
                'autoplay' => $addon->fields[12]->value,
                'rewind' => $addon->fields[13]->value,
                'slidebypage' => $addon->fields[14]->value,
                'banner_img1' => $addon->fields[15]->value,
                'banner_html1' => JmsPageBuilderHelper::decodeHTML($addon->fields[16]->value->$id_lang),
                'banner_link1' => $addon->fields[17]->value,
                'banner_img2' => $addon->fields[18]->value,
                'banner_html2' => JmsPageBuilderHelper::decodeHTML($addon->fields[19]->value->$id_lang),
                'banner_link2' => $addon->fields[20]->value,
                'addon_tpl_dir' => $addon_tpl_dir
            )
        );

        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
