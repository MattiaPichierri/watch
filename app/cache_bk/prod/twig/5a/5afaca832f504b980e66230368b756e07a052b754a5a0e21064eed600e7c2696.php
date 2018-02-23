<?php

/* __string_template__1b6b40fc0b46257bd812b8b9349e852daa0e3e770057f8d4c89ccfeb46fe040e */
class __TwigTemplate_eacc776b3ac4f9b99e17dfc24548b32dee758278a30f29f0928722b3c11e25eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/jms_fluent/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/jms_fluent/img/app_icon.png\" />

<title>Products • JMS</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'en';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'GB';
    var _PS_VERSION_ = '1.7.2.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = '7b88664660c2bf02b1cfbac05a944733';
    var token_admin_orders = '486f357d80afd1fc4ec000510d6a1973';
    var token_admin_customers = 'f5743898462a3c7312dbf561560aed3d';
    var token_admin_customer_threads = '304494e8950fe428be3e5e168c5fda02';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '9a5afefc466f6aeec1dfbba3ec3e2d7d';
    var choose_language_translate = 'Choose language';
    var default_language = '1';
    var admin_modules_link = '/jms_fluent/admin367i0kovu/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=uWljCbDYoszThmNs6BIs6TB4LnF3mWIa0kpC_hn0WhA';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Update successful';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = 'Search for a product';
  </script>

      <link href=\"/jms_fluent/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/jms_fluent/admin367i0kovu/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/jms_fluent/modules/gamification/views/css/advice-1.7.2.4_324.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/jms_fluent/modules/gamification/views/css/advice-1.7.2.4_479.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/jms_fluent/modules/gamification/views/css/advice-1.7.2.4_590.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/jms_fluent/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/jms_fluent/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/jms_fluent/admin367i0kovu/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/jms_fluent\\/admin367i0kovu\\/\";
