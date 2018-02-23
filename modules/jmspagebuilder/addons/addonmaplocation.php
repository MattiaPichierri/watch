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

class JmsAddonMaplocation extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'maplocation';
        $this->modulename = 'jmsmaplocation';
        $this->addontitle = 'Map Location';
        $this->addondesc = 'Show one or more Location on Map';
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
                'default' => 'Our Stores'
            ),
            array(
                'type' => 'text',
                'name' => 'desc',
                'label' => $this->l('Description'),
                'lang' => '1',
                'desc' => 'Enter text which will be used as addon description. Leave blank if no description is needed.',
                'default' => 'Find Our Store on Map'
            ),
            array(
                'type' => 'text',
                'name' => 'map_width',
                'label' => $this->l('Map Width'),
                'lang' => '0',
                'desc' => 'Map Width in px(pixel) or %',
                'default' => '100%'
            ),
            array(
                'type' => 'text',
                'name' => 'map_height',
                'label' => $this->l('Map Height'),
                'lang' => '0',
                'desc' => 'Map Width in px(pixel) or %',
                'default' => '100%'
            ),
            array(
                'type' => 'switch',
                'name' => 'show_dropdown',
                'label' => $this->l('Show Dropdown'),
                'lang' => '0',
                'desc' => 'Show/Hide DropDown',
                'default' => '1'
            ),
            array(
                'type' => 'select',
                'name' => 'dropdown_pos',
                'label' => $this->l('Dropdown Position'),
                'lang' => '0',
                'desc' => 'Position of dropdown location box',
                'options' => array('topleft', 'topright', 'bottomleft', 'bottomright'),
                'default' => 'topleft'
            ),
			array(
                'type' => 'text',
                'name' => 'map_api_key',
                'label' => $this->l('Map API Key'),
                'lang' => '0',
                'desc' => '',
                'default' => ''
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
        $this->context = Context::getContext();
        $id_shop = $this->context->shop->id;
        $id_lang = $this->context->language->id;
        $query = 'SELECT hs.`id_loc`, hss.`icon`, hss.`active`, hssl.`title`, hss.`address`,
            hssl.`url`, hssl.`description`,hss.`class`,hss.`latitude`, hss.`longitude`
            FROM '._DB_PREFIX_.'jmsmaploc hs
            LEFT JOIN '._DB_PREFIX_.'jmsmaploc_locs hss ON (hs.`id_loc` = hss.`id_loc`)
            LEFT JOIN '._DB_PREFIX_.'jmsmaploc_locs_lang hssl ON (hss.`id_loc` = hssl.`id_loc`)
            WHERE `id_shop` = '.(int)$id_shop.'
            AND hss.`active` = 1 AND hssl.`id_lang` = '.(int)$id_lang.
            ' AND hss.`active` = 1
            ORDER BY hss.`id_loc`';
        $locations = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($query);
        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'locations' => $locations,
                'addon_title' => JmsPageBuilderHelper::decodeHTML($addon->fields[0]->value->$id_lang),
                'addon_desc' => JmsPageBuilderHelper::decodeHTML($addon->fields[1]->value->$id_lang),
                'map_width' => $addon->fields[2]->value,
                'map_height' => $addon->fields[3]->value,
                'show_dropdown' => $addon->fields[4]->value,
                'dropdown_pos' => $addon->fields[5]->value,
				'map_api_key' => $addon->fields[6]->value,
                'root_url' => $this->root_url
            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
