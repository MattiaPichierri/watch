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
var bp_items = {if $cols}{$cols nofilter}{else}4{/if};
var bp_itemsDesktop = {if $cols}{$cols nofilter}{else}4{/if};
var bp_itemsDesktopSmall = {if $cols_md}{$cols_md nofilter}{else}3{/if};
var bp_itemsTablet = {if $cols_sm}{$cols_sm nofilter}{else}2{/if};
var bp_itemsMobile = {if $cols_xs}{$cols_xs nofilter}{else}1{/if};
</script>
{if $addon_title}
<div class="addon-title">
	<h3>{$addon_title nofilter}</h3>
</div>
{/if}
{if $addon_desc}
<p class="addon-desc">{$addon_desc nofilter}</p>
{/if}	
{assign var="box_template" "{$addon_tpl_dir nofilter}productbox.tpl"}
{if $banner_img1}
<div class="banner-1 col-lg-6 col-md-6 col-xs-12">
	<img src="{$root_url nofilter}{$banner_img1 nofilter}" alt="" class="img-responsive" />
	<div class="banner-content">
	{if $banner_html1}
		{$banner_html1 nofilter}
	{/if}
	{if $banner_link1}
		<a class="button" href="{$banner_link1 nofilter}">{l s='SHOP NOW' d='Modules.JmsPagebuilder'}! <span class="fa fa-long-arrow-right"></span></a>
	{/if}
	</div>
</div>
{/if}
<div class="product-box col-lg-6 col-md-6 col-xs-12">
	<div class="banner-product-carousel">	
		{foreach from = $products_slides item = products_slide}
			<div class="item">
				{foreach from = $products_slide item = product}
					{include file="catalog/_partials/miniatures/product.tpl" product=$product}
				{/foreach}
			</div>
		{/foreach}
	</div>	
	{if $banner_img2}
	<div class="banner-2">	
		<img src="{$root_url nofilter}{$banner_img2 nofilter}" alt="" class="img-responsive" />
		<div class="banner-content">
			{if $banner_html2}
				{$banner_html2 nofilter}
			{/if}
			{if $banner_link2}
			<a class="button" href="{$banner_link2 nofilter}">{l s='SHOP NOW' d='Modules.JmsPagebuilder'}! <span class="fa fa-long-arrow-right"></span></a>
			{/if}
		</div>	
	</div>	
	{/if}	
</div>