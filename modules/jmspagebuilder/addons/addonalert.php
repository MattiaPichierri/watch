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

class JmsAddonAlert extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'alert';
        $this->modulename = 'jmspagebuilder';
        $this->addontitle = 'Alert Box';
        $this->addondesc = 'Create Alert Text Box: Success/Warning/Info/Danger';
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
                'desc' => 'Use this class to style for alert box',
                'default' => ''
            ),
            array(
                'type' => 'select',
                'name' => 'alert_type',
                'label' => $this->l('Alert Type'),
                'lang' => '0',
                'desc' => 'Alert Box Type',
                'options' => array('success', 'info','warning','danger'),
                'default' => 'info'
            ),
            array(
                'type' => 'editor',
                'name' => 'html_content',
                'rows' => '20',
                'cols' => '60',
                'lang' => '1',
                'label' => $this->l('Alert Message'),
                'desc' => 'Enter texts for the content.'
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
        $alert_message = JmsPageBuilderHelper::decodeHTML($addon->fields[2]->value->$id_lang);
        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'box_class' => $addon->fields[0]->value,
                'alert_type' => $addon->fields[1]->value,
                'alert_message' => $alert_message,
                'show_close_btn' => $addon->fields[3]->value
            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
