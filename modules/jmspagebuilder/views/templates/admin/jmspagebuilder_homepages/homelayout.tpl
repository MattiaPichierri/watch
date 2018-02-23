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
<div class="layout-tools">		
		<select id="select-home">
			{foreach from=$homepages key=i item=home}
				<option value="{$home.id_homepage nofilter}" {if $home.id_homepage == $homepage.id_homepage}selected="selected"{/if}>{{$home.title nofilter}}</option>
			{/foreach}
		</select>
		<ul class="device-icons">
			<li class="active" data-device="lg"><a class="lg-device label-tooltip" data-original-title="Large Device"><i class="icon-desktop"></i></a></li>
			<li data-device="md"><a class="md-device label-tooltip" data-original-title="Medium Device"><i class="icon-laptop"></i></a></li>
			<li data-device="sm"><a class="sm-device label-tooltip" data-original-title="Small Device"><i class="icon-tablet"></i></a></li>
			<li data-device="xs"><a class="xs-device label-tooltip" data-original-title="Mobile Device"><i class="icon-mobile"></i></a></li>
		</ul>
		<ul class="import-export">
			<li><a class="copy-lang label-tooltip" data-original-title="Copy Language Data for All Language"><i class="icon-language"></i></a></li>	
			<li><a class="export-link label-tooltip" data-original-title="Export Layout" href="{$link->getAdminLink('AdminJmspagebuilderHomepages') nofilter}&configure=jmspagebuilder&export_id_homepage={$homepage.id_homepage nofilter}"><i class="icon-download"></i></a></li>			
			<li><a class="import-link label-tooltip" data-original-title="Import Layout"><i class="icon-upload"></i></a></li>			
		</ul>
</div>
<div class="import-form" style="display:none;">
<form name="adminForm" action="{$link->getAdminLink('AdminJmspagebuilderHomepages') nofilter}&configure=jmspagebuilder" method="post" enctype="multipart/form-data">
		<select name="import_file">
			{foreach from=$jsonfiles key=i item=jsonfile}
			<option value="{$jsonfile nofilter}">{$jsonfile nofilter}</option> 	
			{/foreach}
		</select>
		<button type="submit">Import</button>			
		<br /><span>{l s='Files in' d='Modules.JmsPagebuilder'} <strong>modules/jmspagebuilder/json/</strong> Folder</span>
		<input type="hidden" name="import_id_homepage" value="{$homepage.id_homepage nofilter}" /> 
</form>	
</div>
<div class="language-form" style="display:none;">
<form name="adminForm" action="{$link->getAdminLink('AdminJmspagebuilderHomepages') nofilter}&configure=jmspagebuilder" method="post">
	<label>Copy Data From : </label>
	<select name="src_lang_id">
	{foreach from=$languages key=i item=language}
		<option value="{$language.id_lang nofilter}">{$language.name nofilter}</option> 	
	{/foreach}
	</select>
	<button type="submit">Copy</button>
	<br /><span><strong>Note : Export Layout Before Do this Action.</strong></span>
	<input type="hidden" name="lang_id_homepage" value="{$homepage.id_homepage nofilter}" /> 
