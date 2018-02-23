<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 07:55:44
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\modules\jmswishlist\views\templates\hook\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:327025a8fc900311f93-17699622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ea032943ed1cece9b7cb42c52f54583ffaaf3fd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\modules\\jmswishlist\\views\\templates\\hook\\my-account.tpl',
      1 => 1516090205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '327025a8fc900311f93-17699622',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8fc90031db17_83140290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8fc90031db17_83140290')) {function content_5a8fc90031db17_83140290($_smarty_tpl) {?>

<!-- MODULE WishList -->
<a class=" wishlist_top lnk_wishlist col-lg-4 col-md-6 col-sm-6 col-xs-12" href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getModuleLink('jmswishlist','mywishlist',array(),true),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','d'=>'Shop.Theme'),$_smarty_tpl);?>
">
  <span class="link-item">
		<i class="fa fa-heart"></i>
		<?php echo smartyTranslate(array('s'=>'My wishlists','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>

	</span>
</a>
<!-- END : MODULE WishList --><?php }} ?>
