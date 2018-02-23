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
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<script type="text/javascript">
jQuery(function ($) {
    "use strict";
	var categorytabCarousel = $(".megatab-carousel");			
	var items = {if $cols}{$cols|escape:'htmlall':'UTF-8'}{else}4{/if},
	itemsDesktop = {if $cols}{$cols|escape:'htmlall':'UTF-8'}{else}4{/if},
	itemsDesktopSmall = {if $cols_md}{$cols_md|escape:'htmlall':'UTF-8'}{else}3{/if},
	itemsTablet = {if $cols_sm}{$cols_sm|escape:'htmlall':'UTF-8'}{else}2{/if},
	itemsMobile = {if $cols_xs}{$cols_xs|escape:'htmlall':'UTF-8'}{else}1{/if};
	var rtl = false;
	if ($("body").hasClass("rtl")) rtl = true;				
	categorytabCarousel.owlCarousel({
		responsiveClass:true,
		responsive:{			
			1199:{
				items:itemsDesktop
			},
			991:{
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
		nav: {if $navigation == '1'}true{else}false{/if},
		dots: {if $pagination == '1'}true{else}false{/if},
		autoplay:{if $autoplay == '1'}true{else}false{/if},
		rewindNav: {if $rewind == '1'}true{else}false{/if},
		navigationText: ["", ""],
		slideBy: {if $slidebypage == '1'}'page'{else}1{/if},
		slideSpeed: 200	
	});
});
</script>
{if $addon_title}
<div class="addon-title">
	<h3>{$addon_title|escape:'htmlall':'UTF-8'}</h3>
</div>
{/if}
{if $addon_desc}
<p class="addon-desc">{$addon_desc|escape:'htmlall':'UTF-8'}</p>
{/if}
{assign var="box_template" "{$addon_tpl_dir}productbox.tpl"}
<div class="jms-tab1">
	<ul class="nav nav-tabs" role="tablist">
		{foreach from = $categories key = k item = category}
			<li class="{if $k == 0}active{/if}"><a class="button" data-toggle="tab" href="#category-{$category.id_category nofilter}">{$category.name|escape:'htmlall':'UTF-8'}</a></li>					
		{/foreach}	
	</ul>
</div>
<div class="tab-content">
	{foreach from = $categories key = k item = category}
		 <div role="tabpanel" class="tab-pane {if $k == 0}active{/if}" id="category-{$category.id_category nofilter}">
			<div class="megatab-carousel">	
				{foreach from = $category.products item = products_slide}				
					<div class="item">
						{foreach from = $products_slide item = product}
							{include file={$box_template nofilter} product=$product}	
						{/foreach}
					</div>
				{/foreach}
			</div>
		 </div>		
	{/foreach}	
</div>
