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

class SlideObject extends ObjectModel
{
    public $title;
    public $class_suffix;
    public $bg_type;
    public $bg_image;
    public $bg_color;
    public $slide_link;
    public $order;
    public $status;

    public static $definition = array(
        'table' => 'jms_slides',
        'primary' => 'id_slide',
        'multi_lange' => true,
        'fields' => array(
            'title' =>array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml'),
            'class_suffix' =>array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml'),
            'bg_type' =>array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'bg_image' =>array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 255),
            'bg_color' =>array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 255),
            'slide_link' =>array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 255),
            'order' =>array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'status' =>array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            )
        );

    public function __construct($id_slide = null, $id_shop = null, $id_lang = null)
    {
        parent::__construct($id_slide, $id_shop, $id_lang);
    }

    public function add($autodate = true, $null_values = false)
    {
        $res=true;
        $id_shop = Context::getContext()->shop->id;
        $res&=parent::add($autodate, $null_values);
        $sql = 'INSERT INTO `'._DB_PREFIX_.'jms_slides_shop`(`id_slide`, `id_shop`)
            VALUES('.(int)$this->id.', '.$id_shop.');';
        $res&= Db::getInstance()->execute($sql);
        return $res;
    }

    public function delete()
    {
        $res= true;
        $res&= parent::delete();
        $res&= Db::getInstance()->execute('DELETE FROM `'._DB_PREFIX_.'jms_slides_shop` WHERE `id_slide`='.(int)$this->id);
        $res&= Db::getInstance()->execute('DELETE FROM `'._DB_PREFIX_.'jms_slides_layers` WHERE `id_slide`='.(int)$this->id);
    }
}
