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
var mega_items = {if $cols}{$cols|escape:'htmlall':'UTF-8'}{else}4{/if};
var mega_itemsDesktop = {if $cols}{$cols|escape:'htmlall':'UTF-8'}{else}4{/if};
var mega_itemsDesktopSmall = {if $cols_md}{$cols_md|escape:'htmlall':'UTF-8'}{else}3{/if};
var mega_itemsTablet = {if $cols_sm}{$cols_sm|escape:'htmlall':'UTF-8'}{else}2{/if};
var mega_itemsMobile = {if $cols_xs}{$cols_xs|escape:'htmlall':'UTF-8'}{else}1{/if};
</script>
{assign var="box_template" "{$addon_tpl_dir}productbox.tpl"}
<div class="mega-box {$box_class|escape:'htmlall':'UTF-8'}">
	<div class="box-title">
		<h3>
			<i class="{$icon_class|escape:'htmlall':'UTF-8'}"></i>
			<span>{$categoryname|escape:'htmlall':'UTF-8'}</span>
		</h3>	
	</div>
	{$subcats = $subcats}		
	<div class="tabpanel">
		<ul class="nav nav-tabs">
		{foreach from = $subcats item = sub key = k}
			{$cat_products = $products[$k]}	
			{if !empty($cat_products)}
			<li {if $k == 0}class="active"{/if}>
				<a href="#{$sub.id_category|escape:'htmlall':'UTF-8'}" aria-controls="{$sub.id_category|escape:'htmlall':'UTF-8'}" data-toggle="tab">
					{$sub.name|escape:'htmlall':'UTF-8'}
				</a>
			</li>	
			{/if}	
		{/foreach}
		</ul>
	</div>
	<div class="mega-box-content">
		<div class="inner">		
			<div class="hor-img">
				{if $hor_img1}
				<img src="{$root_url|escape:'htmlall':'UTF-8'}{$hor_img1|escape:'htmlall':'UTF-8'}" alt="" class="img-responsive" />
				{/if}
				{if $hor_img2}
				<img src="{$root_url|escape:'htmlall':'UTF-8'}{$hor_img2|escape:'htmlall':'UTF-8'}" alt="" class="img-responsive" />
				{/if}
			</div>						
			<div class="ver-img">
				<img src="{$root_url|escape:'htmlall':'UTF-8'}{$ver_img|escape:'htmlall':'UTF-8'}" alt="" class="img-responsive" />
			</div>							
			<div class="category-product-tab tab-content">
				{foreach from = $subcats item = sub key = k}
					{$cat_products = $products[$k]}	
					{if !empty($cat_products)}					
					<div class="tab-pane {if $k == 0}active{/if}" id="{$sub.id_category|escape:'htmlall':'UTF-8'}">								
						<div class="mega-box-carousel">					
							{foreach from = $cat_products item = products_slide}
								<div class="item">
									{foreach from = $products_slide item = product}
										{include file="catalog/_partials/miniatures/product.tpl" product=$product}
									{/foreach}
								</div>
							{/foreach}																							
						</div>																		
					</div>
					{/if}
				{/foreach}
			</div>			
		</div>
	</div>
</div>