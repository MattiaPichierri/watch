<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 04:58:28
         compiled from "D:\xampp\htdocs\jms_watch\modules\jmspagebuilder\views\templates\hook\addonhtml.tpl" */ ?>
<?php /*%%SmartyHeaderCode:315775a73eff47a6866-73173227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98fae7b8348270b4c16f6a2147ce44aaf502e9d6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\modules\\jmspagebuilder\\views\\templates\\hook\\addonhtml.tpl',
      1 => 1516090200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315775a73eff47a6866-73173227',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon_title' => 0,
    'addon_desc' => 0,
    'html_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a73eff47a6868_02378897',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73eff47a6868_02378897')) {function content_5a73eff47a6868_02378897($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
	<h3><?php echo $_smarty_tpl->tpl_vars['addon_title']->value;?>
</h3>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<p class="addon-desc"><?php echo $_smarty_tpl->tpl_vars['addon_desc']->value;?>
</p>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['html_content']->value;?>
<?php }} ?>