</form>
</div>
<div class="pagebuilder-panel">
	<div id="rowlist" class="lg-layout" data-id="{$homepage.id_homepage nofilter}">
	<div class="rowlist">
		{foreach from=$rows key=i item=row}
			<div class="row" data-layout="{$row->layout nofilter}" data-name="{if isset($row->name)}{$row->name nofilter}{/if}"  data-custom_class="{if isset($row->settings->custom_class)}{$row->settings->custom_class nofilter}{/if}" data-fluid="{$row->settings->fluid nofilter}" data-background_img="{if isset($row->settings->background_img)}{$row->settings->background_img nofilter}{/if}" data-background_size="{if isset($row->settings->background_size)}{$row->settings->background_size nofilter}{/if}" data-background_repeat="{if isset($row->settings->background_repeat)}{$row->settings->background_repeat nofilter}{/if}" data-background_position="{if isset($row->settings->background_position)}{$row->settings->background_position nofilter}{/if}" data-background_attachment="{if isset($row->settings->background_attachment)}{$row->settings->background_attachment nofilter}{/if}" data-hook="{if isset($row->settings->hook)}{$row->settings->hook nofilter}{/if}" data-active="{if isset($row->settings->active)}{$row->settings->active}{else}1{/if}">
				<div class="row-title">						
					<div class="pull-left">
						<span><i class="icon-arrows"></i></span>						
						<strong class="row-name">{if isset($row->name)}{$row->name nofilter}{/if}</strong>
					</div>
					<div class="pull-right">
						<ul class="button-group" role="menu" aria-labelledby="dLabel">
							<li class="layout-action">
								<a class="btn btn-default label-tooltip" data-original-title="Row Layout"><i class="icon-th"></i></a>
								<ul class="column-list">
									<li><a data-original-title="12" data-layout="12" class="column-layout label-tooltip column-layout-12" href="#"></a></li>
									<li><a data-original-title="6,6" data-layout="6,6" class="column-layout label-tooltip column-layout-66" href="#"></a></li>
									<li><a data-original-title="4,4,4" data-layout="4,4,4" class="column-layout label-tooltip column-layout-444" href="#"></a></li>
									<li><a data-original-title="3,3,3,3" data-layout="3,3,3,3" class="column-layout label-tooltip column-layout-3333" href="#"></a></li>
									<li><a data-original-title="4,8" data-layout="4,8" class="column-layout label-tooltip column-layout-48" href="#"></a></li>
									<li><a data-original-title="3,9" data-layout="3,9" class="column-layout label-tooltip column-layout-39 active" href="#"></a></li>
									<li><a data-original-title="3,6,3" data-layout="3,6,3" class="column-layout label-tooltip column-layout-363" href="#"></a></li>
									<li><a data-original-title="2,6,4" data-layout="2,6,4" class="column-layout label-tooltip column-layout-264" href="#"></a></li>
									<li><a data-original-title="2,10" data-layout="2,10" class="column-layout label-tooltip column-layout-210" href="#"></a></li>
									<li><a data-original-title="5,7" data-layout="5,7" class="column-layout label-tooltip column-layout-57" href="#"></a></li>
									<li><a data-original-title="2,3,7" data-layout="2,3,7" class="column-layout label-tooltip column-layout-237" href="#"></a></li>
									<li><a data-original-title="2,5,5" data-layout="2,5,5" class="column-layout label-tooltip column-layout-255" href="#"></a></li>
									<li><a data-original-title="2,8,2" data-layout="2,8,2" class="column-layout label-tooltip column-layout-282" href="#"></a></li>
									<li><a data-original-title="2,4,4,2" data-layout="2,4,4,2" class="column-layout label-tooltip column-layout-2442" href="#"></a></li> 
									<li><a data-original-title="Custom Layout" data-layout="custom" class="column-layout column-layout-custom label-tooltip" href="#"></a></li> 
								</ul>
							</li>
							<li>
								<a class="btn btn-default row-setting label-tooltip" data-original-title="Row Setting"><i class="icon-cogs"></i></a>
							</li>							
							<li>
							{if isset($row->settings->active) && $row->settings->active == 0}
								<a class="btn btn-default active-row label-tooltip" data-original-title="Active Row"><i class="icon-remove"></i></a>
							{else}
								<a class="btn btn-default active-row label-tooltip" data-original-title="UnActive Row"><i class="icon-check"></i></a>
							{/if}		
							</li>
							<li>
								<a class="btn btn-default duplicate-row label-tooltip" data-original-title="Duplicate Row"><i class="icon-copy"></i></a>
							</li>
							<li>
								<a class="btn btn-default remove-row label-tooltip" data-original-title="Delete This Row"><i class="icon-trash"></i></a>
							</li>	
						</ul>
					</div>
				</div>	
				<div class="row-columns">
					{foreach from=$row->cols key=cindex item=column}
						<div class="{$column->className nofilter}" data-custom_class="{if isset($column->settings->custom_class)}{$column->settings->custom_class nofilter}{/if}" data-md_col="{if isset($column->settings->md_col)}{$column->settings->md_col nofilter}{/if}" data-sm_col="{if isset($column->settings->sm_col)}{$column->settings->sm_col nofilter}{/if}" data-xs_col="{if isset($column->settings->xs_col)}{$column->settings->xs_col nofilter}{/if}" data-background_img="{if isset($column->settings->background_img)}{$column->settings->background_img nofilter}{/if}" data-background_size="{if isset($column->settings->background_size)}{$column->settings->background_size nofilter}{/if}" data-background_repeat="{if isset($column->settings->background_repeat)}{$column->settings->background_repeat nofilter}{/if}" data-background_position="{if isset($column->settings->background_position)}{$column->settings->background_position nofilter}{/if}" data-background_attachment="{if isset($column->settings->background_attachment)}{$column->settings->background_attachment nofilter}{/if}">
							<div class="column">
								{foreach from=$column->addons key=aindex item=addon}
									{$addon->addon_box nofilter}
								{/foreach}
							</div>
							<div class="col-tools">
								<a href="#" class="column-setting pull-right label-tooltip" data-original-title="Column Setting"><i class="icon-cog"></i><span>Setting</span></a>
								<a href="#" class="add-addon pull-right label-tooltip" data-original-title="Add Addons/Modules"><i class="icon-plus-circle"></i><span>Addons</span></a>
							</div>	
						</div>
					{/foreach}
				</div>	
			</div>
		{/foreach}		
	</div>