var baseDir = \"\\/jms_fluent\\/\";
var currency = {\"iso_code\":\"GBP\",\"sign\":\"\\u00a3\",\"name\":\"British Pound Sterling\",\"format\":\"\\u00a4#,##0.00\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/jms_fluent/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/jms_fluent/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/jms_fluent/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/jms_fluent/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/jms_fluent/admin367i0kovu/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/jms_fluent/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/jms_fluent/js/admin.js?v=1.7.2.4\"></script>
<script type=\"text/javascript\" src=\"/jms_fluent/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/jms_fluent/js/tools.js?v=1.7.2.4\"></script>
<script type=\"text/javascript\" src=\"/jms_fluent/admin367i0kovu/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/jms_fluent/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/jms_fluent/admin367i0kovu/themes/default/js/vendor/nv.d3.min.js\"></script>


  <script>
\t\t\t\tvar ids_ps_advice = new Array(\"324\",\"479\",\"590\");
\t\t\t\tvar admin_gamification_ajax_url = 'http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminGamification&token=1ea09fa1709fe8443554e983a59f2563';
\t\t\t\tvar current_id_tab = 10;
\t\t\t</script>

";
        // line 85
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"adminproducts\">



<header>
  <nav class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

    
    

    
    <i class=\"material-icons pull-left p-x-1 js-mobile-menu hidden-md-up\">menu</i>
    <a class=\"logo pull-left\" href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminDashboard&amp;token=9daa20e9476dce1c9eda466d751926ff\"></a>

    <div class=\"component pull-left hidden-md-down\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Quick Access</span> 
    <i class=\"material-icons arrow-down pull-right\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/jms_fluent/admin367i0kovu/index.php/module/manage?token=c368f8df92917b751ac4b817eb236741\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminCategories&amp;addcategory&amp;token=b00952060ae0be9cac4d99cc33649f61\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/jms_fluent/admin367i0kovu/index.php/product/new?token=c368f8df92917b751ac4b817eb236741\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=8c2c3fdb3b8a757f57d7623250bf6feb\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminOrders&amp;token=486f357d80afd1fc4ec000510d6a1973\"
                 data-item=\"Orders\"
      >Orders</a>
        <hr>
          <a
        class=\"dropdown-item js-quick-link\"
        data-rand=\"95\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/product/catalog/0/20/id_product\"
        data-post-link=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminQuickAccesses&token=2bd1fdd497663859efeff717cf5c44f3\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Products - List\"
      >
        <i class=\"material-icons\">add_circle_outline</i>
        Add current page to QuickAccess
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminQuickAccesses&token=2bd1fdd497663859efeff717cf5c44f3\">
      <i class=\"material-icons\">settings</i>
      Manage quick accesses
    </a>
  </div>
</div>
</div>
    <div class=\"component hidden-md-down\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/jms_fluent/admin367i0kovu/index.php?controller=AdminSearch&amp;token=55a3fa9ec1f3d9f277d80030d6477da6\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          Everywhere
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> Everywhere</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, SKU, reference...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Catalog
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, name...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Customers by name
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Customers by IP address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Customers by IP address</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Orders
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice Number\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Invoices
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Carts
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Modules
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">SEARCH<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin hidden-md-down\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/admin%40admin.com.jpg\" /><br>
      <span>Master Huy</span>
    </div>
    <hr>
    <a class=\"employee-link profile-link\" href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminEmployees&amp;token=9a5afefc466f6aeec1dfbba3ec3e2d7d&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i> Your profile
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminLogin&amp;token=5756e112f284118b4eebfdaa9c356076&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Sign out
    </a>
  </div>
</div>
</div>
          <div class=\"component pull-xs-right\"><div id=\"notif\" class=\"notification-center dropdown\">
  <div class=\"notification js-notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminCarts&token=71d680b36713e11c3cb993f35f8606e1&action=filterOnlyAbandonedCarts\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Have you considered selling on marketplaces?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              That's more time for something else!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"pull-xs-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
</div>
        <div class=\"component pull-md-right hidden-md-down\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://localhost/jms_fluent/\" target= \"_blank\">JMS</a>
  </div>
</div>
            

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminDashboard&amp;token=9daa20e9476dce1c9eda466d751926ff\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down -active\" data-submenu=\"2\">
              <span class=\"title\">Sell</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminOrders&amp;token=486f357d80afd1fc4ec000510d6a1973\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Orders
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminOrders&amp;token=486f357d80afd1fc4ec000510d6a1973\" class=\"link\"> Orders
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminInvoices&amp;token=eebed0fe70823a0c12ca9a1c03bf1501\" class=\"link\"> Invoices
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminSlip&amp;token=f654d54974f3ab0fbe489010d2846557\" class=\"link\"> Credit Slips
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminDeliverySlip&amp;token=2028bb55ae2858efc93825129160d2f4\" class=\"link\"> Delivery Slips
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminCarts&amp;token=71d680b36713e11c3cb993f35f8606e1\" class=\"link\"> Shopping Carts
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"9\">
                  <a href=\"/jms_fluent/admin367i0kovu/index.php/product/catalog?_token=uWljCbDYoszThmNs6BIs6TB4LnF3mWIa0kpC_hn0WhA\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Catalog
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\">
                              <a href=\"/jms_fluent/admin367i0kovu/index.php/product/catalog?_token=uWljCbDYoszThmNs6BIs6TB4LnF3mWIa0kpC_hn0WhA\" class=\"link\"> Products
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminCategories&amp;token=b00952060ae0be9cac4d99cc33649f61\" class=\"link\"> Categories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminTracking&amp;token=4ee8cf605b3415efab21b4ba85681674\" class=\"link\"> Monitoring
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminAttributesGroups&amp;token=aa59461fe6fe37b256c832b091edd873\" class=\"link\"> Attributes &amp; Features
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminManufacturers&amp;token=b0c19f4ca785bcf7fa3ef0af45cfcbc3\" class=\"link\"> Brands &amp; Suppliers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminAttachments&amp;token=fba77b107f340482fcf3d47fd3bd7ad6\" class=\"link\"> Files
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminCartRules&amp;token=8c2c3fdb3b8a757f57d7623250bf6feb\" class=\"link\"> Discounts
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\">
                              <a href=\"/jms_fluent/admin367i0kovu/index.php/stock/?_token=uWljCbDYoszThmNs6BIs6TB4LnF3mWIa0kpC_hn0WhA\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\">
                  <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminCustomers&amp;token=f5743898462a3c7312dbf561560aed3d\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Customers
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminCustomers&amp;token=f5743898462a3c7312dbf561560aed3d\" class=\"link\"> Customers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminAddresses&amp;token=b5f385fddec018a8730aab4bfeab0612\" class=\"link\"> Addresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\">
                  <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminCustomerThreads&amp;token=304494e8950fe428be3e5e168c5fda02\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Customer Service
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminCustomerThreads&amp;token=304494e8950fe428be3e5e168c5fda02\" class=\"link\"> Customer Service
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminOrderMessage&amp;token=5d0e56aea5a6f4659ba5f89ef908da52\" class=\"link\"> Order Messages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminReturn&amp;token=0afd7d0a443cddbb79a49f4f61ddb049\" class=\"link\"> Merchandise Returns
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\">
                  <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminStats&amp;token=4f5dba0f412aeb5990895f026c79bc36\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Stats
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"42\">
              <span class=\"title\">Improve</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"43\">
                  <a href=\"/jms_fluent/admin367i0kovu/index.php/module/catalog?_token=uWljCbDYoszThmNs6BIs6TB4LnF3mWIa0kpC_hn0WhA\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Modules
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\">
                              <a href=\"/jms_fluent/admin367i0kovu/index.php/module/catalog?_token=uWljCbDYoszThmNs6BIs6TB4LnF3mWIa0kpC_hn0WhA\" class=\"link\"> Modules &amp; Services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminAddonsCatalog&amp;token=2d3c1a3eed8e66870aa7d28eef99a88d\" class=\"link\"> Modules Catalog
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\">
                  <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminThemes&amp;token=9d36d7d050ce4357c13a9e4b768557b9\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Design
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminThemes&amp;token=9d36d7d050ce4357c13a9e4b768557b9\" class=\"link\"> Theme &amp; Logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminThemesCatalog&amp;token=e851f645e8534bf2cf254450d2bd7438\" class=\"link\"> Theme Catalog
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminCmsContent&amp;token=a9632a3a38f2e842ba3d166c41a10b11\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminModulesPositions&amp;token=0eb5b0362e5f2d4c747af0c8f9aef99d\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminImages&amp;token=847040922413f8a937c2ad32a89a715b\" class=\"link\"> Image Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminLinkWidget&amp;token=f3b19f5d710d663441831c2124cdc6dd\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\">
                  <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminCarriers&amp;token=3cf20f6694e4f03d827113ca68771d3c\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Shipping
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminCarriers&amp;token=3cf20f6694e4f03d827113ca68771d3c\" class=\"link\"> Carriers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminShipping&amp;token=ab9f71ec84f66dfb5d440f592c1376c8\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\">
                  <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminPayment&amp;token=6168617988b61f9cc52958a59da01523\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Payment
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminPayment&amp;token=6168617988b61f9cc52958a59da01523\" class=\"link\"> Payment Methods
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminPaymentPreferences&amp;token=ef5ab31f18b43ae6c591dec98f08a84e\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\">
                  <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminLocalization&amp;token=ec7d38424561d9cefa577fd43597334e\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    International
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminLocalization&amp;token=ec7d38424561d9cefa577fd43597334e\" class=\"link\"> Localization
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminCountries&amp;token=42cdb037a06bad4c0a7595d3cee9105d\" class=\"link\"> Locations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminTaxes&amp;token=d28e35651717e1d490e586e65c548b74\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminTranslations&amp;token=09c282615f106257af39465fd1d208b6\" class=\"link\"> Translations
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"73\">
              <span class=\"title\">Configure</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\">
                  <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminPreferences&amp;token=e88f19792b5e0aa0b542c7f19767ce26\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Shop Parameters
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminPreferences&amp;token=e88f19792b5e0aa0b542c7f19767ce26\" class=\"link\"> General
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminOrderPreferences&amp;token=a9964296f75b96083dad1b3dc7a09601\" class=\"link\"> Order Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminPPreferences&amp;token=8c455c7d4486d91af1e1ade9cf37cd4f\" class=\"link\"> Product Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminCustomerPreferences&amp;token=1391bbcaa1e84a32ee318dc8c82d8f65\" class=\"link\"> Customer Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminContacts&amp;token=6a5e82fbf1053863e2f8d208140a48eb\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminMeta&amp;token=92a4bb8108eb7bf1f4e66890ba544f96\" class=\"link\"> Traffic &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminSearchConf&amp;token=4f2a0cea51d08a88b5d47fda1b1bba15\" class=\"link\"> Search
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminGamification&amp;token=1ea09fa1709fe8443554e983a59f2563\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\">
                  <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminInformation&amp;token=0ba5d1d2514163dfc6d01a80063625fe\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Advanced Parameters
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminInformation&amp;token=0ba5d1d2514163dfc6d01a80063625fe\" class=\"link\"> Information
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminPerformance&amp;token=f3de7b176e7bd219e98d2f3151839b27\" class=\"link\"> Performance
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminAdminPreferences&amp;token=acc7629d25c920c44fd2b40b6f2b0742\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminEmails&amp;token=e4dbf3e926877cc81faa4dc95f1435c7\" class=\"link\"> E-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminImport&amp;token=7595e420cc8e278125545bdb5df91569\" class=\"link\"> Import
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminEmployees&amp;token=9a5afefc466f6aeec1dfbba3ec3e2d7d\" class=\"link\"> Team
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminRequestSql&amp;token=093c9cc68c21fd2638df758420b475fd\" class=\"link\"> Database
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminLogs&amp;token=402c4ed5d0e0bea50e3ad5a927dc3b4a\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminWebservice&amp;token=a929444d32ee3faffe1f76005cd05b25\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"121\">
              <span class=\"title\">Jms Modules</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"122\">
                  <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminJmsmegamenuManager&amp;token=fd65b0b124eeecb195f1a4b60a269261\" class=\"link\">
                    <i class=\"material-icons\"></i>
                    <span>
                    Jms MegaMenu
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-122\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"123\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminJmsmegamenuManager&amp;token=fd65b0b124eeecb195f1a4b60a269261\" class=\"link\"> Menu Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"124\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminJmsmegamenuStyle&amp;token=6345a08a39bcc0c5f56a06831594e123\" class=\"link\"> Menu Style
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"125\">
                  <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminJmsblogCategories&amp;token=f8052cb47ea563f1a61a971656db5ab3\" class=\"link\">
                    <i class=\"material-icons\"></i>
                    <span>
                    Jms Blog
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-125\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminJmsblogCategories&amp;token=f8052cb47ea563f1a61a971656db5ab3\" class=\"link\"> Categories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"127\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminJmsblogPost&amp;token=6cb5a107ff1077eb8add5f3dcc971e2b\" class=\"link\"> Post
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"128\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminJmsblogComment&amp;token=7508f3721dc372643d2f58d6bf07427e\" class=\"link\"> Comments
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"129\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminJmsblogSetting&amp;token=d70e4ffe2adca01f2cc2a7f48831b8ee\" class=\"link\"> Setting
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"130\">
                  <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminJmspagebuilderHomepages&amp;token=61aa9129a4c5ebe54aa453eaf0a04fa9\" class=\"link\">
                    <i class=\"material-icons\"></i>
                    <span>
                    Jms Page Builder
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-130\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"131\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminJmspagebuilderHomepages&amp;token=61aa9129a4c5ebe54aa453eaf0a04fa9\" class=\"link\"> Home Pages
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"133\">
                              <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminJmspagebuilderSetting&amp;token=9e6ce45a29c91a5df9684b3d987dea0a\" class=\"link\"> Setting
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse hidden-md-down\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

              <li>
                      <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminCatalog&amp;token=d85f21bc25d7fd20b91515ead3109dc0\">Catalog</a>
                  </li>
      
              <li>
                      <a href=\"/jms_fluent/admin367i0kovu/index.php/product/catalog?_token=uWljCbDYoszThmNs6BIs6TB4LnF3mWIa0kpC_hn0WhA\">Products</a>
                  </li>
      
    </ol>
  

  
    <h2 class=\"title\">
      Products    </h2>
  

  
    <div class=\"toolbar-icons\">
                                      
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add\"
            href=\"/jms_fluent/admin367i0kovu/index.php/product/new?_token=uWljCbDYoszThmNs6BIs6TB4LnF3mWIa0kpC_hn0WhA\"            title=\"Create a new product: CTRL+P\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">add_circle_outline</i>
            <span class=\"title\">New product</span>
          </a>
                            
        <a
          class=\"toolbar-button toolbar_btn\"
          id=\"page-header-desc-configuration-modules-list\"
          href=\"/jms_fluent/admin367i0kovu/index.php/module/catalog?_token=uWljCbDYoszThmNs6BIs6TB4LnF3mWIa0kpC_hn0WhA\"          title=\"Recommended Modules and Services\"
                  >
                      <i class=\"material-icons\">extension</i>
                    <span class=\"title\">Recommended Modules and Services</span>
        </a>
            
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Help\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/jms_fluent/admin367i0kovu/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminProducts%253Fversion%253D1.7.2.4%2526country%253Den/Help?_token=uWljCbDYoszThmNs6BIs6TB4LnF3mWIa0kpC_hn0WhA\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Help</span>
          </a>
                  </div>
  
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=admin%40admin.com&amp;firstname=Master&amp;lastname=Huy&amp;website=http%3A%2F%2Flocalhost%2Fjms_fluent%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/jms_fluent/admin367i0kovu/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Don't have an account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=admin%40admin.com&amp;firstname=Master&amp;lastname=Huy&amp;website=http%3A%2F%2Flocalhost%2Fjms_fluent%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    <div class=\"content-div \">

      

      

      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1258
        $this->displayBlock('content_header', $context, $blocks);
        // line 1259
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1260
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1261
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1262
        echo "
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"m-t-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"m-t-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"m-t-2\">
    Thank you.
  </p>
  <a href=\"http://localhost/jms_fluent/admin367i0kovu/index.php?controller=AdminDashboard&amp;token=9daa20e9476dce1c9eda466d751926ff\" class=\"btn btn-primary p-y-1 m-t-3\">
    <i class=\"material-icons\">arrow_back</i>
    Back
  </a>
</div>
<div class=\"mobile-layer\"></div>



  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Load time: \"></i> 1.060s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-EN&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Contact
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-EN&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Bug Tracker
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-EN&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Forum
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-EN&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Addons
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-EN&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Training
      </a>
                </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=admin%40admin.com&amp;firstname=Master&amp;lastname=Huy&amp;website=http%3A%2F%2Flocalhost%2Fjms_fluent%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/jms_fluent/admin367i0kovu/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Don't have an account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=admin%40admin.com&amp;firstname=Master&amp;lastname=Huy&amp;website=http%3A%2F%2Flocalhost%2Fjms_fluent%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1427
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 85
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1258
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1259
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1260
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1261
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1427
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__1b6b40fc0b46257bd812b8b9349e852daa0e3e770057f8d4c89ccfeb46fe040e";
    }

    public function getDebugInfo()
    {
        return array (  1506 => 1427,  1501 => 1261,  1496 => 1260,  1491 => 1259,  1486 => 1258,  1477 => 85,  1469 => 1427,  1302 => 1262,  1299 => 1261,  1296 => 1260,  1293 => 1259,  1291 => 1258,  114 => 85,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__1b6b40fc0b46257bd812b8b9349e852daa0e3e770057f8d4c89ccfeb46fe040e", "");
    }
}
