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
<div class="countdown-box{if $box_class} {$box_class|escape:'htmlall':'UTF-8'}{/if}">
{if $addon_title}	
<h3>{$addon_title|escape:'htmlall':'UTF-8'}</h3>
{/if}
{if $image}	
	<img src="{$root_url|escape:'html':'UTF-8'}{$image|escape:'html':'UTF-8'}" />	
{/if}
{if $html_content}
{$html_content nofilter}
{/if}
<div class="countdown">
	{$expire_time|escape:'html':'UTF-8'}
</div>
{if $button_text}
<a href="{if $button_link}{$button_link|escape:'htmlall':'UTF-8'}{else}#{/if}"{if $target == 'new window'} target="_blank"{/if}>{$button_text|escape:'htmlall':'UTF-8'}</a>
{/if}
</div>	
<script type="text/javascript">
{literal}
jQuery(function ($) {
    "use strict"; 
	$.each( $('.countdown'), function( key, value ) {
		var $expire_time = $(this).html();
		var datetime = $expire_time.split(" ");
		var date = datetime[0];
		var time = datetime[1];
		var datestr = date.split("-");
		var timestr = time.split(":");
		var austDay = new Date(datestr[0],datestr[1]-1,datestr[2],timestr[0],timestr[1],timestr[2],0);
		$(this).countdown({until: austDay});	
	});
});
{/literal}
</script>