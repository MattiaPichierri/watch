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

class JmsAddonVideo extends JmsAddonBase
{
    public function __construct()
    {
        $this->modulename = 'jmspagebuilder';
        $this->addonname = 'video';
        $this->addontitle = 'Video';
        $this->addondesc = 'Use to Add Youtube or Vimeo Video';
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
                'desc' => 'Video Block',
                'default' => 'Video Block'
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
                'name' => 'video_src',
                'lang' => '0',
                'label' => $this->l('Video URL'),
                'desc' => 'Insert here the YouTube or Vimeo video URL'
            ),
            array(
                'type' => 'text',
                'name' => 'video_width',
                'label' => $this->l('Video Width'),
                'lang' => '0',
                'desc' => 'Video Width in px(pixel) or %',
                'default' => '100%'
            ),
            array(
                'type' => 'text',
                'name' => 'video_height',
                'label' => $this->l('Video Height'),
                'lang' => '0',
                'desc' => 'Video Width in px(pixel) or %',
                'default' => '300px'
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
    public function getFieldsValues()
    {
        $fields = array();
        $languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            $fields['html_content'][$lang['id_lang']] = Tools::getValue('html_content_'.(int)$lang['id_lang']);
        }
        return $fields;
    }
    public function returnValue($addon)
    {
        $this->context = Context::getContext();
        $id_lang = $this->context->language->id;
        $src = JmsPageBuilderHelper::getVideoSrc($addon->fields[2]->value);
        $width  =  $addon->fields[3]->value;
        $height  =  $addon->fields[4]->value;
        $output  = '<div class="jms-addon jms-video">';
        $output  .= '<iframe width="'.$width.'" height="'.$height.'" src="' . $src . '" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
        $output  .= '</div>';
        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'addon_title' => $addon->fields[0]->value->$id_lang,
                'addon_desc' => $addon->fields[1]->value->$id_lang,
                'src'  => $src,
                'width'   => $width,
                'height'   => $height
            )
        );
        $this->overwrite_tpl = (string)$addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
