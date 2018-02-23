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
	<div class="jms-row{if isset($row->settings->custom_class) && $row->settings->custom_class} {$row->settings->custom_class|escape:'htmlall':'UTF-8'}{/if}" {if isset($row->settings->background_img) && $row->settings->background_img}style="{if isset($row->settings->background_img) && $row->settings->background_img}background-image:url('{$root_url|escape:'htmlall':'UTF-8'}{$row->settings->background_img|escape:'htmlall':'UTF-8'}');{/if}{if isset($row->settings->background_size) && $row->settings->background_size}background-size:{$row->settings->background_size|escape:'htmlall':'UTF-8'};{/if}{if isset($row->settings->background_attachment) && $row->settings->background_attachment}background-attachment:{$row->settings->background_attachment|escape:'htmlall':'UTF-8'};{/if}{if isset($row->settings->background_position) && $row->settings->background_position}background-position:{$row->settings->background_position|escape:'htmlall':'UTF-8'};{/if}"{/if}>
		{if isset($row->settings->fluid) && $row->settings->fluid == '0'}
			<div class="container">
		{else}
			<div class="container-fluid">
		{/if}
		<div class="row">
		{foreach from=$row->cols key=cindex item=column}
			<div class="{$column->className|escape:'htmlall':'UTF-8'}{if isset($column->settings->custom_class) && $column->settings->custom_class} {$column->settings->custom_class|escape:'htmlall':'UTF-8'}{/if}" style="{if isset($column->settings->background_img) && $column->settings->background_img}background-image:url('{$root_url|escape:'htmlall':'UTF-8'}{$column->settings->background_img|escape:'htmlall':'UTF-8'}');{/if}{if isset($column->settings->background_size) && $column->settings->background_size}background-size:{$column->settings->background_size|escape:'htmlall':'UTF-8'};{/if}{if isset($column->settings->background_attachment) && $column->settings->background_attachment}background-attachment:{$column->settings->background_attachment|escape:'htmlall':'UTF-8'};{/if}{if isset($column->settings->background_position) && $column->settings->background_position}background-position:{$column->settings->background_position|escape:'htmlall':'UTF-8'};{/if}">
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
