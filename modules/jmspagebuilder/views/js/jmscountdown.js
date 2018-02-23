/**
* 2007-2017 PrestaShop
*
* Jms Deals
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

$(function () {	
	$.each( $('.countdown'), function( key, value ) {
		var $expire_time = $(this).html();	
		datetime = $expire_time.split(" ");
		date = datetime[0];
		time = datetime[1];
		datestr = date.split("-");
		timestr = time.split(":");

		var austDay = new Date(datestr[0],datestr[1]-1,datestr[2],timestr[0],timestr[1],timestr[2],0);		

		$(this).countdown({until: austDay});	
	});
});