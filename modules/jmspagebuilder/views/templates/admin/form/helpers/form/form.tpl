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
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{extends file="helpers/form/form.tpl"}
{block name="field"}
	{if $input.type == 'skin'}
	<div class="col-lg-9">
		<a class="skin-box {if $input.jpb_skin=='default' || $input.jpb_skin==''}active{/if}" title="Default">
			<img src="{$input.img_url|escape:'htmlall':'UTF-8'}default.png" alt="Default" />
		</a>
		{foreach from=$input.skins item=sk}
			<a class="skin-box {if $input.jpb_skin=={$sk|escape:'htmlall':'UTF-8'}}active{/if}" title="{$sk|escape:'htmlall':'UTF-8'}" data-color="{$sk|escape:'htmlall':'UTF-8'}">
			<img src="{$input.img_url|escape:'htmlall':'UTF-8'}{$sk|escape:'htmlall':'UTF-8'}.png" alt="{$sk|escape:'htmlall':'UTF-8'}" />
			</a>					
		{/foreach}
		<input type="hidden" name="JPB_SKIN" id="jmsskin" value="" />
		<script type="text/javascript">
		jQuery(function ($) {
			"use strict";
			$(".skin-box").click(function() {		
				var skin =  $(this).attr('data-color');		
				$('#jmsskin').val(skin);
				$(".skin-box").removeClass('active');
				$(this).addClass('active');
			});		
		});
		</script>
	</div>	
	{/if}
{$smarty.block.parent}
{/block}