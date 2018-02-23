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

class JmsAddonPromoBar extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'promobar';
        $this->modulename = 'jmspagebuilder';
        $this->addontitle = 'Promo Bar';
        $this->addondesc = 'Create Promo Bar Text Box';
        $this->overwrite_tpl = '';
        $this->context = Context::getContext();

    }
    public function getInputs()
    {
        $inputs = array(
            array(
                'type' => 'text',
                'name' => 'box_class',
                'label' => $this->l('Box Class'),
                'lang' => '0',
                'desc' => 'Use this class to style for promo box',
                'default' => ''
            ),
            array(
                'type' => 'select',
                'name' => 'promobar_position',
                'label' => $this->l('Position'),
                'lang' => '0',
                'desc' => 'Promo Bar Position',
                'options' => array('top', 'bottom'),
                'default' => 'top'
            ),
            array(
                'type' => 'select',
                'name' => 'promobar_fixed',
                'label' => $this->l('Fixed'),
                'lang' => '0',
                'desc' => 'Promo bar fixed',
                'options' => array('yes', 'no'),
                'default' => 'yes'
            ),
            array(
                'type' => 'editor',
                'name' => 'html_content',
                'rows' => '20',
                'cols' => '60',
                'lang' => '1',
                'label' => $this->l('Text'),
                'desc' => 'Enter texts for the content.'
            ),
            array(
                'type'  => 'text',
                'name'  => 'promobar_bg',
                'lang'  => '0',
                'label' => $this->l('Promo Bar Background Color'),
                'desc'  => 'Enter color for the background. Ex: #7EB535'
            ),
            array(
                'type' => 'number',
                'name' => 'promobar_height',
                'label' => $this->l('Height'),
                'lang' => '0',
                'desc' => 'Set the height for box(Height of Box).',
                'default' => '40'
            ),
            array(
                'type' => 'switch',
                'name' => 'show_close_btn',
                'label' => $this->l('Show Close Button'),
                'lang' => '0',
                'desc' => 'Show/Hide Close Button',
                'default' => '1'
            ),
            array(
                'type' => 'text',
                'name' => 'promobar_expire_time',
                'label' => $this->l('Expire Time'),
                'lang' => '0',
                'desc' => 'Select Expire Time. Format : yyyy-mm-dd h:i:s. Example :2020-04-04 09:34:34. Leave blank if no Expire Time is needed.',
                'default' => '2020-04-04 09:34:34'
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
        if (file_exists(_PS_THEME_DIR_.'css/modules/jmspagebuilder/views/css/promobar.css')) {
            $this->context->controller->addCSS($this->root_url.'themes/'._THEME_NAME_.'/css/modules/jmspagebuilder/views/css/promobar.css', 'all');
        } else {
            $this->context->controller->addCSS($this->root_url.'modules/'.$this->modulename.'/views/css/promobar.css', 'all');
        }

        $id_lang = $this->context->language->id;
        $promobar_message = JmsPageBuilderHelper::decodeHTML($addon->fields[3]->value->$id_lang);
        $this->context->smarty->assign(
            array(
                'link'                 => $this->context->link,
                'box_class'            => $addon->fields[0]->value,
                'promobar_position'    => $addon->fields[1]->value,
                'promobar_fixed'       => $addon->fields[2]->value,
                'promobar_message'     => $promobar_message,
                'promobar_bg'          => $addon->fields[4]->value,
                'promobar_height'      => $addon->fields[5]->value,
                'show_close_btn'       => $addon->fields[6]->value,
                'promobar_expire_time' => $addon->fields[7]->value,
                'root_url'             => $this->root_url
            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
