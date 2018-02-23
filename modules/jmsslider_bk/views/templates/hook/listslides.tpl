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
<script type="text/javascript">
            $(function() {
                var $mySlides = $("#slides");
                $mySlides.sortable({
                    opacity: 0.6,
                    cursor: "move",
                    update: function() {
                        var order = $(this).sortable("serialize") + "&action=updateSlidesOrdering";                     
                        $.post("{$root_url nofilter}modules/jmsslider/ajax_jmsslider.php?" + order);
                        }
                    });
                $mySlides.hover(function() {
                    $(this).css("cursor","move");
                    },
                    function() {
                    $(this).css("cursor","auto");
                });
            });
</script>			
<div class="panel">
	<h3>
	<span title="" data-toggle="tooltip" class="label-tooltip toogle" data-original-title="Click to Toggle" data-html="true">
		<i class="icon-list-ul"></i> {l s='Slides list' d='Modules.JmsSlider'}
	</span>
	
	<span class="panel-heading-action">
		<a  href="{$link->getAdminLink('AdminModules') nofilter}&configure=jmsslider&addSlide=1" class="btn btn-default btn-success" id="addSlide" title="{l s='Add Slide' d='Modules.JmsSlider'}">
			<i class="icon-plus"></i>
		</a>
		
	</span>
	</h3>
	<script>
	$(document).ready(function(){
		$('.toogle').click(function(e){
			$('#slidesContent').toggle(200);
		});				
	});
				
	</script>
	<div id="slidesContent">
		<div id="slides">
			{if $slides|@count gt 0}
			{foreach from=$slides item=slide}
			<div id="slides_{$slide.id_slide nofilter}" class="panel">
				<div class="row">
					<div class="col-lg-1">
						<span><i class="icon-arrows "></i></span>
					</div>
					<div class="col-md-2">
						#{$slide.id_slide nofilter} - {$slide.title nofilter}
					</div>
					<div class="col-md-2">
						{if $slide.iso_lang}
						<strong>{l s='Language' d='Modules.JmsSlider'}</strong> : <i>{$slide.iso_lang nofilter}</i>
						{else}
						<i>{l s='All Language' d='Modules.JmsSlider'}</i>
						{/if}
					</div>					
					<div class="col-md-2">
						<div class="btn-group-action pull-right">
							<a class="btn btn-default"
								href="{$link->getAdminLink('AdminModules') nofilter}&configure=jmsslider&layers=1&id_slide={$slide.id_slide nofilter}">
								<i class="icon-edit"></i>
								{l s='Layers Manager' d='Modules.JmsSlider'}
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="btn-group-action pull-right">
							
							<a class="btn btn-default" href="{$link->getAdminLink('AdminModules') nofilter}&configure=jmsslider&copySlide=1&id_slide={$slide.id_slide nofilter}">
								<i class="icon-copy"></i>
								{l s='Duplicate' d='Modules.JmsSlider'}
							</a>
							<a class="btn {if $slide.status}btn-success{else}btn-danger{/if}"
								href="{$link->getAdminLink('AdminModules') nofilter}&configure=jmsslider&changeStatus&id_slide={$slide.id_slide nofilter}" title="{if $slide.status}Enabled{else}Disabled{/if}">
								<i class="{if $slide.status}icon-check{else}icon-remove{/if}"></i>{if $slide.status}Enabled{else}Disabled{/if}
							</a>
							<a class="btn btn-default"
								href="{$link->getAdminLink('AdminModules') nofilter}&configure=jmsslider&editSlide=1&id_slide={$slide.id_slide nofilter}">
								<i class="icon-edit"></i>
								{l s='Edit' d='Modules.JmsSlider'}
							</a>
							<a class="btn btn-default" onclick="if(confirm('Are you sure want to remove this slide?')) { document.location='{$link->getAdminLink('AdminModules') nofilter}&configure=jmsslider&delete_id_slide={$slide.id_slide|escape:'htmlall'}'; } else { return true;}"
								>
								<i class="icon-trash"></i>
								{l s='Delete' d='Modules.JmsSlider'}
							</a>
						</div>
					</div>
				</div>
			</div>
			{/foreach}
			{else}
			{l s='There is no slide' d='Modules.JmsSlider'}
			{/if}
		</div>
	</div>
</div>