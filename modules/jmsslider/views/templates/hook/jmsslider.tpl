{**
* 2007-2017 PrestaShop
*
* Slider Layer module for prestashop
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*}

<div class="jms-slider-wrapper">
	<div class="responisve-container">
		<div class="slider" >
		<div class="fs_loader"></div>
		{foreach from=$slides item=slide}
			<div class="slide {$slide.class_suffix nofilter}" style="background:{$slide.bg_color nofilter} url({$root_url nofilter}modules/jmsslider/views/img/slides/{$slide.bg_image nofilter}) no-repeat left top;background-size:cover;" {if $slide.slide_link}onclick="document.location='{$slide.slide_link nofilter}';"{/if}>
				{foreach from=$slide.layers item=layer}
					{if $layer.data_type=='text'}
					<div class="{$layer.data_class_suffix nofilter} jms-slide-content" 
					{if $layer.data_fixed}data-fixed{/if} 
					data-position="{$layer.data_y nofilter},{$layer.data_x nofilter}" 
					data-fontsize = "{$layer.data_font_size nofilter}"
					{if $layer.data_line_height}
					data-lineheight = "{$layer.data_line_height nofilter}px"
					{/if}
					data-in="{$layer.data_in nofilter}" 
					data-out="{$layer.data_out nofilter}" 
					data-delay="{$layer.data_delay nofilter}" 
					data-ease-in="{$layer.data_ease_in nofilter}" 
					data-ease-out="{$layer.data_ease_out nofilter}" 
					data-step="{$layer.data_step nofilter}" 
					data-special="{$layer.data_special nofilter}"
					data-time = "{$layer.data_time nofilter}"
					style="font-size: {$layer.data_font_size nofilter}px; font-style:{$layer.data_style nofilter}; color: {$layer.data_color nofilter}; line-height:{if $layer.data_line_height}{$layer.data_line_height nofilter}px{/if};"					
					>{$layer.data_html nofilter}
					</div>
					{elseif $layer.data_type=='image'}					
					<img class="{$layer.data_class_suffix nofilter} jms-slide-content" 
					src="{$root_url nofilter}modules/jmsslider/views/img/layers/{$layer.data_image nofilter}" 
					{if $layer.data_fixed}data-fixed{/if} 
					data-position="{$layer.data_y nofilter},{$layer.data_x nofilter}" 
					data-in="{$layer.data_in nofilter}" 
					data-out="{$layer.data_out nofilter}" 
					data-delay="{$layer.data_delay nofilter}" 
					data-ease-in="{$layer.data_ease_in nofilter}" 
					data-ease-out="{$layer.data_ease_out nofilter}" 
					data-time = "{$layer.data_time nofilter}"
					data-step="{$layer.data_step nofilter}" 
					data-special="{$layer.data_special nofilter}" 
					width="{$layer.data_width nofilter}" 
					height="{$layer.data_height nofilter}"/>
					{else}
						
					<iframe class="{$layer.data_class_suffix nofilter} jms-slide-content"
					{if $layer.data_fixed || $layer.data_video_bg}data-fixed{/if} 
					data-position="{$layer.data_y nofilter},{$layer.data_x nofilter}" 
					data-in="{$layer.data_in nofilter}" 
					data-out="{$layer.data_out nofilter}" 
					{if $layer.data_video_bg}data-delay="0"{else}data-delay="{$layer.data_delay nofilter}" {/if}
					data-ease-in="{$layer.data_ease_in nofilter}" 
					data-ease-out="{$layer.data_ease_out nofilter}" 
					data-step="{$layer.data_step nofilter}" 
					data-special="{$layer.data_special nofilter}"
					data-time = "{$layer.data_time nofilter}"
					{if $layer.data_video_bg}
						width="{$configs.JMS_SLIDER_WIDTH nofilter}"
						height="{$configs.JMS_SLIDER_HEIGHT nofilter}"
					{else}
						width="{$layer.data_width nofilter}"
						height="{$layer.data_height nofilter}"
					{/if}
					{if $layer.videotype == 'youtube'}
						src="http://www.youtube.com/embed/{$layer.data_video|substr:($layer.data_video|strpos:'?v='+3)}?autoplay={$layer.data_video_autoplay nofilter}&controls={$layer.data_video_controls nofilter}&loop={$layer.data_video_loop nofilter}"
					{else if $layer.videotype == 'vimeo'}
						 {assign var=vimeo_link value = ("/"|explode:$layer.data_video)}
						src="https://player.vimeo.com/video/{$vimeo_link[$vimeo_link|count-1]}?autoplay={$layer.data_video_autoplay nofilter}&loop={$layer.data_video_loop nofilter}"
					{/if}	
					allowfullscreen 
					frameborder="0">
					</iframe> 
					{/if}
				{/foreach}
			</div>
		{/foreach}
		</div>
	</div>
</div>

  
<script type="text/javascript">
	$(window).load(function(){
		$('.slider').fractionSlider({	
			'slideTransition' : "{$configs.JMS_SLIDER_TRANS nofilter}",
			'slideEndAnimation' : {if $configs.JMS_SLIDER_END_ANIMATE}true{else}false{/if},
			'transitionIn' : "{$configs.JMS_SLIDER_TRANS_IN nofilter}", // default in - transition
			'transitionOut' : "{$configs.JMS_SLIDER_TRANS_OUT nofilter}", // default out - transition
			'fullWidth' : {if $configs.JMS_SLIDER_FULL_WIDTH}true{else}false{/if}, // transition over the full width of the window
			'delay' : {$configs.JMS_SLIDER_DELAY nofilter}, // default delay for elements
			'timeout' : {$configs.JMS_SLIDER_DURATION nofilter}, // default timeout before switching slides
			'speedIn' : {$configs.JMS_SLIDER_SPEED_IN nofilter},
			'speedOut' : {$configs.JMS_SLIDER_SPEED_OUT nofilter}, // default in - transition speed
			'easeIn' : "{$configs.JMS_SLIDER_EASE_IN nofilter}", // default easing in
			'easeOut' : "{$configs.JMS_SLIDER_EASE_OUT nofilter}", // default easing out
			'controls' : {if $configs.JMS_SLIDER_SHOW_CONTROLS}true{else}false{/if}, // controls on/off
			'pager' : {if $configs.JMS_SLIDER_SHOW_PAGES}true{else}false{/if}, // pager inside of the slider on/off OR $('someselector') for a pager outside of the slider
			'autoChange' : {if $configs.JMS_SLIDER_AUTO_CHANGE}true{else}false{/if}, // auto change slides
			'pauseOnHover' : {if $configs.JMS_SLIDER_PAUSE_HOVER}true{else}false{/if}, // Pauses slider on hover (current step will still be completed)
			'backgroundAnimation' : {if $configs.JMS_SLIDER_BG_ANIMATE}true{else}false{/if},
			'backgroundEase' : "{$configs.JMS_SLIDER_BG_EASE nofilter}",
			'responsive' : {if $configs.JMS_SLIDER_RESPONSIVE}true{else}false{/if}, // responsive slider (see below for some implementation tipps)
			'dimensions' : "{$configs.JMS_SLIDER_WIDTH nofilter},{$configs.JMS_SLIDER_HEIGHT nofilter}",
		});
	});
</script>