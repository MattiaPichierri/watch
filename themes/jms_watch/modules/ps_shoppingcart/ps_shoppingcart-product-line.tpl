<div class="cart-wrap clearfix">
	<a class="preview-image" href="{$product.url}" title="{$product.name|escape:'html':'UTF-8'}">
		<img alt="{$product.name|escape:'html':'UTF-8'}" src="{$product.cover.bySize.cart_default.url}" class="preview img-responsive" data-full-size-image-url = "{$product.cover.large.url}">
	</a>
	<div class="description"> 
		<a href="" title="{$product.name|escape:'html':'UTF-8'}">
			{$product.name}
		</a>
		<div class="price-quantity">
			<span class="price">
				{$product.price}
			</span>
		</div>
		<div class="quantity-formated">
		
			<span class="quantity">
				{$product.quantity}
			</span>
		</div>
	</div>
	<span class="remove_link">
		<a class="remove-from-cart" rel="nofollow" href="{$product.remove_from_cart_url}" data-link-action="remove-from-cart" title="{l s='remove from cart' d='Shop.Theme.Actions'}" >
			<i class="fa fa-trash-o"></i>
		</a>
	</span>
</div>