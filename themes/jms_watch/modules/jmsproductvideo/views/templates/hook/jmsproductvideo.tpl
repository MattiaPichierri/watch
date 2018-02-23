<h3>{l s='Video\'s Product' mod='jmsproductvideo'}</h3>
<input type = "hidden" id="edit" value="0" name="edit" />
<input type = "hidden" id="position_" value="0" name="position_" />			
<div class="form-group">				
	<label class="form-control-label">{l s='Video Title' mod='jmsproductvideo'}</label>
	<div class="translations tabbable">
		<div class="translationsFields tab-content">
		{foreach from=$languages item=language}
			{if $languages|count > 1}
			<div class="translatable-field tab-pane translation-label-{$language.iso_code} {if $id_lang_default == $language.id_lang}active{/if}">													
			{/if}
			{assign var='lang' value=$language.id_lang - 1}						
				<input id="jms_product_titlevideo_{$language.id_lang|intval}" type="text" class="form-control" name="videotitle[{$language.id_lang|intval}]" value="{$videos[{$language.id_lang|intval}]['title']|htmlentitiesUTF8|default:''}" />
			{if $languages|count > 1}
			</div>													
			{/if}	
		{/foreach}
		</div>
	</div>		
</div>
<div class="form-group">
	<label class="form-control-label">{l s='Video Links' mod='jmsproductvideo'}</label>				
	<div class="translations tabbable">
		<div class="translationsFields tab-content">
		{foreach from=$languages item=language}
			{if $languages|count > 1}
			<div class="translatable-field tab-pane translation-label-{$language.iso_code} {if $id_lang_default == $language.id_lang}active{/if}">													
			{/if}
			{assign var='lang' value=$language.id_lang - 1}						
				<input id="jms_product_titlevideo_{$language.id_lang|intval}" type="text" class="form-control" name="videolink[{$language.id_lang|intval}]" value="{$videos[{$language.id_lang|intval}]['link']|htmlentitiesUTF8|default:''}" />
			{if $languages|count > 1}
			</div>													
			{/if}	
		{/foreach}
		<p class="help-block"> Videos seperate by "," . Eg : https://www.youtube.com/watch?v=GyrH6xiFiT0,https://vimeo.com/63528500 </p>
		</div>
	</div>		
</div>