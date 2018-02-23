<?php
/**
* 2007-2017 PrestaShop
*
* Jms Megamenu
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

include_once('../../config/config.inc.php');
include_once('../../init.php');

$context = Context::getContext();
$rows = array();
if (Tools::getValue('action') == 'updateMenuOrdering' && Tools::getValue('menus')) {
    $menus = Tools::getValue('menus');

    foreach ($menus as $position => $id_menu) {
        $sql = '
            UPDATE `'._DB_PREFIX_.'jmsmegamenu` SET `ordering` = '.(int)$position.'
            WHERE `mitem_id` = '.(int)$id_menu;
        $res = Db::getInstance()->execute($sql);
    }
} elseif (Tools::getValue('action') == 'SaveStyle' && Tools::getValue('itemid')) {
    $sql = '
        UPDATE `'._DB_PREFIX_.'jmsmegamenu` SET `params` = \''.Tools::getValue('params').'\'
        WHERE `mitem_id` = '.(int)Tools::getValue('itemid');
    $res = Db::getInstance()->execute($sql);
} elseif (Tools::getValue('action') == 'resetStyle' && Tools::getValue('itemid')) {
    $sql = '
        UPDATE `'._DB_PREFIX_.'jmsmegamenu` SET `params` = \'\'
        WHERE `mitem_id` = '.(int)Tools::getValue('itemid');
    $res = Db::getInstance()->execute($sql);
} elseif (Tools::getValue('action') == 'resetAll') {
    $sql = '
        UPDATE `'._DB_PREFIX_.'jmsmegamenu` SET `params` = \'\'';
    $res = Db::getInstance()->execute($sql);
}
