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
include_once('jms_brands.php');

$context = Context::getContext();
$slides = array();

if (Tools::getValue('action') == 'updateSlidesOrdering' && Tools::getValue('slides')) {
    $slides = Tools::getValue('slides');
    foreach ($slides as $position => $id_slide) {
        $res = Db::getInstance()->execute('UPDATE `'._DB_PREFIX_.'jmsbrands_logos` SET `ordering` = '.(int)$position.' WHERE `brand_id` = '.(int)$id_slide);
    }
    $jms_slider = new JmsBrand();
    $jms_slider->clearCache();
}
