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

{if $addon_title}
<div class="addon-title">
	<h3>{$addon_title nofilter}</h3>
</div>
{/if}
{if $addon_desc}
<p class="addon-desc">{$addon_desc nofilter}</p>
{/if}
<div id="bb-bookblock" class="bb-bookblock{if isset($box_class) && $box_class} {$box_class nofilter}{/if}">
{foreach from=$contents item=content}
	{if $content.content}
	<div class="bb-item">
		{if isset($content.content) && $content.content}{$content.content nofilter}{/if}		
	</div>
	{/if}
{/foreach}
</div>
<nav>
	<a id="bb-nav-first" href="#" class="bb-custom-icon bb-custom-icon-first">First page</a>
	<a id="bb-nav-prev" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>
	<a id="bb-nav-next" href="#" class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>
	<a id="bb-nav-last" href="#" class="bb-custom-icon bb-custom-icon-last">Last page</a>
</nav>
<script>
	var Page = (function() {				
		var config = {
			$bookBlock : $( '#bb-bookblock' ),
			$navNext : $( '#bb-nav-next' ),
			$navPrev : $( '#bb-nav-prev' ),
			$navFirst : $( '#bb-nav-first' ),
			$navLast : $( '#bb-nav-last' )
		},
		init = function() {
			config.$bookBlock.bookblock( {
				speed : 1000,
				shadowSides : 0.8,
				shadowFlip : 0.4
			} );
			initEvents();
		},
		initEvents = function() {						
			var $slides = config.$bookBlock.children();
			// add navigation events
			config.$navNext.on( 'click touchstart', function() {
				config.$bookBlock.bookblock( 'next' );
				return false;
			} );
			config.$navPrev.on( 'click touchstart', function() {
				config.$bookBlock.bookblock( 'prev' );
				return false;
			} );
			config.$navFirst.on( 'click touchstart', function() {
				config.$bookBlock.bookblock( 'first' );
				return false;
			} );
			config.$navLast.on( 'click touchstart', function() {
				config.$bookBlock.bookblock( 'last' );
				return false;
			} );						
			// add swipe events
			$slides.on( {
				'swipeleft' : function( event ) {
					config.$bookBlock.bookblock( 'next' );
					return false;
				},
				'swiperight' : function( event ) {
					config.$bookBlock.bookblock( 'prev' );
					return false;
				}
			} );

			// add keyboard events
			$( document ).keydown( function(e) {
				var keyCode = e.keyCode || e.which,
				arrow = {
					left : 37,
					up : 38,
					right : 39,
					down : 40
				};
				switch (keyCode) {
					case arrow.left:
						config.$bookBlock.bookblock( 'prev' );
						break;
					case arrow.right:
						config.$bookBlock.bookblock( 'next' );
						break;
					}
				} );
			};
		return { init : init };
	})();
</script>
<script>
	Page.init();
</script>