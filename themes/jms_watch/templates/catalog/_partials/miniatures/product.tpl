{**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

<div class="product-miniature js-product-miniature product-preview item-gutter-{$jpb_gutterwidth}" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}">
			   <div class="preview">
					{block name='product_thumbnail'}
					  <a href="{$product.url}" class="product-image {if isset($jpb_phover) && $jpb_phover == 'image_swap'}image_swap{else}image_blur{/if}">
						<img class="img-responsive product-img1"
						  src = "{$product.cover.bySize.home_default.url}"
						  alt = "{$product.cover.legend}"
						  data-full-size-image-url = "{$product.cover.large.url}"
						/>
						{if isset($jpb_phover) && $jpb_phover == 'image_swap' && $product.images.1}
							<img class="img-responsive product-img2"
							  src = "{$product.images.1.bySize.home_default.url}"
							  alt = "{$product.images.1.legend}"
							  data-full-size-image-url = "{$product.images.1.large.url}"
							/>
						{/if}
					  </a>
						{block name='product_flags'}
						{foreach from=$product.flags item=flag}
							{if $flag.label == 'New'}
							<span class="label label-new">New</span>
							{/if}
							{if $flag.label == 'On sale!'}
							<span class="label label-sale">{l s='Sale' d='Shop.Theme'}</span>
							{/if}
						{/foreach}
					   {/block}
					{/block}
					
						{block name='product_variants'}
							{if $product.main_variants}
								<div class="color_to_pick_list">
									{include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
								</div>
							{/if}
						{/block}
						{if $product.has_discount}
			                {hook h='displayProductPriceBlock' product=$product type="old_price"}
			                {if $product.discount_type === 'percentage'}
			                  <span class="discount-percentage">{$product.discount_percentage}</span>
			                {/if}
			            {/if}

						<div class="group-btn">
							<a title="Add to cart" {if $product.quantity < 1}disabled{/if} class="ajax-add-to-cart product-btn cart-button {if $product.quantity < 1}disabled{/if}" data-id-product="{$product.id}" data-minimal-quantity="{$product.minimal_quantity}" data-token="{if isset($static_token) && $static_token}{$static_token}{/if}">
								<span class="cart"></span>
								<i class="fa fa-spin fa-spinner"></i>
								<i class="pe pe-7s-check"></i>
							</a>
							<a href="javascript:void()" class="heart" onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|escape:'html'}', false, 1); return false;" data-id-product="{$product.id_product|escape:'html'}" title="{l s='Add to Wishlist'}">
								<span class="heart"></span>
							</a>
							<a href="#" title="Zoom">
								<span class="quick-view zoom"></span>
							</a>
						</div>
				</div>
						
		<div class="product-info">
		        {if isset($jpb_categoryname) && $jpb_categoryname}
				    <span class="categoryname">
						<a href="{url entity='category' id=$product.id_category_default}">
						{$product.category|escape:'html':'UTF-8'}</a>
					</span>
			    {/if}
				
					{block name='product_name'}
						<a href="{$product.link|escape:'html'}" class="product-link">{$product.name|escape:'html':'UTF-8'}</a>
					{/block}
				  
					{block name='product_price_and_shipping'}
						{if $product.show_price}
						  <div class="content_price">
							{if $product.has_discount}
							  {hook h='displayProductPriceBlock' product=$product type="old_price"}
							  <span class="old price">{$product.regular_price}</span>
							{/if}
							{hook h='displayProductPriceBlock' product=$product type="before_price"}
							<span class="price new">{$product.price}</span>

							{hook h='displayProductPriceBlock' product=$product type='unit_price'}

							{hook h='displayProductPriceBlock' product=$product type='weight'}
						  </div>
						{/if}
					{/block}
					<div class="product-description">
						{$product.description_short|strip_tags|truncate:170:'...' nofilter}
					 </div>
                    <div class="product_button">
							<a {if $product.quantity < 1}disabled{/if} class="ajax-add-to-cart product-btn cart-button btn-effect btn-default {if $product.quantity < 1}disabled{/if}" data-id-product="{$product.id}" data-minimal-quantity="{$product.minimal_quantity}" data-token="{if isset($static_token) && $static_token}{$static_token}{/if}">
								    <span class="text-addcart">{l s='Add to cart' d='Shop.Theme.Actions'}	</span>		
								    <span class="text-outofstock">{l s='Out of stock' d='Shop.Theme.Actions'}</span>
                                    <span class="fa fa-spin fa-spinner"></span>
									<span class="pe pe-7s-check"></span>								   
							</a>
                           {if isset($jpb_wishlist) && $jpb_wishlist}							
							<a class="addToWishlist product-btn btn-effect btn-default"  onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|escape:'html'}', false, 1); return false;" data-id-product="{$product.id_product|escape:'html'}" title="{l s='Add to Wishlist'}">
							  <span class="pe pe-7s-like"></span>
							</a>
							{/if}
					</div>
					
					
			
		</div>
		
</div>
