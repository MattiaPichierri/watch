{*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2017 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div class="panel">
	<h3><i class="icon-list-ul"></i> 
		{l s='Testimonial list' d='Modules.JmsTestimonials.Admin'}
		<span class="panel-heading-action">
			<a id="desc-product-new" class="list-toolbar-btn" href="{$link->getAdminLink('AdminModules') nofilter}&configure=jmstestimonials&addTes=1">
			<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Add new" data-html="true">
				<i class="process-icon-new "></i>
			</span>
		</a>
		</span>
	</h3>
	<script>
			$(document).ready(function(){
				$('.toogle').click(function(e){
					$('#slidesContent').toggle(200);
				});
				$('.panel-heading').click(function(e){
					$(this).next('.form-wrapper').toggle(200);
				});
			});
				
	</script>
	<div id="slidesContent">
		<div id="slides">
			{foreach from=$testimonials item=testimonial}
				<div id="slides_1" class="panel slideContent_">
					<div class="row">
						<div class="col-lg-1">
							<span><i class="icon-arrows"></i></span>
						</div>
						<div class="col-md-3">
						
							{if $testimonial.image}
							<img src="{$image_url nofilter}{$testimonial.image nofilter}" alt="{$testimonial.author nofilter}" class="img-thumbnail" />
							{/if}
						</div>
						<div class="col-md-8">
							<h4 class="pull-left"> #{$testimonial.id_testimonial nofilter}- {$testimonial.author nofilter}</h4>							
							<div class="btn-group-action pull-right">								
								<a class="btn {if $testimonial.active}btn-success{else}btn-danger{/if}"
									href="{$link->getAdminLink('AdminModules') nofilter}&configure=jmstestimonials&changeStatus&status_id_testimonial={$testimonial.id_testimonial nofilter}" title="title="{if $testimonial.active}Enabled{else}Disabled{/if}"">
									<i class="{if $testimonial.active}icon-check{else}icon-remove{/if}"></i>{if $testimonial.active}Enabled{else}Disabled{/if}
								</a>
								<a class="btn btn-default"
									href="{$link->getAdminLink('AdminModules') nofilter}&configure=jmstestimonials&id_testimonial={$testimonial.id_testimonial nofilter}"
									<i class="icon-edit"></i>
									{l s='Edit' d='Modules.JmsTestimonials.Admin'}
								</a>
								<a class="btn btn-default"
									href="{$link->getAdminLink('AdminModules') nofilter}&configure=jmstestimonials&delete_id_tes={$testimonial.id_testimonial nofilter}">
									<i class="icon-trash"></i>
									{l s='Delete' d='Modules.JmsTestimonials.Admin'}
								</a>
							</div>
						</div>
					</div>
				</div>
			{/foreach}
		</div>
	</div>
</div>