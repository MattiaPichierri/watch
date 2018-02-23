<?php
/**
* 2007-2017 PrestaShop
*
* Jms facebook Connect
*
*  @author    joommasters <tdahhaoui@hotmail.com>
*  @copyright 2007-2017 joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*/

require_once('../../config/config.inc.php');
require_once('../../init.php');
require_once(dirname(__FILE__).'/jmsfacebookconnect.php');
require_once(dirname(__FILE__).'/classes/HIFacbookUsers.php');
$context = Context::getContext();

$customer = new Customer();
$customer->getByEmail(Tools::getValue('email'), null, true);
if ($customer->id) {
    Hook::exec('actionBeforeAuthentication');

    $context->cookie->id_customer = (int)($customer->id);
    $context->cookie->customer_lastname = $customer->lastname;
    $context->cookie->customer_firstname = $customer->firstname;
    $context->cookie->logged = 1;
    $customer->logged = 1;
    $context->cookie->is_guest = $customer->isGuest();
    $context->cookie->passwd = $customer->passwd;
    $context->cookie->email = $customer->email;
    $context->customer = $customer;

    if (Configuration::get('PS_CART_FOLLOWING') && (empty($context->cookie->id_cart) || Cart::getNbProducts($context->cookie->id_cart) == 0) && $id_cart = (int)Cart::lastNoneOrderedCart($context->customer->id)) {
        $context->cart = new Cart($id_cart);
    } else {
        $id_carrier = (int)$context->cart->id_carrier;
        $context->cart->id_carrier = 0;
        $context->cart->setDeliveryOption(null);
        $context->cart->id_address_delivery = (int)Address::getFirstCustomerAddressId((int)($customer->id));
        $context->cart->id_address_invoice = (int)Address::getFirstCustomerAddressId((int)($customer->id));
    }

    $context->cart->id_customer = (int)$customer->id;
    $context->cart->secure_key = $customer->secure_key;
    $context->cart->save();
    $context->cookie->id_cart = (int)$context->cart->id;
    $context->cookie->write();
    $context->cart->autosetProductAddress();
    Hook::exec('actionAuthentication');
    CartRule::autoRemoveFromCart($context);
    CartRule::autoAddToCart($context);
} else {
    $db_user_id = Tools::getValue('id');
    $result = Db::getInstance()->ExecuteS('SELECT * FROM '._DB_PREFIX_.'jmsfacebookusers WHERE id_user ="'.$db_user_id.'"'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER));
    if (empty($result)) {
        $facebook_users = new HIFacebookUsers();
        $facebook_users->id_user = Tools::getValue('id');
        $facebook_users->id_shop_group = Shop::getContextShopGroupID();
        $facebook_users->id_shop = Shop::getContextShopID();
        $facebook_users->first_name = Tools::getValue('firstname');
        $facebook_users->last_name = Tools::getValue('lastname');
        $facebook_users->email = Tools::getValue('email');
        $facebook_users->gender = Tools::getValue('gender');
        $originalDate = Tools::getValue('birthday');
        $newDate =  date('Y-m-d', strtotime($originalDate));
        $facebook_users->birthday = $newDate;
        $facebook_users->add();

        Hook::exec('actionBeforeSubmitAccount');

        $customer->firstname = Tools::getValue('firstname');
        $customer->lastname = Tools::getValue('lastname');
        $customer->email = Tools::getValue('email');
        $password = Tools::passwdGen();
        $customer->passwd = md5(pSQL(_COOKIE_KEY_.$password));

        if (Tools::getValue('gender') == 'male') {
            $id_gender = 1;
        } elseif (Tools::getValue('gender') == 'female') {
            $id_gender = 2;
        } else {
            $id_gender = null;
        }

        $customer->id_gender = $id_gender;
        $customer->birthday = $newDate;
        $customer->is_guest = 0;
        $customer->active = 1;
        $customer->add();

        $send_email = new HIfacebookConnect();
        $send_email->sendConfirmationMail($customer, $password);

        $context = Context::getContext();
        $context->customer = $customer;
        $context->cookie->id_customer = (int)$customer->id;
        $context->cookie->customer_lastname = $customer->lastname;
        $context->cookie->customer_firstname = $customer->firstname;
        $context->cookie->passwd = $customer->passwd;
        $context->cookie->logged = 1;
        $customer->logged = 1;
        $context->cookie->email = $customer->email;
        $context->cookie->is_guest = $customer->is_guest;
        $context->cart->secure_key = $customer->secure_key;
        $context->cookie->update();
        $context->cart->update();
    }
}
