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

class JmsAddonTestimonial extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'testimonial';
        $this->modulename = 'jmstestimonials';
        $this->addontitle = 'Testimonial';
        $this->addondesc = 'Show Customer Testimonials';
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
                'default' => 'Testimonials'
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
                'default' => 3
            ),
            array(
                'type' => 'text',
                'name' => 'items_show',
                'label' => $this->l('Items Show'),
                'lang' => '0',
                'desc' => 'Number of Items Show ( > 1199px )',
                'default' => 1
            ),
            array(
                'type' => 'text',
                'name' => 'items_show_md',
                'label' => $this->l('Items Show On Medium Device'),
                'lang' => '0',
                'desc' => 'Number of Items Show On Medium Device ( > 991px )',
                'default' => 1
            ),
            array(
                'type' => 'text',
                'name' => 'items_show_sm',
                'label' => $this->l('Items Show On Tablet'),
                'lang' => '0',
                'desc' => 'Number of Items Show On Tablet( >= 768px )',
                'default' => 1
            ),
            array(
                'type' => 'text',
                'name' => 'items_show_xs',
                'label' => $this->l('Items Show On Mobile'),
                'lang' => '0',
                'desc' => 'Number of Items Show On Mobile( >= 320px )',
                'default' => 1
            ),
            array(
                'type' => 'switch',
                'name' => 'show_image',
                'label' => $this->l('Show Image'),
                'lang' => '0',
                'desc' => 'Show/Hide Author Image',
                'default' => '1'
            ),
            array(
                'type' => 'switch',
                'name' => 'show_time',
                'label' => $this->l('Show Time'),
                'lang' => '0',
                'desc' => 'Show/Hide Time',
                'default' => '0'
            ),
            array(
                'type' => 'switch',
                'name' => 'show_office',
                'label' => $this->l('Show Office'),
                'lang' => '0',
                'desc' => 'Show/Hide Office',
                'default' => '1'
            ),
            array(
                'type' => 'switch',
                'name' => 'navigation',
                'label' => $this->l('Show Navigation'),
                'lang' => '0',
                'desc' => 'Enanble/Disable Navigation',
                'default' => '0'
            ),
            array(
                'type' => 'switch',
                'name' => 'pagination',
                'label' => $this->l('Show Pagination'),
                'lang' => '0',
                'desc' => 'Enanble/Disable Pagination',
                'default' => '1'
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
        $id_lang = $this->context->language->id;
        $query = 'SELECT * FROM '._DB_PREFIX_.'jmstestimonials pb
            LEFT JOIN '._DB_PREFIX_.'jmstestimonials_lang pbl ON (pbl.`id_testimonial` = pb.`id_testimonial`)
            WHERE pbl.`comment` != "" AND pb.`active` = 1 AND pbl.`id_lang` = '.$id_lang.
            ' LIMIT '.$addon->fields[2]->value;
        $testimonials = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($query);
        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'testimonials' => $testimonials,
                'addon_title' => JmsPageBuilderHelper::decodeHTML($addon->fields[0]->value->$id_lang),
                'addon_desc' => JmsPageBuilderHelper::decodeHTML($addon->fields[1]->value->$id_lang),
                'items_show' => $addon->fields[3]->value,
                'items_show_md' => $addon->fields[4]->value,
                'items_show_sm' => $addon->fields[5]->value,
                'items_show_xs' => $addon->fields[6]->value,
                'show_image' => $addon->fields[7]->value,
                'show_time' => $addon->fields[8]->value,
                'show_office' => $addon->fields[9]->value,
                'navigation' => $addon->fields[10]->value,
                'pagination' => $addon->fields[11]->value,
                'autoplay' => $addon->fields[12]->value,
                'rewind' => $addon->fields[13]->value,
                'slidebypage' => $addon->fields[14]->value,
                'image_url' => $this->root_url.'modules/'.$this->modulename.'/views/img/',
            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
