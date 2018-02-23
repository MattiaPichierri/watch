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
<div id="quickview-modal-{$product.id}-{$product.id_product_attribute}" class="modal fade quickview" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog cover_product1 container" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
      <div class="row">
        <div class="col-md-6 col-sm-6 hidden-xs-down left">
          {block name='product_cover_tumbnails'}
            {include file='catalog/_partials/product-cover-thumbnails.tpl'}
          {/block}
        </div>
		
        <div class="col-md-6 col-sm-6 right">
          <h2 class="product-name">{$product.name}</h2>
		  {block name='product_prices'}
					{include file='catalog/_partials/product-prices.tpl'}
		  {/block}
          {block name='product_description_short'}
            <div id="product-description-short" itemprop="description">{$product.description_short nofilter}</div>
          {/block}
		 <ul class="other-info">
						{if $product.reference}
												<!-- number of item in stock -->
						<li id="product_reference">
							<label>{l s='Product Code:' d='Shop.Theme.Catalog'}</label>
							<span class="editable">{$product.reference}</span>
						</li>
						{/if}
						<li id="pQuantityAvailable">
							<label>{l s='Quantity:' d='Shop.Theme.Catalog'}</label>
							<span id="quantityAvailable">{$product.quantity|intval}</span>
							<span {if $product.quantity > 1} style="display: none;"{/if}>{l s='Item' d='Shop.Theme.Catalog'}</span>
							<span {if $product.quantity == 1} style="display: none;"{/if}>{l s='Items' d='Shop.Theme.Catalog'}</span>
						</li>
												<!-- availability or doesntExist -->
						<li id="availability_statut">
							<label id="availability_label">
								{l s='Availability:' d='Shop.Theme.Catalog'}
							</label>
							<span id="availability_value" class="label-availability">
								{if $product.quantity|intval <= 0}
									{l s='Out stock' d='Shop.Theme.Catalog'}
								{else}
									{l s='In stock' d='Shop.Theme.Catalog'}
								{/if}
							</span>
						</li>
						<li>
						{if $product.additional_shipping_cost > 0}
							<label>{l s='Shipping tax: '}</label>
								<span class="shipping_cost">{$product.additional_shipping_cost}</span>
						{else}
							<label>{l s='Shipping tax:'}</label><span class="shipping_cost">{l s=' Free'}</span>
						{/if}
					</li>
	   </ul>
	   
          {block name='product_buy'}
            <div class="product-actions">
              <form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
                <input type="hidden" name="token" value="{$static_token}">
                <input type="hidden" name="id_product" value="{$product.id}" id="product_page_product_id">
                <input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id">
                {block name='product_variants'}
                  {include file='catalog/_partials/product-variants.tpl'}
                {/block}
				
                {block name='product_add_to_cart'}
                  {include file='catalog/_partials/product-add-to-cart.tpl'}
                {/block}
                
                {block name='product_refresh'}
                  <input class="product-refresh" data-url-update="false" name="refresh" type="submit" value="{l s='Refresh' d='Shop.Theme.Actions'}" hidden>
                {/block}
				
            </form>
          </div>
		  <div class="modal-footer">
		   {hook h='displayProductButtons' product=$product}
		  </div>
        {/block}
        </div>
      </div>
     </div>
     
   </div>
 </div>
</div>
