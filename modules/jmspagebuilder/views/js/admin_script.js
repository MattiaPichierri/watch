/**
* 2007-2017 PrestaShop
*
* Jms Page Builder
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

function validateStr(string) {	
    return string.replace(/"/g, "_JMSQUOTE_").replace(/'/g, "_JMSQUOTE2_").replace(/\\/g, "_JMSSLASH_").replace(/&amp;/g, "&").replace(/&lt;/g, "<").replace(/&gt;/g, ">").replace(/\//g, "\/").replace(/[\n]/g, '_JMSLB_').replace(/[\r]/g, '_JMSRN_').replace(/[\t]/g, '_JMSTAB_'); 
}
function UiTooltip() {
	$('.label-tooltip').tooltip();
}	
function UiSort() {	
	var $_rows = $(".rowlist");
	$_rows.sortable({
		opacity: 0.6,
		cursor: "move"
	});
	var $_columns = $(".row-columns");
	$_columns.sortable({
		opacity: 0.6,
		cursor: "move"
	});	
	var $_addonboxs = $(".column");
	$_addonboxs.sortable({
		connectWith: '.column',	
		opacity: 0.6,
		cursor: "move"
	});
}
function getLayout(){
		var config = [];
		var rows = $('.rowlist').find('.row');
		rows.removeClass('row-active');
		rows.each(function(index){
			var $row 		= $(this),
				rowIndex 	= index,
				rowObj 		= $row.data();
			delete rowObj.sortableItem;		
			var layout = 12;
			if(rowObj['hook'] == null) rowObj['hook'] = 'body';
			layout 	= $row.data('layout');
			config[rowIndex] = {
				'type'  	: 'row',
				'name'		: $(this).data('name'),	
				'layout'	: layout,
				'settings' 	: rowObj,
				'cols'		: []
			};
			// Find Column Elements
			var columns = $row.find('.layout-column');
			columns.removeClass('column-active');
			columns.each(function(cindex) {
				var $column 	= $(this),
					colIndex 	= cindex,
					className 	= $column.attr('class'),
					colObj 		= $column.data();
				delete colObj.sortableItem;
				config[rowIndex].cols[colIndex] = {
					'type' 				: 'column',
					'className' 		: className,
					'settings' 			: colObj,
					'addons'		: []
				};
				// Find Addon Elements
				var addons = $column.find('.addon-box');
				addons.removeClass('addon-active');
				addons.each(function(aindex) {
					var $addon 	= $(this),
					addonIndex 	= aindex,					
					addonObj 		= $addon.data();
					delete addonObj.sortableItem;
					config[rowIndex].cols[colIndex].addons[addonIndex] = {
						'type' 				: $addon.data('addon'),
						'settings' 			: addonObj,
						'fields'			: []
					};					
					var addoninputs = $addon.find('.item-inner > .form-group .addon-input');						
					addoninputs.each(function(aiindex) {						
						var $input 	= $(this),
						addoninputIndex 	= aiindex;
						if($input.hasClass('addon-categories')) {							
							var categories = $input.find('input[type=checkbox], input[type=radio]');								
							var categories_result = new Array();
							
							categories.each(function(catindex) {
								if ($(this).is(":checked")) {									
									categories_result.push($(this).val());									
								}
							});	
							var val_result = categories_result.join();
							config[rowIndex].cols[colIndex].addons[addonIndex].fields[addoninputIndex] = {
								'type'  : $input.data('type'),
								'label' : $input.prev('label').html(),
								'name'	: $input.data('attrname'),
								'multilang' : $input.data('multilang'),
								'value'	: val_result
							};
						} else {							
							var langfields = $input.find('.translatable-field .lang-input');						
							if(langfields.length > 0) {
								var val_result = new Array()
								var obj = new Object();
								langfields.each(function(liindex) {
									var $langinput 	= $(this);								
									var lang = $langinput.data('lang');
									var content = validateStr($langinput.getInputValue());
									obj[lang] = content;																
								});							
								val_result = obj;						
							} else {								
								var val_result = $input.getInputValue();								
								val_result = validateStr(val_result);
							}	
							config[rowIndex].cols[colIndex].addons[addonIndex].fields[addoninputIndex] = {
								'type'  : $input.data('type'),
								'label' : $input.prev('label').html(),
								'name'	: $input.data('attrname'),
								'multilang' : $input.data('multilang'),
								'value'	: val_result
							};		
						}	
							
					});
				});	
			});
		});
		return config;
		
}
jQuery(function ($) {		
	// tinyMCE editor source code edit
	$(document).on('focusin', function(e) {
		if ($(e.target).closest(".mce-window").length) {
			e.stopImmediatePropagation();
		}
	});
	//Override clone
	(function (original) {
		jQuery.fn.clone = function () {
			var result       = original.apply(this, arguments),
			my_textareas     = this.find('textarea').add(this.filter('textarea')),
			result_textareas = result.find('textarea').add(result.filter('textarea')),
			my_selects       = this.find('select').add(this.filter('select')),
			result_selects   = result.find('select').add(result.filter('select'));

			for (var i = 0, l = my_textareas.length; i < l; ++i)          
				$(result_textareas[i]).val($(my_textareas[i]).val());
			for (var i = 0, l = my_selects.length;   i < l; ++i) 
				result_selects[i].selectedIndex = my_selects[i].selectedIndex;

			return result;
		};
	})($.fn.clone);
	
    "use strict";
	UiSort();
	
	$(document).on('click','.column-layout',function(event) {			
		event.preventDefault();		
		layouttype = $(this).data('layout');
		if (layouttype == 'custom') {
			column = prompt('Enter your custom layout like 2,2,2,2,2,2 as total 12 grid','2,2,2,2,2,2');
		}
		$('.column-list li').removeClass('layout-active');
		$(this).parent().addClass('layout-active');
		$('.row').removeClass('row-active');
		if (layouttype == 'custom') {
			var layout_str = column;
		} else {
			var layout_str = $(this).data('layout');
		}					
		var row_box = $(this).closest('.row');
		row_box.addClass('row-active');			
		row_columns = row_box.find('.row-columns');
		row_box.attr('data-layout', layout_str) ;			
		var old_columns = $(row_box).find('.layout-column');		
		if(layout_str == '12')
			var new_columns = ['12']; 		
		else
			var new_columns = layout_str.split(',');
		var n_old_columns = old_columns.length;
		var n_new_columns = new_columns.length;	
		row_columns.empty();		
		$.each(new_columns, function(index, value){	
			var old_col_datas = old_columns.eq(index).data();
			//console.log(old_col_datas['custom_class']);						
			if(index < n_old_columns) {
				var html = '<div class="layout-column col-lg-' + value;
				if(old_col_datas['md_col']) html += ' ' + old_col_datas['md_col'];
				if(old_col_datas['sm_col']) html += ' ' + old_col_datas['sm_col'];
				if(old_col_datas['xs_col']) html += ' ' + old_col_datas['xs_col'];
				html +='"';
				if(old_col_datas['background_attachment']) html += ' data-background_attachment="' + old_col_datas['background_attachment']+'"';
				if(old_col_datas['background_position']) html += ' data-background_position="' + old_col_datas['background_position']+'"';
				if(old_col_datas['background_repeat']) html += ' data-background_repeat="' + old_col_datas['background_repeat']+'"';
				if(old_col_datas['background_size']) html += ' data-background_size="' + old_col_datas['background_size']+'"';
				if(old_col_datas['background_img']) html += ' data-background_img="' + old_col_datas['background_img']+'"';
				if(old_col_datas['xs_col']) html += ' data-xs_col="' + old_col_datas['xs_col']+'"';
				if(old_col_datas['sm_col']) html += ' data-sm_col="' + old_col_datas['sm_col']+'"';
				if(old_col_datas['md_col']) html += ' data-md_col="' + old_col_datas['md_col']+'"';				
				if(old_col_datas['custom_class']) html += ' data-custom_class="' + old_col_datas['custom_class']+'"';				
				html += '><div class="column">' + old_columns.eq(index).find('.column').html() + '</div><div class="col-tools"><a href="#" class="column-setting pull-right label-tooltip" data-original-title="Column Setting"><i class="icon-cog"></i><span>Setting</span></a><a href="#" class="add-addon pull-right label-tooltip" data-original-title="Add Addons/Modules"><i class="icon-plus-circle"></i><span>Addons</span></a></div></div>';			
			} else 
				var html = '<div class="layout-column col-lg-' + value + '"><div class="column"></div><div class="col-tools"><a href="#" class="column-setting pull-right label-tooltip" data-original-title="Column Setting"><i class="icon-cog"></i><span>Setting</span></a><a href="#" class="add-addon pull-right label-tooltip" data-original-title="Add Addons/Modules"><i class="icon-plus-circle"></i><span>Addons</span></a></div></div>';
			row_columns.append(html);
		});		
		if(n_old_columns > n_new_columns)
			for(i = n_new_columns; i < n_old_columns; i++)
				row_columns.find('.column').eq(n_new_columns-1).append(old_columns.eq(i).find('.column').html());
			
		UiSort();	
		UiTooltip();
	});	
	
	$(document).on('click','#page-header-desc-configuration-new',function(event) {		
		event.preventDefault();
		var $rowClone = $('#jmspagebuilder-row .row').clone(true);
		$('.rowlist').append($rowClone);	
		UiTooltip();
	});
		
	$.fn.setInputValue = function(options){
		if (this.attr('type') == 'checkbox') {			
			if (options.filed == '1') {
				this.attr('checked','checked');
				
			}else{
				this.removeAttr('checked');
			}
		} else if(this.hasClass('input-media')){
			if(options.filed){
				$imgParent = this.parent('.media');
				console.log($imgParent);
				$imgParent.find('img.media-preview').each(function() {
					$(this).attr('src',layoutbuilder_base+options.filed);
				});
			}
			this.val( options.filed );
		}else{
			this.val( options.filed );
		}

		if (this.data('attrname') == 'column_type'){
			if (this.val() == 'component') {
				$('.form-group.name').hide();
			}
		}
	}
		
	$.fn.getInputValue = function(){
		if (this.attr('type') == 'checkbox') {
			if (this.attr("checked")) {
				return '1';
			}else{
				return '0';
			}
		}else{
			return this.val();
		}		
	}	
	
	function random_number() {
		return randomFromInterval(1, 1e6)
	}
	function randomFromInterval(e, t) {
		return Math.floor(Math.random() * (t - e + 1) + e)
	}
	$.fn.randomIds = function()
	{
		//Editor
		$(this).find('.jms-editor').each(function(){
			var $id = random_number();
			$(this).attr('id', 'jms-editor-' + $id);
		});		
		$(this).find('.jms-image').each(function(){			
			var $id = random_number();			
			$(this).attr('id', 'jms-image-' + $id);
			$(this).next().attr('id', 'media-preview-' + $id);
			$(this).next().next().attr('href', 'index.php?controller=AdminJmspagebuilderMedia&fid=' + $id + '&token=' + $('#mediatoken').val());
			$(this).next().next().next().attr('id', 'remove-media-' + $id);
		});
		/*$(this).find('.cattree').each(function(){
			var $id = random_number();		
			$(this).attr('id', 'categories-' + $id);
		});*/
	}
	//remove ids
	$.fn.cleanRandomIds = function(){

		$(this).find('select').chosen('destroy');

		//Editor
		$(this).find('.jms-editor').each(function(){
			var $id = $(this).attr('id');
			tinyMCE.execCommand('mceRemoveEditor', false, $id);
			$(this).removeAttr('id').removeAttr('style').removeAttr('area-hidden');
		});

		$(this).find('.mce-tinymce').remove();

		return $(this);

	}
	//elementEdit
	$.fn.elementEdit = function(){
		$('#modal-addons').modal('hide');
		$('#addon-modal').find('.jms-modal-body').empty();
		var $clone 	= $(this).clone();		
		$clone 		= $clone.appendTo($('#addon-modal').find('.jms-modal-body'));
		//Modal Title
		$('#addon-modal').find('.jms-modal-title').text( $clone.find('span:first').text() );		
		$('#addon-modal #save-addons').data('flag', 'add-addon');		
		$clone.find('select').chosen({allow_single_deselect:true});
		$clone.randomIds();
		$('#addon-modal').modal('show');			
		$('#addon-modal').find('.jms-editor').each(function(){
			var $id = $(this).attr('id');		
			tinyMCE.execCommand('mceAddEditor', false, $id);
		});
	}
	
	$(document).on('click','.row-setting',function(event) {		
		event.preventDefault();
		$('.row').removeClass('row-active');
		var $parent = $(this).closest('.row');
		$parent.addClass('row-active');
		$('#layout-modal').find('.jms-modal-body').empty();
		$('#layout-modal .jms-modal-title').text('Row Settings');
		$('#layout-modal #save-settings').data('flag', 'row-setting');

		var $clone = $('.row-settings').clone(true);		
		$clone.randomIds();
		$clone = $('#layout-modal').find('.jms-modal-body').append( $clone );
		$clone.find('.addon-input').each(function(){
			var $that = $(this),
				attrValue = $parent.data( $that.data('attrname'));			
			if($that.data('attrname') == 'hook' && attrValue == '')
				attrValue = 'body';
			if($that.hasClass('jms-image')) {
				$that.next().attr('src',$('#root_url').val() + attrValue);
			}	
			$that.setInputValue({filed: attrValue});
		});

		$('#layout-modal').modal();
	});
	
	$(document).on('click','.column-setting',function(event) {	
		event.preventDefault();
		$('.layout-column').removeClass('column-active');
		var $parent = $(this).closest('.layout-column');
		$parent.addClass('column-active');
		$('#layout-modal').find('.jms-modal-body').empty();
		$('#layout-modal .jms-modal-title').text('Column Settings');
		$('#layout-modal #save-settings').data('flag', 'column-setting');

		var $clone = $('.column-settings').clone(true);		
		$clone.randomIds();
		$clone = $('#layout-modal').find('.jms-modal-body').append( $clone );
		$clone.find('.addon-input').each(function(){
			var $that = $(this),
				attrValue = $parent.data( $that.data('attrname'));
			if($that.hasClass('jms-image')) {
				$that.next().attr('src',$('#root_url').val() + attrValue);
			}		
			$that.setInputValue({filed: attrValue});
		});

		$('#layout-modal').modal();
	});	
	
	$(document).on('click','.remove-row',function(event) {			
		event.preventDefault();
		if ( confirm("Click Ok button to delete Row, Cancel to leave.") == true )
		{
			$(this).closest('.row').slideUp(200, function(){
				$(this).remove();
			});
		}
	});
	$.fn.updateClass = function(str2){
		$parent = $('.column-active');		
		var classes = $parent.attr('class').split(" ");
		for (var i = 0, len = classes.length; i < len; i++) 
			if(classes[i].indexOf(str2)!= -1) {
				$parent.removeClass(classes[i]);				
			}		
			$parent.addClass(this.getInputValue());
	}
	$(document).on('click','#save-settings',function(event) {	
		event.preventDefault();
		var flag = $(this).data('flag');
		switch(flag){
			case 'row-setting':				
				$('#layout-modal').find('.addon-input').each(function(){
					var $this = $(this),
					$parent = $('.row-active'),
					$attrname = $this.data('attrname');
					$parent.removeData( $attrname );										
					if ($attrname == 'name') {
						var nameVal = $this.val();
						
						if (nameVal  !='' || $this.val() != null) {
							$('.row-active .row-name').text($this.val());
						}else{
							$('.row-active .row-name').text('Row');
						}
					}
					$parent.attr('data-' + $attrname, $this.getInputValue());
				});
				break;

			case 'column-setting':
				$('#layout-modal').find('.addon-input').each(function(){
					var $this = $(this),
					$parent = $('.column-active'),
					$attrname = $this.data('attrname');
					$parent.removeData( $attrname );
					$parent.attr('data-' + $attrname, $this.getInputValue());
					if($attrname == 'md_col') {
						$this.updateClass('col-md-');
					}	
					if($attrname == 'sm_col') {
						$this.updateClass('col-sm-');
					}
					if($attrname == 'xs_col') {
						$this.updateClass('col-xs-');
					}										
				});
				break;			
			default:
				alert('You are doing somethings wrongs. Try again');
		}
	});
	
	$(document).on('click','#save-addons',function(event) {	
		event.preventDefault();
		var flag = $(this).data('flag');		
		switch(flag){			
			case 'add-module':
				if($('#addon-modal').find('.addon-hook').val() != '') {
					var $parent = $('.column-active');				
					var $clone = $('.hidden .module').clone(true);
					var modulename = $('#addon-modal').find('.addon-modulename').val();				
					$clone.find('.addon-title').html(modulename);	
					$('#addon-modal').find('.addon-input').each(function(){					
						var $this = $(this),
						$attrname = $this.data('attrname');
						$clone.removeData( $attrname );
						$clone.attr('data-' + $attrname, $this.getInputValue());
					});					
					$parent.find('.column').append($clone);
				} else {
					alert('You must select a Hook Name. If Module dont have any avaiable Hook Name You cant add it to layout!');
				}	
				break;	
			case 'edit-module':
				if($('#addon-modal').find('.addon-hook').val() != '') {					
					var $clone = $('.hidden .module').clone(true);
					var modulename = $('#addon-modal').find('.addon-modulename').val();				
					$clone.find('.addon-title').html(modulename);	
					$('#addon-modal').find('.addon-input').each(function(){					
						var $this = $(this),
						$attrname = $this.data('attrname');
						$clone.removeData( $attrname );
						$clone.attr('data-' + $attrname, $this.getInputValue());
					});
					$('.addon-active').replaceWith($clone);
				} else {
					alert('You must select a Hook Name. If Module dont have any avaiable Hook Name You cant add it to layout!');
				}	
				break;	
			case 'add-addon':
				var $original = $('#addon-modal').find('.addon-box');
				$original.cleanRandomIds();	
				var $clone = $original.clone();										
				$clone.appendTo( $('.column-active').find('.column'));
				break;	
			case 'edit-addon':					
				var $original = $('#addon-modal').find('.addon-box');
				$original.cleanRandomIds();
				var $clone = $original.clone();				
				$('.addon-active').replaceWith($clone);					
				break;	
			default:
				alert('You are doing somethings wrongs. Try again');
		}
	});		
		
	$(document).on('click', '.add-addon', function(event){		
		event.preventDefault();
		$('#modal-addons .addon-filter ul li').removeClass('active').first().addClass('active');		
		$('.layout-column').removeClass('column-active');		
		$(this).parent().parent().addClass('column-active');
		var $_html = $('.hidden .pagebuilder-addons').clone(true);			
		$('#modal-addons').find('.jms-modal-body').empty();
		$('#modal-addons').find('.jms-modal-body').html( $_html );
		$('#modal-addons').modal();			
	});

	//Filter Addons
	$(document).on('click', '#modal-addons .addon-filter ul li a', function(){
		var $self = $(this);
		var $this = $(this).parent();
		$self.closest('ul').children().removeClass('active');
		$self.parent().addClass('active');
		if($this.data('category')=='all') {
			$('#modal-addons').find('.pagebuilder-addons').children().removeAttr('style');
			return true;
		}
		$('#modal-addons').find('.pagebuilder-addons').children().each(function(){
			if($(this).hasClass( 'addon-cat-' + $this.data('category') )) {
				$(this).removeAttr('style');
			} else {
				$(this).css('display', 'none');
			}
		});
	});
	//Add Addon
	$(document).on('click', '#modal-addons .pagebuilder-addons > li >a', function(event){
		event.preventDefault();
		$('#modal-addons').modal('hide');
		if($(this).parent().hasClass('addon-cat-modules')) {			
			var url = $('#ajax_url').val() + '?action=addModule&modulename=' + $(this).data('module');
			var data = "";
			$.ajax({
				type: 'POST',
                headers: {"cache-control": "no-cache"},
                url: url,
                async: true,
                cache: false,
                data: data,
                success: function (data) {                        
					$('#addon-modal').find('.jms-modal-body').empty();
					$('#addon-modal .jms-modal-title').text('Module Assign');
					$('#addon-modal #save-addons').data('flag', 'add-module');
					var $clone = data;
					$clone = $('#addon-modal').find('.jms-modal-body').append( $clone );
					$('#addon-modal').modal();
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {                    
                    alert("ERROR: \n\nDetails:\nError thrown: " + XMLHttpRequest + "\n" + 'Text status: ' + textStatus);
                }
            });
		} else {
			//add Addon
			$(this).next().elementEdit();			
		}
	});
	//Remove Addon
	$(document).on('click', '.remove-addon', function(event){
		event.preventDefault();
		if ( confirm("Click Ok button to delete Block, Cancel to leave.") == true )
		{
			$(this).closest('.addon-box').slideUp(200, function(){
				$(this).remove();
			});
		}
	});	
	//Edit Addon
	$(document).on('click', '.edit-addon', function(event){
		event.preventDefault();				
		$('.layout-column').removeClass('column-active');
		$('.addon-box').removeClass('addon-active');		
		$(this).parent().closest('.layout-column').addClass('column-active');
		$(this).closest('.addon-box').addClass('addon-active');
		if($(this).closest('.addon-box').data('addon') == 'module') {
			var url = $('#ajax_url').val() + '?action=editModule&modulename=' + $(this).parent().parent().data('modulename') + '&hook=' + $(this).parent().parent().data('hook');
			var data = "";
			$.ajax({
				type: 'POST',
				headers: {"cache-control": "no-cache"},
				url: url,
				async: true,
				cache: false,
				data: data,
				success: function (data) {                        
					$('#addon-modal').find('.jms-modal-body').empty();
					$('#addon-modal .jms-modal-title').text('Module Assign');
					$('#addon-modal #save-addons').data('flag', 'edit-module');
					var $clone = data;
					$('#addon-modal').find('.jms-modal-body').append( $clone );
					$('#addon-modal').modal();
				},
				error: function (XMLHttpRequest, textStatus, errorThrown) {                    
					alert("ERROR: \n\nDetails:\nError thrown: " + XMLHttpRequest + "\n" + 'Text status: ' + textStatus);
				}
			});
		} else {
			
			$('#addon-modal').find('.jms-modal-body').empty();
			$('#addon-modal .jms-modal-title').text($('.addon-active').find('.addon-title').html());
			$('#addon-modal #save-addons').data('flag', 'edit-addon');
			var $clone = $('.addon-active').clone(true);
			$clone.randomIds();
			$clone.removeClass('addon-active');			
			//$clone.find(".tree-selected").find("input[type=radio]").prop('checked',true);
			$('#addon-modal').find('.jms-modal-body').append( $clone );
			$('#addon-modal').modal('show');			
			$('#addon-modal').find('.jms-editor').each(function(){
				var $id = $(this).attr('id');				
				tinyMCE.execCommand('mceAddEditor', false, $id);
			});
			
		}			
	});	
	$(document).on('click', '.duplicate-row', function(event){
		event.preventDefault();			
		$('.row').removeClass('row-active');	
		$(this).closest('.row').addClass('row-active');		
		var $clone = $('.row-active').clone();
		$clone.removeClass('row-active');
		$('.rowlist').append($clone);
		UiSort();
		UiTooltip();
	});
	$(document).on('click', '.active-row', function(event){		
		event.preventDefault();
		var current_row = $(this).closest('.row');		
		var old_status = current_row.attr('data-active');
		if(old_status == '1') {				
			current_row.attr('data-active', 0);
			$(this).find('i').removeClass().addClass('icon-remove');
			$(this).attr('data-original-title',"Active Row");
		} else {
			current_row.attr('data-active', 1);
			$(this).find('i').removeClass().addClass('icon-check');
			$(this).attr('data-original-title',"UnActive Row");
		}	
	});	
	$(document).on('click', '.active-addon', function(event){
		event.preventDefault();
		var current_addon = $(this).closest('.addon-box');		
		var old_status = current_addon.attr('data-active');
		if(old_status == '1') {				
			current_addon.attr('data-active', 0);
			$(this).find('i').removeClass().addClass('icon-remove');			
		} else {
			current_addon.attr('data-active', 1);
			$(this).find('i').removeClass().addClass('icon-check');			
		}	
	});	
	$(document).on('click', '.duplicate-addon', function(event){
		event.preventDefault();	
		$('.addon-box').removeClass('addon-active');
		$(this).closest('.addon-box').addClass('addon-active');
		var $clone = $('.addon-active').clone();
		$clone.removeClass('addon-active');
		$(this).closest('.column').append($clone);		
	});			
	$('.show-fancybox').fancybox({
		type: 'iframe',
		autoDimensions: false,
		autoSize: false,
		arrows : false,
		width: 600,
		height: 500,
		helpers: {
			overlay: {
				locked: false
			}
		}
	});
	$(document).on('click','.remove-media',function(event) {		
		var fid = $(this).attr('id');
		var fid = fid.substring(13, 20);		
		$('#media-preview-' + fid).attr('src','');		
		$('#jms-image-' + fid).val('');
	});
	/*$(document).on('click',".cattree input[type='radio']",function(event) {		
		$(this).closest('.cattree').find('.tree-item-name').removeClass('tree-selected');
		$(this).closest('.cattree').find('.tree-folder-name').removeClass('tree-selected');
		$(this).parent('span').addClass('tree-selected');
	});*/
	$(document).on('click','.import-link',function(event) {
		$('.import-form').toggle();
		$('.language-form').hide();
	});
	$(document).on('click','.copy-lang',function(event) {		
		$('.language-form').toggle();
		$('.import-form').hide();
	});
	$(document).on('click','.device-icons li',function(event) {	
		$('#rowlist').removeClass();
		$('#rowlist').addClass($(this).data('device') + '-layout');
		if($(this).data('device') != 'lg')
			$('.layout-action').addClass('disabled');
		else 
			$('.layout-action').removeClass('disabled');
		$('.device-icons li').removeClass('active');
		$(this).addClass('active');
	});
	$(document).on('change',"#select-home",function(event) {
		document.location = $('#backend_url').val() + '&config_id_homepage=' + $(this).val();
	})	
	$(document).on('click','#page-header-desc-configuration-save',function(event) {	
		var params = JSON.stringify(getLayout());			
		$('#jmsformjson').val( params );
		var layoutForm = document.layoutForm;		
		layoutForm.submit();
		/*$.ajax({
                type: 'POST',
                headers: {"cache-control": "no-cache"},
                url: $('#ajax_url').val() + '?action=SaveLayout' + '&id_homepage=' + $('#rowlist').data('id'),
                async: true,
                cache: false,                
                data: 'action=SaveLayout&params=' + params + '&id_homepage=' + $('#rowlist').data('id'),
				dataType: 'json',
                success: function() {						
					showSuccessMessage("Layout Saved!");
					//location.reload();
                },
                error: function() {
					console.debug('error:' + $(this).data('id'));
                }
        });*/
	});
	
});	
