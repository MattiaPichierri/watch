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
include_once(_PS_MODULE_DIR_.'jmspagebuilder/classes/jmsHelper.php');
class JmsAddonModuleGroup extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'modulegroup';
        $this->modulename = 'jmspagebuilder';
        $this->addontitle = 'Module Group';
        $this->addondesc = 'add one or more modules to a group';
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
                'default' => ''
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
                'name' => 'icon_class',
                'label' => $this->l('Icon Class'),
                'lang' => '0',
                'desc' => 'Enter icon class which will be used to add icon awesome. Leave blank if no icon is needed.',
                'default' => 'fa fa-cog'
            ),
            array(
                'type' => 'select',
                'name' => 'modulename',
                'label' => $this->l('Module Name 1'),
                'lang' => '0',
                'desc' => 'Select Module Name 1 for showing on group.',
                'options' => $modulenames,
                'default' => 'blocklanguages'
            ),
            array(
                'type' => 'select',
                'name' => 'modulehook1',
                'label' => $this->l('Module Hook 1'),
                'lang' => '0',
                'desc' => 'Select Hook for Module 1.',
                'options' => array('widget','displayTop','displayNav','displayTopColumn','displayHome','displayLeftColumn','displayRightColumn','displayFooter'),
                'default' => 'displayTop'
            ),
            array(
                'type' => 'select',
                'name' => 'modulename',
                'label' => $this->l('Module Name 2'),
                'lang' => '0',
                'desc' => 'Select Module Name 2 for showing on group.',
                'options' => $modulenames,
                'default' => 'bloccurrencies'
            ),
            array(
                'type' => 'select',
                'name' => 'modulehook',
                'label' => $this->l('Module Hook 2'),
                'lang' => '0',
                'desc' => 'Select Hook for Module 2.',
                'options' => array('widget','displayTop','displayNav','displayTopColumn','displayHome','displayLeftColumn','displayRightColumn','displayFooter'),
                'default' => 'displayTop'
            ),
            array(
                'type' => 'select',
                'name' => 'modulename',
                'label' => $this->l('Module Name 3'),
                'lang' => '0',
                'desc' => 'Select Module Name 3 for showing on group.',
                'options' => $modulenames,
                'default' => ''
            ),
            array(
                'type' => 'select',
                'name' => 'modulehook',
                'label' => $this->l('Module Hook 3'),
                'lang' => '0',
                'desc' => 'Select Hook for Module 3.',
                'options' => array('widget','displayTop','displayNav','displayTopColumn','displayHome','displayLeftColumn','displayRightColumn','displayFooter'),
                'default' => ''
            ),
            array(
                'type' => 'select',
                'name' => 'modulename',
                'label' => $this->l('Module Name 4'),
                'lang' => '0',
                'desc' => 'Select Module Name 4 for showing on group.',
                'options' => $modulenames,
                'default' => ''
            ),
            array(
                'type' => 'select',
                'name' => 'modulehook',
                'label' => $this->l('Module Hook 4'),
                'lang' => '0',
                'desc' => 'Select Hook for Module 4.',
                'options' => array('widget','displayTop','displayNav','displayTopColumn','displayHome','displayLeftColumn','displayRightColumn','displayFooter'),
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
        $module1_content = '';
        if ($addon->fields[3]->value) {
            $module1_content = JmsPageBuilderHelper::MNexec($addon->fields[4]->value, $addon->fields[3]->value);
        }
        $module2_content = '';
        if ($addon->fields[5]->value) {
            $module2_content = JmsPageBuilderHelper::MNexec($addon->fields[6]->value, $addon->fields[5]->value);
        }
        $module3_content = '';
        if ($addon->fields[7]->value) {
            $module3_content = JmsPageBuilderHelper::MNexec($addon->fields[8]->value, $addon->fields[7]->value);
        }
        $module4_content = '';
        if ($addon->fields[9]->value) {
            $module4_content = JmsPageBuilderHelper::MNexec($addon->fields[10]->value, $addon->fields[9]->value);
        }
        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'addon_title' => JmsPageBuilderHelper::decodeHTML($addon->fields[0]->value->$id_lang),
                'addon_desc' => JmsPageBuilderHelper::decodeHTML($addon->fields[1]->value->$id_lang),
                'icon_class' => $addon->fields[2]->value,
                'module1_content' => $module1_content,
                'module2_content' => $module2_content,
                'module3_content' => $module3_content,
                'module4_content' => $module4_content,
            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
