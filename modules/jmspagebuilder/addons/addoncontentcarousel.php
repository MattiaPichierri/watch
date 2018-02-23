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

class JmsAddonContentCarousel extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'contentcarousel';
        $this->modulename = 'jmspagebuilder';
        $this->addontitle = 'Content Carousel';
        $this->addondesc = 'Easy to add Content Carousel';
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
                'type' => 'image',
                'name' => 'content_img1',
                'label' => $this->l('Content Image 1'),
                'lang' => '0',
                'desc' => 'Content Image 1',
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
                'type' => 'image',
                'name' => 'content_img2',
                'label' => $this->l('Content Image 2'),
                'lang' => '0',
                'desc' => 'Content Image 2',
                'default' => ''
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
                'type' => 'image',
                'name' => 'content_img3',
                'label' => $this->l('Content Image 3'),
                'lang' => '0',
                'desc' => 'Content Image 3',
                'default' => ''
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
                'type' => 'image',
                'name' => 'content_img4',
                'label' => $this->l('Content Image 4'),
                'lang' => '0',
                'desc' => 'Content Image 4',
                'default' => ''
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
                'type' => 'image',
                'name' => 'content_img5',
                'label' => $this->l('Content Image 5'),
                'lang' => '0',
                'desc' => 'Content Image 5',
                'default' => ''
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
                'name' => 'items_show',
                'label' => $this->l('Items Show'),
                'lang' => '0',
                'desc' => 'Number of Items Show ( > 1199px )',
                'default' => 1
            ),
            array(
                'type' => 'text',
                'name' => 'items_show_md',
                'label' => $this->l('Items Show On Medium Device'),
                'lang' => '0',
                'desc' => 'Number of Items Show On Medium Device ( > 991px )',
                'default' => 1
            ),
            array(
                'type' => 'text',
                'name' => 'items_show_sm',
                'label' => $this->l('Items Show On Tablet'),
                'lang' => '0',
                'desc' => 'Number of Items Show On Tablet( >= 768px )',
                'default' => 1
            ),
            array(
                'type' => 'text',
                'name' => 'items_show_xs',
                'label' => $this->l('Items Show On Mobile'),
                'lang' => '0',
                'desc' => 'Number of Items Show On Mobile( >= 320px )',
                'default' => 1
            ),
            array(
                'type' => 'switch',
                'name' => 'navigation',
                'label' => $this->l('Show Navigation'),
                'lang' => '0',
                'desc' => 'Enanble/Disable Navigation',
                'default' => '1'
            ),
            array(
                'type' => 'switch',
                'name' => 'pagination',
                'label' => $this->l('Show Pagination'),
                'lang' => '0',
                'desc' => 'Enanble/Disable Pagination',
                'default' => '0'
            ),
            array(
                'type' => 'switch',
                'name' => 'autoplay',
                'label' => $this->l('Auto Play'),
                'lang' => '0',
                'desc' => 'Enanble/Disable Auto Play',
                'default' => '0'
            ),
            array(
                'type' => 'switch',
                'name' => 'rewind',
                'label' => $this->l('ReWind Navigation'),
                'lang' => '0',
                'desc' => 'Enanble/Disable ReWind Navigation',
                'default' => '1'
            ),
            array(
                'type' => 'switch',
                'name' => 'slidebypage',
                'label' => $this->l('slide By Page'),
                'lang' => '0',
                'desc' => 'Enanble/Disable Slide By Page',
                'default' => '0'
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
        for ($i = 0; $i < 5; $i++) {
            $contents[$i]['image'] = (string)$addon->fields[2*$i + 2]->value;
            $contents[$i]['content'] = JmsPageBuilderHelper::decodeHTML($addon->fields[2*$i + 3]->value->$id_lang);
        }
        $addon_tpl_dir = $this->loadTplDir();
        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'contents' => $contents,
                'addon_title' => JmsPageBuilderHelper::decodeHTML($addon->fields[0]->value->$id_lang),
                'addon_desc' => JmsPageBuilderHelper::decodeHTML($addon->fields[1]->value->$id_lang),
                'items_show' => $addon->fields[12]->value,
                'items_show_md' => $addon->fields[13]->value,
                'items_show_sm' => $addon->fields[14]->value,
                'items_show_xs' => $addon->fields[15]->value,
                'link_enable' => $addon->fields[16]->value,
                'navigation' => $addon->fields[17]->value,
                'pagination' => $addon->fields[18]->value,
                'autoplay' => $addon->fields[19]->value,
                'rewind' => $addon->fields[20]->value,
                'slidebypage' => $addon->fields[21]->value,
                'box_class' => $addon->fields[22]->value,
                'root_url' => $this->root_url,
                'addon_tpl_dir' => $addon_tpl_dir
            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
