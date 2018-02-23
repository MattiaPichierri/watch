<div id="blockcart-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-xs-center" id="myModalLabel">
			{l s='Product successfully added to your shopping cart' d='Shop.Theme.Checkout'}
		</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-5 divide-right col-xs-6">
            
                <img class="product-image" src="{$product.cover.large.url}" alt="{$product.cover.legend}" title="{$product.cover.legend}" itemprop="image">        
                <h6 class="h6 product-name">{$product.name}</h6>
                {$product.price}
                {hook h='displayProductPriceBlock' product=$product type="unit_price"}
                {foreach from=$product.attributes item="property_value" key="property"}
                  <span><strong>{$property}</strong>: {$property_value}</span><br>
                {/foreach}
                <strong>{l s='Quantity:' d='Shop.Theme.Checkout'}</strong>&nbsp;{$product.cart_quantity}
             
            
          </div>
          <div class="col-md-7  col-xs-6 divide-left">
            <div class="cart-content">
              {if $cart.products_count > 1}
                <p class="cart-products-count">{l s='There are %products_count% items in your cart.' sprintf=['%products_count%' => $cart.products_count] d='Shop.Theme.Checkout'}</p>
              {else}
                <p class="cart-products-count">{l s='There is %product_count% item in your cart.' sprintf=['%product_count%' =>$cart.products_count] d='Shop.Theme.Checkout'}</p>
              {/if}
              <p><strong>{l s='Total products:' d='Shop.Theme.Checkout'}</strong>&nbsp;{$cart.subtotals.products.value}</p>
              <p><strong>{l s='Total shipping:' d='Shop.Theme.Checkout'}</strong>&nbsp;{$cart.subtotals.shipping.value} {hook h='displayCheckoutSubtotalDetails' subtotal=$cart.subtotals.shipping}</p>
              {if $cart.subtotals.tax}
              	<p><strong>{$cart.subtotals.tax.label}</strong>&nbsp;{$cart.subtotals.tax.value}</p>
              {/if}
              <p><strong>{l s='Total:' d='Shop.Theme.Checkout'}</strong>&nbsp;{$cart.totals.total.value} {$cart.labels.tax_short}</p>
              <button type="button" class="btn-default btn-secondary btn-effect btn-active  btn-cart" data-dismiss="modal">{l s='Continue shopping' d='Shop.Theme.Actions'}</button>
              <a href="{$cart_url}" class="btn-default btn-secondary btn-effect  btn-cart">{l s='proceed to checkout' d='Shop.Theme.Actions'}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
