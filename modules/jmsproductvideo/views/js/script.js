jQuery(document).ready(function() {
	jQuery('.popup-active h3').bind("click", function (e) {
		var popup_box = jQuery(this).next('.jms-popup-box');
		popup_box.toggle();
		popup_box.css('z-index',99998);		
		popup_box.children('.jms-popup-overlay').animate({opacity:1});		
		popup_box.children('.jms-popup-overlay').toggle();		
		popup_box.children('.jms-popup-wrap').animate({top:"50%"});
    });
	jQuery('.popup-close').bind("click", function (e) {
		var popup_box = jQuery(this).parent().parent();
		popup_box.toggle();
		popup_box.css('z-index',-1);		
		popup_box.children('.jms-popup-overlay').animate({opacity:0});		
		popup_box.children('.jms-popup-overlay').toggle();		
		popup_box.children('.jms-popup-wrap').animate({top:"0"});				
    });   	
});  
