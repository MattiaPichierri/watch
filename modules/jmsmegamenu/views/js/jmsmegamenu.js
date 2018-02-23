/**
 * @package Jms Drop Megamenu
 * @version 1.0
 * @Copyright (C) 2009 - 2015 Joommasters.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @Website: http://www.joommasters.com
**/

(function($){	
	$.fn.jmsMegaMenu = function(options){
		//set default options  
		var defaults = {
			duration: 100,
			event: 'hover'
		};

		//call in the default otions
		var options = $.extend(defaults, options);
		var $MegaMenuObj = this;
		
		//act upon the element that is passed into the design    
		return $MegaMenuObj.each(function(options){				
			_Init();
			function megaOver(){
				var subNav = $('.dropdown-menu',this);				
				$(this).addClass('open');				
			}
			function megaAction(obj){
				var subNav = $('.dropdown-menu',obj);
				$(obj).addClass('open');
				
			}
			function megaOut(){				
				$(this).removeClass('open');
			}
			function megaActionClose(obj){				
				$(obj).removeClass('open');				
			}
			function megaReset(){
				$('li',$MegaMenuObj).removeClass('open');
			}

			function _Init(){				
				if (defaults.event == 'hover'){
					$('li.mega > a',$MegaMenuObj).mouseover(function(e){						
						var $parentLi = $(this).parent();						
						megaAction($parentLi);						
						//e.stopPropagation();
						//e.preventDefault();
					});
					$('li.mega > a',$MegaMenuObj).mouseout(function(e){						
						var $parentLi = $(this).parent();						
						megaActionClose($parentLi);												
					});
					$('li.mega > .dropdown-menu',$MegaMenuObj).mouseover(function(e){						
						var $parentLi = $(this).parent();						
						megaAction($parentLi);										
					});
					$('li.mega > .dropdown-menu',$MegaMenuObj).mouseout(function(e){						
						var $parentLi = $(this).parent();						
						megaActionClose($parentLi);										
					});
				}
				if (defaults.event == 'click'){
					$('body').mouseup(function(e){
						if (!$(e.target).parents('.open').length){
							megaReset();
						}
					});

					$('li.mega > a',$MegaMenuObj).click(function(e){						
						var $parentLi = $(this).parent();
						if ($parentLi.hasClass('open')){
							megaActionClose($parentLi);
						} else {
							megaAction($parentLi);
						}						
						e.stopPropagation();
						e.preventDefault();
					});
				}
			}
		});
	};
})(jQuery);