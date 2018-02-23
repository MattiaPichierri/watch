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

class JmsAddonCountdown extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'countdown';
        $this->modulename = 'jmspagebuilder';
        $this->addontitle = 'Countdown Box';
        $this->addondesc = 'Show box with countdown option';
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
                'name' => 'expire_time',
                'label' => $this->l('Expire Time'),
                'lang' => '0',
                'desc' => 'Select Expire Time. Format : yyyy-mm-dd h:i:s. Example :2020-04-04 09:34:34',
                'default' => '2020-04-04 09:34:34'
            ),
            array(
                'type' => 'text',
                'name' => 'box_class',
                'label' => $this->l('Box Class'),
                'lang' => '0',
                'desc' => 'Use this class to style for box',
                'default' => ''
            ),
            array(
                'type' => 'image',
                'name' => 'image',
                'label' => $this->l('Image'),
                'lang' => '0',
                'desc' => 'Image for countdown box',
                'default' => ''
            ),
            array(
                'type' => 'editor',
                'name' => 'html_content',
                'rows' => '20',
                'cols' => '60',
                'lang' => '1',
                'label' => $this->l('Content'),
                'desc' => 'Enter texts for the content.'
            ),
            array(
                'type' => 'text',
                'name' => 'button_text',
                'label' => $this->l('Button Text'),
                'lang' => '1',
                'desc' => 'Enter text which will be used as button text. Leave blank if no button is needed.',
                'default' => 'read more'
            ),
            array(
                'type' => 'text',
                'name' => 'button_link',
                'label' => $this->l('Button Link'),
                'lang' => '0',
                'desc' => 'The absolute URL of the button that will be linked.',
                'default' => '#'
            ),
            array(
                'type' => 'select',
                'name' => 'target',
                'label' => $this->l('Target for Link'),
                'lang' => '0',
                'desc' => 'Open link in same or in new window',
                'options' => array('same window', 'new window'),
                'default' => 'new window'
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
        $title  = $addon->fields[0]->value->$id_lang;
        $html_content = JmsPageBuilderHelper::decodeHTML($addon->fields[4]->value->$id_lang);
        $button_text = JmsPageBuilderHelper::decodeHTML($addon->fields[5]->value->$id_lang);
        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'addon_title' => $title,
                'expire_time' => $addon->fields[1]->value,
                'box_class' => $addon->fields[2]->value,
                'image' => $addon->fields[3]->value,
                'html_content' => $html_content,
                'button_text' => $button_text,
                'button_link' => $addon->fields[6]->value,
                'target' => $addon->fields[7]->value,
                'root_url' => $this->root_url
            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
