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
class JmsAddonGallery extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'gallery';
        $this->modulename = 'jmsgallery';
        $this->addontitle = 'Image Gallery';
        $this->addondesc = 'Display Gallery Images on Homepage';
        $this->overwrite_tpl = '';
        $this->context = Context::getContext();
    }
    public function getInputs()
    {
        $inputs = array(
            array(
                'type' => 'text',
                'name' => 'jms_category',
                'label' => $this->l('Category ID'),
                'lang' => '0',
                'desc' => 'Enter Categories ID seperate by ","',
                'default' => '1'
            ),
            array(
                'type' => 'switch',
                'name' => 'jms_gallery_masonry',
                'label' => $this->l('Enable Masonry'),
                'lang' => '0',
                'desc' => 'Show items like as Masonry list',
                'default' => '1'
            ),
            array(
                'type' => 'switch',
                'name' => 'jms_gallery_fancybox',
                'label' => $this->l('Enable Fancybox'),
                'lang' => '0',
                'desc' => 'Enable/Display Fancybox',
                'default' => '1'
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
                'default' => 1
            ),
            array(
                'type' => 'text',
                'name' => 'cols',
                'label' => $this->l('Number of Columns'),
                'lang' => '0',
                'desc' => 'Number of Columns (Or Number of Product per Row) ( > 1199px )',
                'default' => 2
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
        $gallery_masonry = $addon->fields[1]->value;
        $this->context->controller->addJquery();
        $this->context->controller->addCSS($this->root_url.'modules/'.$this->modulename.'/views/css/style.css', 'all');
        $id_lang = $this->context->language->id;
        $id_category =  $addon->fields[0]->value;
        $filter_cat = " ";
        $total = 0;
        if ($id_category != "") {
            $filter_cat = ' AND hss.`id_category` = '.$id_category;
        }
        if ($gallery_masonry == 0) {
            $limit = $addon->fields[3]->value;
            $items = $this->getImages($addon->fields, $filter_cat);
        } else {
            $total = count($this->getItemCount($filter_cat));
            $items  = $this->getItems($filter_cat, $total);
            $this->context->controller->addJS($this->root_url.'modules/'.$this->modulename.'/views/js/imagesloaded.pkgd.min.js', 'all');
            $this->context->controller->addJS($this->root_url.'modules/'.$this->modulename.'/views/js/masonry.pkgd.min.js', 'all');
        }
        $id_lang = $this->context->language->id;
        $this->context->smarty->assign(array(
                'items' => $items,
                'gallery_masonry' => $gallery_masonry,
                'gallery_fancybox' => $addon->fields[2]->value,
                'image_baseurl' => $this->root_url.'modules/'.$this->modulename.'/views/img/',
                'cols'   => $addon->fields[5]->value,
                'cols_md'   => $addon->fields[6]->value,
                'cols_sm' => $addon->fields[7]->value,
                'cols_xs' => $addon->fields[8]->value,
                'navigation' => $addon->fields[9]->value,
                'pagination' => $addon->fields[10]->value,
                'autoplay' => $addon->fields[11]->value,
                'rewind' => $addon->fields[12]->value,
                'slidebypage' => $addon->fields[13]->value
        ));
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
    public function getItems($filter_cat, $limit)
    {
        $this->context = Context::getContext();
        $id_lang = $this->context->language->id;
        $sql = '
            SELECT hss.`id_category` as id_category, hss.`id_item`, hss.`image`, hss.`active`, catsl.`name_category`,hssl.`title`
            FROM '._DB_PREFIX_.'jmsgallery_item hss
            LEFT JOIN '._DB_PREFIX_.'jmsgallery_item_lang hssl ON (hss.id_item = hssl.id_item)
            LEFT JOIN '._DB_PREFIX_.'jmsgallery_category_lang catsl ON (catsl.id_category = hss.id_category)
            WHERE hss.active = 1 AND hssl.id_lang = '.(int)$id_lang.$filter_cat.
            ' GROUP BY hss.id_item'.' LIMIT 0'.','.$limit;
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
    }
    public function getItemCount($filter_cat)
    {
        $this->context = Context::getContext();
        $id_lang = $this->context->language->id;
        $sql = '
            SELECT hss.id_item
            FROM '._DB_PREFIX_.'jmsgallery_item hss
            LEFT JOIN '._DB_PREFIX_.'jmsgallery_item_lang hssl ON (hss.id_item = hssl.id_item)
            LEFT JOIN '._DB_PREFIX_.'jmsgallery_category_lang catsl ON (catsl.id_category = hss.id_category)
            WHERE hss.active = 1 AND hssl.id_lang = '.(int)$id_lang.
            $filter_cat.' GROUP BY hss.id_item';
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
    }
    public function getImages($fields, $filter_cat)
    {
        $total_config = $fields[3]->value;
        $rows = $fields[4]->value;
        $cols = $fields[5]->value;
        $id_category = $fields[0]->value;
        $_images = array();
        $_images = $this->getItems($filter_cat, $total_config);
        return JmsProductHelper::sliceProducts($_images, $rows, $cols, $total_config);
    }
}
