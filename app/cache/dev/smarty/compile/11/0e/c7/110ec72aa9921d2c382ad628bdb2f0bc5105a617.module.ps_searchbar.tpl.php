<?php /* Smarty version Smarty-3.1.19, created on 2018-02-22 09:26:32
         compiled from "module:ps_searchbar/ps_searchbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:225035a8e8cc8a36944-82808353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:ps_searchbar/ps_searchbar.tpl',
      1 => 1516090206,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '225035a8e8cc8a36944-82808353',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search_controller_url' => 0,
    'search_string' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8e8cc8a36941_32120552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8e8cc8a36941_32120552')) {function content_5a8e8cc8a36941_32120552($_smarty_tpl) {?><!-- begin D:\xampp\htdocs\jms_watch/themes/jms_watch/modules/ps_searchbar/ps_searchbar.tpl -->
<!-- Block search module TOP -->
<div id="search_widget" class="col-lg-4 col-md-5 col-sm-12 search-widget" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
	<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Search our catalog','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
">
		<button type="submit" class="btn-default btn-effect">
			<?php echo smartyTranslate(array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

		</button>
	</form>
</div>
<!-- /Block search module TOP -->
<!-- end D:\xampp\htdocs\jms_watch/themes/jms_watch/modules/ps_searchbar/ps_searchbar.tpl --><?php }} ?>
