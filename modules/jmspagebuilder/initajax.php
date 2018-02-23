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

require_once(dirname(__FILE__).'/../../config/config.inc.php');
require_once(dirname(__FILE__).'/../../init.php');
include_once(dirname(__FILE__).'/jmspagebuilder.php');

$productids = Tools::getValue('productids');

$result = array();
$jmspagebuilder = new JmsPageBuilder();

if ($productids) {
    $productids = explode(',', $productids);
    $productids = array_unique($productids);
    $productids = implode(',', $productids);
    $result['img2arr'] = $jmspagebuilder->getSecondImgs($productids);
}
if ($result && $productids) {
    die(Tools::jsonEncode($result));
}
