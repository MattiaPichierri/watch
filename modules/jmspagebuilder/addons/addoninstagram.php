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
include_once(_PS_MODULE_DIR_.'jmspagebuilder/lib/instagramphp/instagram.php');
class JmsAddonInstagram extends JmsAddonBase
{
    public function __construct()
    {
        $this->modulename = 'jmspagebuilder';
        $this->addonname = 'instagram';
        $this->addontitle = 'Instagram';
        $this->addondesc = 'Show latest instagram images';
        $this->overwrite_tpl = '';
        $this->context = Context::getContext();
    }
    public function getInputs()
    {
        $inputs = array(
            array(
                'type' => 'text',
                'name' => 'username',
                'lang' => '0',
                'label' => $this->l('Instagram Username'),
                'desc' => 'Enter Instagram username',
                'default' => 'luvdragon3'
            ),
            array(
                'type' => 'text',
                'name' => 'access_token',
                'lang' => '0',
                'label' => $this->l('Access Token'),
                'desc' => 'Instagram API Access Token',
                'default' => '3234980746.7c96d22.e489ece15408429b99daa9a71355b2d7'
            ),
            array(
                'type' => 'text',
                'name' => 'instagram_to_display',
                'lang' => '0',
                'label' => $this->l('Number Images Instagram To Display'),
                'desc' => 'Number Images Instagram To Display',
                'default' => 5
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
        $username = $addon->fields[0]->value;
        $access_token = $addon->fields[1]->value;
        $count = $addon->fields[2]->value;
        $insta = new InstaWCD();
        $insta->username = $username;
        $insta->access_token = $access_token;
        $ins_media = $insta->userMedia();
        $insta = $ins_media['data'];
        $i = 0;
        $list_img2 ='';
        $insta_images = array();
        for ($i=0; $i<$count; $i++) {
            $insta_images [$i]['url']=$insta[$i]['images']['low_resolution']['url'];
            $insta_images [$i]['link']=$insta[$i]["link"];
        }
        /* Show Instagram images with two columns */
        $list_img2 = "";
        for ($i=0; $i<$count; $i++) {
            if ($insta[$i]['images']['low_resolution']['url'] != "") {
                if ($i%2==0) {
                    $list_img2 .= '<div class="instagram-item">';
                }
                $img = $insta[$i]['images']['low_resolution']['url'];
                $link = $insta[$i]["link"];
                $list_img2 .= '<a href ="'.$img.'" class = "instagram_elements" data-fancybox-group="gallery">';
                $list_img2 .= '<img src ="'.$img .'" '.' alt="image">';
                $list_img2 .= '</a>';
                if ($i%2==1 || $i == $count-1) {
                    $list_img2 .='</div>';
                }
            }
        }
        /* ------ */
        $this->context->smarty->assign(array(
                'insta_images' => $insta_images,
                'list_img2' => $list_img2,
                'insta' => $insta,
        ));
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
