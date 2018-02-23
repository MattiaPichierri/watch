/**
* 2007-2017 PrestaShop
*
* Jms Page Builder
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

jQuery(function ($) {
    "use strict";
	var bodyEl = $("body"),
		content = $('#content-wrap'),
		openbtn = $('#open-button'),
		closebtn = $('#close-button' ),
		isOpen = false;

	function init() {
		initEvents();
	}

	function initEvents() {
		openbtn.click(function(e) {		
			toggleMenu();
			e.stopPropagation();
		});
		if( closebtn ) {
			closebtn.click(function() {		
				toggleMenu();
			});
		}
		content.click(function(e) {		
			var target = e.target;
			if( isOpen && target !== openbtn ) {
				toggleMenu();
			}
		});		
	}
	function toggleMenu() {		
		if( isOpen ) {
			bodyEl.removeClass('show-menu');
		}
		else {
			bodyEl.addClass('show-menu');
		}
		isOpen = !isOpen;
	}
	init();

});