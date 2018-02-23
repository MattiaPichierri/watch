<?php
/**
* 2007-2014 PrestaShop
*
* Jms Map Location Information
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2014 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

class JmsLocation extends ObjectModel
{
	public $title;
	public $description;
	public $url;	
	public $icon;		
	public $class;
	public $address;
	public $latitude;
	public $longitude;
	public $active;		

	public static $definition = array(
		'table' => 'jmsmaploc_locs',
		'primary' => 'id_loc',
		'multilang' => true,
		'fields' => array(			
			'active' =>			array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),			
			'class' =>			array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 20),
			'address' =>		array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 255),			
			'latitude' =>		array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 20),
			'longitude' =>		array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 20),
			'icon' =>			array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 20),
			'description' =>	array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 4000),
			'title' =>			array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'required' => true, 'size' => 255),			
			'url' =>			array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isUrl', 'size' => 255),			
		)
	);

	public	function __construct($id_loc = null, $id_lang = null, $id_shop = null)
	{
		parent::__construct($id_loc, $id_lang, $id_shop);
	}

	public function add($autodate = true, $null_values = false)
	{
		$res = true;
		$context = Context::getContext();
		$id_shop = $context->shop->id;
		
		$res = parent::add($autodate, $null_values);
		$res &= Db::getInstance()->execute('
			INSERT INTO `'._DB_PREFIX_.'jmsmaploc` (`id_loc`,`id_shop` )
			VALUES('.(int)$this->id.','.(int)$id_shop.')'
		);
		
		return $res;
	}
	
	public function delete()
	{
		$res = true;
		
		$res &= Db::getInstance()->execute('
			DELETE FROM `'._DB_PREFIX_.'jmsmaploc`
			WHERE `id_loc` = '.(int)$this->id
		);
		$res &= parent::delete();
		return $res;
	}
}
