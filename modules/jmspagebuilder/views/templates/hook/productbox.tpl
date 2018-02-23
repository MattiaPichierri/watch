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
<div class="product-box" itemscope itemtype="http://schema.org/Product">
	<a href="{$product.link nofilter}" class="product-image {$jpb_phover nofilter}" data-id-product="{$product.id_product nofilter}" itemprop="url">
		<img class="img-responsive product-img1" src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default') nofilter}" alt="{$product.name|escape:html:'UTF-8'}" itemprop="image" />
	</a>
	<div class="product-info">
		<a href="{$product.link|escape:'html'}" itemprop="url" itemprop="name">{$product.name|truncate:25:'...' nofilter}</a>
		{hook h='displayProductListReviews' product=$product}		
		<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
			{if $product.show_price AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}<span class="price new" itemprop="price">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span>{/if}
			{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
				{hook h="displayProductPriceBlock" product=$product type="old_price"}								
				<span class="old price">
				{displayWtPrice p=$product.price_without_reduction}
				</span>	
			{/if}
			<meta itemprop="priceCurrency" content="{$currency->iso_code nofilter}" />
		</div>	
	</div>		 
</div>