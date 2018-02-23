<?php
/**
* 2007-2017 PrestaShop
*
* Slider Layer module for prestashop
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

include_once('../../config/config.inc.php');
include_once('../../init.php');
include_once('jmsslider.php');


$context = Context::getContext();
$slides = array();
if (Tools::getValue('action') == 'addLayer' && Tools::getValue('id_slide')) {
    $data_type = Tools::getValue('data_type');
    if ($data_type == 'text') {
        $data_text = Tools::getValue('data_text');
        $data_title =Tools::strlen(Tools::getValue('data_title'))==0?'New Layer Text':Tools::getValue('data_title');
        $width = "200";
        $height = "50";
        $data_image = '';
        $data_video = '';
        $data_video_auotplay = '';
        $data_vide_loop = '';
        $data_video_controls = '';
        $data_video_muted = '';
    } elseif ($data_type=='image') {
        $path = dirname(__FILE__).'/views/img/layers/';
        if ($_FILES['data_image']['name']) {
            $st_name = preg_replace('/[^A-Za-z0-9\._\-]/', '', $_FILES['data_image']['name']);
            $name = str_replace(' ', '-', $st_name);
            $img_extend = array('png', 'jpg', 'gif', 'jpeg');
            $type = Tools::strtolower(Tools::substr(strrchr($_FILES['data_image']['name'], '.'), 1));
            $path = dirname(__FILE__).'/views/img/layers/';
            if (!file_exists($path.$name)) {
                move_uploaded_file($_FILES['data_image']['tmp_name'], $path.$name);
            }
            $data_image = $name;
        } else {
            $data_image = Tools::getValue('data_s_image');
        }
        list($width, $height) = getimagesize($path.$data_image);
        $data_text = '';
        $data_video = '';
        $data_video_auotplay = '';
        $data_vide_loop = '';
        $data_video_controls = '';
        $data_video_muted = '';
        $data_title =Tools::strlen(Tools::getValue('title_image_new'))==0?'New Layer Image'
                                        :Tools::getValue('title_image_new');
    } elseif ($data_type == 'video') {
        $data_text = '';
        $data_image = '';
        $data_video = Tools::getValue('data_video');
        $data_video_auotplay = '1';
        $data_vide_loop = '1';
        $data_video_controls = '1';
        $data_video_muted = '0';
        $width = '200';
        $height = '100';
        $data_title =Tools::strlen(Tools::getValue('data_title'))==0?'New Layer Video':Tools::getValue('data_title');
    }

    $id_slide = (int)Tools::getValue('id_slide');
    $layer = new LayerObject();
    $layer->id_slide = $id_slide;
    $layer->data_title = $data_title;
    $layer->data_class_suffix = '';
    $layer->data_fixed = 0;
    $layer->data_delay = 1000;
    $layer->data_x = 0;
    $layer->data_y = 0;
    $layer->data_in = 'left';
    $layer->data_out = 'right';
    $layer->data_ease_in = 'linear';
    $layer->data_ease_out = 'linear';
    $layer->data_step = '0';
    $layer->data_special = '';
    $layer->data_type = $data_type;
    $layer->data_image = $data_image;
    $layer->data_html = $data_text;
    $layer->data_style = 'normal';
    $layer->data_color = '#FFFFFF';
    $layer->data_video = $data_video;
    $layer->data_video_muted = $data_video_muted;
    $layer->data_video_controls = $data_video_controls;
    $layer->data_video_auotplay = $data_video_auotplay;
    $layer->data_vide_loop = $data_vide_loop;
    $layer->data_vide_bg = '0';
    $layer->data_width = $width;
    $layer->data_height = $height;
    $layer->data_font_size = '14';
    $layer->data_order = 0;
    $layer->data_status = 1;
    $layer->add();
} elseif (Tools::getValue('action') == 'deleteLayer' && Tools::getValue('id_layer')) {
    $layer = new LayerObject((int)Tools::getValue('id_layer'));
    $layer->delete();
} elseif (Tools::getValue('action') == 'updateSlidesOrdering' && Tools::getValue('slides')) {
    $slides = Tools::getValue('slides');
    foreach ($slides as $position => $id_slide) {
        $res = Db::getInstance()->execute('
            UPDATE `'._DB_PREFIX_.'jms_slides` SET `order` = '.(int)$position.'
            WHERE `id_slide` = '.(int)$id_slide);
    }
    $jms_slider = new SlideObject();
    $jms_slider->clearCache();
} elseif (Tools::getValue('action') == 'updateLayersOrdering' && Tools::getValue('layers')) {
    $layers = Tools::getValue('layers');
    foreach ($layers as $position => $id_layer) {
        $res = Db::getInstance()->execute('
            UPDATE `'._DB_PREFIX_.'jms_slides_layers` SET `data_order` = '.(int)$position.'
            WHERE `id_layer` = '.(int)$id_layer);
    }
    $jms_layer = new LayerObject();
    $jms_layer->clearCache();
}