</div>
</div>
<input id="root_url" type="hidden" name="root_url" value="{$root_url nofilter}" />
<input id="ajax_url" type="hidden" name="ajax_url" value="{$ajax_url nofilter}" />
<input id="current_url" type="hidden" name="current_url" value="{$link->getAdminLink('AdminJmspagebuilderHomepages') nofilter}&configure=jmspagebuilder&editAddon=1" />
<input id="backend_url" type="hidden" name="backend_url" value="{$link->getAdminLink('AdminJmspagebuilderHomepages') nofilter}" />
<div class="hidden">
    <div id="jmspagebuilder-row">
		<div class="row" data-name="Row" data-fluid="0" data-layout="12" data-active="1">
			<div class="row-title">						
				<div class="pull-left">
					<span><i class="icon-arrows"></i></span>						
					<strong class="row-name">Row</strong>
				</div>
				<div class="pull-right">
					<ul aria-labelledby="dLabel" role="menu" class="button-group">
						<li class="layout-action">
							<a class="btn btn-default label-tooltip" data-original-title="Row Layout"><i class="icon-th"></i></a>
							<ul class="column-list">
								<li><a href="#" class="column-layout label-tooltip column-layout-12 " data-layout="12" data-original-title="12"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-66 " data-layout="6,6" data-original-title="6,6"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-444 " data-layout="4,4,4" data-original-title="4,4,4"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-3333 " data-layout="3,3,3,3" data-original-title="3,3,3,3"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-48 " data-layout="4,8" data-original-title="4,8"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-39 active" data-layout="3,9" data-original-title="3,9"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-363 " data-layout="3,6,3" data-original-title="3,6,3"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-264 " data-layout="2,6,4" data-original-title="2,6,4"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-210 " data-layout="2,10" data-original-title="2,10"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-57 " data-layout="5,7" data-original-title="5,7"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-237 " data-layout="2,3,7" data-original-title="2,3,7"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-255 " data-layout="2,5,5" data-original-title="2,5,5"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-282 " data-layout="2,8,2" data-original-title="2,8,2"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-2442 " data-layout="2,4,4,2" data-original-title="2,4,4,2"></a></li>                  
								<li><a data-original-title="Custom Layout" data-layout="custom" class="column-layout column-layout-custom label-tooltip" href="#"></a></li>								
							</ul>
						</li>						
						<li>
							<a class="btn btn-default row-setting label-tooltip" data-original-title="Row Setting"><i class="icon-cogs"></i></a>
						</li>						
							<a class="btn btn-default active-row label-tooltip" data-original-title="UnActive Row"><i class="icon-check"></i></a>						
						<li>
							<a class="btn btn-default duplicate-row label-tooltip" data-original-title="Duplicate Row"><i class="icon-copy"></i></a>
						</li>
						<li>
							<a class="btn btn-default remove-row label-tooltip" data-original-title="Delete This Row"><i class="icon-trash"></i></a>
						</li>	
					</ul>
				</div>
			</div>	
			<div class="row-columns">
			</div>	
		</div>
	</div>
</div>	
<div class="hidden">
	<div class="addon-box module" data-addon="module" data-modulename="" data-hook="" data-active="1">
		<i class="addon-icon module-icon"></i><span class="addon-title">Module</span>
		<div class="addon-tools">
			<a class="active-addon"><i class="icon-check"></i></a>	
			<a class="edit-addon"><i class="icon-edit"></i></a>	
			<a class="duplicate-addon"><i class="icon-copy"></i></a>	
			<a class="remove-addon"><i class="icon-trash"></i></a>				
		</div>
	</div>	
