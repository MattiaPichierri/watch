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

class LayerObject extends ObjectModel
{
    public $id_slide;
    public $data_title;
    public $class_suffix;
    public $data_fixed;
    public $data_delay;
    public $data_time;
    public $data_x;
    public $data_y;
    public $data_in;
    public $data_out;
    public $data_ease_in;
    public $data_ease_out;
    public $data_step;
    public $data_special;
    public $data_type;
    public $data_image;
    public $data_html;
    public $data_font_size;
    public $data_line_height;
    public $data_style;
    public $data_color;
    public $data_video;
    public $data_video_controls;
    public $data_video_autoplay;
    public $data_video_loop;
    public $data_video_muted;
    public $data_width;
    public $data_height;
    public $data_order;
    public $data_status;

    public static $definition = array(
        'table' => 'jms_slides_layers',
        'primary' => 'id_layer',
        'fields' => array(
            'id_slide' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'data_title' => array('type'=>self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 255),
            'data_class_suffix' => array('type'=>self::TYPE_STRING, 'validate'=>'isCleanHtml',  'size' => 255),
            'data_fixed' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'data_delay' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'data_time' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'data_x' => array('type' => self::TYPE_INT),
            'data_y' => array('type' => self::TYPE_INT),
            'data_in' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 255),
            'data_out' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 255),
            'data_ease_in' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml','size' => 255),
            'data_ease_out' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 255),
            'data_step' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'data_special' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml','size' => 255),
            'data_type' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml',  'size' => 255),
            'data_image' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 255),
            'data_html' => array('type' => self::TYPE_HTML, 'validate' => 'isCleanHtml'),
            'data_style' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml'),
            'data_color' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml'),
            'data_font_size' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'data_video' => array('type' => self::TYPE_HTML, 'validate' => 'isCleanHtml'),
            'data_video_muted' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'data_video_autoplay' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'data_video_loop' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'data_video_controls' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'data_width' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'data_height' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'data_order' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'data_status' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt')
            )
        );

    public function __construct($id_slide = null, $id_shop = null, $id_lang = null)
    {
        parent::__construct($id_slide, $id_shop, $id_lang);
    }

    public function add($autodate = true, $null_values = false)
    {
        $res=true;

        $res&=parent::add($autodate, $null_values);
        return $res;
    }

    public function delete()
    {
        $res= true;
        $res&= parent::delete();
        $res&= Db::getInstance()->execute('DELETE FROM `'._DB_PREFIX_.'jms_slides_layers` WHERE `id_layer`='.(int)$this->id);
        return $res;
    }
}
