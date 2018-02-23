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
<div class="product-miniature js-product-miniature product-box" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}">
	<div class="preview flexbox">
		{block name='product_thumbnail'}
		  <a href="{$product.url}" class="product-image {if isset($jpb_phover) && $jpb_phover == 'image_swap'}image_swap{else}image_blur{/if}">
			<img class="img-responsive product-img1 replace-2x"
			  src = "{$product.cover.bySize.small_default.url}"
			  alt = "{$product.cover.legend}"
			  data-full-size-image-url = "{$product.cover.large.url}"
			/>
			{if isset($jpb_phover) && $jpb_phover == 'image_swap' && $product.images.1}
				<img class="img-responsive product-img2 replace-2x"
				  src = "{$product.images.1.bySize.small_default.url}"
				  alt = "{$product.images.1.legend}"
				  data-full-size-image-url = "{$product.images.1.large.url}"
				/>
			{/if}
		  </a>
		{/block}				
	</div>

    <div class="product-info">
	    {block name='product_name'}
			<a href="{$product.link|escape:'html'}" class="product-name">{$product.name|escape:'html':'UTF-8'}</a>
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
	   
    </div>
   
</div>