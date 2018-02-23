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
		var brandCarousel = $(".brand-carousel");
		var items = {if $items}{$items}{/if},
		    itemsDesktop = {if $items_show}{$items_show|escape:'htmlall':'UTF-8'}{else}5{/if},
		    itemsDesktopSmall = 4,
		    itemsTablet = 3,
		    itemsMobile = 2;
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;
		brandCarousel.owlCarousel({
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
			margin: 30,
		    nav: false,
		    loop: true,
		    dots: false,
			autoplay:{if $auto == '1'}true{else}false{/if},
			autoplaySpeed: 1000,
		    navigationText: ["", ""],
		    slideBy: 1,
		    slideSpeed: 200
		});
	});
</script>
<div class="addon-title">
	<h3>{l s='Brands' d='Modules.JmsBrands.Shop'}</h3>
</div>
<div class="brand-carousel">
	{foreach from=$brands item=brand name=jmsbrands}
		{if $brand.active}
			<div class="brand-item">
				{if $brand.image}
					<a href="{$brand.url nofilter}" title="{$brand.title nofilter}">
						<img class="brand-image" src="{$root_url nofilter}modules/jmsbrands/views/img/{$brand.image nofilter}" alt="Brand_Image"/>
					</a>
				{/if}
			</div>
		{/if}
	{/foreach}
</div>