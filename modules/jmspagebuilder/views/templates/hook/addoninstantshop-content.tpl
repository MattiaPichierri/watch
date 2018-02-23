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
<script>	
jQuery(function ($) {
{if $loadmore_type == 'infinite'}
    $("#instant-products").loadMore({
        selector: 'div.item',
        loadBtn: '#btn',
		limit: '{$limit}',
        load: '{$load}',
    });
{else}
	$("#instant-products").loadMore({
            selector: 'div.item',
            loadBtn: '#btn',
            limit: '{$limit}',
            load: '{$load}',
            animate: true,
            animateIn: 'fadeIn'
    });
{/if}
});
</script>