</div>
<div class="hidden">
	<div class="row-settings">
		<div class="form-group">
			<label>{l s='Row Name' d='Modules.JmsPagebuilder'}</label>
			<input type="text" value="" data-attrname="name" class="form-control addon-input addon-name">
		</div>
		<div class="form-group">
			<label>{l s='Hook' d='Modules.JmsPagebuilder'}</label>
			<select data-attrname="hook" class="form-control addon-input" required>
				<option value="top">Top</option>
				<option value="body" selected="selected">Body</option>
				<option value="footer">Footer</option>
			</select>
			<p class="help-block">Top : this row will show on header, Body : this row will show on Body, Footer : This row will show on Footer.</p>
		</div>
		<div class="form-group">
			<label>{l s='Custom CSS Class' d='Modules.JmsPagebuilder'}</label>
			<input type="text" value="" data-attrname="custom_class" class="form-control addon-input addon-custom_class">
			<p class="help-block">use this field to add a class name and then refer to it in your css file.</p>
		</div>
		<div class="form-group">
			<div class="checkbox"><label><input type="checkbox" data-attrname="fluid" class="addon-input input-fluid">{l s='Fluid Width' d='Modules.JmsPagebuilder'}</label></div>
			<p class="help-block">Enable this option to make this row fluid. Fluid row will help you to publish full width content.</p>
		</div>
		<div class="form-group">
			<label>{l s='Background Image' d='Modules.JmsPagebuilder'}</label>
			<input type="hidden" data-multilang="0" data-attrname="background_img" data-type="image" class="addon-input jms-image"><img height="100px" class="media-preview" ><a href="index.php?controller=AdminJmspagebuilderMedia" class="show-fancybox btn btn-primary" title="Select">Select</a><a class="btn btn-danger remove-media" href="#"><i class="icon-trash"></i></a>
			<p class="help-block">Set Background Image for Row</p>
		</div>	
		<div class="form-group">
			<label>{l s='Background Size' d='Modules.JmsPagebuilder'}</label>
			<select data-attrname="background_size" class="form-control addon-input">
				<option value="cover">Cover</option>
				<option value="contain">Contain</option>
				<option value="inherit">Inherit</option>
			</select>
		</div>
		<div class="form-group">
			<label>{l s='Background Repeat' d='Modules.JmsPagebuilder'}</label>
			<select data-attrname="background_repeat" class="form-control addon-input">
				<option value="no-repeat">No Repeat</option>
				<option value="repeat">Repeat All</option>
				<option value="repeat-x">Repeat Horizontally</option>
				<option value="repeat-y">Repeat Vertically</option>
				<option value="inherit">Inherit</option>
			</select>
		</div>
		<div class="form-group">
			<label>{l s='Background Position' d='Modules.JmsPagebuilder'}</label>
			<select data-attrname="background_position" class="form-control addon-input">
				<option value="0 0">Left Top</option>
				<option value="0 50%">Left Center</option>
				<option value="0 100%">Left Bottom</option>
				<option value="50% 0">Center Top</option>
				<option value="50% 50%">Center Center</option>
				<option value="50% 100%">Center Bottom</option>
				<option value="100% 0">Right Top</option>
				<option value="100% 50%">Right Center</option>
				<option value="100% 100%">Right Bottom</option>
			</select>
		</div>
		<div class="form-group">
			<label>{l s='Background Attachment' d='Modules.JmsPagebuilder'}</label>
			<select data-attrname="background_attachment" class="form-control addon-input">
				<option value="fixed">Fixed</option>
				<option value="scroll">Scroll</option>
				<option value="inherit">Inherit</option>
			</select>
		</div>	
	</div>	
