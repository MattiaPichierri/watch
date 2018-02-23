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
		var testimonialCarousel = $(".testimonial-carousel");
		var items = {if $jmsitems}{$jmsitems nofilter}{else}1{/if},
		    itemsDesktop = {if $jmsitems}{$jmsitems nofilter}{else}1{/if},
		    itemsDesktopSmall = 1,
		    itemsTablet = 1,
		    itemsMobile = 1;
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;
		testimonialCarousel.owlCarousel({
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
			margin: 30,
		    nav: false,
		    loop: true,
		    dots: false,
		    autoplay: true,
		    autoplaySpeed: 1000,
		    navigationText: ["", ""],
		    slideBy: 1,
		    slideSpeed: 200	
		});
	});
</script>
<div class="testimonial-carousel">
	{foreach from=$testimonials item=testimonial name=myLoop}
		<div class="item">
			{if $show_image}
				<div class="image">
					<img class="img-responsive" src="{$image_url nofilter}resized_{$testimonial.image nofilter}" alt="{$testimonial.author nofilter}" />
				</div>
			{/if}
			<div class="author">
				{$testimonial.author nofilter}
			</div>
			{if $show_office == 1}
				<div class="office">
					{$testimonial.office nofilter}
				</div>
			{/if}
			{if $show_date == 1}
				<div class="datetime">
					{$testimonial.posttime nofilter}
				</div>
			{/if}
			<div class="comment" >
				{$testimonial.comment nofilter}
			</div>
		</div>
	{/foreach}
</div>