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
	var h_items = {if $items_show}{$items_show nofilter}{else}1{/if},
	    h_itemsDesktop = {if $items_show}{$items_show nofilter}{else}1{/if},
	    h_itemsDesktopSmall = {if $items_show_md}{$items_show_md nofilter}{else}1{/if},
	    h_itemsTablet = {if $items_show_sm}{$items_show_sm nofilter}{else}1{/if},
	    h_itemsMobile = {if $items_show_xs}{$items_show_xs nofilter}{else}1{/if};
</script>
{if $addon_title}
<div class="addon-title">
	<h3>{$addon_title nofilter}</h3>
</div>
{/if}
{if $addon_desc}
<p class="addon-desc">{$addon_desc nofilter}</p>
{/if}
<div class="jms-hotdeal">
<div class="hotdeal-carousel">
		{foreach from=$products item=product key=k}	
			<div class="item">
			  <div class="product-box" itemtype="http://schema.org/Product" data-id-product="{$product.id_product nofilter}" data-id-product-attribute="{$product.id_product_attribute nofilter}" >
				{block name='product_thumbnail'}
					<div class="preview">
				  <a href="{$product.url nofilter}" class="product-image">
					<img class="img-responsive"
					  src = "{$product.cover.bySize.home_default.url nofilter}"
					  alt = "{$product.cover.legend nofilter}"
					  data-full-size-image-url = "{$product.cover.large.url nofilter}"
					>
				  </a>
				  {block name='product_flags'}
					{foreach from=$product.flags item=flag}
						{if $flag.label == 'New'}
						<span class="label label-new">{$flag.label nofilter}</span>
						{/if}
						{if $flag.label == 'Sale'}
						<span class="label label-sale">{$flag.label nofilter}</span>
						{/if}
					{/foreach}
				{/block}
				  </div>
				{/block}

				<div class="product-info">
				  {block name='product_name'}
				   <a href="{$product.url nofilter}" class="product-name">{$product.name|truncate:30:'...' nofilter}</a>
				  {/block}

				  {block name='product_price_and_shipping'}
					{if $product.show_price}
					  <div class="content_price">
						{if $product.has_discount}
						  {hook h='displayProductPriceBlock' product=$product type="old_price"}
						  <span class="old price">{$product.regular_price nofilter}</span>
						{/if}
						{hook h='displayProductPriceBlock' product=$product type="before_price"}
						<span itemprop="price" class="price new">{$product.price nofilter}</span>

						{hook h='displayProductPriceBlock' product=$product type='unit_price'}

						{hook h='displayProductPriceBlock' product=$product type='weight'}
					  </div>
					{/if}
				  {/block}
				  <div class="countdown" id="countdown-{$hotdeals[$k].id_hotdeals nofilter}">{$hotdeals[$k].deals_time nofilter}</div>
				  <div class="description_short">
						{$product.description_short nofilter}
				  </div>
				  <div class= "product-buttons" >
					<ul>
					<li>
					<a  href="#" class="ajax-add-to-cart product-btn cart-button" data-link-action="{$urls.pages.cart nofilter}" data-id-product="{$product.id nofilter}">
						<span class="fa fa-shopping-cart"></span>
						{l s='Add to cart' d='Shop.Theme.Actions'}
					</a>
					</li>
					<li>
					<a href="#" class="quick-view product-btn" data-link-action="quickview">
						<span class="fa fa-eye" aria-hidden="true"></span>
					</a>
					</li>
					</ul>
				  </div>
				</div>
				<div class="highlighted-informations{if !$product.main_variants} no-variants{/if} hidden-sm-down">
				  {block name='product_variants'}
					{if $product.main_variants}
					  {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
					{/if}
				  {/block}
				</div>
  </div>
  </div>
		{/foreach}
</div>
{if ($showall_link == '1')} 
<div class="hotdeal-viewall">
<a href="{$link->getModuleLink('hotdeals','allproduct') nofilter}">{l s='View All Product' d='Modules.JmsPagebuilder'}</a>
</div>
{/if}
</div>