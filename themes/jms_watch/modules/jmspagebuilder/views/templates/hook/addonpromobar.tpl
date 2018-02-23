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
<script type='text/javascript'>
	$(document).ready(function() {
		var height = {$promobar_height};

		$('.promobar .close').click(function() {
			$('.promobar').fadeOut('500');
			$('body').css('padding-top', '0');
		});

		if ($('.promobar-fixed.top').length > 0) {
			$(this).find('body').css('padding-top', height);
		}

	});

	{literal}
	jQuery(function ($) {
	    "use strict"; 
		$.each( $('.promo-countdown'), function( key, value ) {
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
<div class="promobar{if $box_class} {$box_class}{/if}{if $promobar_position == top} top{else} bottom{/if}{if $promobar_fixed == 'yes'} promobar-fixed{else}{/if}" style="{if $promobar_bg}background-color: {$promobar_bg};{/if}{if $promobar_height} height: {$promobar_height}px;{/if}">
	{$promobar_message nofilter}
	{if $promobar_expire_time}
	<span class="promo-countdown">
		{$promobar_expire_time|escape:'html':'UTF-8'}
	</span>
	{/if}
  	{if $show_close_btn}<a href="#" class="close">&times;</a>{/if}
</div>
<style>
	.promobar.promobar-fixed {
		position: fixed;
		left: 0;
		right: 0;
		width: 100%;
		z-index: 9999;
	}

	.promobar.top {
		top: 0;
	}

	.promobar.bottom {
		bottom: 0;
	}

	.promobar .close {
		position: absolute;
		top: calc(50% - 15px);
		right: 0px;
		color: rgb(255, 255, 255);
		font-weight: bold;
		font-size: 30px;
		cursor: pointer;
		text-shadow: none;
		opacity: 1;
		width: 30px;
		height: 30px;
		display: inline-block;
	}
</style>