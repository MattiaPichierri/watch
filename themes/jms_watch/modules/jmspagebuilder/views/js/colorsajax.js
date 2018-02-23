/**
* 2007-2016 PrestaShop
*
* Jms Page Builder
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2016 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

(function($) {	
    $.JmsColorsAjax = function() {
        this.requestData = 'jmsajax=1';
    };
    $.JmsColorsAjax.prototype = {
        processAjax: function() {			
            var myElement = this;      
			
			myElement.getProductIDs();			
			if(myElement.requestData != "jmsajax=1"){				
            $.ajax({
                type: 'POST',
                headers: {"cache-control": "no-cache"},
                url: baseDir + 'modules/jmspagebuilder/colorsajax.php' + '?rand=' + new Date().getTime(),
                async: true,
                cache: false,
                dataType: "json",
                data: myElement.requestData,
                success: function(jsonData) {					
                    if (jsonData) {
                        if (jsonData.colorsarr) {
                            var listProductColors = new Array();
                            for (i = 0; i < jsonData.colorsarr.length; i++) {
                                listProductColors[jsonData.colorsarr[i].id] = jsonData.colorsarr[i].content;
                            }
                            $(".product-colors").each(function() {
                                if (listProductColors[$(this).data("id-product")])									
									$( listProductColors[$(this).data("id-product")] ).insertAfter($(this).find('.product-image'));						
                            });
                        }
                    }
                },
                error: function() {
                }
            });
            }
        },
		getProductIDs: function() {            
            var productcolors = "";
            $(".product-colors").each(function() {
                if (!productcolors)
                    productcolors += $(this).data("id-product");
                else
                    productcolors += "," + $(this).data("id-product");
            });
            if (productcolors) {
                this.requestData += '&productids=' + productcolors;
            }						
            return false;
        }
    };
}(jQuery));