</div>
<div class="hidden">
	<div class="column-settings">
		<div class="form-group">
			<label>{l s='Custom CSS Class' d='Modules.JmsPagebuilder'}</label>
			<input type="text" value="" data-attrname="custom_class" class="form-control addon-input addon-custom_class">
			<p class="help-block">use this field to add a class name and then refer to it in your css file.</p>
		</div>
		<div class="form-group md_col">
			<label>{l s='Medium Layout' d='Modules.JmsPagebuilder'}</label>
			<select data-attrname="md_col" class="form-control addon-input">
				<option selected="" value=""></option>
				<option value="col-md-1">col-md-1</option>
				<option value="col-md-2">col-md-2</option>
				<option value="col-md-3">col-md-3</option>
				<option value="col-md-4">col-md-4</option>
				<option value="col-md-5">col-md-5</option>
				<option value="col-md-6">col-md-6</option>
				<option value="col-md-7">col-md-7</option>
				<option value="col-md-8">col-md-8</option>
				<option value="col-md-9">col-md-9</option>
				<option value="col-md-10">col-md-10</option>
				<option value="col-md-11">col-md-11</option>
				<option value="col-md-12">col-md-12</option>
			</select>
			<p class="help-block">Set the class of this column for medium devices.</p>
		</div>
		<div class="form-group sm_col">
			<label>{l s='Tablet Layout' d='Modules.JmsPagebuilder'}</label>
			<select data-attrname="sm_col" class="form-control addon-input">
				<option selected="" value=""></option>
				<option value="col-sm-1">col-sm-1</option>
				<option value="col-sm-2">col-sm-2</option>
				<option value="col-sm-3">col-sm-3</option>
				<option value="col-sm-4">col-sm-4</option>
				<option value="col-sm-5">col-sm-5</option>
				<option value="col-sm-6">col-sm-6</option>
				<option value="col-sm-7">col-sm-7</option>
				<option value="col-sm-8">col-sm-8</option>
				<option value="col-sm-9">col-sm-9</option>
				<option value="col-sm-10">col-sm-10</option>
				<option value="col-sm-11">col-sm-11</option>
				<option value="col-sm-12">col-sm-12</option>
			</select>
			<p class="help-block">Set the class of this column for tablets.</p>
		</div>
		<div class="form-group xs_col">
			<label>{l s='Mobile Layout' d='Modules.JmsPagebuilder'}</label>
			<select data-attrname="xs_col" class="form-control addon-input">
				<option selected="" value=""></option>
				<option value="col-xs-1">col-xs-1</option>
				<option value="col-xs-2">col-xs-2</option>
				<option value="col-xs-3">col-xs-3</option>
				<option value="col-xs-4">col-xs-4</option>
				<option value="col-xs-5">col-xs-5</option>
				<option value="col-xs-6">col-xs-6</option>
				<option value="col-xs-7">col-xs-7</option>
				<option value="col-xs-8">col-xs-8</option>
				<option value="col-xs-9">col-xs-9</option>
				<option value="col-xs-10">col-xs-10</option>
				<option value="col-xs-11">col-xs-11</option>
				<option value="col-xs-12">col-xs-12</option>
			</select>
			<p class="help-block">Set the class of this column for mobile.</p>
		</div>
		<div class="form-group">
			<label>{l s='Background Image' d='Modules.JmsPagebuilder'}</label>
			<input type="hidden" data-multilang="0" data-attrname="background_img" data-type="image" class="addon-input jms-image"><img height="100px" class="media-preview" ><a href="index.php?controller=AdminJmspagebuilderMedia" class="show-fancybox btn btn-primary" title="Select">Select</a><a class="btn btn-danger remove-media" href="#"><i class="icon-trash"></i></a>
			<p class="help-block">Set Background Image for Column</p>
		</div>	
		<div class="form-group">
			<label>{l s='Background Size' d='Modules.JmsPagebuilder'}</label>
			<select data-attrname="background_size" class="form-control addon-input">
				<option value="cover">Cover</option>
				<option value="contain">Contain</option>
				<option value="inherit">Inherit</option>
			</select>
		</div>
		<div class="form-group">
			<label>{l s='Background Repeat' d='Modules.JmsPagebuilder'}</label>
			<select data-attrname="background_repeat" class="form-control addon-input">
				<option value="no-repeat">No Repeat</option>
				<option value="repeat">Repeat All</option>
				<option value="repeat-x">Repeat Horizontally</option>
				<option value="repeat-y">Repeat Vertically</option>
				<option value="inherit">Inherit</option>
			</select>
		</div>
		<div class="form-group">
			<label>{l s='Background Position' d='Modules.JmsPagebuilder'}</label>
			<select data-attrname="background_position" class="form-control addon-input">
				<option value="0 0">Left Top</option>
				<option value="0 50%">Left Center</option>
				<option value="0 100%">Left Bottom</option>
				<option value="50% 0">Center Top</option>
				<option value="50% 50%">Center Center</option>
				<option value="50% 100%">Center Bottom</option>
				<option value="100% 0">Right Top</option>
				<option value="100% 50%">Right Center</option>
				<option value="100% 100%">Right Bottom</option>
			</select>
		</div>
		<div class="form-group">
			<label>{l s='Background Attachment' d='Modules.JmsPagebuilder'}</label>
			<select data-attrname="background_attachment" class="form-control addon-input">
				<option value="fixed">Fixed</option>
				<option value="scroll">Scroll</option>
				<option value="inherit">Inherit</option>
			</select>
		</div>
	</div>
