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

class JmsAddonBrand extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'brand';
        $this->modulename = 'jmsbrands';
        $this->addontitle = 'Brand';
        $this->addondesc = 'Show Brand Logos';
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
                'default' => ''
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
                'type' => 'text',
                'name' => 'items_total',
                'label' => $this->l('Total Items'),
                'lang' => '0',
                'desc' => 'Total Number Items',
                'default' => 10
            ),
            array(
                'type' => 'text',
                'name' => 'items_show',
                'label' => $this->l('Items Show'),
                'lang' => '0',
                'desc' => 'Number of Items Show ( > 1199px )',
                'default' => 5
            ),
            array(
                'type' => 'text',
                'name' => 'items_show_md',
                'label' => $this->l('Items Show On Medium Device'),
                'lang' => '0',
                'desc' => 'Number of Items Show On Medium Device ( > 991px )',
                'default' => 4
            ),
            array(
                'type' => 'text',
                'name' => 'items_show_sm',
                'label' => $this->l('Items Show On Tablet'),
                'lang' => '0',
                'desc' => 'Number of Items Show On Tablet( >= 768px )',
                'default' => 3
            ),
            array(
                'type' => 'text',
                'name' => 'items_show_xs',
                'label' => $this->l('Items Show On Mobile'),
                'lang' => '0',
                'desc' => 'Number of Items Show On Mobile( >= 320px )',
                'default' => 2
            ),
            array(
                'type' => 'switch',
                'name' => 'link_enable',
                'label' => $this->l('Link Enable'),
                'lang' => '0',
                'desc' => 'Enable/Disable Link',
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
        $id_shop = $this->context->shop->id;
        $id_lang = $this->context->language->id;
        $query = 'SELECT hs.`brand_id` as id_brand, hssl.`image`, hss.`ordering`, hss.`active`, hssl.`title`,
            hssl.`url`, hssl.`description`
            FROM '._DB_PREFIX_.'jmsbrands hs
            LEFT JOIN '._DB_PREFIX_.'jmsbrands_logos hss ON (hs.`brand_id` = hss.`brand_id`)
            LEFT JOIN '._DB_PREFIX_.'jmsbrands_logos_lang hssl ON (hss.`brand_id` = hssl.`brand_id`)
            WHERE `id_shop` = '.(int)$id_shop.'
            AND hssl.`id_lang` = '.(int)$id_lang.
            ' AND hss.`active` = 1
            ORDER BY hss.ordering LIMIT '.$addon->fields[2]->value;
        $brands = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($query);
        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'brands' => $brands,
                'addon_title' => JmsPageBuilderHelper::decodeHTML($addon->fields[0]->value->$id_lang),
                'addon_desc' => JmsPageBuilderHelper::decodeHTML($addon->fields[1]->value->$id_lang),
                'items_show' => $addon->fields[3]->value,
                'items_show_md' => $addon->fields[4]->value,
                'items_show_sm' => $addon->fields[5]->value,
                'items_show_xs' => $addon->fields[6]->value,
                'link_enable' => $addon->fields[7]->value,
                'navigation' => $addon->fields[8]->value,
                'pagination' => $addon->fields[9]->value,
                'autoplay' => $addon->fields[10]->value,
                'rewind' => $addon->fields[11]->value,
                'slidebypage' => $addon->fields[12]->value,
                'image_url' => $this->root_url.'modules/'.$this->modulename.'/views/img/',
            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
