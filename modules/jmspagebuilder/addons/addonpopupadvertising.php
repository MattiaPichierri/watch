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

class JmsAddonPopupAdvertising extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'popupadvertising';
        $this->modulename = 'jmspagebuilder';
        $this->addontitle = 'Popup Advertising';
        $this->addondesc = 'Show Popup Advertising';
        $this->overwrite_tpl = '';
        $this->context = Context::getContext();

    }
    public function getInputs()
    {
        $modulenames = JmsPageBuilderHelper::getModules();
        $inputs = array(
            array(
                'type' => 'text',
                'name' => 'title',
                'label' => $this->l('Title'),
                'lang' => '1',
                'desc' => 'Enter text which will be used as addon title. Leave blank if no title is needed.',
                'default' => 'Popup Advertising'
            ),
            array(
                'type' => 'select',
                'name' => 'loadtime',
                'label' => $this->l('Popup Load On'),
                'lang' => '0',
                'desc' => 'Popup will load on First Time Load or all Time',
                'options' => array('firstload', 'alltime'),
                'default' => 'firstload'
            ),
            array(
                'type' => 'select',
                'name' => 'pageshow',
                'label' => $this->l('Popup Show On Page'),
                'lang' => '0',
                'desc' => 'Popup Show On Home page or All Page',
                'options' => array('homepage', 'allpage'),
                'default' => 'homepage'
            ),
            array(
                'type' => 'select',
                'name' => 'popuptype',
                'label' => $this->l('Popup Content Type'),
                'lang' => '0',
                'desc' => 'Popup Content Type : Custom Html or Module Assign',
                'options' => array('custom_html', 'module'),
                'default' => 'custom_html'
            ),
            array(
                'type' => 'text',
                'name' => 'popup_width',
                'label' => $this->l('Popup Width'),
                'lang' => '0',
                'desc' => 'Popup Width in px(pixel)',
                'default' => '700'
            ),
            array(
                'type' => 'text',
                'name' => 'popup_height',
                'label' => $this->l('Popup Height'),
                'lang' => '0',
                'desc' => 'Popup Height in px(pixel)',
                'default' => '500'
            ),
            array(
                'type' => 'editor',
                'name' => 'html_content',
                'rows' => '20',
                'cols' => '60',
                'lang' => '1',
                'label' => $this->l('Html Content'),
                'desc' => 'Enter texts for the content.'
            ),
            array(
                'type' => 'select',
                'name' => 'modulename',
                'label' => $this->l('Module Assign'),
                'lang' => '0',
                'desc' => 'Select Module Name for "Module Assign" Option.',
                'options' => $modulenames,
                'default' => 'blocklanguages'
            ),
            array(
                'type' => 'select',
                'name' => 'modulehook',
                'label' => $this->l('Module Hook'),
                'lang' => '0',
                'desc' => 'Select Hook for Module Assign.',
                'options' => array('widget','displayTop','displayNav','displayTopColumn','displayHome','displayLeftColumn','displayRightColumn','displayFooter'),
                'default' => 'displayTop'
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
        if (file_exists(_PS_THEME_DIR_.'js/modules/jmspagebuilder/views/js/popupadvertising.js')) {
            $this->context->controller->addJS($this->root_url.'themes/'._THEME_NAME_.'/js/modules/jmspagebuilder/views/js/popupadvertising.js', 'all');
        } else {
            $this->context->controller->addJS($this->root_url.'modules/'.$this->modulename.'/views/js/popupadvertising.js', 'all');
        }
        if (file_exists(_PS_THEME_DIR_.'css/modules/jmspagebuilder/views/css/popupadvertising.css')) {
            $this->context->controller->addCSS($this->root_url.'themes/'._THEME_NAME_.'/css/modules/jmspagebuilder/views/css/popupadvertising.css', 'all');
        } else {
            $this->context->controller->addCSS($this->root_url.'modules/'.$this->modulename.'/views/css/popupadvertising.css', 'all');
        }
        $this->context = Context::getContext();
        $id_shop = $this->context->shop->id;
        $id_lang = $this->context->language->id;
        $pageshow = $addon->fields[2]->value;
        if ($pageshow == 'homepage') {
            if (!isset($this->context->controller->php_self) || $this->context->controller->php_self != 'index') {
                return;
            }
        }
        $popuptype = $addon->fields[3]->value;
        if ($popuptype == 'module') {
            $popup_content = JmsPageBuilderHelper::MNexec($addon->fields[8]->value, $addon->fields[7]->value);
        } else {
            $popup_content = JmsPageBuilderHelper::decodeHTML($addon->fields[6]->value->$id_lang);
        }
        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'popup_title' => JmsPageBuilderHelper::decodeHTML($addon->fields[0]->value->$id_lang),
                'loadtime' => $addon->fields[1]->value,
                'popup_width' => $addon->fields[4]->value,
                'popup_height' => $addon->fields[5]->value,
                'popup_content' => $popup_content,
                'root_url' => $this->root_url
            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
