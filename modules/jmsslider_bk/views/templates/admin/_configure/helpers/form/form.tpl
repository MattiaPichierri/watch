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
	{if $input.type == 'img'}	
		<div class="col-sm-9">				
			<input id="{$input.name|escape:'html':'UTF-8'}" type="file" name="{$input.name|escape:'html':'UTF-8'}" class="hide" />
			<div class="dummyfile input-group">
				<span class="input-group-addon"><i class="icon-file"></i></span>
				<input id="{$input.name|escape:'html':'UTF-8'}-name" type="text" name="filename" readonly />
				<span class="input-group-btn">
					<button id="{$input.name|escape:'html':'UTF-8'}-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
						<i class="icon-folder-open"></i> {l s='Choose a file' d='Modules.JmsSlider'}
					</button>
				</span>
			</div>		
			<div id="slide-preview">
			{if $input.name=='bg_image' && isset($fields[0]['form']['old_image']) && $fields[0]['form']['old_image']|@strlen > 0}
			<p class="help-block">{$input.pdesc|escape:'html':'UTF-8'}</p>			
			<img src="{$image_baseurl|escape:'html':'UTF-8'}{$fields[0]['form']['old_image']|escape:'html':'UTF-8'}" class="img-thumbnail" />
			<input type="hidden" name="old_image" value="{$fields[0]['form']['old_image']|escape:'html':'UTF-8'}" />
			{/if}			
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
				$('.mColorPickerInput').change(function(e){
					var val = $(this).val();					
					$('#slide-preview').css("background-color", val);				
	
				});
			});
		</script>
	{elseif $input.type == 'layer_img'}
		{$input.file_list|escape:'html':'UTF-8'}
	{elseif $input.type == 'check_home'}
		<div class="col-lg-9 ">
			<div class="checkbox">
				<label for="home_slide">
					<input type="checkbox" class="" id="home_slide" name="home_slide[]">
					sdfsdf
				</label>
			</div>
		</div>

	{/if}
	{$smarty.block.parent}
{/block}