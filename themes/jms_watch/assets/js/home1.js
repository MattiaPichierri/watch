
$(window).load(function(){
		if($('.slider').length > 0)
		$('.slider').fractionSlider({	
			'slideTransition' : jmsslider_trans,
			'slideEndAnimation' : jmsslider_end_animate,
			'transitionIn' : jmsslider_trans_in,
			'transitionOut' : jmsslider_trans_out,
			'fullWidth' : jmsslider_full_width,
			'delay' : jmsslider_delay,
			'timeout' : jmsslider_duration,
			'speedIn' : jmsslider_speed_in,
			'speedOut' : jmsslider_speed_out,
			'easeIn' : jmsslider_ease_in,
			'easeOut' : jmsslider_ease_out,
			'controls' : jmsslider_navigation,
			'pager' : jmsslider_pagination,
			'autoChange' : jmsslider_autoplay,
			'pauseOnHover' : jmsslider_pausehover,
			'backgroundAnimation' : jmsslider_bg_animate,
			'backgroundEase' : jmsslider_bg_ease,
			'responsive' : jmsslider_responsive,
			'dimensions' : jmsslider_dimensions,
			'fullscreen' : true
		});
});
jQuery(function ($) {
    "use strict";
	if($(".product-carousel").length) {
			var productcarousel = $(".product-carousel");			
			var rtl = false;
			if ($("body").hasClass("rtl")) rtl = true;				
			productcarousel.owlCarousel({
				responsiveClass:true,
				responsive:{			
					1199:{
						items:p_itemsDesktop
					},
					991:{
						items:p_itemsDesktopSmall
					},
					768:{
						items:p_itemsTablet
					},
					481:{
						items:p_itemsMobile
					},
					361:{
						items:1
					},
					0: {
						items:1
					}
				},
				rtl: rtl,
					margin: 30,
				    nav: p_nav,
			        dots: p_pag,
					autoplay: auto_play_carousel,
					loop:true,
				    navigationText: ["", ""],
				    slideSpeed: 200
			});
		}
});


jQuery(function ($) {
"use strict";
	if($(".brand-carousel").length) {
			var brandcarousel = $(".brand-carousel");			
			var rtl = false;
			if ($("body").hasClass("rtl")) rtl = true;				
			brandcarousel.owlCarousel({
				responsiveClass:true,
				responsive:{			
					1199:{
						items:brand_itemsDesktop
					},
					991:{
						items:brand_itemsDesktopSmall
					},
					768:{
						items:brand_itemsTablet
					},
					481:{
						items:brand_itemsMobile
					},
					0: {
						items:3
					}
				},
				rtl: rtl,
					margin: 30,
				    nav: p_nav_brand,
			        dots: p_pag_brand,
					autoplay: auto_play_brand,
					loop:true,
				    navigationText: ["", ""],
				    slideSpeed: 200
			});
		}
});