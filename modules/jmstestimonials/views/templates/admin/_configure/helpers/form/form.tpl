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
	{if $input.type == 'file_lang'}
		<div class="row">
			<div class="translatable-field " >
				<div class="col-lg-6">
					{if $input.name=='image' && isset($fields[0]['form']['images'])}
					<img src="{$image_baseurl|escape:'html':'UTF-8'}{$fields[0]['form']['images']|escape:'html':'UTF-8'}" class="img-thumbnail" />
					<input type="hidden" name="image_old" value="{$fields[0]['form']['images']|escape:'html':'UTF-8'}" />
					{/if}
											
					<input id="{$input.name|escape:'html':'UTF-8'}" type="file" name="{$input.name|escape:'html':'UTF-8'}" class="hide" />
					<div class="dummyfile input-group">
						<span class="input-group-addon"><i class="icon-file"></i></span>
						<input id="{$input.name|escape:'html':'UTF-8'}-name" type="text" class="disabled" name="filename" readonly />
						<span class="input-group-btn">
							<button id="{$input.name|escape:'html':'UTF-8'}-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
								<i class="icon-folder-open"></i> {l s='Choose a file' d='Modules.JmsTestimonials'}
							</button>
						</span>
					</div>
				</div>
			</div>
				<script>
				$(document).ready(function(){
					$('#{$input.name|escape:'html':'UTF-8'}-selectbutton').click(function(e){
						$('#{$input.name|escape:'html':'UTF-8'}').trigger('click');
					});
					$('#{$input.name|escape:'html':'UTF-8'}').change(function(e){
						var val = $(this).val();
						var file = val.split(/[\\/]/);
						$('#{$input.name|escape:'html':'UTF-8'}-name').val(file[file.length-1]);
					});
				});
			</script>
			
		</div>
	{/if}
	{$smarty.block.parent}
{/block}