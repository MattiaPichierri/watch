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

class JmsAddonHtml extends JmsAddonBase
{
    public function __construct()
    {
        $this->modulename = 'jmspagebuilder';
        $this->addonname = 'html';
        $this->addontitle = 'Html';
        $this->addondesc = 'Use to Add Html';
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
                'default' => 'Html Demo'
            ),
            array(
                'type' => 'text',
                'name' => 'desc',
                'label' => $this->l('Description'),
                'lang' => '1',
                'desc' => 'This is block html.',
                'default' => 'This is block html'
            ),
            array(
                'type' => 'editor',
                'name' => 'html_content',
                'rows' => '20',
                'cols' => '60',
                'lang' => '1',
                'label' => $this->l('Html Content')
            )
        );
        return $inputs;
    }
    public function returnValue($addon)
    {
        $id_lang = $this->context->language->id;
        $html_content = JmsPageBuilderHelper::decodeHTML($addon->fields[2]->value->$id_lang);
        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'addon_title' => JmsPageBuilderHelper::decodeHTML($addon->fields[0]->value->$id_lang),
                'addon_desc' => JmsPageBuilderHelper::decodeHTML($addon->fields[1]->value->$id_lang),
                'html_content' => $html_content
            )
        );

        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
