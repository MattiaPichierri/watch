/**
* 2007-2017 PrestaShop
*
* Jms Instant Shop
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/
jQuery(function ($) {
	$(document).on('click','.instant-btn',function(event) {			
		$('.instant-tabs li').removeClass('active');
		$(this).parent().addClass('active');
		$('#instantshop-id-category').val($(this).data('id'));
		$('.instantshop-loading').show();		
		$.ajax({
			type: 'POST',
			headers: {"cache-control": "no-cache"},
			url: prestashop.urls.base_url + 'modules/jmspagebuilder/ajax_instantshop.php' + '?rand=' + new Date().getTime(),
			async: true,
			cache: false,                
			data: 'id_category=' + $(this).data('id') + '&loadmore_type=' + $('#instantshop-loadmore-type').val() + '&limit=' + $('#instantshop-limit').val() + '&load=' + $('#instantshop-load').val() + '&total=' + $('#instantshop-total').val() + '&orderby=' + $('#instantshop-orderby').val() + '&orderway=' + $('#instantshop-orderway').val() + '&col_class=' + $('#instantshop-col-class').val(),
			success: function(result) { 
				$('#instant-products').html(result);
				setTimeout(function(){ $('.instantshop-loading ').hide(); }, 3000);
			},
			error: function() {
			}
		});
	});		
	$(document).on('click','#instantshop-s-orderby li',function(event) {
		$('#instantshop-orderby').val($(this).data('val')); 
		$('#instantshop-s-orderby li').removeClass('active');
		$(this).addClass('active');
		$('.instantshop-loading').show();
		$.ajax({
			type: 'POST',
			headers: {"cache-control": "no-cache"},
			url: prestashop.urls.base_url + 'modules/jmspagebuilder/ajax_instantshop.php' + '?rand=' + new Date().getTime(),
			async: true,
			cache: false,                
			data: 'id_category=' + $('#instantshop-id-category').val() + '&loadmore_type=' + $('#instantshop-loadmore-type').val() + '&limit=' + $('#instantshop-limit').val() + '&load=' + $('#instantshop-load').val() + '&total=' + $('#instantshop-total').val() + '&orderby=' + $(this).data('val') + '&orderway=' + $('#instantshop-orderway').val() + '&col_class=' + $('#instantshop-col-class').val(),
			success: function(result) { 
				$('#instant-products').html(result);
				setTimeout(function(){ $('.instantshop-loading ').hide(); }, 3000);
			},
			error: function() {
			}
		});
	});	
	$(document).on('click','#instantshop-s-orderway li',function(event) {
		$('#instantshop-orderway').val($(this).data('val')); 
		$('#instantshop-s-orderway li').removeClass('active');
		$(this).addClass('active');
		$('.instantshop-loading').show();
		$.ajax({
			type: 'POST',
			headers: {"cache-control": "no-cache"},
			url: prestashop.urls.base_url + 'modules/jmspagebuilder/ajax_instantshop.php' + '?rand=' + new Date().getTime(),
			async: true,
			cache: false,                
			data: 'id_category=' + $('#instantshop-id-category').val() + '&loadmore_type=' + $('#instantshop-loadmore-type').val() + '&limit=' + $('#instantshop-limit').val() + '&load=' + $('#instantshop-load').val() + '&total=' + $('#instantshop-total').val() + '&orderby=' + $('#instantshop-orderby').val() + '&orderway=' + $(this).data('val') + '&col_class=' + $('#instantshop-col-class').val(),
			success: function(result) { 
				$('#instant-products').html(result);
				setTimeout(function(){ $('.instantshop-loading ').hide(); }, 3000);
			},
			error: function() {
			}
		});
	});	
});