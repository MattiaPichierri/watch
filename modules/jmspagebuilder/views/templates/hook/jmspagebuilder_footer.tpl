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
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{foreach from=$rows item=row}
	<div class="jms-row{if isset($row->settings->custom_class) && $row->settings->custom_class} {$row->settings->custom_class nofilter}{/if}" {if isset($row->settings->background_img) && $row->settings->background_img}style="{if isset($row->settings->background_img) && $row->settings->background_img}background-image:url('{$root_url nofilter}{$row->settings->background_img nofilter}');{/if}{if isset($row->settings->background_size) && $row->settings->background_size}background-size:{$row->settings->background_size nofilter};{/if}{if isset($row->settings->background_attachment) && $row->settings->background_attachment}background-attachment:{$row->settings->background_attachment nofilter};{/if}{if isset($row->settings->background_position) && $row->settings->background_position}background-position:{$row->settings->background_position nofilter};{/if}"{/if}>
		{if isset($row->settings->fluid) && $row->settings->fluid == '0'}
			<div class="container">
		{else}
			<div class="container-fluid">
		{/if}
		<div class="row">
		{foreach from=$row->cols key=cindex item=column}
			<div class="{$column->className nofilter}{if isset($column->settings->custom_class) && $column->settings->custom_class} {$column->settings->custom_class nofilter}{/if}" style="{if isset($column->settings->background_img) && $column->settings->background_img}background-image:url('{$root_url nofilter}{$column->settings->background_img nofilter}');{/if}{if isset($column->settings->background_size) && $column->settings->background_size}background-size:{$column->settings->background_size nofilter};{/if}{if isset($column->settings->background_attachment) && $column->settings->background_attachment}background-attachment:{$column->settings->background_attachment nofilter};{/if}{if isset($column->settings->background_position) && $column->settings->background_position}background-position:{$column->settings->background_position nofilter};{/if}">
				{foreach from=$column->addons key=aindex item=addon}
					<div class="addon-box">
						{if isset($addon->return_value) && $addon->return_value}{$addon->return_value nofilter}{/if}
					</div>
				{/foreach}
			</div>
		{/foreach}
		</div>
		{if isset($row->settings->fluid) && $row->settings->fluid == '0'}</div>{/if}
	</div>
{/foreach}
{if $settingpanel}
<div id="jmstools" class="jmsclose hidden-xs hidden-sm">
	<a id="jmstools-arrow" class="pull-right"><i class="fa fa-cog fa-spin"></i></a>
	<div id="jmstools-content" class="pull-left">
		<form action="index.php" method="POST">
			{if $themeskins|@count > 0}
			<div class="form-group">
				<label class="form-label">Theme Skin</label>
					<a class="skin-box {if $jpb_skin=='default' || $jpb_skin==''}active{/if}" title="Default">
					<img src="themes/{$themename nofilter}/skin-icons/default.png" alt="Default" />
					</a>
				{foreach from=$themeskins item=sk}
					<a class="skin-box {if $jpb_skin== $sk}active{/if}" title="{$sk nofilter}" data-color="{$sk nofilter}">
					<img src="themes/{$themename nofilter}/skin-icons/{$sk nofilter}.png" alt="{$sk nofilter}" />
					</a>					
				{/foreach}
			</div>
			{/if}	
			{if isset($homepages) && $homepages|@count > 1}
			<div class="form-group">
					<label>Home Page</label>
					<select name="jpb_homepage" id="jmshomepage">
					{foreach from=$homepages item=hp}
						<option value="{$hp.id_homepage nofilter}" {if $jpb_homepage=={$hp.id_homepage nofilter}}selected="selected"{/if}>{$hp.title nofilter}</option>					
					{/foreach}	
					</select>
			</div>
			{/if}			
			{if isset($producthovers)}
			<div class="form-group">
					<label>Product Box Hover</label>
					<select name="jpb_phover" id="jmsphover">
					{foreach from=$producthovers item=ph key=phkey}
						<option value="{$phkey nofilter}" {if $jpb_phover=={$phkey nofilter}}selected="selected"{/if}>{$ph nofilter}</option>					
					{/foreach}	
					</select>
			</div>
			{/if}				
			<div class="form-group">		
				<label>Direction</label>	
				<select name="jpb_rtl">
					<option value="0" {if $jpb_rtl=='0'}selected="selected"{/if}>LTR</option>										
					<option value="1" {if $jpb_rtl=='1'}selected="selected"{/if}>RTL</option>										
				</select>				
			</div>
			<input id="jmsskin" type="hidden" name="jpb_skin" value="{$jpb_skin nofilter}" />
			
			<div class="form-group btn-action">
				<button type="submit" class="btn" name="apply" value="1">Apply</button>
				<a class="btn" href="index.php?settingreset=1">Reset</a>
			</div>
			<input type="hidden" name="settingpanel" value="1" />
		</form>	
	</div>
</div>
{/if}