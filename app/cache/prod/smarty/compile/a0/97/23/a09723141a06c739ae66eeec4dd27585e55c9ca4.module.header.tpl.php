<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 06:41:33
         compiled from "module:jmsfacebookconnect/views/templates/hook/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123445a74081d813e33-17839417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a09723141a06c739ae66eeec4dd27585e55c9ca4' => 
    array (
      0 => 'module:jmsfacebookconnect/views/templates/hook/header.tpl',
      1 => 1516090198,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '123445a74081d813e33-17839417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fb_on' => 0,
    'JMSFB_REDIRECT' => 0,
    'login_page' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a74081d862031_81032797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a74081d862031_81032797')) {function content_5a74081d862031_81032797($_smarty_tpl) {?>


<?php if (isset($_smarty_tpl->tpl_vars['fb_on']->value)&&$_smarty_tpl->tpl_vars['fb_on']->value) {?>
	<div id="fb-root"></div>
	<script>
		
			var redirect = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JMSFB_REDIRECT']->value, ENT_QUOTES, 'UTF-8');?>
';
			window.fbAsyncInit = function() {
				FB.init({
					appId: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['login_page']->value, ENT_QUOTES, 'UTF-8');?>
',
					scope: 'email, user_birthday',
					cookie: true,
					status: true,
					xfbml: true, 
					version: 'v2.1'
				});
			};
			
			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/sdk.js";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
			
			function pfFbLogin() {
				FB.api('/me?fields=email,birthday,first_name,last_name,gender', function(response) {
					$.ajax({
						type: "POST",
						url: prestashop['urls']['base_url'] + "modules/jmsfacebookconnect/ajax_facebookConnect.php",
						data: {
							firstname: response.first_name, 
							lastname: response.last_name, 
							email: response.email, 
							id: response.id, 
							gender: response.gender,
							birthday: response.birthday
						},
						success:  function(data){
						
							if(redirect == "no_redirect")
								window.location.reload();
							
							if(redirect == "authentication_page")
								window.location.href = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
";	
							if(redirect == "home_page")
								window.location.href = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
";	
						}
					});
				});
			}
			
			function fb_login(){
				FB.login(function(response) {
					if (response.authResponse) {
						access_token = response.authResponse.accessToken;
						user_id = response.authResponse.userID;
						pfFbLogin();
					}	
				},
				{
					scope: 'public_profile,email'
				});
			}
			
		
	</script>
<?php }?>
<?php }} ?>
