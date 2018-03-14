/**
 * This file is part of the simplesurance GmbH checkout plugin for PrestaShop.
 *
 * @author simplesurance GmbH
 * @copyright (C) simplesurance GmbH
 * @license see /LICENCE
 */

var _sdbag = _sdbag || [];

$(document).ready(function(){
    if (!(jQuery.browser && jQuery.browser.msie && jQuery.browser.version < 8)) {
        _sdbag.push(['country', sisuCountry]);
        _sdbag.push(['partnerId', sisuPartnerId]);
        _sdbag.push(['shopId', sisuShopId]);
        _sdbag.push(['orderId', sisuOrderId]);
        _sdbag.push(['customer', JSON.parse(sisuCustomerData)]);

        if (sisuIsSandbox) {
            _sdbag.push(['sandbox', true]);
        }
        if (sisuIsDebug) {
            _sdbag.push(['debug', true]);
        }
        _sdbag.push(['init', 'success']);
    }

    (function() {
        var ss = document.createElement('script'); ss.type = 'text/javascript'; ss.async = true;
        ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + sisuCheckoutUrl;
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ss, s);
    })();
});