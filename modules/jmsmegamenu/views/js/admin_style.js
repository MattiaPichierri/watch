/**
 * @package Jms Megamenu
 * @version 1.0
 * @Copyright (C) 2009 - 2015 Joommasters.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @Website: http://www.joommasters.com
**/
function resetSelected() {	
	$('.selected').removeClass('selected');	
}	
function bindEvents() {
	$('.mega-dropdown-menu').click(function (e) {
    	e.stopPropagation();
		resetSelected();	
		$(this).addClass('selected');
		showToolbar('submenu');	
		updateToolbar();
    })	
	$('.jms-config').click(function (e) {
    	 e.stopPropagation();
    })	
	$('.dropdown-toggle').click(function (e) {		
		e.stopPropagation();
		resetSelected();		
    	$(this).parent().addClass('selected');
		showToolbar('menuitem');			
		updateToolbar(); 
    })
	$('.menu-item').click(function (e) {		
		e.stopPropagation();
		resetSelected();		
		//$('.mega-nav > .open').removeClass('open');	
    	$(this).addClass('selected');		
		showToolbar('menuitem');			
		updateToolbar(); 
    })	
	$('.mega').click(function (e) {
		$(this).toggleClass('open');	
	})	
	$('.mega-col-nav').click(function (e) {	
		e.stopPropagation();
		resetSelected();
    	$(this).addClass('selected');
		showToolbar('column');
		updateToolbar();
    })		
	$('.mega-nav').sortable( {
		connectWith: '.mega-nav',	
		forceHelperSize: true,
		forcePlaceholderSize: true,
		placeholder: 'placeholder',
		update: function() {			
		},
		stop: function( event, ui ) {
			//showSuccessMessage("Order Saved!");
		}				
	});
	$('.mega-dropdown-inner .row').sortable( {
		connectWith: '.mega-dropdown-inner .row',	
		forceHelperSize: true,
		forcePlaceholderSize: true,
		placeholder: 'placeholder',
		update: function() {			
		},
		stop: function( event, ui ) {
			//showSuccessMessage("Order Saved!");
		}				
	});
	$(document.body).click (function(event) {
		showToolbar('');
	});
}
function showToolbar(type) {
	$('.jms-config').hide();
	if (type == 'column') {
		$('.column-config').show();
	} else if(type == 'submenu') {
		$('.submenu-config').show();	
	} else if(type == 'menuitem') {
		$('.menuitem-config').show();		
	} else {
		$('.info-config').show();
	}
}
function disableToolbar (type) {
	$('.' + type + '-config').find('.btn-group').children().addClass('disabled');			
}
function enableToolbar (type) {
	$('.' + type + '-config').find('[class*="disabled"]').removeClass('disabled');			
}
function updateToolalign(align) {
	$('.tool-align').removeClass('active');
	$('.tool-align-' + align).addClass('active');
}
function updateToolbar() {
	var obj_sel = $('.selected');
	if (obj_sel.hasClass('mega-col-nav')) {		
		var _width = obj_sel.attr('data-width');			
		$('#col-width').val(_width);
		var _class = obj_sel.attr('data-class');			
		$('#col-class').val(_class);
		if (parseInt(obj_sel.parent().parent().parent().parent().attr('data-level')) > 0) {	
			disableToolbar('column');						
		} else {
			enableToolbar('column');						
		}
	} else if(obj_sel.hasClass('mega-dropdown-menu')) {		
		var _width = obj_sel.data('width');		
		$('#subwidth').val(_width);
		var $radios = $('input:radio[name=fullwidth]');	
		if (obj_sel.data('fullwidth')) {			
			$radios.filter('[value=1]').prop('checked', true);
		} else {
			$radios.filter('[value=0]').prop('checked', true);
		}
		var _class = obj_sel.attr('data-class');			
		$('#submenu-class').val(_class);
		if (parseInt(obj_sel.parent().attr('data-level')) > 0) {	
			disableToolbar('submenu');	
			$('.submenu-config').find('.btn-group').children('.tool-align-left').removeClass('disabled');		
			$('.submenu-config').find('.btn-group').children('.tool-align-right').removeClass('disabled');		
		} else {
			enableToolbar('submenu');						
		}			
		updateToolalign(obj_sel.parent().attr('data-align'));
		
	} else if(obj_sel.hasClass('menu-item')) {			
		var _class = obj_sel.attr('data-class');			
		$('#item-class').val(_class);	
		var _iconclass = obj_sel.attr('data-icon');			
		$('#icon-class').val(_iconclass);	
		var $radios = $('input:radio[name=showtitle]');	
		if (obj_sel.data('title')) {			
			$radios.filter('[value=1]').prop('checked', true);
		} else {
			$radios.filter('[value=0]').prop('checked', true);
		}
		var $radios = $('input:radio[name=group]');	
		if (obj_sel.data('group')) {			
			$radios.filter('[value=1]').prop('checked', true);
		} else {
			$radios.filter('[value=0]').prop('checked', true);
		}
		if (parseInt(obj_sel.attr('data-level')) > 1) {
			disableToolbar('menuitem');			
		} else {
			enableToolbar('menuitem');			
		}			
	} 	
}
function updateWidth(cols) {
	//alert(cols.length);
	var col_width = Math.floor(12/cols.length);		
	for(i=0;i<cols.length-1;i++) {
		var _width = cols.eq(i).data('width');		
		cols.eq(i).removeClass();
		cols.eq(i).addClass('mega-col-nav col-sm-' + col_width);		
		cols.eq(i).attr('data-width',col_width);
	}
	cols.eq(cols.length-1).removeClass();
	cols.eq(cols.length-1).addClass('mega-col-nav col-sm-' + (12 - col_width*(cols.length-1)));		
	cols.eq(cols.length-1).attr('data-width',12 - col_width*(cols.length-1));
	bindEvents();
}
jQuery(function ($) {
    "use strict";
	$('.toolbox-action').click(function (e) {		
		var _action = $(this).data('action');
		if (_action == 'addRow') {
			$('.mega-dropdown-menu.selected .mega-dropdown-inner').append('<div class="row"><div data-width="12" class="mega-col-nav col-sm-12"><div class="mega-inner"><ul class="mega-nav"></ul></div></div></div>');
			bindEvents();
		} else if (_action == 'addColumn') {
			var current_row = $('.mega-col-nav.selected').parent();			
			$('.mega-col-nav.selected').after('<div class="mega-col-nav col-sm-12" data-width="12"><div class="mega-inner"><ul class="mega-nav"></ul></div></div>');			
			updateWidth(current_row.children('.mega-col-nav'));			
		} else if (_action == 'removeColumn') {
			var current_row = $('.mega-col-nav.selected').parent();	
			var html = $('.mega-col-nav.selected .mega-inner ul').html();
			var pre_col = $('.mega-col-nav.selected').prev();
			pre_col.find('.mega-inner ul').append(html);
			$('.mega-col-nav.selected').remove();
			updateWidth(current_row.children('.mega-col-nav'));			
			alert(current_row.children().length);
			if (current_row.children().length <= 0) {				
				current_row.remove();
			}	
		} else if (_action == 'alignment') {			
			var current_item = $('.mega-dropdown-menu.selected').parent();
			var _align 	= $(this).data('align'); 			
			current_item.removeClass('menu-align-' + current_item.attr('data-align'));
			current_item.attr('data-align',_align);			
			current_item.addClass('menu-align-' + _align);			
			updateToolalign(_align);
		} else if (_action == 'resetStyle') {	
			if (parseInt($('.menu-item.selected').data('id'))) {
				var r = confirm("Are you sure to reset style for selected menu item ?");
				if (r == true) {
					$.ajax({
					type: 'POST',
					headers: {"cache-control": "no-cache"},
					url: $('#basedir').val() + 'modules/jmsmegamenu/ajax_jmsmegamenu.php',
					async: true,
					cache: false,                
					data: 'action=resetStyle&itemid=' + $('.menu-item.selected').data('id'),
					success: function() {	
						console.debug('done:' + $('.menu-item.selected').data('id'));
						showSuccessMessage("Menu Style Reset!");
						location.reload();
					},
					error: function() {
						console.debug('error:' + $('.menu-item.selected').data('id'));
					}
				});
				}
			} else {
				alert('You must select one menu item');
			}				
		}
    })	
	$( "#subwidth" ).change(function() {
		$('.mega-dropdown-menu.selected').css('width',$(this).val());
		$('.mega-dropdown-menu.selected').attr('data-width',$(this).val());
	})
	$('input[type=radio][name=fullwidth]').change(function() {
        if (this.value == '1') {            
			$('.mega-dropdown-menu.selected').addClass('container');
			$('.mega-dropdown-menu.selected').css('width','none');
        }
        else {
			$('.mega-dropdown-menu.selected').removeClass('container');	
        }
		$('.mega-dropdown-menu.selected').attr('data-fullwidth',$(this).val());
    });	
	
	$('#col-width').on('change', function() {
		var col_sel = $('.mega-col-nav.selected');
		col_sel.removeClass();				
		col_sel.addClass('mega-col-nav col-sm-' + $(this).val() + ' selected');		
		col_sel.attr('data-width',$(this).val());
	});
	
	$('#submenu-class').on('change', function() {
		var submenu_sel = $('.mega-dropdown-menu.selected');
		submenu_sel.removeClass(submenu_sel.data('class'));		
		submenu_sel.addClass($(this).val());				
		submenu_sel.attr('data-class',$(this).val());
	});
	
	$('#col-class').on('change', function() {
		var col_sel = $('.mega-col-nav.selected');
		col_sel.removeClass(col_sel.data('class'));		
		col_sel.addClass($(this).val());				
		col_sel.attr('data-class',$(this).val());
	});
	
	$('#item-class').on('change', function() {
		var li_sel = $('.menu-item.selected');
		li_sel.removeClass(li_sel.data('class'));		
		li_sel.addClass($(this).val());				
		li_sel.attr('data-class',$(this).val());
	});
	
	$('#icon-class').on('change', function() {
		var li_sel = $('.menu-item.selected');		
		li_sel.attr('data-icon',$(this).val());
		li_sel.find('i').remove();
		if ($(this).val()) li_sel.children('a').prepend($('<i class="'+$(this).val()+'"></i>'));
	});
	
	$('input[type=radio][name=showtitle]').change(function() {
		var li_sel = $('.menu-item.selected');		        
		li_sel.attr('data-title',$(this).val());        
    });	
	
	$('input[type=radio][name=group]').change(function() {
		var li_sel = $('.menu-item.selected');		
        if (this.value == '1') {            
			li_sel.addClass('group');			
        }
        else {
			li_sel.removeClass('group');	
        }
		li_sel.attr('data-group',$(this).val());        
    });	
	
	
	$('#save-menu-config').click(function (e) {
		var config = {},
		items = $('.jms-megamenu').find('ul[class*="level0"] > li[data-id]');		
		items.each (function(){
			var $this = $(this);
			var config = {};			
			config['class'] = $this.attr('data-class');				
			config['icon'] = $this.attr('data-icon');				
			config['align'] = $this.attr('data-align');				
			if ($this.hasClass('mega')) {
				var $sub = $this.find ('.nav-child:first');	
				var subconfig = {};	
				subconfig['fullwidth'] = $sub.attr('data-fullwidth');				
				subconfig['width'] = $sub.attr('data-width');				
				subconfig['class'] = $sub.attr('data-class');								
				// get rows
				var $rows = $sub.find('[class*="row"]:first').parent().children('[class*="row"]'),
				rows = [],
				i = 0;
				$rows.each (function () {
					var $cols = $(this).children('[class*="mega-col-nav"]');
					if ($cols.length <= 0) return true;
					var row = [];
					var j = 0;
					$cols.each (function(){
						var $lis = $(this).find('.mega-inner > ul:first > li[data-id]'),						
						col = {};						
												
						col['width'] = $(this).attr('data-width');	
						col['class'] = $(this).attr('data-class');	
						var k = 0;
						var temp = [];												
						$lis.each (function(){							
							var li_tmp = {};
							var li = {};
							li_tmp['item'] = $(this).attr('data-id');														
							li['class'] = $(this).attr('data-class');
							li['icon'] = $(this).attr('data-icon');
							li['title'] = $(this).attr('data-title');
							li['group'] = $(this).attr('data-group');
							li['align'] = $(this).attr('data-align');
							$.ajax({
								type: 'POST',
								headers: {"cache-control": "no-cache"},
								url: $('#basedir').val() + 'modules/jmsmegamenu/ajax_jmsmegamenu.php',
								async: true,
								cache: false,                
								data: 'action=SaveStyle&params=' + JSON.stringify(li) + '&itemid=' + $(this).data('id'),
								success: function() {	
									console.debug($(this).data('id'));
								},
								error: function() {
									console.debug('error:' + $(this).data('id'));
								}
							});
							temp[k++] = li_tmp;							
						});						
						col['items'] = temp;						
							
						row[j++] = col;	
					});		
					if (row != '')	
						rows[i++] = row;					
				});	
				subconfig['row'] = rows;
				config['sub'] = subconfig;				
			}					
			console.debug(JSON.stringify(config));
			$.ajax({
                type: 'POST',
                headers: {"cache-control": "no-cache"},
                url: $('#basedir').val() + 'modules/jmsmegamenu/ajax_jmsmegamenu.php',
                async: true,
                cache: false,                
                data: 'action=SaveStyle&params=' + JSON.stringify(config) + '&itemid=' + $(this).data('id'),
                success: function() {	
					console.debug('done:' + $(this).data('id'));
					showSuccessMessage("Menu Style Saved!");
                },
                error: function() {
					console.debug('error:' + $(this).data('id'));
                }
            });
		});	
	});
	$('#reset-menu-config').click(function (e) {		
		var r = confirm("Are you sure to reset style for all menu item ?");
		if (r == true) {
			$.ajax({
				type: 'POST',
				headers: {"cache-control": "no-cache"},
				url: $('#basedir').val() + 'modules/jmsmegamenu/ajax_jmsmegamenu.php',
				async: true,
				cache: false,                
				data: 'action=resetAll',
				success: function() {	
					console.debug('done reset all');
					showSuccessMessage("All Menu Style Reset!");
					location.reload();
				},
				error: function() {
					console.debug('error reset all');
				}
				});
		}
	});	
	
});
$(document).ready(function() {	
	showToolbar('');
	bindEvents();
});