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

class JmsAddonVideoBackground extends JmsAddonBase
{
    public function __construct()
    {
        $this->modulename = 'jmspagebuilder';
        $this->addonname = 'videobackground';
        $this->addontitle = 'Video Background';
        $this->addondesc = 'Easy to add Video Background';
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
                'desc' => 'Video Background Block',
                'default' => 'Video Background Block'
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
                'desc' => 'Insert here the YouTube or Vimeo video URL',
                'default' => 'https://vimeo.com/150575261'
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
                'name' => 'height',
                'lang' => '0',
                'label' => $this->l('Height(px)'),
                'desc' => 'Box Height in pixel'
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
                'name' => 'padding_top',
                'label' => $this->l('Padding Top(px)'),
                'lang' => '0',
                'desc' => 'Padding Top for Text.',
                'default' => '40'
            ),
            array(
                'type' => 'select',
                'name' => 'text_align',
                'label' => $this->l('Text Align'),
                'lang' => '0',
                'desc' => 'Text Align for Box',
                'options' => array('inherit', 'left', 'right', 'center'),
                'default' => 'center'
            ),
            array(
                'type' => 'text',
                'name' => 'overlay_color',
                'label' => $this->l('Overlay Color'),
                'lang' => '0',
                'desc' => 'Background Color for Overlay.Hexa color code : example :#000000',
                'default' => '000000'
            ),
            array(
                'type' => 'text',
                'name' => 'overlay_opacity',
                'label' => $this->l('Overlay Opacity'),
                'lang' => '0',
                'desc' => 'Overlay Opacity.value from 0.0 to 1. Example :0.7',
                'default' => '0.7'
            ),
            array(
                'type' => 'text',
                'name' => 'text_color',
                'label' => $this->l('Text Color'),
                'lang' => '0',
                'desc' => 'Text Color for Overlay.Hexa color code : example :#FFFFFF',
                'default' => 'ffffff'
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
        $src = JmsPageBuilderHelper::getVideoSrc($addon->fields[2]->value);
        if (strpos($src, 'vimeo.com')!== false) {
            $videoparams = '?title=0&byline=0&portrait=0&color=3a6774&autoplay=1&loop=1';
        } else {
            $videoparams = '?autoplay=1&frameborder=0&loop=1&showinfo=0';
        }
        $height = (int)$addon->fields[4]->value;
        $margintop = (1080 - $height)/2;
        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'addon_title' => JmsPageBuilderHelper::decodeHTML($addon->fields[0]->value->$id_lang),
                'addon_desc' => JmsPageBuilderHelper::decodeHTML($addon->fields[1]->value->$id_lang),
                'src'  => $src,
                'box_class' => $addon->fields[3]->value,
                'height' => $height,
                'button_text' => JmsPageBuilderHelper::decodeHTML($addon->fields[5]->value->$id_lang),
                'button_link' => $addon->fields[6]->value,
                'target' => $addon->fields[7]->value,
                'paddingtop' => $addon->fields[8]->value,
                'text_align' => $addon->fields[9]->value,
                'videoparams' => $videoparams,
                'overlay_color' => $addon->fields[10]->value,
                'overlay_opacity' => $addon->fields[11]->value,
                'text_color' => $addon->fields[12]->value,
                'margintop' => $margintop,

            )
        );
        $this->overwrite_tpl = (string)$addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
