/**
* 2007-2017 PrestaShop
*
* Slider Layer module for prestashop
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

$(document).ready(function () {
	if ($("#bg_type_on").prop("checked")) {
		$('.bg_img').show();
		$('.bg_color').hide();
	} else {
		$('.bg_img').hide();
		$('.bg_color').show();
	}
	$("#bg_type_on").click(function (e) {
		$('.bg_img').show();
		$('.bg_color').hide();
	});
	$("#bg_type_off").click(function (e) {
		$('.bg_img').hide();
		$('.bg_color').show();
	});
	$('.toogle').click(function (e) {
		$('#layersContent').toggle(200);
	});
	$('.panel-heading').click(function (e) {
		$(this).next('.form-wrapper').toggle(200);
	});
	$('#add-text').on('click', function () {
		$('#modal_add_text').modal('show');
	});
	$('#add-image').on('click', function () {
		$('#modal_add_image').modal('show');
	});
	if ($("#data_image_action_select").prop("checked")) {
		$('#form_select_image').show();
		$('#form_upload_image').hide();
	} else {
		$('#form_select_image').hide();
		$('#form_upload_image').show();
	}
	$('#data_image_action_upload').click(function () {
		$('#form_select_image').hide();
		$('#form_upload_image').show();
	});
	$('#data_image_action_select').click(function () {
		$('#form_select_image').show();
		$('#form_upload_image').hide();
	});

	$('#add-video').on('click', function () {
		$('#modal_add_video').modal('show');
	});
	$('#tips').on('click', function () {
		$('#modal_tips').modal('show');
	});
	$('.data_video_bg').click(function () {
		strId = $(this).attr('id');
		currentId = strId.substring(14, 20);
		var s_width = $('.slide').width();
		var s_height = $('.slide').height();
		var width_current = $('#data_width_' + currentId).val();
		var height_current = $('#data_height_' + currentId).val();
		var x_current = $('#data_x_' + currentId).val();
		var y_current = $('#data_y_' + currentId).val();
		if ($('.data_video_bg').is(':checked')) {
			$('#data_video_bg_' + currentId).val('1');
			$('#caption_' + currentId).css({
				'width' : s_width + 'px',
				'height' : s_height + 'px',
				'top' : 0,
				'left' : 0
			});

		} else {
			$('#data_video_bg_' + currentId).val('0');
			$('#caption_' + currentId).css({
				'width' : width_current + 'px',
				'height' : height_current + 'px',
				'top' : (y_current / s_height) * 100 + '%',
				'left' : (x_current / s_width) * 100 + '%'
			});
		}
	});

	//show hide layer depend on id
	$('.panel-layers .form-layer').first().show();
	$('.tp-caption').css("cursor", "move");
	$('.layer').click(function () {
		strId = $(this).attr('id');
		currentId = strId.substring(7, 20);
		$('.layer').removeClass('active');
		$('.layers-' + currentId).addClass('active');
		$('#caption_' + currentId).addClass('active');
		form_layer = $('.form-layer');
		form_layer_id = $('#form_layer_' + currentId);
		form_layer.hide();
		form_layer_id.show();
		$('#id_layer').val(currentId);

	});

	$('.tp-caption').click(function () {
		strId = $(this).attr('id');
		currentId = strId.substring(8, 20);
		$('.layer').removeClass('active');
		$(this).addClass('active');
		$('.layers-' + currentId).addClass('active');
		form_layer = $('.form-layer');
		form_layer_id = $('#form_layer_' + currentId);
		form_layer.hide();
		form_layer_id.show();
		$('#id_layer').val(currentId);

	});
	// SHow and hide layer to easy work with
	$('.show-hide-layer').toggle( function(){
		lstr = $(this).parents('.layer').attr('id');
		lId = lstr.substring(7, 20);
		$('#caption_'+lId).fadeOut();
		$(this).removeClass('btn-default');
		$(this).addClass('btn-warning');
		$(this).find('.icon-eye').hide();
		$(this).find('.icon-eye-slash').show();
	},function(){
		lstr = $(this).parents('.layer').attr('id');
		lId = lstr.substring(7, 20);
		$('#caption_'+lId).fadeIn();
		$(this).removeClass('btn-warning');
		$(this).addClass('btn-default');
		$(this).find('.icon-eye').show();
		$(this).find('.icon-eye-slash').hide();
	});

	///handle image upload
	$('#data_image-selectbutton').click(function (e) {
		$('#data_image').trigger('click');
	});

	$('#data_image').change(function (e) {
		var val = $(this).val();
		var file = val.split(/[\\/]/);
		$('#data_image-name').val(file[file.length - 1]);
	});

	$('#data_image_new-selectbutton').click(function (e) {
		$('#data_image_new').trigger('click');
	});

	$('#data_image_new').change(function (e) {
		var val = $(this).val();
		var file = val.split(/[\\/]/);
		$('#data_image_new-name').val(file[file.length - 1]);
	});

	$('.data-image').change(function (e) {
		var img = $(this).val();
		strId = $(this).attr('id');
		currentId = strId.substring(11, 20);
		$('#image_layer_' + currentId).remove();
		$('#caption_' + currentId).append('<img  width="100%" height="100%" id="image_layer_' + currentId + '" src="' + $('#site_url').val() + 'modules/jmsslider/views/img/layers/' + img + '" />');
	});
	$('.data-x').keyup(function (e) {
		var html = $(this).val();
		strId = $(this).attr('id');
		currentId = strId.substring(7, 20);
		var s_width = $('.slide').width();
		var l_width = $('#caption_' + currentId).width();
		x_center = (s_width / 2) - (l_width / 2);
		x_current = $('#data_x_' + currentId).val();
		if (x_current == 'center') {
			$('#caption_' + currentId).css({
				'left' : x_center + 'px'
			});
			$('#data_x_' + currentId).val(Math.round(x_center));
		} else {
			$('#caption_' + currentId).css({
				'left' : x_current + 'px'
			});
		}
	});

	$('.data-y').keyup(function (e) {
		var html = $(this).val();
		strId = $(this).attr('id');
		currentId = strId.substring(7, 20);
		var s_height = $('.slide').height();
		var l_height = $('#caption_' + currentId).height();

		y_center = (s_height / 2) - (l_height / 2);
		y_current = $('#data_y_' + currentId).val();
		if (y_current == 'center') {
			$('#caption_' + currentId).css({
				'top' : y_center + 'px'
			});
			$('#data_y_' + currentId).val(Math.round(y_center));
		} else {
			$('#caption_' + currentId).css({
				'top' : y_current + 'px'
			});
		}
	});

	$('.data-width').keyup(function (e) {
		var html = $(this).val();
		strId = $(this).attr('id');
		currentId = strId.substring(11, 20);
		var s_width = $('.slide').width();
		width_current = $('#data_width_' + currentId).val();
		if (width_current == 'full') {
			$('#caption_' + currentId).css({
				'width' : s_width + 'px',
				'left' : 0
			});
			$('#data_x_' + currentId).val(0);
			$('#data_y_' + currentId).val(0);
			$('#data_width_' + currentId).val(s_width);
		} else if (width_current == 'half') {
			$('#caption_' + currentId).css({
				'width' : Math.round(s_width / 2) + 'px'
			});
			$('#data_width_' + currentId).val(Math.round(s_width / 2));
		} else if (width_current == 'quarter') {
			$('#caption_' + currentId).css({
				'width' : Math.round(s_width / 4) + 'px'
			});
			$('#data_width_' + currentId).val(Math.round(s_width / 4));
		} else {
			$('#caption_' + currentId).css({
				'width' : width_current + 'px'
			});
		}
	});

	$('.data-height').keyup(function (e) {
		var html = $(this).val();
		strId = $(this).attr('id');
		currentId = strId.substring(12, 20);
		var s_height = $('.slide').height();
		height_current = $('#data_height_' + currentId).val();
		if (height_current == 'full') {
			$('#caption_' + currentId).css({
				'height' : s_height + 'px',
				'top' : 0
			});
			$('#data_x_' + currentId).val(0);
			$('#data_y_' + currentId).val(0);
			$('#data_height_' + currentId).val(s_height);
		} else if (height_current == 'half') {
			$('#caption_' + currentId).css({
				'height' : Math.round(s_height / 2) + 'px'
			});
			$('#data_height_' + currentId).val(Math.round(s_height / 2));
		} else if (height_current == 'quarter') {
			$('#caption_' + currentId).css({
				'height' : Math.round(s_height / 4) + 'px'
			});
			$('#data_height_' + currentId).val(Math.round(s_height / 4));
		} else {
			$('#caption_' + currentId).css({
				'height' : height_current + 'px'
			});
		}
	});

	$('.data-html').keyup(function (e) {
		var html = $(this).val();
		strId = $(this).attr('id');
		currentId = strId.substring(10, 20);
		$('#caption_' + currentId + ' span').html(html);
	});

	$('.data-font-size').keyup(function (e) {
		var html = $(this).val();
		strId = $(this).attr('id');
		currentId = strId.substring(15, 20);
		$('#caption_' + currentId).css({
			'font-size' : html + 'px'
		});
	});

	$('.data-style').change(function (e) {
		var html = $(this).val();
		strId = $(this).attr('id');
		currentId = strId.substring(11, 20);
		$('#caption_' + currentId + ' span').css({
			'font-style' : html
		});
	});

	$('.data-color').change(function (e) {
		var html = $(this).val();
		strId = $(this).attr('id');
		currentId = strId.substring(11, 20);

		$('#caption_' + currentId + ' span').css({
			'color' : html
		});
	});

	// Submit text
	$('#submitLayerText').click(function (e) {
		$('.loading.loading-text').show();
		id_slide = $('#id_slide').val();
		title_text_new = $('#title_text_new').val();
		layer_text_new = $('#text_layer_new').val();
		url = $('#site_url').val() + 'modules/jmsslider/ajax_jmsslider.php?action=addLayer';
		$.ajax({
			type : "POST",
			url : url,
			data : 'id_slide=' + id_slide + '&data_title=' + title_text_new + '&data_text=' + layer_text_new + '&data_type=text',
			success : function (result) {
				location.reload(true);
			},
			error : function () {
				alert('Error401');
			},
			dataType : 'html'
		});
		return false;
	});

	// SUbmit text
	$('#title_text_new').keypress(function (e) {
		if (e.which == 13) {
			$('.loading.loading-text').show();
			id_slide = $('#id_slide').val();
			title_text_new = $('#title_text_new').val();
			layer_text_new = $('#text_layer_new').val();
			url = $('#site_url').val() + 'modules/jmsslider/ajax_jmsslider.php?action=addLayer';
			$.ajax({
				type : "POST",
				url : url,
				data : 'id_slide=' + id_slide + '&data_title=' + title_text_new + '&data_text=' + layer_text_new + '&data_type=text',
				success : function (result) {
					location.reload(true);
				},
				error : function () {
					alert('Error401');
				},
				dataType : 'html'
			});
			return false;
		}

	});

	function Validate(oForm) {
		var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];
		var arrInputs = oForm.getElementsByTagName("input");
		for (var i = 0; i < arrInputs.length; i++) {
			var oInput = arrInputs[i];
			if (oInput.type == "file") {
				var sFileName = oInput.value;
				if (sFileName.length > 0) {
					var blnValid = false;
					for (var j = 0; j < _validFileExtensions.length; j++) {
						var sCurExtension = _validFileExtensions[j];
						if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
							blnValid = true;
							break;
						}
					}
				}
			}
		}
		return blnValid;
	}
	// submit image
	$('#form_add_layer').on('submit', function (e) {
		e.preventDefault();
		id_slide = $('#id_slide').val();
		title_image_new = $('#title_image_new').val();
		layer_image_new = $('#data_s_image').val();
		url = $('#site_url').val() + 'modules/jmsslider/ajax_jmsslider.php?action=addLayer&data_type=image&id_slide=' + id_slide;
		var input = document.getElementById('data_image');
		var file = input.files[0];
		if (input.files[0] && !Validate(this)) {
			$('.show-error').html('Image format incorrect. Try again!');
			return false;
		} else if (input.files[0] && file.size > 2097152) {
			$('.show-error').html('Image size too large (max is 2Mb). Try again!');
			return false;
		} else {
			$('.loading.loading-image').show();
			$('.show-error').hide();
			$.ajax({
				type : "POST",
				url : url,
				contentType : false, // The content type used when sending data to the server.
				cache : false, // To unable request pages to be cached
				processData : false,
				data : new FormData(this),
				success : function (result) {
					location.reload(true);
				},
				error : function () {
					alert('Error401');
				},
				dataType : 'html'
			});
		}

		return false;
	});

	$('#title_image_new').keypress(function(e){
       if(e.which == 13){//Enter key pressed
           e.preventDefault();
			id_slide = $('#id_slide').val();
			title_image_new = $('#title_image_new').val();
			layer_image_new = $('#data_s_image').val();
			url = $('#site_url').val() + 'modules/jmsslider/ajax_jmsslider.php?action=addLayer&data_type=image&id_slide=' + id_slide;
			var input = document.getElementById('data_image');
			var file = input.files[0];
			if (input.files[0] && !Validate(this)) {
				$('.show-error').html('Image format incorrect. Try again!');
				return false;
			} else if (input.files[0] && file.size > 2097152) {
				$('.show-error').html('Image size too large (max is 2Mb). Try again!');
				return false;
			} else {
				$('.loading.loading-image').show();
				$('.show-error').hide();
				$.ajax({
					type : "POST",
					url : url,
					contentType : false, // The content type used when sending data to the server.
					cache : false, // To unable request pages to be cached
					processData : false,
					data : new FormData(this),
					success : function (result) {
						location.reload(true);
					},
					error : function () {
						alert('Error401');
					},
					dataType : 'html'
				});
			}

			return false;
       }
   	});
	$('#submitLayerVideo').click(function (e) {
		$('.loading.loading-text').show();
		id_slide = $('#id_slide').val();
		title_video_new = $('#title_video_new').val();
		layer_video_new = $('#data_video_new').val();
		url = $('#site_url').val() + 'modules/jmsslider/ajax_jmsslider.php?action=addLayer';
		$.ajax({
			type : "POST",
			url : url,
			data : 'id_slide=' + id_slide + '&data_title=' + title_video_new + '&data_video=' + layer_video_new + '&data_type=video',
			success : function (result) {
				location.reload(true);
			},
			error : function () {
				alert('Error401');
			},
			dataType : 'html'
		});
		return false;
	});

	$('#title_video_new').keypress(function (e) {
		if(e.which == 13){
			$('.loading.loading-text').show();
			id_slide = $('#id_slide').val();
			title_video_new = $('#title_video_new').val();
			layer_video_new = $('#data_video_new').val();
			url = $('#site_url').val() + 'modules/jmsslider/ajax_jmsslider.php?action=addLayer';
			$.ajax({
				type : "POST",
				url : url,
				data : 'id_slide=' + id_slide + '&data_title=' + title_video_new + '&data_video=' + layer_video_new + '&data_type=video',
				success : function (result) {
					location.reload(true);
				},
				error : function () {
					alert('Error401');
				},
				dataType : 'html'
			});
			return false;
		}
		
	});
	
	//delete layer
	$('.delete_layer').click(function () {
		if (confirm('Are your sure delete this layer?')) {
			lstr = $(this).parents('.layer').attr('id');
			lId = lstr.substring(7, 20);
			url = $('#site_url').val() + 'modules/jmsslider/ajax_jmsslider.php?action=deleteLayer';
			// return false;
			$.ajax({
				type : "POST",
				url : url,
				data : 'id_layer=' + lId,
				success : function (result) {
					$('#caption_' + lId).hide();
					$('.layers-' + lId).hide();
					$('#form_layer_' + lId).hide();

					if ($('.layers-' + lId).prev('.layer').length == 0 || ($('.layers-' + lId).prev('.layer').length > 0 && !$('.layers-' + lId + '').nextAll('.layer:visible'))) {
						$('.layers-' + lId + '').nextAll('.layer:visible').each(function () {
							lsstr = $('.layers-' + lId + '').nextAll('.layer:visible').attr('id');
							lsId = lsstr.substring(7, 20);
							$('#form_layer_' + lsId).show();
						});
						// alert('Previous still and Hide all');
					} else if ($('.layers-' + lId).next('.layer').length == 0 || ($('.layers-' + lId).next('.layer').length > 0 && !$('.layers-' + lId + '').prevAll('.layer:visible'))) {
						$('.layers-' + lId + '').prevAll('.layer:visible').each(function () {
							lsstr = $('.layers-' + lId + '').prevAll('.layer:visible').attr('id');
							lsId = lsstr.substring(7, 20);
							$('#form_layer_' + lsId).show();
						});
						// alert('Next still and hide all');
					} else if ($('.layers-' + lId).prev('.layer').length != 0 && $('.layers-' + lId + '').prevAll('.layer:visible')) {
						$('.layers-' + lId + '').prevAll('.layer:visible').each(function () {
							lsstr = $('.layers-' + lId + '').prevAll('.layer:visible').attr('id');
							lsId = lsstr.substring(7, 20);
							$('#form_layer_' + lsId).show();
							// alert('Previous still and not hide');
						});
					} else if ($('.layers-' + lId).next('.layer').length != 0 && $('.layers-' + lId + '').prevAll('.layer:visible')) {
						$('.layers-' + lId + '').nextAll('.layer:visible').each(function () {
							lsstr = $('.layers-' + lId + '').nextAll('.layer:visible').attr('id');
							lsId = lsstr.substring(7, 20);
							$('#form_layer_' + lsId).show();
						});
						// alert('Next still and not hide');
					} else {
						$('.panel-layers .panel-footer').hide();

					}
				}, //end success
				error : function () {
					alert('Error401');
				},
				dataType : 'html'
			});

		} else {
			return false;
		}
	}); //end delete layer

		var _mheight = $("#frame_layer").height();
		var _mwidth = $("#frame_layer").width();						
		$('.tp-caption').draggable({						
			stop: function(event, ui) {
				// Show dropped position.
				strId = $(this).attr('id');		
				currentId = strId.substring(8, 20);				
				var Stoppos = $(this).position();
				$('#data_x_' + currentId).val(Math.round(Stoppos.left));							
				$('#data_y_' + currentId).val(Math.round(Stoppos.top));		
						
			}
		});
		$('.tp-caption').resizable({
			resize: function(event, ui) {
		    console.log(ui.size); // gives you the current size of the div
		    var size = ui.size;
		  },
			// containment: 'children',
			stop: function(event, ui) {
				// Show dropped position.
				strId = $(this).attr('id');		
				currentId = strId.substring(8, 20);				
				var Stoppos = $(this).position();
				$('#data_width_' + currentId).val(Math.round($(this).width()));							
				$('#data_height_' + currentId).val(Math.round($(this).height()));
			}
		});

		$('.toogle').click(function(e){
			$('.wrap-slider').toggle(200);
		});
	
});