<?php /* Smarty version Smarty-3.1.19, created on 2018-02-22 09:36:54
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\modules\jmspagebuilder\views\templates\hook\addonmodulegroup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:313685a8e8f361aff65-57096165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b02d7e9759697bd86641a2174d31f01d2ffb9e51' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\modules\\jmspagebuilder\\views\\templates\\hook\\addonmodulegroup.tpl',
      1 => 1516090205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '313685a8e8f361aff65-57096165',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'icon_class' => 0,
    'addon_title' => 0,
    'addon_desc' => 0,
    'module1_content' => 0,
    'module2_content' => 0,
    'module3_content' => 0,
    'module4_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8e8f361c7667_93138374',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8e8f361c7667_93138374')) {function content_5a8e8f361c7667_93138374($_smarty_tpl) {?>
<div class="btn-group module-group-box">
<a title="Search" data-toggle="dropdown" class="dropdown-toggle" href="#">
<?php if ($_smarty_tpl->tpl_vars['icon_class']->value) {?>
<i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_class']->value, ENT_QUOTES, 'UTF-8');?>
"></i>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['addon_title']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<span><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['addon_desc']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
<?php }?>
</a>
<div role="menu" class="dropdown-menu">
	<?php if ($_smarty_tpl->tpl_vars['module1_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['module1_content']->value;?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['module2_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['module2_content']->value;?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['module3_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['module3_content']->value;?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['module4_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['module4_content']->value;?>

	<?php }?>
</div>
</div><?php }} ?>
