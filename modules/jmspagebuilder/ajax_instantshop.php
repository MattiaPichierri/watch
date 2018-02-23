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
include_once(dirname(__FILE__).'/jmsajaxcontroller.php');
$id_category = Tools::getValue('id_category');
$params = array();
$params['limit'] = Tools::getValue('limit');
$params['load'] = Tools::getValue('load');
$params['total'] = Tools::getValue('total');
$params['order_by'] = Tools::getValue('orderby');
$params['order_way'] = Tools::getValue('orderway');
$params['loadmore_type'] = Tools::getValue('loadmore_type');
$params['col_class'] = Tools::getValue('col_class');
$jmsajaxcontroller = new JmsAjaxController();
$result = $jmsajaxcontroller->genInstantProducts($id_category, $params);

die($result);