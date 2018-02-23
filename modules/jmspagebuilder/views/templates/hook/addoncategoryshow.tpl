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
{if isset($id_cat) AND $id_cat}
	{if $show_img == 1}
	{assign var='categoryLink' value=$link->getcategoryLink($id_cat, $category.link_rewrite)}
	<div class="thumb">
		<a href="{$categoryLink nofilter}" title="{$name nofilter}" class="category_image">
			<img src="{$image_url nofilter}{$id_cat nofilter}_thumb.jpg" alt="{$name nofilter}" title="{$name nofilter}" class="img-responsive"/>
		</a>
	</div>
	{/if}
	<div class="parent-category">
		<a href="{$categoryLink nofilter}" title="{$name nofilter}">{$name nofilter}</a>
	</div>
	{if $num_child != 0}
		<ul class="child-categories">
			{foreach from=$child item=c}
				{assign var='categoryLink' value=$link->getcategoryLink($c.id_category, $category.link_rewrite)}
				<li>			
					<a href="{$categoryLink nofilter}" title="{$c.name nofilter}">{$c.name nofilter}</a>
				</li>
			{/foreach}
		</ul>
	{/if}
{else}
	<p>{l s='No categories' d='Modules.JmsPagebuilder'}</p>
{/if}

