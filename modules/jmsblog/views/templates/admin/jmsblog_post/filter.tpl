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
<script type="text/javascript">
$( document ).ready(function() {
	$( "#filter_category_id" ).change(function() {
		filterchange();
	});
	$( "#filter_state" ).change(function() {
		filterchange();
	});
});
function filterchange(){
	var category_id = $( "#filter_category_id" ).val();
	var state = $( "#filter_state" ).val();
	var url = "{$link->getAdminLink('AdminJmsblogPost') nofilter}&configure=jmsblog&filter_category_id=" + category_id + "&filter_state=" + state;
	url = url.replace('&amp;','&');
	window.location = url;
}
</script>
<div class="jms-blog-filter">
	<span>{l s='Category Filter' d='Modules.JmsBlog'}</span>
	<select id="filter_category_id">
		<option value="0">{l s='Select Category' d='Modules.JmsBlog'}</option>
		{foreach from=$categories item=category}
		<option {if $category.category_id == $filter_category_id}selected{/if} value="{$category.category_id nofilter}">{$category.title nofilter}</option>
		{/foreach}
	</select>
	
	<span>{l s='State Filter' d='Modules.JmsBlog'}</span>
	<select id="filter_state">
		<option {if $filter_state == -1}selected{/if} value="-1">{l s='Select Status' d='Modules.JmsBlog'}</option>		
		<option {if $filter_state == 1}selected{/if} value="1">{l s='Enabled' d='Modules.JmsBlog'}</option>		
		<option {if $filter_state == 0}selected{/if} value="0">{l s='Disabled' d='Modules.JmsBlog'}</option>
	</select>
</div>