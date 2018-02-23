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
{extends file=$layout}
{block name='head_seo' prepend}
  <link rel="canonical" href="{$product.canonical_url}">
{/block}

{block name='head' append}
  <meta property="og:type" content="product">
  <meta property="og:url" content="{$urls.current_url}">
  <meta property="og:title" content="{$page.meta.title}">
  <meta property="og:site_name" content="{$shop.name}">
  <meta property="og:description" content="{$page.meta.description}">
  <meta property="og:image" content="{$product.cover.large.url}">
  <meta property="product:pretax_price:amount" content="{$product.price_tax_exc}">
  <meta property="product:pretax_price:currency" content="{$currency.iso_code}">
  <meta property="product:price:amount" content="{$product.price_amount}">
  <meta property="product:price:currency" content="{$currency.iso_code}">
  {if isset($product.weight) && ($product.weight != 0)}
  <meta property="product:weight:value" content="{$product.weight}">
  <meta property="product:weight:units" content="{$product.weight_unit}">
  {/if}
{/block}

{block name='content'}

  <section id="main" itemscope itemtype="https://schema.org/Product">
    <meta itemprop="url" content="{$product.url}">
    <div class="row product-detail">
      <div class="pb-left-column col-sm-6 col-md-6 col-lg-6 col-xs-12">
	   <div class="pd-left-content">
          {block name='page_content_container'}
          <section class="page-content" id="content">
            {block name='page_content'}
			 {block name='product_flags'}
                <ul class="product-flags">
                  {foreach from=$product.flags item=flag}
                    <li class="product-flag {$flag.type}">{$flag.label}</li>
                  {/foreach}
                </ul>
              {/block}

              {block name='product_cover_tumbnails'}
                {include file='catalog/_partials/product-cover-thumbnails.tpl'}
              {/block}
              <div class="scroll-box-arrows">
                <i class="fa fa-angle-left left"></i>
                <i class="fa fa-angle-right right"></i>
              </div>

            {/block}
          </section>
        {/block}
		 </div>
        </div>
        <div class="pb-right-column col-xs-12 col-sm-12 col-md-6 col-lg-6">
			{block name='page_header_container'}
				{block name='page_header'}
					<h2  itemprop="name">{block name='page_title'}{$product.name}{/block}</h2>
				{/block}
			{/block}
			{block name='product_prices'}
				{include file='catalog/_partials/product-prices.tpl'}
            {/block}
			<div class="product-information">
				{block name='product_description_short'}
					<div id="product-description-short-{$product.id}" class="product-desc"itemprop="description">{$product.description_short|strip_tags|truncate:100:"..."}</div>
				{/block}
			
				{if $product.is_customizable && count($product.customizations.fields)}
					{block name='product_customization'}
						{include file="catalog/_partials/product-customization.tpl" customizations=$product.customizations}
					{/block}
				{/if}
				
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
				<div class="product-actions">
					{block name='product_buy'}
						<form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
							<input type="hidden" name="token" value="{$static_token}">
							<input type="hidden" name="id_product" value="{$product.id}" id="product_page_product_id">
							<input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id">

							{block name='product_variants'}
								{include file='catalog/_partials/product-variants.tpl'}
							{/block}

							{block name='product_pack'}
							{if $packItems}
								<section class="product-pack">
									<h3 class="h4">{l s='This pack contains' d='Shop.Theme.Catalog'}</h3>
									{foreach from=$packItems item="product_pack"}
										{block name='product_miniature'}
											{include file='catalog/_partials/miniatures/pack-product.tpl' product=$product_pack}
										{/block}
									{/foreach}
								</section>
							{/if}
							{/block}
							
							{block name='product_discounts'}
								{include file='catalog/_partials/product-discounts.tpl'}
							{/block}
							
							{block name='product_add_to_cart'}
								{include file='catalog/_partials/product-add-to-cart.tpl'}
							{/block}
							{hook h='displayProductButtons' product=$product}

							{block name='product_refresh'}
								<input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="{l s='Refresh' d='Shop.Theme.Actions'}">
							{/block}
						</form>
					{/block}
				</div>
				{hook h='displayReassurance'}
				
			</div>
			<!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <div class="addthis_inline_share_toolbox share-group"></div>
		</div>
	
    </div>
	
	<div id="more_info_block" class="tabs">
            {block name='product_tabs'}
              <div class="tabs">
                <ul class="nav nav-tabs" role="tablist">
                  {if $product.description}
                    <li class="nav-item">
                       <a
                         class="nav-link{if $product.description} active{/if}"
                         data-toggle="tab"
                         href="#description"
                         role="tab"
                         aria-controls="description"
                         {if $product.description} aria-selected="true"{/if}>{l s='Description' d='Shop.Theme.Catalog'}</a>
                    </li>
                  {/if}
                  {*<li class="nav-item">*}
                    {*<a*}
                      {*class="nav-link{if !$product.description} active{/if}"*}
                      {*data-toggle="tab"*}
                      {*href="#product-details"*}
                      {*role="tab"*}
                      {*aria-controls="product-details"*}
                      {*{if !$product.description} aria-selected="true"{/if}>{l s='Product Details' d='Shop.Theme.Catalog'}</a>*}
                  {*</li>*}
                  {if $product.attachments}
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        data-toggle="tab"
                        href="#attachments"
                        role="tab"
                        aria-controls="attachments">{l s='Attachments' d='Shop.Theme.Catalog'}</a>
                    </li>
                  {/if}
                  {foreach from=$product.extraContent item=extra key=extraKey}
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        data-toggle="tab"
                        href="#extra-{$extraKey}"
                        role="tab"
                        aria-controls="extra-{$extraKey}">{$extra.title}</a>
                    </li>
                  {/foreach}
                </ul>

                <div class="tab-content" id="tab-content">
                 <div class="tab-pane fade in{if $product.description} active{/if}" id="description" role="tabpanel">
                   {block name='product_description'}
                     <div class="product-description">{$product.description nofilter}</div>
                   {/block}
                 </div>

                 {block name='product_details'}
                   {include file='catalog/_partials/product-details.tpl'}
                 {/block}

                 {block name='product_attachments'}
                   {if $product.attachments}
                    <div class="tab-pane fade in" id="attachments" role="tabpanel">
                       <section class="product-attachments">
                         <h3 class="h5 text-uppercase">{l s='Download' d='Shop.Theme.Actions'}</h3>
                         {foreach from=$product.attachments item=attachment}
                           <div class="attachment">
                             <h4><a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">{$attachment.name}</a></h4>
                             <p>{$attachment.description}</p
                             <a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">
                               {l s='Download' d='Shop.Theme.Actions'} ({$attachment.file_size_formatted})
                             </a>
                           </div>
                         {/foreach}
                       </section>
                     </div>
                   {/if}
                 {/block}

                 {foreach from=$product.extraContent item=extra key=extraKey}
                 <div class="tab-pane fade in {$extra.attr.class}" id="extra-{$extraKey}" role="tabpanel" {foreach $extra.attr as $key => $val} {$key}="{$val}"{/foreach}>
                   {$extra.content nofilter}
                 </div>
                 {/foreach}
              </div>  
            </div>
          {/block}
          </div>
    {block name='product_accessories'}
      {if $accessories}
        <section class="product-accessories clearfix">
			<div class="addon-title">
				<h3>{l s='Accessories' d='Shop.Theme.Catalog'}</h3>
			</div>
		
			<div class="products accessories-carousel customs-carousel-product">			
				{foreach from=$accessories item="product_accessory"}
					<div class="item ajax_block_product">
						{block name='product_miniature'}
							{include file='catalog/_partials/miniatures/product.tpl' product=$product_accessory}
						{/block}  
					</div>
				{/foreach}
			</div>
			
        </section>
      {/if}
    {/block}
    {block name='product_footer'}
      {hook h='displayFooterProduct' product=$product category=$category}
    {/block}

    {block name='product_images_modal'}
      {include file='catalog/_partials/product-images-modal.tpl'}
    {/block}

    {block name='page_footer_container'}
      
    {/block}
  </section>

{/block}