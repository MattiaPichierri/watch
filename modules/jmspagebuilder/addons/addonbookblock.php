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

class JmsAddonBookBlock extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'bookblock';
        $this->modulename = 'jmspagebuilder';
        $this->addontitle = 'Book Block';
        $this->addondesc = 'Easy to add book block';
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
                'default' => 'Content Carousel'
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
                'type' => 'editor',
                'name' => 'html_content1',
                'rows' => '20',
                'cols' => '60',
                'lang' => '1',
                'label' => $this->l('Content 1'),
                'desc' => 'Enter texts for the content.'
            ),
            array(
                'type' => 'editor',
                'name' => 'html_content2',
                'rows' => '20',
                'cols' => '60',
                'lang' => '1',
                'label' => $this->l('Content 2'),
                'desc' => 'Enter texts for the content.'
            ),
            array(
                'type' => 'editor',
                'name' => 'html_content3',
                'rows' => '20',
                'cols' => '60',
                'lang' => '1',
                'label' => $this->l('Content 3'),
                'desc' => 'Enter texts for the content.'
            ),
            array(
                'type' => 'editor',
                'name' => 'html_content4',
                'rows' => '20',
                'cols' => '60',
                'lang' => '1',
                'label' => $this->l('Content 4'),
                'desc' => 'Enter texts for the content.'
            ),
            array(
                'type' => 'editor',
                'name' => 'html_content5',
                'rows' => '20',
                'cols' => '60',
                'lang' => '1',
                'label' => $this->l('Content 5'),
                'desc' => 'Enter texts for the content.'
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
        $this->context = Context::getContext();
        $id_lang = $this->context->language->id;
        $contents = array();
        for ($i = 2; $i < 7; $i++) {
            $contents[$i]['content'] = JmsPageBuilderHelper::decodeHTML($addon->fields[$i]->value->$id_lang);
        }
        $this->context->controller->addJS($this->root_url.'modules/'.$this->modulename.'/views/js/modernizr.custom.js', 'all');
        $this->context->controller->addJS($this->root_url.'modules/'.$this->modulename.'/views/js/jquerypp.custom.js', 'all');
        $this->context->controller->addJS($this->root_url.'modules/'.$this->modulename.'/views/js/jquery.bookblock.js', 'all');
        $this->context->controller->addCSS($this->root_url.'modules/'.$this->modulename.'/views/css/bookblock.css', 'all');
        $addon_tpl_dir = $this->loadTplDir();
        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'contents' => $contents,
                'addon_title' => JmsPageBuilderHelper::decodeHTML($addon->fields[0]->value->$id_lang),
                'addon_desc' => JmsPageBuilderHelper::decodeHTML($addon->fields[1]->value->$id_lang),
                'box_class' => $addon->fields[7]->value,
                'root_url' => $this->root_url,
                'addon_tpl_dir' => $addon_tpl_dir
            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
