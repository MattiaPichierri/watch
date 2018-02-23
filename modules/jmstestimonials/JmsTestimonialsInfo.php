<?php
/**
* 2007-2014 PrestaShop
*
* Jms Week Menu
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2014 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

class JmsTestimonialsInfo extends ObjectModel
{
    public $author;
    public $office;
    public $comment;
    public $posttime;
    public $image;
    public $active;
    public static $definition = array(
        'table' => 'jmstestimonials',
        'primary' => 'id_testimonial',
        'multilang' => true,
        'fields' => array(
            'office'   => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'required' => true, 'size' => 255),
            'posttime' => array('type' => self::TYPE_DATE, 'required' => true),
            'comment'  => array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 4000),
            'image'    => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 255),
            'active'   => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
            'author'   => array('type' => self::TYPE_STRING,  'validate' => 'isCleanHtml', 'size' => 255)
        )
    );

    public function __construct($item_id = null, $id_lang = null, $id_shop = null)
    {
        parent::__construct($item_id, $id_lang, $id_shop);
    }

    public function add($autodate = true, $null_values = false)
    {
        $res = true;
        $res = parent::add($autodate, $null_values);
        return $res;
    }

    public function delete()
    {
        $res = true;
        $images = $this->image;
        foreach ($images as $image) {
            if (preg_match('/sample/', $image) === 0) {
                if ($image && file_exists(dirname(__FILE__).'/img/'.$image)) {
                    $res &= @unlink(dirname(__FILE__).'/img/'.$image);
                    $res &= @unlink(dirname(__FILE__).'/img/resized_'.$image);
                }
            }
        }
        $res &= parent::delete();
        return $res;
    }
}
