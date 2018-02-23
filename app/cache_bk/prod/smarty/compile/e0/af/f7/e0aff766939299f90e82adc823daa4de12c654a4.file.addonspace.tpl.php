<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 01:55:56
         compiled from "D:\xampp\htdocs\jms_fluent\themes\jms_fluent\modules\jmspagebuilder\views\templates\hook\addonspace.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114705a73c52c975ed1-60862053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0aff766939299f90e82adc823daa4de12c654a4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_fluent\\themes\\jms_fluent\\modules\\jmspagebuilder\\views\\templates\\hook\\addonspace.tpl',
      1 => 1516090205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114705a73c52c975ed1-60862053',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'space_class' => 0,
    'spacegap' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a73c52c9c40d5_07399587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73c52c9c40d5_07399587')) {function content_5a73c52c9c40d5_07399587($_smarty_tpl) {?>
<div class="jms-empty-space clearfix<?php if (isset($_smarty_tpl->tpl_vars['space_class']->value)&&$_smarty_tpl->tpl_vars['space_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['space_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" style="margin-bottom:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['spacegap']->value, ENT_QUOTES, 'UTF-8');?>
px;"></div>
<?php }} ?>
