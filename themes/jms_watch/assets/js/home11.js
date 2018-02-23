
/*fixed menu*/
$(document).ready(function() {
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
	
        if ($("body").hasClass("home_2")&& scroll > 0 && $(window).width() > 0) {
            $('.topheader').addClass('navbar-fixed-top');
			
        } else {
            $('.topheader').removeClass('navbar-fixed-top');
			
			
        }
    });
	
});
jQuery(function ($) {
    "use strict";
    if($(".product-carousel").length) {		
		var productCarousel = $(".product-carousel");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		productCarousel.owlCarousel({
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
				0:{
					items:1
				}
			},
			rtl: rtl,
			margin:30,
			nav: p_nav,
			dots: p_pag,
			autoplay: auto_play_carousel,
			slideSpeed: 800,
		});
	}
	
		"use strict";
    if($(".product-carousel-col5").length) {		
		var productCarousel5 = $(".product-carousel-col5");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		productCarousel5.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:p5_itemsDesktop
				},
				991:{
					items:p5_itemsDesktopSmall
				},
				768:{
					items:p5_itemsTablet
				},
				481:{
					items:p5_itemsMobile
				},
				361:{
					items:1
				},
				0:{
					items:1
				}
			},
			rtl: rtl,
			margin:30,
			nav: p5_nav,
			dots: p5_pag,
			autoplay: auto_play5_carousel,
			slideSpeed: 800,
		});
	}
	
	

});

