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
<script type="text/javascript">
jQuery(function ($) {
    "use strict";
	var blogCarousel = $(".blog-carousel");		
	var items = 3,
	    itemsDesktop = {if $items_show}{$items_show nofilter}{else}3{/if},
	    itemsDesktopSmall = {if $items_show_md}{$items_show_md nofilter}{else}2{/if},
	    itemsTablet = {if $items_show_sm}{$items_show_sm nofilter}{else}2{/if},
	    itemsMobile = {if $items_show_xs}{$items_show_xs nofilter}{else}1{/if};
	var rtl = false;
	if ($("body").hasClass("rtl")) rtl = true;				
	blogCarousel.owlCarousel({
		responsiveClass:true,
		responsive:{			
			1199:{
				items:itemsDesktop
			},
			991:{
				items:itemsDesktopSmall
			},
			768:{
				items:itemsTablet
			},
			318:{
				items:itemsMobile
			}
		},
		rtl: rtl,
	    nav: {if $navigation == '1'}true{else}false{/if},
	    dots: {if $pagination == '1'}true{else}false{/if},
		autoplay:{if $autoplay == '1'}true{else}false{/if},
	    rewindNav: {if $rewind == '1'}true{else}false{/if},
	    navigationText: ["", ""],
	    slideBy: {if $slidebypage == '1'}'page'{else}1{/if},
	    slideSpeed: 200	
	});
});
</script>
{if $addon_title}
<div class="addon-title">
	<h3>{$addon_title nofilter}</h3>
</div>
{/if}
{if $addon_desc}
<p class="addon-desc">{$addon_desc nofilter}</p>
{/if}
{if $posts|@count gt 0}
<div class="blog-carousel">	
	{foreach from=$posts item=post}				
		{assign var=params value=['post_id' => $post.post_id, 'category_slug' => $post.category_alias, 'slug' => $post.alias]}
		{assign var=catparams value=['category_id' => $post.category_id, 'slug' => $post.category_alias]}	
		<div class="blog-item">
			{if $post.link_video && ($show_media == '1')}
			<div class="post-thumb">
				{$post.link_video nofilter}
			</div>
			{elseif $post.image && ($show_media == '1')}
			<div class="post-thumb">
				<a href="#"><img src="{$image_url nofilter}thumb_{$post.image nofilter}" alt="{$post.title nofilter}" class="img-responsive" /></a>			 		
			</div>
			{/if}	
			<h4 class="post-title"><a href="{jmsblog::getPageLink('jmsblog-post', $params) nofilter|replace:'&amp;':'&'}">{$post.title nofilter}</a></h4>
			<ul class="post-meta">
				{if $show_category == '1'}
				<li class="post-category"><span>{l s='Category' d='Modules.JmsPagebuilder'} :</span> <a href="{jmsblog::getPageLink('jmsblog-category', $catparams) nofilter|replace:'&amp;':'&'}">{$post.category_name nofilter}</a></li>
				{/if}				
				{if $show_time == '1'}						
				<li class="post-created"><span>{l s='Created' d='Modules.JmsPagebuilder'} :</span> {$post.created nofilter|date_format:"%B %e, %Y"}</li>
				{/if}
				{if $show_nviews == '1'}		
				<li class="post-views"><span>{l s='Views' d='Modules.JmsPagebuilder'} :</span> {$post.views nofilter}</li>
				{/if}
				{if $show_ncomments == '1'}		
				<li class="post-comments"><span>{l s='Comments' d='Modules.JmsPagebuilder'} :</span> {$post.comment_count nofilter}</li>
				{/if}	
			</ul>
			{if $show_introtext == '1'}	
			<div class="post-intro">{$post.introtext nofilter}</div>	
			{/if}
			{if $show_readmore == '1'}	
				<a class="post-readmore">{l s='read more' d='Modules.JmsPagebuilder'} ...</a>	
			{/if}
		</div>	
	{/foreach}	
</div>	
{/if}	