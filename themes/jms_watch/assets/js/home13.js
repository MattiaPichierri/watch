
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
    if($(".product-carousel-col1").length) {		
		var productCarousel1 = $(".product-carousel-col1");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		productCarousel1.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:p1_itemsDesktop
				},
				991:{
					items:p1_itemsDesktopSmall
				},
				768:{
					items:p1_itemsTablet
				},
				481:{
					items:p1_itemsMobile
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
			nav: p1_nav,
			dots: p1_pag,
			autoplay: auto_play_carousel,
			slideSpeed: 800,
		});
	}
	"use strict";
    if($(".product-carousel-col6").length) {		
		var productCarousel6 = $(".product-carousel-col6");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		productCarousel6.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:p6_itemsDesktop
				},
				991:{
					items:p6_itemsDesktopSmall
				},
				768:{
					items:p6_itemsTablet
				},
				481:{
					items:p6_itemsMobile
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
			nav: p6_nav,
			dots: p6_pag,
			autoplay: auto_play6_carousel,
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
	"use strict";
    if($(".product-carousel-col4").length) {		
		var productCarousel4 = $(".product-carousel-col4");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		productCarousel4.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:p4_itemsDesktop
				},
				991:{
					items:p4_itemsDesktopSmall
				},
				768:{
					items:p4_itemsTablet
				},
				481:{
					items:p4_itemsMobile
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
			nav: p4_nav,
			dots: p4_pag,
			autoplay: auto_play4_carousel,
			slideSpeed: 800,
		});
	}
		"use strict";
    if($(".product-carousel-col3").length) {		
		var productCarousel3 = $(".product-carousel-col3");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		productCarousel3.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:p3_itemsDesktop
				},
				991:{
					items:p3_itemsDesktopSmall
				},
				768:{
					items:p3_itemsTablet
				},
				481:{
					items:p3_itemsMobile
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
			nav: p3_nav,
			dots: p3_pag,
			autoplay: auto_play3_carousel,
			slideSpeed: 800,
		});
	}
	"use strict";
    if($(".product-carousel-col2").length) {		
		var productCarousel2 = $(".product-carousel-col2");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		productCarousel2.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:p2_itemsDesktop
				},
				991:{
					items:p2_itemsDesktopSmall
				},
				768:{
					items:p2_itemsTablet
				},
				481:{
					items:p2_itemsMobile
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
			nav: p2_nav,
			dots: p2_pag,
			autoplay: auto_play2_carousel,
			slideSpeed: 800,
		});
	}
});

