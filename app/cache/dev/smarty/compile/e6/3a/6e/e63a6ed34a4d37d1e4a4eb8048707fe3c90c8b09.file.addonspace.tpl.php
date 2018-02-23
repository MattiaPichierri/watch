<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 01:58:25
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\modules\jmspagebuilder\views\templates\hook\addonspace.tpl" */ ?>
<?php /*%%SmartyHeaderCode:294645a8f75419e0279-34840721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e63a6ed34a4d37d1e4a4eb8048707fe3c90c8b09' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\modules\\jmspagebuilder\\views\\templates\\hook\\addonspace.tpl',
      1 => 1516090205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '294645a8f75419e0279-34840721',
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
  'unifunc' => 'content_5a8f7541a55579_30754500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8f7541a55579_30754500')) {function content_5a8f7541a55579_30754500($_smarty_tpl) {?>
<div class="jms-empty-space clearfix<?php if (isset($_smarty_tpl->tpl_vars['space_class']->value)&&$_smarty_tpl->tpl_vars['space_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['space_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" style="margin-bottom:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['spacegap']->value, ENT_QUOTES, 'UTF-8');?>
px;"></div>
<?php }} ?>
