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
<div class="btn-group module-group-box">
<a title="Search" data-toggle="dropdown" class="btn-xs dropdown-toggle" href="#">
{if $icon_class}
<i class="{$icon_class nofilter}"></i>
{/if}
{if $addon_title}
{$addon_title|escape:'htmlall':'UTF-8'}
{/if}
{if $addon_desc}
<span>{$addon_desc|escape:'htmlall':'UTF-8'}</span>
{/if}
</a>
<div role="menu" class="dropdown-menu">
	{if $module1_content}
	{$module1_content nofilter}
	{/if}
	{if $module2_content}
	{$module2_content nofilter}
	{/if}
	{if $module3_content}
	{$module3_content nofilter}
	{/if}
	{if $module4_content}
	{$module4_content nofilter}
	{/if}
</div>
</div>