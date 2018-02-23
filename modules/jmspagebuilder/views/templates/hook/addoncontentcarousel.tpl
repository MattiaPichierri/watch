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
	var contentCarousel = $(".content-carousel");		
	var items = 3,
	    itemsDesktop = {if $items_show}{$items_show nofilter}{else}5{/if},
	    itemsDesktopSmall = {if $items_show_md}{$items_show_md nofilter}{else}4{/if},
	    itemsTablet = {if $items_show_sm}{$items_show_sm nofilter}{else}3{/if},
	    itemsMobile = {if $items_show_xs}{$items_show_xs nofilter}{else}2{/if};
	var rtl = false;
	if ($("body").hasClass("rtl")) rtl = true;				
	contentCarousel.owlCarousel({
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
	<h3>{$addon_title nofilter}</h3>
</div>
{/if}
{if $addon_desc}
<p class="addon-desc">{$addon_desc nofilter}</p>
{/if}
<div class="content-carousel{if isset($box_class) && $box_class} {$box_class nofilter}{/if}">
{foreach from=$contents item=content}
	{if $content.image || $content.content}
	<div class="content-item">	
		{if isset($content.image) && $content.image}<img src="{$root_url nofilter}{$content.image nofilter}" alt="Joommasters.com" />{/if}
		{if isset($content.content) && $content.content}{$content.content nofilter}{/if}		
	</div>
	{/if}
{/foreach}
</div>