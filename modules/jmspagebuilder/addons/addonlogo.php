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

class JmsAddonLogo extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'logo';
        $this->modulename = 'jmspagebuilder';
        $this->addontitle = 'Logo';
        $this->addondesc = 'Logo for your site';
        $this->overwrite_tpl = '';
        $this->context = Context::getContext();

    }
    public function getInputs()
    {
        $inputs = array(
            array(
                'type' => 'select',
                'name' => 'logo_type',
                'label' => $this->l('Use Default Logo of current theme'),
                'lang' => '0',
                'options' => array('default', 'image', 'text'),
                'desc' => '"Default" : get default logo in Preferences >> Themes. "Image" : select logo on "Custom Logo Image" box. "Text" :  Enter Text logo on "Logo Text" field.',
                'default' => 'default'
            ),
            array(
                'type' => 'image',
                'name' => 'custom_logo',
                'label' => $this->l('Custom Logo Image'),
                'lang' => '0',
                'desc' => 'Custom Logo Image',
                'default' => ''
            ),
            array(
                'type' => 'text',
                'name' => 'logo_text',
                'label' => $this->l('Logo Text'),
                'lang' => '0',
                'desc' => 'Custom Logo Image',
                'default' => 'JoomMasterS'
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
        $logo_type  = $addon->fields[0]->value;
        $image_logo = $addon->fields[1]->value;
        $text_logo = $addon->fields[2]->value;

        if ($logo_type == 'default') {
            $mobile_device = $this->context->getMobileDevice();
            if ($mobile_device && Configuration::get('PS_LOGO_MOBILE')) {
                $logo = $this->context->link->getMediaLink(_PS_IMG_.Configuration::get('PS_LOGO_MOBILE').'?'.Configuration::get('PS_IMG_UPDATE_TIME'));
            } else {
                $logo = $this->context->link->getMediaLink(_PS_IMG_.Configuration::get('PS_LOGO'));
            }
            $_html = '<a class="logo" href="';
            $_html .= $this->root_url;
            $_html .= '" title="'.Configuration::get('PS_SHOP_NAME').'">';
            $_html .= '<img class="logo img-responsive" src="'.$logo.'" alt="'.Configuration::get('PS_SHOP_NAME').'" />';
            $_html .='</a>';
        } elseif ($logo_type == 'image') {
            $_html = '<a href="';
            $_html .= $this->root_url;
            $_html .= '" title="'.Configuration::get('PS_SHOP_NAME').'">';
            $_html .= '<img class="logo img-responsive" src="'.$this->root_url.$image_logo.'" alt="'.Configuration::get('PS_SHOP_NAME').'" />';
            $_html .='</a>';
        } else {
            $_html = '<a class="logo" href="';
            $_html .= $this->root_url;
            $_html .= '" title="'.Configuration::get('PS_SHOP_NAME').'">';
            $_html .= '<span>'.$text_logo.'</span>';
            $_html .='</a>';
        }
        return $_html;
    }
}
