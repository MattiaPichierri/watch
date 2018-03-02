<?php /* Smarty version Smarty-3.1.19, created on 2018-03-01 07:44:08
         compiled from "module:ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1255a97af48685de5-37161319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89661fbe7f9f4c111d8bdb6320dbdcd70e1222f8' => 
    array (
      0 => 'module:ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl',
      1 => 1508746818,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '1255a97af48685de5-37161319',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'bankwireOwner' => 0,
    'bankwireDetails' => 0,
    'bankwireAddress' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a97af4868dae1_80598862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a97af4868dae1_80598862')) {function content_5a97af4868dae1_80598862($_smarty_tpl) {?>


<dl>
    <dt><?php echo smartyTranslate(array('s'=>'Amount','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>
</dt>
    <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total']->value, ENT_QUOTES, 'UTF-8');?>
</dd>
    <dt><?php echo smartyTranslate(array('s'=>'Name of account owner','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>
</dt>
    <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bankwireOwner']->value, ENT_QUOTES, 'UTF-8');?>
</dd>
    <dt><?php echo smartyTranslate(array('s'=>'Please include these details','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>
</dt>
    <dd><?php echo $_smarty_tpl->tpl_vars['bankwireDetails']->value;?>
</dd>
    <dt><?php echo smartyTranslate(array('s'=>'Bank name','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>
</dt>
    <dd><?php echo $_smarty_tpl->tpl_vars['bankwireAddress']->value;?>
</dd>
</dl>
<?php }} ?>