</div>	
<div class="hidden">	
	<ul class="pagebuilder-addons clearfix">	
		{foreach from=$addonslist key=i item=addonlist}
			<li class="addon-cat-addons">
				{$addonlist nofilter}					
			</li>
		{/foreach}
		{foreach from=$modules key=i item=module}
			<li class="addon-cat-modules">
				<a class="addon-title" data-module="{$module.name nofilter}">			
					<img src="{$modules_url nofilter}/{$module.name nofilter}/logo.png" />
					<span class="element-title">{$module.name nofilter}</span>
					<span class="element-description">{if isset($module.short_desc)}{$module.short_desc nofilter}{/if}</span>
				</a>
			</li>
		{/foreach}
	</ul>	
</div>	
<div class="jms-modal" id="layout-modal" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true" style="display: none;">
    <div class="jms-modal-dialog">
        <div class="jms-modal-content">
            <div class="jms-modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="jms-modal-title" id="modal-label"></h3>
            </div>
            <div class="jms-modal-body"></div>
            <div class="jms-modal-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-success pull-left" id="save-settings" data-dismiss="modal">{l s='Apply' d='Modules.JmsPagebuilder'}</a>
                <button class="btn btn-danger pull-left" data-dismiss="modal" aria-hidden="true">{l s='Cancel' d='Modules.JmsPagebuilder'}</button>
            </div>
        </div>
    </div>
</div>
<div class="jms-modal" id="addon-modal" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true" style="display: none;">
    <div class="jms-modal-dialog">
        <div class="jms-modal-content">
            <div class="jms-modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="jms-modal-title" id="modal-label"></h3>
            </div>
            <div class="jms-modal-body"></div>
            <div class="jms-modal-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-success pull-left" id="save-addons" data-dismiss="modal">{l s='Apply' d='Modules.JmsPagebuilder'}</a>
                <button class="btn btn-danger pull-left" data-dismiss="modal" aria-hidden="true">{l s='Cancel' d='Modules.JmsPagebuilder'}</button>
            </div>
        </div>
    </div>
</div>
<div class="jms-modal fade" id="modal-addons" tabindex="-1" role="dialog" aria-labelledby="modal-addon-label" aria-hidden="true">
	<div class="jms-modal-dialog jms-modal-xlg">
		<div class="jms-modal-content">
			<div class="jms-modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="jms-modal-title" id="modal-addons-label">{l s='Add Addon or Module' d='Modules.JmsPagebuilder'}</h3>
				<div class="addon-filter">
					<ul>
						<li data-category="all" class="active"><a href="javascript:void(0)">All</a></li>
						<li data-category="addons"><a href="javascript:void(0)">Addons</a></li>
						<li data-category="modules"><a href="javascript:void(0)">Modules</a></li>
					</ul>
				</div>				
			</div>
			<div class="jms-modal-body">
			</div>
		</div>
	</div>
</div>

<input type="hidden" name="mediatoken" id="mediatoken" value="{$mediatoken nofilter}" />
<form name="layoutForm" action="{$link->getAdminLink('AdminJmspagebuilderHomepages') nofilter}&configure=jmspagebuilder" method="post">
<input type="hidden" name="jmsformjson" id="jmsformjson" value="" />
<input type="hidden" name="json_home_id" value="{$homepage.id_homepage nofilter}" />
<input type="hidden" name="saveLayout" value="1" />
</form>
<script type="text/javascript">
	var iso = 'en';
	var pathCSS = '{$smarty.const._THEME_CSS_DIR_|addslashes nofilter}';
	var ad = '{$ad nofilter}';

	$(document).ready(function(){
		{block name="autoload_tinyMCE"}
			tinySetup({
				mode : "textareas",
				editor_selector :"jms_editor",
				relative_urls : false,
				remove_script_host : false,
				convert_urls : {if $converturl}true{else}false{/if},
				document_base_url : "{$root_url nofilter}"
			});
		{/block}
	});	
	$(document).ready(function(){
		$('body').addClass('page-sidebar-closed');
	});		
</script>