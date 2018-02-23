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

class JmsAddonProductTab2 extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'producttab2';
        $this->modulename = 'jmspagebuilder';
        $this->addontitle = 'Product Tab 2';
        $this->addondesc = 'Show Product Tab On Homepage';
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
                'default' => 'Product Tab'
            ),
            array(
                'type' => 'text',
                'name' => 'desc',
                'label' => $this->l('Description'),
                'lang' => '1',
                'desc' => 'Enter text which will be used as addon description. Leave blank if no description is needed.',
                'default' => 'easy to load product multi rows and columns like as tab'
            ),
            array(
                'type' => 'switch',
                'name' => 'show_featured',
                'label' => $this->l('Show Featured Product Tab'),
                'lang' => '0',
                'desc' => 'Show/Hide Featured Product Tab',
                'default' => '1'
            ),
            array(
                'type' => 'switch',
                'name' => 'show_new',
                'label' => $this->l('Show New Product Tab'),
                'lang' => '0',
                'desc' => 'Show/Hide New Product Tab',
                'default' => '1'
            ),
            array(
                'type' => 'switch',
                'name' => 'show_topseller',
                'label' => $this->l('Show TopSeller Product Tab'),
                'lang' => '0',
                'desc' => 'Show/Hide TopSeller Product Tab',
                'default' => '1'
            ),
            array(
                'type' => 'switch',
                'name' => 'show_onsale',
                'label' => $this->l('Show OnSale Product Tab'),
                'lang' => '0',
                'desc' => 'Show/Hide OnSale Product Tab',
                'default' => '0'
            ),
            array(
                'type' => 'switch',
                'name' => 'show_special',
                'label' => $this->l('Show Special Product Tab'),
                'lang' => '0',
                'desc' => 'Show/Hide Special Product Tab',
                'default' => '0'
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
                'name' => 'ptcategories',
                'label' => $this->l('Category'),
                'lang' => '0',
                'desc' => 'Select category (Only select a categoy)',
                'default' => '',
                'usecheckbox' => '1'
            ),
            array(
                'type' => 'text',
                'name' => 'child_categories',
                'label' => $this->l('Number of Child '),
                'lang' => '0',
                'desc' => 'Number of child category you want to show, not set to show all',
                'default' => 5
            ),
            array(
                'type' => 'switch',
                'name' => 'btnshowall',
                'label' => $this->l('Show Parent Categorylink'),
                'lang' => '0',
                'desc' => 'Enanble/Disable Show All button',
                'default' => '0'
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
                'name' => 'banner_img',
                'label' => $this->l('Banner'),
                'lang' => '0',
                'desc' => 'Banner',
                'default' => ''
            ),
            array(
                'type' => 'editor',
                'name' => 'banner_html1',
                'rows' => '20',
                'cols' => '60',
                'lang' => '1',
                'label' => $this->l('Banner Content'),
                'desc' => 'Enter texts for the content of Banner.'
            ),
            array(
                'type' => 'text',
                'name' => 'banner_link',
                'label' => $this->l('Banner Link'),
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
        $config = array();
        $config['show_featured'] = $addon->fields[2]->value;
        $config['show_new'] = $addon->fields[3]->value;
        $config['show_topseller'] = $addon->fields[4]->value;
        $config['show_onsale'] = $addon->fields[5]->value;
        $config['show_special'] = $addon->fields[6]->value;
        $total_config = $addon->fields[7]->value;
        $rows = $addon->fields[8]->value;
        $cols = $addon->fields[9]->value;
        $category_ids = array();
        if ($addon->fields[13]->value) {
            $category_ids = explode(',', $addon->fields[13]->value);
        }
        $_products = array();
        $featured_products = array();
        if ($config['show_featured'] == '1') {
            $_products = JmsProductHelper::getFeaturedProducts($category_ids, $total_config);
            $featured_products = JmsProductHelper::sliceProducts($_products, $rows, $cols, $total_config);
        }
        $new_products = array();
        if ($config['show_new'] == '1') {
            $_products = JmsProductHelper::getNewProducts($category_ids, $total_config);
            $new_products = JmsProductHelper::sliceProducts($_products, $rows, $cols, $total_config);
        }
        $topseller_products = array();
        if ($config['show_topseller'] == '1') {
            $_products = JmsProductHelper::getTopSellerProducts($category_ids, $total_config);
            $topseller_products = JmsProductHelper::sliceProducts($_products, $rows, $cols, $total_config);
        }
        $onsale_products = array();
        if ($config['show_onsale'] == '1') {
            $_products = JmsProductHelper::getonSaleProducts($category_ids, $total_config);
            $onsale_products = JmsProductHelper::sliceProducts($_products, $rows, $cols, $total_config);
        }
        $special_products = array();
        if ($config['show_special'] == '1') {
            $_products = JmsProductHelper::getSpecialProducts($total_config);
            $special_products = JmsProductHelper::sliceProducts($_products, $rows, $cols, $total_config);
        }
        //print_r(count($topseller_products));exit;
        // get child categories
        $parent_id = $addon->fields[13]->value;
        if ((int)$parent_id == 0) {
            return;
        }
        $category = new Category($parent_id);
        $category_link_rewrite = $category->link_rewrite;
        $id_lang = $this->context->language->id;
        $filter_cat = $addon->fields[14]->value;
        $limit='';
        if ($filter_cat != '') {
            $limit='LIMIT 0,'.$filter_cat;
        }
        $query = 'SELECT hss.name, hss.id_category, hss.link_rewrite
            FROM '._DB_PREFIX_.'category hs
            LEFT JOIN '._DB_PREFIX_.'category_lang hss ON (hs.id_category = hss.id_category)
            WHERE hs.id_parent = '.$parent_id.' AND hss.id_lang = '.(int)$id_lang.' ORDER BY `name` ASC '.$limit;
        $child = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($query);
        //print_r($child); exit;
        $num_child=count($child);
        $all_cat = $addon->fields[15]->value;
        // --------------------------- //
        $addon_tpl_dir = $this->loadTplDir();
        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'config' => $config,
                'category_link_rewrite' => $category_link_rewrite,
                'featured_products' => $featured_products,
                'new_products' => $new_products,
                'topseller_products' => $topseller_products,
                'onsale_products' => $onsale_products,
                'special_products' => $special_products,
                'parent_id' => $parent_id,
                'all_cat' => $all_cat,
                'child' => $child,
                'num_child' => $num_child,
                'addon_title' => JmsPageBuilderHelper::decodeHTML($addon->fields[0]->value->$id_lang),
                'addon_desc' => JmsPageBuilderHelper::decodeHTML($addon->fields[1]->value->$id_lang),
                'cols'  => $addon->fields[9]->value,
                'cols_md'   => $addon->fields[10]->value,
                'cols_sm'   => $addon->fields[11]->value,
                'cols_xs'   => $addon->fields[12]->value,
                'navigation' => $addon->fields[16]->value,
                'pagination' => $addon->fields[17]->value,
                'autoplay' => $addon->fields[18]->value,
                'rewind' => $addon->fields[19]->value,
                'slidebypage' => $addon->fields[20]->value,
                'banner_img' => $addon->fields[21]->value,
                'banner_html' => JmsPageBuilderHelper::decodeHTML($addon->fields[22]->value->$id_lang),
                'banner_link' => $addon->fields[23]->value,
                'addon_tpl_dir' => $addon_tpl_dir
            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
