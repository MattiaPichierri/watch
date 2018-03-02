<?php /* Smarty version Smarty-3.1.19, created on 2018-03-01 02:36:05
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\modules\jmspagebuilder\views\templates\hook\addonhtml.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4095a976715d0f521-38965863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c265246d9792322ef467e25fa99091438cd89cd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\modules\\jmspagebuilder\\views\\templates\\hook\\addonhtml.tpl',
      1 => 1516090205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4095a976715d0f521-38965863',
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
  'unifunc' => 'content_5a976715d0f526_88973018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a976715d0f526_88973018')) {function content_5a976715d0f526_88973018($_smarty_tpl) {?>
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
