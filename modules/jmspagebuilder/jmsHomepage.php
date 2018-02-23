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

class JmsHomepage extends ObjectModel
{
    public $title;
    public $css_file;
    public $js_file;
    public $home_class;
    public $params;
    public $active;
    public $ordering;

    public static $definition = array(
        'table' => 'jmspagebuilder_homepages',
        'primary' => 'id_homepage',
        'fields' => array(
            'title'         =>  array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'required' => true, 'size' => 100),
            'css_file'      =>  array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 30),
            'js_file'      =>  array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 30),
            'home_class'      =>  array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 100),
            'params'        =>  array('type' => self::TYPE_HTML, 'validate' => '', 'size' => 500000),
            'active'        =>  array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
            'ordering'      =>  array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt'),
        )
    );

    public function __construct($id_homepage = null, $id_lang = null, $id_shop = null)
    {
        parent::__construct($id_homepage, $id_lang, $id_shop);
    }

    public function add($autodate = true, $null_values = false)
    {
        $res = true;
        $context = Context::getContext();
        $id_shop = $context->shop->id;

        $res = parent::add($autodate, $null_values);
        $res &= Db::getInstance()->execute('INSERT INTO `'._DB_PREFIX_.'jmspagebuilder` (`id_homepage`,`id_shop` ) VALUES('.(int)$this->id.','.(int)$id_shop.')');
        return $res;
    }

    public function delete()
    {
        $res = true;
        $res &= parent::delete();
        return $res;
    }
}
