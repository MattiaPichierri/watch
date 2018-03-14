/**
 * This file is part of the simplesurance GmbH checkout plugin for PrestaShop.
 *
 * @author simplesurance GmbH
 * @copyright (C) simplesurance GmbH
 * @license see /LICENCE
 */

var sisu_timeout = sisu_timeout;
var _sdbag = _sdbag || [];

$(document).ready(function(){
    if (!(jQuery.browser && jQuery.browser.msie && jQuery.browser.version < 8)) {

        jQuery('#sisu_container').remove();
        $('.remove-from-cart,' +
            '.js-increase-product-quantity,' +
            '.js-decrease-product-quantity,' +
            '.cart_quantity_button,' +
            '.cart_delete,' +
            '.shopping_cart.remove_link,' +
            '.cart_quantity_down,' +
            '.cart_quantity_up'
        ).click(function(){
            localStorage.removeItem('_sisu_products_');
            window.location.reload(true);
        });
        $(".js-cart-line-product-quantity, .cart_quantity_input").bind("change paste keyup", function() {
            sisu_timeout = setTimeout(function(){
                localStorage.removeItem('_sisu_products_');
                window.location.reload(true);
            },3000);
        });

        _sdbag.push(['country', sisuCountry]);
        _sdbag.push(['products', sisuProducts]);
        _sdbag.push(['partnerId', sisuPartnerId]);
        _sdbag.push(['shopId', sisuShopId]);
        if (sisuIsSandbox) {
            _sdbag.push(['sandbox', true]);
        }
        if (sisuIsDebug) {
            _sdbag.push(['debug', true]);
        }
        _sdbag.push(['page', sisuPage]);
        _sdbag.push(['init', 'checkout']);
    }

    (function() {
        var ss = document.createElement('script'); ss.type = 'text/javascript'; ss.async = true;
        ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + sisuCheckoutUrl;
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ss, s);
    })();
});
