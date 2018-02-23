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
<script type="text/javascript" defer>
var tab_items = {if $cols}{$cols|escape:'htmlall':'UTF-8'}{else}4{/if};
var tab_itemsDesktop = {if $cols}{$cols|escape:'htmlall':'UTF-8'}{else}4{/if};
var tab_itemsDesktopSmall = {if $cols_md}{$cols_md|escape:'htmlall':'UTF-8'}{else}3{/if};
var tab_itemsTablet = {if $cols_sm}{$cols_sm|escape:'htmlall':'UTF-8'}{else}2{/if};
var tab_itemsMobile = {if $cols_xs}{$cols_xs|escape:'htmlall':'UTF-8'}{else}1{/if};
</script>
{if $addon_title}
<div class="addon-title">
	<h3>{$addon_title|escape:'htmlall':'UTF-8'}</h3>
</div>
{/if}
{if $addon_desc}
<p class="addon-desc">{$addon_desc|escape:'htmlall':'UTF-8'}</p>
{/if}	
{assign var="box_template" "{$addon_tpl_dir}productbox.tpl"}
<div class="jms-tab1">
	<ul class="nav nav-tabs" role="tablist">
	{$cf = 0}
		{if $config.show_featured eq '1'}
			<li class="active"><a class="button" data-toggle="tab" href="#featured">{l s='Featured' d='Modules.JmsPagebuilder'}</a></li>
		{$cf = $cf + 1}
		{/if}	
		{if $config.show_new eq '1'}
			<li {if $cf eq 0}class="active"{/if}><a class="button" data-toggle="tab" href="#latest">{l s='Latest' d='Modules.JmsPagebuilder'}</a></li>
			{$cf = $cf + 1}
		{/if}		
		{if $config.show_topseller eq '1'}
			<li {if $cf eq 0}class="active"{/if}><a class="button" data-toggle="tab" href="#topseller">{l s='Bestseller' d='Modules.JmsPagebuilder'}</a></li>
			{$cf = $cf + 1}
		{/if}		
		{if $config.show_special eq '1'}
			<li {if $cf eq 0}class="active"{/if}><a class="button" data-toggle="tab" href="#special">{l s='Special' d='Modules.JmsPagebuilder'}</a></li>
			{$cf = $cf + 1}
		{/if}			
		{if $config.show_onsale eq '1'}
			<li {if $cf eq 0}class="active"{/if}><a class="button" data-toggle="tab" href="#onsale">{l s='On Sale' d='Modules.JmsPagebuilder'}</a></li>
			{$cf = $cf + 1}
		{/if}			
	</ul>
</div>
<div class="tab-content">
	{$cf = 0}
	{if $config.show_featured eq '1'}
		 <div role="tabpanel" class="tab-pane active" id="featured">
			<div class="producttab-carousel">	
				{foreach from = $featured_products item = products_slide}
					<div class="item">
						{foreach from = $products_slide item = product}
							{include file="catalog/_partials/miniatures/product.tpl" product=$product}
						{/foreach}
					</div>
				{/foreach}
			</div>
		 </div>
		{$cf = $cf + 1}
	{/if}
	{if $config.show_new eq '1'}
		 <div role="tabpanel" class="tab-pane {if $cf eq 0}active{/if}" id="latest">
			<div class="producttab-carousel">	
				{foreach from = $new_products item = products_slide}
					<div class="item">
						{foreach from = $products_slide item = product}
							{include file="catalog/_partials/miniatures/product.tpl" product=$product}
						{/foreach}
					</div>
				{/foreach}
			</div>
		 </div>
		{$cf = $cf + 1}
	{/if}
	{if $config.show_topseller eq '1'}
		 <div role="tabpanel" class="tab-pane {if $cf eq 0}active{/if}" id="topseller">
			<div class="producttab-carousel">	
				{foreach from = $topseller_products item = products_slide}
					<div class="item">
						{foreach from = $products_slide item = product}
							{include file="catalog/_partials/miniatures/product.tpl" product=$product}
						{/foreach}
					</div>
				{/foreach}
			</div>
		 </div>
		{$cf = $cf + 1}
	{/if}
	{if $config.show_special eq '1'}
		 <div role="tabpanel" class="tab-pane {if $cf eq 0}active{/if}" id="special">
			<div class="producttab-carousel">	
				{foreach from = $special_products item = products_slide}
					<div class="item">
						{foreach from = $products_slide item = product}
							{include file="catalog/_partials/miniatures/product.tpl" product=$product}
						{/foreach}
					</div>
				{/foreach}
			</div>
		 </div>
		{$cf = $cf + 1}
	{/if}
	{if $config.show_onsale eq '1'}
		 <div role="tabpanel" class="tab-pane {if $cf eq 0}active{/if}" id="onsale">
			<div class="producttab-carousel">	
				{foreach from = $onsale_products item = products_slide}
					<div class="item">
						{foreach from = $products_slide item = product}
							{include file="catalog/_partials/miniatures/product.tpl" product=$product}
						{/foreach}
					</div>
				{/foreach}
			</div>
		 </div>
		{$cf = $cf + 1}
	{/if}
</div>
