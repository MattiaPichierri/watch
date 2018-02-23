<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 07:12:31
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\modules\jmspagebuilder\views\templates\hook\addonalert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181475a8fbedf98dc19-31419204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00649ae4ec33a43f4eb4ce86859a2d42fec41380' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\modules\\jmspagebuilder\\views\\templates\\hook\\addonalert.tpl',
      1 => 1516090205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181475a8fbedf98dc19-31419204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'alert_type' => 0,
    'box_class' => 0,
    'show_close_btn' => 0,
    'alert_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8fbedf9d02a7_95969805',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8fbedf9d02a7_95969805')) {function content_5a8fbedf9d02a7_95969805($_smarty_tpl) {?>
<div class="alert alert-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alert_type']->value, ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['box_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>">
  <?php if ($_smarty_tpl->tpl_vars['show_close_btn']->value) {?><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php }?>
  <?php echo $_smarty_tpl->tpl_vars['alert_message']->value;?>

</div>
<?php }} ?>
