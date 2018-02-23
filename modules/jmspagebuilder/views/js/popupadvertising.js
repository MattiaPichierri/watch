/**
* 2007-2017 PrestaShop
*
* Jms Popup
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/
function resize_box() {	
	var window_w = $(window).width();
	var window_h = $(window).height();	
	var width_default  = $('#width-default').val();		
	var height_default  = $('#height-default').val();	
	if(window_w > width_default) {
		$('.jms-popup').css('width', width_default);
		$('.jms-popup').css('left',(window_w - width_default)/2);		
	} else {
		$('.jms-popup').css('width', window_w - 40);
		$('.jms-popup').css('left',20);		
	}
	if(window_h > height_default) {
		$('.jms-popup').css('height', height_default);		
		$('.jms-popup').css('top',(window_h - height_default)/2);
	} else {
		$('.jms-popup').css('height', window_h - 40);		
		$('.jms-popup').css('top',20);
	}	
	
}
function setCookie(cname, cvalue, exdays) {
	var d = new Date();
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
	var expires = "expires="+d.toUTCString();
	document.cookie = cname + "=" + cvalue + "; " + expires;
};
function getCookie(cname) {
	var name = cname + "=";
	var ca = document.cookie.split(';');
	for(var i=0; i<ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') 
			c = c.substring(1);
		if (c.indexOf(name) == 0) 
			return c.substring(name.length, c.length);
	}
	return "";
};
	
jQuery(function ($) {
    "use strict";
    $(window).resize(function () {    		
		resize_box();
	});
});	

$(window).load(function () {  
	resize_box();
});

$(document).ready(function() {
	var loadtime = $('#loadtime').val();	
	if(loadtime == 'firstload' && getCookie("showpopup") == "hide") return;	
	if(loadtime == 'firstload' && (getCookie("showpopup") == null || getCookie("showpopup") == '')) 
	{
		$('.jms-popup-overlay').show();
		setCookie("showpopup", "hide", 365);
	}							
	if(loadtime == 'alltime' && (getCookie("showpopup") == null || getCookie("showpopup") == '')) 
	{
		$('.jms-popup-overlay').show();
		setCookie("showpopup", "show", 365);
	}	
	if (loadtime == 'alltime' && getCookie("showpopup") == 'show')
	{	
		$('.jms-popup-overlay').show();
		setCookie("showpopup", "show", 365);	
	} 
	$('.popup-close').on('click', function() {
		$('.jms-popup-overlay').hide();
	});
	$('#dontshowagain').click(function (e) {
		setCookie("showpopup", "hide", 365);	
	})
});