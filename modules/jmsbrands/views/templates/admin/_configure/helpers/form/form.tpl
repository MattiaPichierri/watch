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
			{foreach from=$languages item=language}
				{if $languages|count > 1}
					<div class="translatable-field lang-{$language.id_lang nofilter}" {if $language.id_lang != $defaultFormLanguage}style="display:none"{/if}>
				{/if}
					<div class="col-lg-6">
						{if $input.name=='image' && isset($fields[0]['form']['images'])}
						<img src="{$image_baseurl nofilter}{$fields[0]['form']['images'][$language.id_lang] nofilter}" class="img-thumbnail" />
						<input type="hidden" name="image_old_{$language.id_lang nofilter}" value="{$fields[0]['form']['images'][$language.id_lang] nofilter}" />
						{/if}
						{if $input.name=='simage' && $fields[0]['form']['simages'][$language.id_lang]}
						<img src="{$image_baseurl nofilter}{$fields[0]['form']['simages'][$language.id_lang] nofilter}" class="img-thumbnail" />
						<input type="hidden" name="simage_old_{$language.id_lang nofilter}" value="{$fields[0]['form']['simages'][$language.id_lang] nofilter}" />
						{/if}
						
						<input id="{$input.name nofilter}_{$language.id_lang nofilter}" type="file" name="{$input.name nofilter}_{$language.id_lang nofilter}" class="hide" />
						<div class="dummyfile input-group">
							<span class="input-group-addon"><i class="icon-file"></i></span>
							<input id="{$input.name nofilter}_{$language.id_lang nofilter}-name" type="text" class="disabled" name="filename" readonly />
							<span class="input-group-btn">
								<button id="{$input.name nofilter}_{$language.id_lang nofilter}-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
									<i class="icon-folder-open"></i> {l s='Choose a file' d='.Modules.JmsBrands'}
								</button>
							</span>
						</div>
					</div>
				{if $languages|count > 1}
					<div class="col-lg-2">
						<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
							{$language.iso_code nofilter}
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							{foreach from=$languages item=lang}
							<li><a href="javascript:hideOtherLanguage({$lang.id_lang nofilter});" tabindex="-1">{$lang.name nofilter}</a></li>
							{/foreach}
						</ul>
					</div>
				{/if}
				{if $languages|count > 1}
					</div>
				{/if}
				<script>
				$(document).ready(function(){
					$('#{$input.name nofilter}_{$language.id_lang nofilter}-selectbutton').click(function(e){
						$('#{$input.name nofilter}_{$language.id_lang nofilter}').trigger('click');
					});
					$('#{$input.name nofilter}_{$language.id_lang nofilter}').change(function(e){
						var val = $(this).val();
						var file = val.split(/[\\/]/);
						$('#{$input.name nofilter}_{$language.id_lang nofilter}-name').val(file[file.length-1]);
					});
				});
			</script>
			{/foreach}
		</div>
	{/if}
	{$smarty.block.parent}
{/block}