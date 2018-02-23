{*
* 2007-2015 PrestaShop
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
*  @copyright  2007-2015 PrestaShop SA
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<script type="text/javascript">
jQuery(function ($) {
    "use strict";
	var productCarousel = $(".owl-demo"),
	container = $(".container");	
	if (productCarousel.length > 0) productCarousel.each(function () {
	var items = {$items_num},
	    itemsDesktop = {$items_num},
	    itemsDesktopSmall = 2,
	    itemsTablet = 2,
	    itemsMobile = 1;	
	$(this).owlCarousel({
	    items: items,
	    itemsDesktop: [1199, itemsDesktop],
	    itemsDesktopSmall: [980, itemsDesktopSmall],
	    itemsTablet: [768, itemsTablet],
	    itemsTabletSmall: false,
	    itemsMobile: [480, itemsMobile],
	    navigation: ({$navigation} == 1) ? true : false,
	    pagination: ({$pagination} == 1) ? true : false,
	    autoPlay:({$auto} == 1) ? true : false,
	    rewindNav: ({$rewindNav} == 1) ? true : false,
	    navigationText: ["", ""],
	    scrollPerPage: ({$scrollPerPage} == 1) ? true : false,
	    slideSpeed: {$speed},
	    beforeInit: function rtlSwapItems(el) {
	        if ($("body").hasClass("rtl")) el.children().each(function (i, e) {
	            $(e).parent().prepend($(e))
	        })
	    },
	    afterInit: function afterInit(el) {
	        if ($("body").hasClass("rtl")) this.jumpTo(1000)
	    }
	})
	});
  });
</script>


<div id="boxslider">
<div class="owl-demo">
		{foreach from=$products item=product key=k name=hotdeals}	
		<article class="product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
		  <div class="thumbnail-container">
			{block name='product_thumbnail'}
			  <a href="{$product.url}" class="thumbnail product-thumbnail">
				<img
				  src = "{$product.cover.bySize.home_default.url}"
				  alt = "{$product.cover.legend}"
				  data-full-size-image-url = "{$product.cover.large.url}"
				>
			  </a>
			{/block}

			<div class="product-description">
			  {block name='product_name'}
				<h1 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h1>
			  {/block}

			  {block name='product_price_and_shipping'}
				{if $product.show_price}
				  <div class="product-price-and-shipping">
					{if $product.has_discount}
					  {hook h='displayProductPriceBlock' product=$product type="old_price"}

					  <span class="regular-price">{$product.regular_price}</span>
					  {if $product.discount_type === 'percentage'}
						<span class="discount-percentage">{$product.discount_percentage}</span>
					  {/if}
					{/if}

					{hook h='displayProductPriceBlock' product=$product type="before_price"}

					<span itemprop="price" class="price">{$product.price}</span>

					{hook h='displayProductPriceBlock' product=$product type='unit_price'}

					{hook h='displayProductPriceBlock' product=$product type='weight'}
				  </div>
				{/if}
			  {/block}
			</div>
			{block name='product_flags'}
			  <ul class="product-flags">
				{foreach from=$product.flags item=flag}
				  <li class="{$flag.type}">{$flag.label}</li>
				{/foreach}
			  </ul>
			{/block}
			<div class="highlighted-informations{if !$product.main_variants} no-variants{/if} hidden-sm-down">
			  <a
				href="#"
				class="quick-view"
				data-link-action="quickview"
			  >
				<i class="material-icons search">&#xE8B6;</i> {l s='Quick view' d='Shop.Theme.Actions'}
			  </a>

			  {block name='product_variants'}
				{if $product.main_variants}
				  {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
				{/if}
			  {/block}
			</div>

		  </div>
		  <div class="countdown" id="countdown-{$hotdeals[$k].id_hotdeals|escape:'html'}">{$hotdeals[$k].deals_time|escape:'html'}</div>	
		</article>
								
		{/foreach}

</div>						

					{if ($viewsAll == 1)} 
					<div class="view_all">
						<h6 class="view"><a href="{$link->getModuleLink('hotdeals','allproduct')}">
							{l s='View all product sale' d='Shop.Theme'}
						</a></h6>
					</div>

					{/if}
</div>