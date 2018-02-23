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
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<script type="text/javascript">
	var testi_items = 3,
	    testi_itemsDesktop = {if $items_show}{$items_show|escape:'htmlall':'UTF-8'}{else}1{/if},
	    testi_itemsDesktopSmall = {if $items_show_md}{$items_show_md|escape:'htmlall':'UTF-8'}{else}1{/if},
	    testi_itemsTablet = {if $items_show_sm}{$items_show_sm|escape:'htmlall':'UTF-8'}{else}1{/if},
	    testi_itemsMobile = {if $items_show_xs}{$items_show_xs|escape:'htmlall':'UTF-8'}{else}1{/if};
		var p_nav_testi2 = {if $navigation == 1}true{else}false{/if};
	    var p_pag_testi2 = {if $pagination == 1}true{else}false{/if};
	    var auto_play_testi2 = {if $autoplay == 1}true{else}false{/if};
</script>

<div class="addon-title">
{if $addon_title}
	<h3>{$addon_title|escape:'htmlall':'UTF-8'}</h3>
{/if}
{if $addon_desc}
<p class="addon-desc">{$addon_desc|escape:'htmlall':'UTF-8'}</p>
{/if}	
</div>
<div id="testimonial">
<div class="testimonial-carousel">
{foreach from=$testimonials item=testimonial}	
<div class="testimonial-box">
			{if $show_image}
						<div class="testimonial-img">
							<img class="img-responsive" src="{$image_url|escape:'html':'UTF-8'}{$testimonial.image|escape:'html':'UTF-8'}" alt="{$testimonial.author|escape:'html':'UTF-8'}" />
						</div>
			{/if}
			<div class="testimonial-info">
				{if $show_time}
					<div class="testimonial-date">
						{$testimonial.posttime|date_format:"%b %e, %Y"|escape:'html':'UTF-8'}
					</div>
				{/if}
				<div class="testimonial-comment" >
					{$testimonial.comment|escape:'html':'UTF-8'}
				</div>
			</div>
			<div class="info_people">
				<div class="testimonial-author">
					{$testimonial.author|escape:'html':'UTF-8'}
				</div>
				{if $show_office}
					<span class="show_office">
						{$testimonial.office|escape:'html':'UTF-8'}
					</span>
				{/if}	
			</div>
</div>	
{/foreach}
</div>
</div>