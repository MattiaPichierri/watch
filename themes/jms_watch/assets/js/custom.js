/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */
 /*fixed menu*/
 jQuery(document).ready(function($) {
		$('.jms-megamenu').jmsMegaMenu({    			
			event: jmmm_event,
			duration: jmmm_duration
		});
		$(window).scroll(function() {
        if ($(document).scrollTop() > 30) {
          $(".headertop").addClass("box-shadow");
          $("#open-button").addClass("btn-fix");
          $(".header_top").addClass("nav-fix");
        } else {
          $(".headertop").removeClass("box-shadow");
           $("#open-button").removeClass("btn-fix");
           $(".header_top").removeClass("nav-fix");
        }
      });
});	
$('body').on('click', '.ajax-add-to-cart', function (event) {	
	event.preventDefault();
	var query = 'id_product=' + $(this).attr('data-id-product') + '&qty='+ $(this).attr('data-minimal-quantity') + '&token=' + $(this).attr('data-token') + '&add=1&action=update';
	var actionURL = prestashop['urls']['base_url'] +  'index.php?controller=cart';		
	$('.ajax-add-to-cart').removeClass('addtocart-selected');
	$(this).addClass('addtocart-selected');
	$(this).removeClass('checked');
	$(this).addClass('checking');
	var callerElement = $(this);
	$.post(actionURL, query, null, 'json').then(function (resp) {		
		if(jpb_addtocart == 'ajax_cartbottom') alert('aaa');
	    prestashop.emit('updateCart', {
	        reason: {
	          idProduct: resp.id_product,
	          idProductAttribute: resp.id_product_attribute,
	          linkAction: 'add-to-cart'
	        }
	    });
		
		$(callerElement).removeClass('checking');
		$(callerElement).addClass('checked');
		window.setTimeout( function() {$(callerElement).removeClass('checked');}, 3000 );
	}).fail(function (resp) {
	    prestashop.emit('handleError', { eventType: 'addProductToCart', resp: resp });
	});
});
function view_as() { 
    var viewGrid = $(".view-grid"),
        viewList = $(".view-list"),
        productList = $(".product_list");
		viewGrid.click(function (e) {       
        productList.removeClass("products-list-in-row");
        productList.addClass("products-list-in-column");
        $(this).addClass('active');
        viewList.removeClass("active");
        e.preventDefault()
    });
    viewList.click(function (e) {       
        productList.removeClass("products-list-in-column");
        productList.addClass("products-list-in-row");
        viewGrid.removeClass("active");
        $(this).addClass('active');        
        e.preventDefault()
    })
}
jQuery(function ($) {
    "use strict";
    $(".view-grid").addClass('active');
    view_as();
});

jQuery(function ($) {
	"use strict";
	if($(".customs-carousel-product").length) {
		var customsCarouselProduct = $(".customs-carousel-product");
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;
		customsCarouselProduct.owlCarousel({
			responsiveClass:true,
			responsive:{            
				1199:{
                  items:3
				},
				991:{
					items:3
				},
				768:{
					items:2
				},
				481:{
					items:2
				},
				361:{
					items:1
				},
				0:{
					items:1
				}
			},
			rtl: rtl,
			margin: 30,
			nav: true,
			dots: false,
			autoplay: true,
			slideSpeed: 200,
			loop:false,
		});
	}
});
function back_to_top() {   
    $('#back-to-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 500);
        return false;
    })
}
jQuery(function ($) {
    "use strict";
    $(window).scroll(function () {
     if ($(window).scrollTop() >= 30) {
      $("#back-to-top").stop().fadeIn(300);
     } else if ($(window).scrollTop() < $('header').outerHeight()) {
      $("#back-to-top").stop().fadeOut(300);
     }
    });
});

$(window).load(function () {     
    back_to_top(); 
});

var initialLoad = true;
$(document).ready(function() {	
	if(initialLoad){
		setTimeout(function() {
			jQuery('.preloader').fadeOut();
		}, 3000);		
		initialLoad = false;
	}
});

jQuery(function ($) {
    "use strict";
	var bodyEl = $("body"),
		content = $('.main-site'),
		openbtn = $('.top_menu p'),
		closebtn = $('.main-site' ),
		isOpen = false;

	function init() {
		initEvents();
	}

	function initEvents() {
		openbtn.click(function(e) {		
			toggleMenu();
			e.stopPropagation();
		});
		if( closebtn ) {
			closebtn.click(function() {		
				toggleMenu();
			});
		}
		content.click(function(e) {		
			var target = e.target;
			if( isOpen && target !== openbtn ) {
				toggleMenu();
			}
		});		
	}
	function toggleMenu() {		
		if( isOpen ) {
			bodyEl.removeClass('open');
		}
		else {
			bodyEl.addClass('open');
		}
		isOpen = !isOpen;
	}
	init();

});
jQuery(function ($) {
    "use strict";
$('.team-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:1
        }
    }
})
});

function initMap() {
		var coords = [
        {lat: 37.42006360000001, lng: -122.08215130000002, zoom: 12, maptype: 'roadmap', mapstyle:''},
        {lat: 40.7127837, lng: -74.00594130000002, zoom: 12 , maptype: 'terrain', mapstyle: ''},
        {lat: 40.7127837, lng: -74.00594130000002, zoom: 10 , maptype: 'roadmap', mapstyle:[{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}]},
        {lat: -33.8688197, lng: 151.20929550000005, zoom: 15, maptype: 'roadmap', mapstyle:[{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]},
        {lat: 40.7127837, lng: -74.00594130000002, zoom: 13, maptype: 'hybrid', mapstyle:''},
        {lat: 29.589869, lng: 102.04752600000006, zoom: 12 , maptype: 'satellite', mapstyle: ''},
		];
		var markers = [];
		var maps = [];
		for(var i = 0, length = coords.length; i < length; i++)
		{
			var point = coords[i];
			var latlng = new google.maps.LatLng(point.lat, point.lng);

			maps[i] = new google.maps.Map(document.getElementById('map_' + (i + 1)), {
				zoom: point.zoom,
				center: latlng,
				mapTypeId: point.maptype,
				styles: point.mapstyle  
			});

			markers[i] = new google.maps.Marker({
				position: latlng,
				map: maps[i]
			});
		}
	
	
}

$(document).ready(function(){
      
    });