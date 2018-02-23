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

{extends file="helpers/form/form.tpl"}
{block name="field"}
	{if $input.type == 'product_search'}		
		<div class="input-group search-product-input">
			<input type="text" id="product" value="{if isset($fields_value.product_name)}{$fields_value.product_name|escape:'html'}{/if}" />
			<input type="hidden" id="id_product" name="id_product" value="{if isset($fields_value.id_product)}{$fields_value.id_product|escape:'html'}{/if}" />
			<span class="input-group-addon">
				<i class="icon-search"></i>
			</span>			
			<div id="result_products"></div>	
		</div>
		
				<script>				
				$(document).ready(function() {
					$( "#product" ).keyup(function() {		
						var search_key = $( "#product" ).val();	
						$.ajax({
							type: 'GET',
							url: '{$base_url|escape:'html'}' + 'modules/hotdeals/ajax_productsearch.php',
							headers: { "cache-control": "no-cache" },
							async: true,    	
							data: 'search_key=' + search_key,
							success: function(data)
							{		
								$('#result_products').innerHTML = data;		
							}
						}) .done(function( msg ) {
							$( "#result_products" ).html(msg);
						});
					})	
					$('html').click(function() {
						$( "#result_products" ).html('');
					});

					$('#result_products').click(function(event){
						event.stopPropagation();
					});					
				});
				</script>			
	
	{/if}
	{$smarty.block.parent}
{/block}