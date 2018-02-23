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
<script type="text/javascript">
  var p_items = {if $cols}{$cols|escape:'htmlall':'UTF-8'}{else}4{/if};
  var p_itemsDesktop = {if $cols}{$cols|escape:'htmlall':'UTF-8'}{else}4{/if};
  var p_itemsDesktopSmall = {if $cols_md}{$cols_md|escape:'htmlall':'UTF-8'}{else}3{/if};
  var p_itemsTablet = {if $cols_sm}{$cols_sm|escape:'htmlall':'UTF-8'}{else}2{/if};
  var p_itemsMobile = {if $cols_xs}{$cols_xs|escape:'htmlall':'UTF-8'}{else}1{/if};
</script>
<div class="addon-title">
	{if $icon_class}
		<i class="{$icon_class}"></i>
	{/if}
	<h3>{$categories.name|escape:'htmlall':'UTF-8'}</h3>
        <a class="view-all-btn" href="{url entity='category' id=$categories.id_category}" title="View all product in category">
          {l s='View All' mod='jmspagebuilder'}
          <i aria-hidden="true" class="fa fa-angle-right"></i>
        </a>
</div>
      <div class="catproduct-carousel item-hover">  
        {foreach from = $categories.products item = products_slide} 
            <div class="item">
              {foreach from = $products_slide item = product}
                {include file="catalog/_partials/miniatures/product.tpl" product=$product}
              {/foreach}
            </div>
        {/foreach}
      </div>

