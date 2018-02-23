<?php
/**
* 2007-2017 PrestaShop
*
* Jms Product Tab
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

class JmsTab extends ObjectModel
{	
	public $product_id;
    public $tab_title;
    public $html_content;    

    public static $definition = array(
        'table' => 'jms_producttab_ctab',
        'primary' => 'tab_id',
        'multilang' => true,
        'fields' => array(
			'product_id' =>      array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt', 'required' => true),
            'tab_title' =>       array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 255),			
			'html_content' =>    array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isString', 'size' => 40000)
        )
    );

    public function __construct($tab_id = null, $id_lang = null, $id_shop = null)
    {
        parent::__construct($tab_id, $id_lang, $id_shop);
    }

    public function add($autodate = true, $null_values = false)
    {
        $res = true;
        $context = Context::getContext();
        $id_shop = $context->shop->id;

        $res = parent::add($autodate, $null_values);
        $sql = '
            INSERT INTO `'._DB_PREFIX_.'jms_producttab` (`tab_id`,`id_shop` )
            VALUES('.(int)$this->id.','.(int)$id_shop.')';
        $res &= Db::getInstance()->execute($sql);

        return $res;
    }

    public function delete()
    {
        $res = true;
        $sql = '
            DELETE FROM `'._DB_PREFIX_.'jms_producttab`
            WHERE `tab_id` = '.(int)$this->id;
        $res &= Db::getInstance()->execute($sql);
        $res &= parent::delete();
        return $res;
    }
}
