<h3>{l s='Custom Tab' mod='jmsproducttab'}</h3>
<div class="form-group">				
	<label class="form-control-label">{l s='Tab Title' mod='jmsproducttab'}</label>
	<div class="translations tabbable">
		<div class="translationsFields tab-content">
		{foreach from=$languages item=language}
			{if $languages|count > 1}
			<div class="translatable-field tab-pane translation-label-{$language.iso_code} {if $id_lang_default == $language.id_lang}active{/if}">													
			{/if}			
				<input id="tabtitle_{$language.id_lang|intval}" type="text" class="form-control" name="tabtitle[{$language.id_lang|intval}]" value="{$tabcontent->tab_title[$language.id_lang]}" />
			{if $languages|count > 1}
			</div>													
			{/if}	
		{/foreach}
		</div>
	</div>		
</div>
<div class="form-group">				
	<label class="form-control-label">{l s='Tab Content' mod='jmsproducttab'}</label>
	<div class="translations tabbable">
		<div class="translationsFields tab-content">
		{foreach from=$languages item=language}
			{if $languages|count > 1}
			<div class="translatable-field tab-pane translation-label-{$language.iso_code} {if $id_lang_default == $language.id_lang}active{/if}">													
			{/if}
				<textarea id="tabcontent_{$language.id_lang|intval}" name="tabcontent[{$language.id_lang|intval}]" class="autoload_rte form-control">{$tabcontent->html_content[$language.id_lang]}</textarea>				
			{if $languages|count > 1}
			</div>													
			{/if}	
		{/foreach}
		</div>
	</div>		
</div>