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
	if($(".producttab-carousel").length) {
			var producttabCarousel = $(".producttab-carousel");			
			var rtl = false;
			if ($("body").hasClass("rtl")) rtl = true;				
			producttabCarousel.owlCarousel({
				responsiveClass:true,
				responsive:{			
					1199:{
						items:tab_itemsDesktop
					},
					991:{
						items:tab_itemsDesktopSmall
					},
					768:{
						items:tab_itemsTablet
					},
					481:{
						items:tab_itemsMobile
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
				    nav: p_nav_tab,
			        dots: p_pag_tab,
					autoplay: auto_play_tab,
					loop:true,
				    navigationText: ["", ""],
				    slideSpeed: 200
			});
		}
		"use strict";
	if($(".producttabfull-carousel").length) {
			var producttabfullCarousel = $(".producttabfull-carousel");			
			var rtl = false;
			if ($("body").hasClass("rtl")) rtl = true;				
			producttabfullCarousel.owlCarousel({
				responsiveClass:true,
				responsive:{			
					1199:{
						items:tabfull_itemsDesktop
					},
					991:{
						items:tabfull_itemsDesktopSmall
					},
					768:{
						items:tabfull_itemsTablet
					},
					481:{
						items:tabfull_itemsMobile
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
				    nav: p_nav_tabfull,
			        dots: p_pag_tabfull,
					autoplay: auto_play_tabfull,
					loop:true,
				    navigationText: ["", ""],
				    slideSpeed: 200
			});
		}
		  "use strict";
	if($(".producttab-carousel").length) {
			var producttabCarousel = $(".producttab-carousel");			
			var rtl = false;
			if ($("body").hasClass("rtl")) rtl = true;				
			producttabCarousel.owlCarousel({
				responsiveClass:true,
				responsive:{			
					1199:{
						items:tab_itemsDesktop
					},
					991:{
						items:tab_itemsDesktopSmall
					},
					768:{
						items:tab_itemsTablet
					},
					481:{
						items:tab_itemsMobile
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
				    nav: p_nav_tab,
			        dots: p_pag_tab,
					autoplay: auto_play_tab,
					loop:true,
				    navigationText: ["", ""],
				    slideSpeed: 200
			});
		}
		if($(".categorytab-carousel").length) {		
		var categorytabCarousel = $(".categorytab-carousel");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		categorytabCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:cattab_itemsDesktop
				},
				991:{
					items:cattab_itemsDesktopSmall
				},
				768:{
					items:cattab_itemsTablet
				},
				318:{
					items:cattab_itemsMobile
				}
			},
			rtl: rtl,
			margin:30,
			nav: false,
			dots: false,
			autoplay:true,
			rewindNav: true,
			navigationText: ["", ""],
			slideBy:1,
			slideSpeed: 200	
		});
	}
 	
});
