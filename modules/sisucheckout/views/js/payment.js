/**
 * This file is part of the simplesurance GmbH checkout plugin for PrestaShop.
 *
 * @author simplesurance GmbH
 * @copyright (C) simplesurance GmbH
 * @license see /LICENCE
 */

var _sdbag = _sdbag || [];
var sisu_busy = sisu_busy;
var sisu_waiting = sisu_waiting;
var sisu_timeout = sisu_timeout;

$(document).ready(function(){
    $(document).on('change', '#id_address_delivery, #id_address_invoice', function(){
        if (!isOrderOpc) {
            return;
        }
        
        var countryId = sisuAddressesCountries[$(this).val()];

        callSisuCheckout(countryId);    
    });
    
    callSisuCheckout();

    function callSisuCheckout(countryId) {
        sisuCountry = countryId || sisuCountry;

        if (sisu_busy === true) {
            if (sisu_waiting === true) {
                clearTimeout(sisu_timeout);
                sisu_timeout = setTimeout(function(){
                    sisu_waiting = false;
                    sisu_busy = false;
                    callSisuCheckout();
                }, 2500);
                return;
            } else {
                sisu_waiting = true;
                sisu_timeout = setTimeout(function(){
                    sisu_waiting = false;
                    sisu_busy = false;
                    callSisuCheckout();
                }, 2500);
                return;
            }
        }

        sisu_busy = true;


        if (!(jQuery.browser && jQuery.browser.msie && jQuery.browser.version < 8)) {
            jQuery('#sisu_container').remove();

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
    }
});