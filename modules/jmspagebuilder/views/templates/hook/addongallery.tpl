{*
* 2007-2014 PrestaShop
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
<script type="text/javascript">
{if $gallery_fancybox == 1}
	$(document).ready(function() {
	/* Apply fancybox to multiple items */
		$('.grouped_elements').fancybox();
	});
{/if}
{if $gallery_masonry == 1}
	$(document).ready(function() {
		var $grid = $('.masonry-gallery').imagesLoaded( function() {
		// init Masonry after all images have loaded
		$grid.masonry({
				});
		});
	});
	
		$( document ).ready(function () {
			$(".gallery_img").hover(
				function() {
					$(this).next().fadeIn(1000);
				},
				function() {
					$(this).next().fadeOut(1000);
				}
			);
		
			$(".gallery_img").hover(
				function() {
					$(this).next().css("title-disable");
				},
				function() {
					$(this).next().addClass("title-disable");
				}
			);
		});
	{else}
		jQuery(function ($) {
			"use strict";
			var galleryCarousel = $(".gallery-carousel");		
			var items = {if $cols}{$cols nofilter}{else}4{/if},
			itemsDesktop = {if $cols}{$cols nofilter}{else}4{/if},
			itemsDesktopSmall = {if $cols_md}{$cols_md nofilter}{else}3{/if},
			itemsTablet = {if $cols_sm}{$cols_sm nofilter}{else}2{/if},
			itemsMobile = {if $cols_xs}{$cols_xs nofilter}{else}1{/if};
			var rtl = false;
			if ($("body").hasClass("rtl")) rtl = true;				
			galleryCarousel.owlCarousel({
				responsiveClass:true,
				responsive:{			
					1199:{
							items:itemsDesktop
						},
					992:{
							items:itemsDesktopSmall
						},
					768:{
							items:itemsTablet
						},
					318:{
							items:itemsMobile
						}
				},
				rtl: rtl,
				margin: 30,
				nav: {if $navigation == '1'}true{else}false{/if},
				dots: {if $pagination == '1'}true{else}false{/if},
				autoplay:{if $autoplay == '1'}true{else}false{/if},
				rewindNav: {if $rewind == '1'}true{else}false{/if},
				navigationText: ["", ""],
				slideBy: {if $slidebypage == '1'}'page'{else}1{/if},
				slideSpeed: 200	
			});
		});
{/if}
</script>
{if isset($items) AND $items}
	{if $gallery_masonry == 1}
	<div class="masonry-gallery row">
		{foreach from=$items item=item}		
			<div class="item">
				<div class="gallery-masonry-img gallery_img">
						<a class="grouped_elements" data-fancybox-group="gallery" href="{$image_baseurl|escape:'htmlall':'UTF-8'}{$item.image|escape:'htmlall':'UTF-8'}">
							<img src="{$image_baseurl|escape:'htmlall':'UTF-8'}{$item.image|escape:'htmlall':'UTF-8'}" alt="{$item.title|escape:'htmlall':'UTF-8'}" />
						</a>
				</div>
				<div class="title-disable gallery-title">
					<span>{$item.title nofilter}</span>
				</div>	
			</div>	
		{/foreach}
	</div>
	{else}
	<div class="gallery-carousel">
		{foreach from = $items item = images_slide}
			{foreach from = $images_slide item=item}
				<div class="gallery-item">
					<a class="grouped_elements" data-fancybox-group="gallery" href="{$image_baseurl|escape:'htmlall':'UTF-8'}{$item.image|escape:'htmlall':'UTF-8'}">
						<img src="{$image_baseurl|escape:'htmlall':'UTF-8'}thumb_{$item.image|escape:'htmlall':'UTF-8'}" alt="{$item.title|escape:'htmlall':'UTF-8'}" />
					</a>					
				</div>
			{/foreach}
		{/foreach}
	</div>
	{/if}
{else}	
{l s='Sorry, dont have any image in this section' d='Modules.JmsPagebuilder'}
{/if}


