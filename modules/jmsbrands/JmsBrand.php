<?php
/**
* 2007-2017 PrestaShop
*
* Jms Brand logos
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

class JmsBrand extends ObjectModel
{
    public $title;
    public $description;
    public $url;
    public $image;
    public $active;
    public $ordering;

    public static $definition = array(
        'table'     => 'jmsbrands_logos',
        'primary'   => 'brand_id',
        'multilang' => true,
        'fields'    => array(
            'active'      =>    array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
            'ordering'    =>    array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt', 'required' => true),
            'description' =>    array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 4000),
            'title'       =>    array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'required' => true, 'size' => 255),
            'url'         =>    array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isUrl', 'required' => true, 'size' => 255),
            'image'       =>    array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 255),
        )
    );

    public function __construct($brand_id = null, $id_lang = null, $id_shop = null)
    {
        parent::__construct($brand_id, $id_lang, $id_shop);
    }

    public function add($autodate = true, $null_values = false)
    {
        $res = true;
        $context = Context::getContext();
        $id_shop = $context->shop->id;

        $res = parent::add($autodate, $null_values);
        $res &= Db::getInstance()->execute('INSERT INTO `'._DB_PREFIX_.'jmsbrands` (`brand_id`,`id_shop` ) VALUES('.(int)$this->id.','.(int)$id_shop.')');

        return $res;
    }

    public function delete()
    {
        $res = true;

        $images = $this->image;
        foreach ($images as $image) {
            if (preg_match('/sample/', $image) === 0) {
                if ($image && file_exists(dirname(__FILE__).'/images/'.$image)) {
                    $res &= @unlink(dirname(__FILE__).'/images/'.$image);
                }
            }
        }

        $res &= $this->reOrderPositions();

        $res &= Db::getInstance()->execute('DELETE FROM `'._DB_PREFIX_.'jmsbrands` WHERE `brand_id` = '.(int)$this->id);
        $res &= parent::delete();
        return $res;
    }

    public function reOrderPositions()
    {
        $brand_id = $this->id;
        $context = Context::getContext();
        $id_shop = $context->shop->id;

        $max = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('SELECT MAX(hss.`ordering`) as ordering FROM `'._DB_PREFIX_.'jmsbrands_logos` hss, `'._DB_PREFIX_.'jmsbrands` hs WHERE hss.`brand_id` = hs.`brand_id` AND hs.`id_shop` = '.(int)$id_shop);

        if ((int)$max == (int)$brand_id) {
            return true;
        }

        $rows = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('SELECT hss.`ordering` as ordering, hss.`brand_id` as brand_id FROM `'._DB_PREFIX_.'jmsbrands_logos` hss LEFT JOIN `'._DB_PREFIX_.'jmsbrands` hs ON (hss.`brand_id` = hs.`brand_id`) WHERE hs.`id_shop` = '.(int)$id_shop.' AND hss.`ordering` > '.(int)$this->ordering);

        foreach ($rows as $row) {
            $current_slide = new JmsBrand($row['brand_id']);
            --$current_slide->ordering;
            $current_slide->update();
            unset($current_slide);
        }

        return true;
    }
}
