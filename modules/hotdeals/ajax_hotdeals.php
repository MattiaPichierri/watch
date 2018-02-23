<?php
/**
* 2007-2014 PrestaShop
*
* Jms Brand logos
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2014 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

include_once('../../config/config.inc.php');
include_once('../../init.php');
include_once('hotdeals.php');

$context = Context::getContext();
$hotdeals = array();


if (Tools::getValue('action') == 'updateHotdealsOrdering' && Tools::getValue('slides'))
{
	$hotdeals = Tools::getValue('slides');


	foreach ($hotdeals as $position => $id_hotdeals)
	{
		$res = Db::getInstance()->execute('
			UPDATE `'._DB_PREFIX_.'hotdeals_items` SET `ordering` = '.(int)$position.'
			WHERE `id_hotdeals` = '.(int)$id_hotdeals
		);
	}
	
}
