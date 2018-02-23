<section class="featured-products clearfix">
	<div class="addon-title">
		<h3 class="products-section-title text-uppercase ">
			{l s='Feature Products' d='Shop.Theme.Catalog'}
		</h3>
	</div>
  
  <div class="products">
    {foreach from=$products item="product"}
      {include file="catalog/_partials/miniatures/product.tpl" product=$product}
    {/foreach}
  </div>
</section>