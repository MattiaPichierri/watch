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
<div class="jms-banner{if $box_class} {$box_class|escape:'htmlall':'UTF-8'}{/if}">
{if $banner}
	<a href="{if $banner_link}{$banner_link|escape:'htmlall':'UTF-8'}{else}#{/if}"{if $target == 'new window'} target="_blank"{/if}>
		<img src="{$root_url|escape:'html':'UTF-8'}{$banner|escape:'html':'UTF-8'}" alt="{$alt_text|escape:'htmlall':'UTF-8'}" />
	</a>
{/if}
{if $html_content}
{$html_content nofilter}
{/if}
</div>	
