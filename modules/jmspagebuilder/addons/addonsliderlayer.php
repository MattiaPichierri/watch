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

class JmsAddonSliderLayer extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'sliderlayer';
        $this->modulename = 'jmsslider';
        $this->addontitle = 'Slider Layer';
        $this->addondesc = 'Show Slider Layer On Homepage';
        $this->overwrite_tpl = '';
        $this->context = Context::getContext();

    }
    public function getInputs()
    {
        $inputs = array(
            array(
                'type' => 'text',
                'name' => 'slide_ids',
                'label' => $this->l('Slide IDs'),
                'lang' => '0',
                'desc' => 'Slide IDs to show, seperate by ",". If empty it will show all slides.',
                'default' => ''
            ),
            array(
                'type' => 'text',
                'name' => 'max_width',
                'label' => $this->l('Slide Width'),
                'lang' => '0',
                'desc' => 'Width of Slide',
                'default' => 1920
            ),
            array(
                'type' => 'text',
                'name' => 'max_height',
                'label' => $this->l('Slide Height'),
                'lang' => '0',
                'desc' => 'Height of Slide',
                'default' => 800
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
                'name' => 'pausehover',
                'label' => $this->l('Pause Hover'),
                'lang' => '0',
                'desc' => 'Slide will be pause when hover',
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
                'type' => 'text',
                'name' => 'overwrite_tpl',
                'label' => $this->l('Overwrite Tpl File'),
                'lang' => '0',
                'desc' => 'Use When you want overwrite template file'
            )
        );
        return $inputs;
    }
    public function videoType($url)
    {
        if (strpos($url, 'youtube') > 0) {
            return 'youtube';
        } elseif (strpos($url, 'vimeo') > 0) {
            return 'vimeo';
        } else {
            return 'unknown';
        }
    }
    public function getFieldsConfig()
    {
        $fields = array(
            'JMS_SLIDER_DELAY' => Tools::getValue('JMS_SLIDER_DELAY', Configuration::get('JMS_SLIDER_DELAY')),
            'JMS_SLIDER_X' => Tools::getValue('JMS_SLIDER_X', Configuration::get('JMS_SLIDER_X')),
            'JMS_SLIDER_Y' => Tools::getValue('JMS_SLIDER_Y', Configuration::get('JMS_SLIDER_Y')),
            'JMS_SLIDER_TRANS' => Tools::getValue('JMS_SLIDER_TRANS', Configuration::get('JMS_SLIDER_TRANS')),
            'JMS_SLIDER_TRANS_IN' => Tools::getValue('JMS_SLIDER_TRANS_IN', Configuration::get('JMS_SLIDER_TRANS_IN')),
            'JMS_SLIDER_TRANS_OUT' => Tools::getValue('JMS_SLIDER_TRANS_OUT', Configuration::get('JMS_SLIDER_TRANS_OUT')),
            'JMS_SLIDER_EASE_IN' => Tools::getValue('JMS_SLIDER_EASE_IN', Configuration::get('JMS_SLIDER_EASE_IN')),
            'JMS_SLIDER_EASE_OUT' => Tools::getValue('JMS_SLIDER_EASE_OUT', Configuration::get('JMS_SLIDER_EASE_OUT')),
            'JMS_SLIDER_SPEED_IN' => Tools::getValue('JMS_SLIDER_SPEED_IN', Configuration::get('JMS_SLIDER_SPEED_IN')),
            'JMS_SLIDER_SPEED_OUT' => Tools::getValue('JMS_SLIDER_SPEED_OUT', 0),
            'JMS_SLIDER_DURATION' => Tools::getValue('JMS_SLIDER_DURATION', Configuration::get('JMS_SLIDER_DURATION')),
            'JMS_SLIDER_BG_ANIMATE' => Tools::getValue('JMS_SLIDER_BG_ANIMATE', Configuration::get('JMS_SLIDER_BG_ANIMATE')),
            'JMS_SLIDER_BG_EASE' => Tools::getValue('JMS_SLIDER_BG_EASE', Configuration::get('JMS_SLIDER_BG_EASE')),
            'JMS_SLIDER_END_ANIMATE' => Tools::getValue('JMS_SLIDER_END_ANIMATE', Configuration::get('JMS_SLIDER_END_ANIMATE')),
            'JMS_SLIDER_FULL_WIDTH' => Tools::getValue('JMS_SLIDER_FULL_WIDTH', Configuration::get('JMS_SLIDER_FULL_WIDTH')),
            'JMS_SLIDER_RESPONSIVE' => Tools::getValue('JMS_SLIDER_RESPONSIVE', Configuration::get('JMS_SLIDER_RESPONSIVE'))
            );
        return $fields;
    }
    public function getSlides($slide_ids = '')
    {
        $id_shop = $this->context->shop->id;
        $id_lang = $this->context->language->id;
        $query = 'SELECT * FROM `'._DB_PREFIX_.'jms_slides` `js`
            LEFT JOIN `'._DB_PREFIX_.'jms_slides_lang` `jsl` ON `js`.`id_slide`=`jsl`.`id_slide`
            LEFT JOIN `'._DB_PREFIX_.'jms_slides_shop` `jss` ON `js`.`id_slide`=`jss`.`id_slide`
            WHERE (`jsl`.`id_lang` = "'.(int)$id_lang.'" OR `jsl`.`id_lang` = 0)';
        if ($slide_ids) {
            $query .= ' AND js.`id_slide` IN ('.$slide_ids.')';
        }
        $query .= ' AND `js`.`status` = 1
                   ORDER BY `js`.`order` ASC';
        $slides = DB::getInstance()->executeS($query);
        $i=0;
        foreach ($slides as $slide) {
            $slides[$i]['layers'] = DB::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'jms_slides_layers`
                WHERE `id_slide` = "'.(int)$slide['id_slide'].'"
                AND `data_status` = 1
                ORDER BY `data_order` ASC');
            $k=0;
            foreach ($slides[$i]['layers'] as $layer) {
                $slides[$i]['layers'][$k]['videotype'] = $this->videoType($layer['data_video']);
                $k++;
            }
            $i++;
        }
        return $slides;
    }
    public function returnValue($addon)
    {
        $slides = $this->getSlides($addon->fields[0]->value);
        $configs = $this->getFieldsConfig();
        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'slides' => $slides,
                "configs" => $configs,
                'max_width' => $addon->fields[1]->value,
                'max_height' => $addon->fields[2]->value,
                'autoplay' => $addon->fields[3]->value,
                'pausehover' => $addon->fields[4]->value,
                'navigation' => $addon->fields[5]->value,
                'pagination' => $addon->fields[6]->value,
                'image_url' => $this->root_url.'modules/'.$this->modulename.'/views/img/',
            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
