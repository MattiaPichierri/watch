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

class JmsAddonSpace extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'space';
        $this->modulename = 'jmspagebuilder';
        $this->addontitle = 'Empty Space';
        $this->addondesc = 'Add Empty Space To Layout';
        $this->overwrite_tpl = '';
        $this->context = Context::getContext();

    }
    public function getInputs()
    {
        $inputs = array(
            array(
                'type' => 'number',
                'name' => 'spacegap',
                'label' => $this->l('Space Gap'),
                'lang' => '0',
                'desc' => 'Set the gap for space(Height of Space).',
                'default' => '20'
            ),
            array(
                'type' => 'text',
                'name' => 'space_class',
                'label' => $this->l('Space Class'),
                'lang' => '0',
                'desc' => 'Use this class to style for space box',
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
        $id_lang = $this->context->language->id;
        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'spacegap' => $addon->fields[0]->value,
                'space_class' => $addon->fields[1]->value
            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
