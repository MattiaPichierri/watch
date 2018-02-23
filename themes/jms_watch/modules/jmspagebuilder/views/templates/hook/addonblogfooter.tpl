{*
* 2007-2016 PrestaShop
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
*  @copyright  2007-2016 PrestaShop SA
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if $addon_title}
	<div class="addon-title title-blog">
		<h3>{$addon_title|escape:'htmlall':'UTF-8'}</h3>
	</div>
{/if}
{if $addon_desc}
	<p class="addon-desc">{$addon_desc|escape:'htmlall':'UTF-8'}</p>
{/if}

{if $posts|@count gt 0}
<div class="blog-carousel">	
	{foreach from=$posts item=post}				
		{assign var=params value=['post_id' => $post.post_id, 'category_slug' => $post.category_alias, 'slug' => $post.alias]}
		{assign var=catparams value=['category_id' => $post.category_id, 'slug' => $post.category_alias]}	
		<div class="blog-item">
			{if $post.link_video && ($show_media == '1')}
				<div class="post-thumb">
					{$post.link_video|escape:'htmlall':'UTF-8'}
				</div>
			{elseif $post.image && ($show_media == '1')}
				<div class="post-thumb">
					<a href="{jmsblog::getPageLink('jmsblog-post', $params)|escape:'htmlall':'UTF-8'|replace:'&amp;':'&'}">
						<img src="{$image_url|escape:'html':'UTF-8'}{$post.image|escape:'html':'UTF-8'}" alt="{$post.title|escape:'htmlall':'UTF-8'}" class="img-responsive" />
					</a>
				</div>
			{/if}
			<div class="post-info">
				<ul class="post-meta">		
                  <a class="post-title" href="{jmsblog::getPageLink('jmsblog-post', $params)|escape:'htmlall':'UTF-8'|replace:'&amp;':'&'}">{$post.title|truncate:40:'...'|escape:'htmlall':'UTF-8'}</a>				
					{if $show_time == '1'}
						<li>
								<span class="post-created">
									<i class="fa fa-calendar-o" aria-hidden="true"></i>
									{$post.created|escape:'html':'UTF-8'|date_format:'%b %e, %Y'}
								</span>
						</li>
					{/if}
				
					{if $show_nviews == '1'}
						<li>
							<span>
								<i class="fa fa-eye" aria-hidden="true"></i>
								{$post.views|escape:'html':'UTF-8'} {l s='views' d='Shop.Theme'}
							</span>
						</li>
					{/if}
					{if $show_ncomments == '1'}		
						<li>
							<span>
							     <i class="fa fa-comments-o" aria-hidden="true"></i>
								{$post.comment_count|escape:'html':'UTF-8'} {l s='comments' d='Shop.Theme'}
							</span>
						</li>
					{/if}
				</ul>
			</div>
		</div>	
	{/foreach}	
</div>	
{/if}	