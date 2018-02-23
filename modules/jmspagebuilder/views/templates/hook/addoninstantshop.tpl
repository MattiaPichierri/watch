{*
* 2007-2016 PrestaShop
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
*  @copyright  2007-2016 PrestaShop SA
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if $addon_title}
<div class="addon-title">
	<h3>{$addon_title|escape:'htmlall':'UTF-8'}</h3>
</div>
{/if}

{if $addon_desc}
<p class="addon-desc">{$addon_desc|escape:'htmlall':'UTF-8'}</p>
{/if}
<div class="instant-tabs">
	<ul class="nav nav-tabs" role="tablist">
		{if $showall}
		<li class="active"><a class="instant-btn" data-id="0">All</a></li>					
		{/if}
		{foreach from = $categories key = k item = category}
			<li {if !$showall && $k ==0}class="active"{/if}><a class="instant-btn" data-id="{$category.id_category|escape:'html':'UTF-8'}">{$category.name|escape:'htmlall':'UTF-8'}</a></li>					
		{/foreach}	
	</ul>
	<div class="instantshop-filters btn-group">
		<a class="dropdown-toggle" data-toggle="dropdown">{l s='Filter' mod='jmspagebuilder'}<i class="fa fa-angle-down"></i></a>
		<div class="dropdown-menu" role="menu">
			<div class="row">
				<div class="filter col-sm-6 col-md-6 col-xs-12">
					<label>{l s='Sort By' mod='jmspagebuilder'}</label>
					<ul name="instantshop-orderby" id="instantshop-s-orderby">
						<li data-val="date_add" class="{if $order_by == 'date_add'}active{/if}">{l s='Date Add' mod='jmspagebuilder'}</li>
						<li data-val="date_upd" class="{if $order_by == 'date_upd'}active{/if}">{l s='Date Update' mod='jmspagebuilder'}</li>
						<li data-val="price" class="{if $order_by == 'price'}active{/if}">{l s='Price' mod='jmspagebuilder'}</li>
						<li data-val="position" class="{if $order_by == 'position'}active{/if}">{l s='Position' mod='jmspagebuilder'}</li>
						<li data-val="name" class="{if $order_by == 'name'}active{/if}">{l s='Name' mod='jmspagebuilder'}</li>
						<li data-val="id_product" class="{if $order_by == 'id_product'}active{/if}">{l s='Product ID' mod='jmspagebuilder'}</li>
					</ul>
				</div>
				<div class="filter col-sm-6 col-md-6 col-xs-12">
					<label>{l s='Sort Way' mod='jmspagebuilder'}</label>
					<ul name="instantshop-orderway" id="instantshop-s-orderway">
						<li data-val="DESC" class="{if $order_way == 'DESC'}active{/if}">{l s='Desc' mod='jmspagebuilder'}</li>
						<li data-val="ASC" class="{if $order_way == 'ASC'}active{/if}">{l s='Asc' mod='jmspagebuilder'}</li>		
					</ul>
				</div>
			</div>	
		</div>	
	</div>	
</div>
<div class="row" id="instant-products">
{foreach from = $products item = product}				
	<div class="item col-sm-6 col-md-{$col_class} col-xs-12">
		{include file="catalog/_partials/miniatures/product.tpl" product=$product}
	</div>	
{/foreach}
<span class="instantshop-loading"></span>
<div class="instantshop-loadmore">
{if $loadmore_type == 'infinite'}
<button id="btn" class="load-btn btn-default">{l s='Scroll to Load' mod='jmspagebuilder'}</button>
{else}
<button id="btn" class="load-btn btn-default">{l s='Load More' mod='jmspagebuilder'}</button>
{/if}
</div>
<script type="text/javascript">
	var instantshow_limit = {if $limit}{$limit|escape:'htmlall':'UTF-8'}{else}8{/if};
	var instantshow_load = {if $load}{$load|escape:'htmlall':'UTF-8'}{else}4{/if};	
</script>
</div>
<input type="hidden" name="instantshop_id_category" id="instantshop-id-category" value="0" />
<input type="hidden" name="instantshop_loadmore_type" id="instantshop-loadmore-type" value="{$loadmore_type}" />
<input type="hidden" name="instantshop_limit" id="instantshop-limit" value="{$limit}" />
<input type="hidden" name="instantshop_load" id="instantshop-load" value="{$load}" />
<input type="hidden" name="instantshop_total" id="instantshop-total" value="{$total_config}" />
<input type="hidden" name="instantshop_col_class" id="instantshop-col-class" value="{$col_class}" />
<input type="hidden" name="instantshop_orderby" id="instantshop-orderby" value="{$order_by}" />
<input type="hidden" name="instantshop_orderway" id="instantshop-orderway" value="{$order_way}" />