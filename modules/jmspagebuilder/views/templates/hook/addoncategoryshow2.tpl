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
jQuery(function ($) {
    "use strict";
	var categoriesCarousel = $(".categories-carousel2");		
	var rtl = false;
	if ($("body").hasClass("rtl")) rtl = true;				
	categoriesCarousel.owlCarousel({
		responsiveClass:true,
		responsive:{			
			1199:{
				items:4
			},
			991:{
				items:3
			},
			768:{
				items:2
			},
			318:{
				items:1
			}
		},
		rtl: rtl,
		margin:30,
	    nav: true,
	    dots: false,
		autoplay: false,
		loop: true,
	    rewindNav: false,
	    navigationText: ["", ""],
	    slideBy: false,
	    slideSpeed: 200	
	});
});
</script>
<div class="home_categories2">
    {if isset($categories) AND $categories}
            <div class="categories-carousel2">
            {foreach from=$categories item=category }
                {assign var='categoryLink' value=$link->getcategoryLink($category.id_category, $category.link_rewrite)}
					<div class="categories-wrapper">
						<div class="categoy-image">
							<a href="{$categoryLink nofilter}">
								<img src="{$img_cat_dir nofilter}{$category.id_category nofilter}_thumb.jpg" alt="{$category.name nofilter}" title="{$category.name nofilter}" class="img-responsive"/>
							</a>
						</div>
						<div class="category-info">
							<a class="cat-name" href="{$categoryLink}">{$category.name nofilter}</a>
						</div>
					</div>
            {/foreach}
            </div>
    {else}
        <p>{l s='No categories' d='Modules.JmsPagebuilder'}</p>
  {/if}
</div>