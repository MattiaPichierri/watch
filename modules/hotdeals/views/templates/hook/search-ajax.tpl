{*
* 2007-2015 PrestaShop
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
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{if $products}
<script>
function select_product(product_name,id_product) {
	$('#product').val(product_name);
	$('#id_product').val(id_product);
}	

function hide_product(){
	$("#result_products").hide();
}

</script>	
<ul>	
	{foreach from=$products item=product name=i}
		<li class="item">			
			<a title="{$product.name|truncate:50:'...'|escape:'html':'UTF-8'}" onclick="select_product('{$product.name|escape:'html':'UTF-8'}',{$product.id_product}); hide_product();">{$product.name|escape:'html':'UTF-8'}</a>				
		</li>
	{/foreach}	
</div>
{else}
{l s="There is no product" d='Shop.Theme'}
{/if}
