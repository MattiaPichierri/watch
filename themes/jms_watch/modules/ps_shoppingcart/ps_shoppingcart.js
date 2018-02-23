/* global $, prestashop */

/**
 * This module exposes an extension point in the form of the `showModal` function.
 *
 * If you want to override the way the modal window is displayed, simply define:
 *
 * prestashop.blockcart = prestashop.blockcart || {};
 * prestashop.blockcart.showModal = function myOwnShowModal (modalHTML) {
 *   // your own code
 *   // please not that it is your responsibility to handle closing the modal too
 * };
 *
 * Attention: your "override" JS needs to be included **before** this file.
 * The safest way to do so is to place your "override" inside the theme's main JS file.
 *
 */

$(document).ready(function () {
  prestashop.blockcart = prestashop.blockcart || {};

  var showModal = prestashop.blockcart.showModal || function (modal) {
    var $body = $('body');
    $body.append(modal);
    $body.one('click', '#blockcart-modal', function (event) {
      if (event.target.id === 'blockcart-modal') {
        $(event.target).remove();
      }
    });
  };

  $(document).ready(function () {
    prestashop.on(
      'updateCart',
      function (event) {
        var refreshURL = $('.blockcart').data('refresh-url');
        var requestData = {};

        if (event && event.reason) {
          requestData = {
            id_product_attribute: event.reason.idProductAttribute,
            id_product: event.reason.idProduct,
            action: event.reason.linkAction
          };
        }
        $.post(refreshURL, requestData).then(function (resp) {
          $('.blockcart').replaceWith(resp.preview);		  
          if (resp.modal && jpb_addtocart == 'ajax_popup') {
            showModal(resp.modal);
          }			  
		  var callerElement = $('.addtocart-selected').eq(0);	
		  if(jpb_addtocart == 'ajax_moveimage') {
			// add the picture to the cart
			var $element = $(callerElement).parent().parent().find('.product-img1');						
			if (!$element.length)
				$element = $('#bigpic');
				var $picture = $element.clone();
				var pictureOffsetOriginal = $element.offset();
				pictureOffsetOriginal.right = $(window).innerWidth() - pictureOffsetOriginal.left - $element.width();
				if ($picture.length) {
					$picture.css({
						position: 'absolute',
						top: pictureOffsetOriginal.top,
						right: pictureOffsetOriginal.right
					});
				}
				var pictureOffset = $picture.offset();
				var cartBlock = $('#cart_block');
				if (!$('#cart_block')[0] || !$('#cart_block').offset().top || !$('#cart_block').offset().left)
					cartBlock = $('#shopping_cart');
				var cartBlockOffset = cartBlock.offset();
				cartBlockOffset.right = $(window).innerWidth() - cartBlockOffset.left - cartBlock.width();
				if (cartBlockOffset != undefined && $picture.length) {
					$picture.appendTo('body');
					$picture
						.css({
							position: 'absolute',
							top: pictureOffsetOriginal.top,
							right: pictureOffsetOriginal.right,
							zIndex: 4242
						})
						.animate({
							width: $element.attr('width')*0.66,
							height: $element.attr('height')*0.66,
							opacity: 0.2,
							top: cartBlockOffset.top + 30,
							right: cartBlockOffset.right + 15
						}, 1000)
						.fadeOut(100, function() {									
							$(this).remove();
						});
				}
		  } else if(jpb_addtocart == 'ajax_cartbottom' && !$('.shoppingcart-bottom').eq(0).hasClass('open')) {
				$('#cart_block .tab-title').trigger('click');
				$('#cart_block').addClass('shoppingcart-bottom');
		  }
        }).fail(function (resp) {
          prestashop.emit('handleError', {eventType: 'updateShoppingCart', resp: resp});
        });
      }
    );
  });
});
