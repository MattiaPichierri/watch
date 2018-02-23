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

class JmsAddonContactInfo extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'contactinfo';
        $this->modulename = 'jmspagebuilder';
        $this->addontitle = 'Contact Info';
        $this->addondesc = 'Add Contact Information for your shop';
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
                'default' => 'Contact Us'
            ),
            array(
                'type' => 'text',
                'name' => 'desc',
                'label' => $this->l('Description'),
                'lang' => '1',
                'desc' => 'Enter text which will be used as addon description. Leave blank if no desc is needed.',
                'default' => ''
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
                'type' => 'text',
                'name' => 'address',
                'label' => $this->l('Address'),
                'lang' => '0',
                'desc' => 'Enter Your Shop Address',
                'default' => 'No. 2222 Michenel Mard Street,California, United Stated.'
            ),
            array(
                'type' => 'text',
                'name' => 'phone',
                'label' => $this->l('Phone'),
                'lang' => '0',
                'desc' => 'Enter your shop phone',
                'default' => '+00 01 3456 789'
            ),
            array(
                'type' => 'text',
                'name' => 'email',
                'label' => $this->l('Email'),
                'lang' => '0',
                'desc' => 'Enter your email',
                'default' => 'customercare@demo.com'
            ),
            array(
                'type' => 'text',
                'name' => 'opentime',
                'label' => $this->l('Open Time'),
                'lang' => '0',
                'desc' => 'Enter open time for your shop',
                'default' => 'customercare@demo.com'
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
                'addon_title' => JmsPageBuilderHelper::decodeHTML($addon->fields[0]->value->$id_lang),
                'addon_desc' => JmsPageBuilderHelper::decodeHTML($addon->fields[1]->value->$id_lang),
                'box_class' => $addon->fields[2]->value,
                'ci_address'  => $addon->fields[3]->value,
                'phone' => $addon->fields[4]->value,
                'email' => $addon->fields[5]->value,
                'opentime' => $addon->fields[6]->value,
                'root_url' => $this->root_url
            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
