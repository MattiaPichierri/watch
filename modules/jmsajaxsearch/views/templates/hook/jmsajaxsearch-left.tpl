{*
 * @package Jms Ajax Search
 * @version 1.1
 * @Copyright (C) 2009 - 2017 Joommasters.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @Website: http://www.joommasters.com
*}
{$ajaxSearch nofilter}
<div id="jms_ajax_search" class="search-nav">
	<a href="#">	
		<span>{l s='Search Form' d='Modules.jmsajaxsearch.Shop'}</span>
	</a>
	<form method="get" action="{$link->getPageLink('search') nofilter}">
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input type="text" id="ajax_search" name="search_query" class="search_query" placeholder="{l s='Search keyword...' d='Modules.jmsajaxsearch.Shop'}" />
	</form>
	<div id="search_result"></div>
</div>