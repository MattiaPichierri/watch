<?php /* Smarty version Smarty-3.1.19, created on 2018-02-22 10:23:55
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\templates\checkout\checkout-process.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1445a8e9a3b9c5b35-40596344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d7c4ee4722f05f3b6b4cb106b582059b9c8302a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\templates\\checkout\\checkout-process.tpl',
      1 => 1516090206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1445a8e9a3b9c5b35-40596344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'steps' => 0,
    'step' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8e9a3b9d16b4_53187634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8e9a3b9d16b4_53187634')) {function content_5a8e9a3b9d16b4_53187634($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars["step"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["step"]->_loop = false;
 $_smarty_tpl->tpl_vars["index"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['steps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["step"]->key => $_smarty_tpl->tpl_vars["step"]->value) {
$_smarty_tpl->tpl_vars["step"]->_loop = true;
 $_smarty_tpl->tpl_vars["index"]->value = $_smarty_tpl->tpl_vars["step"]->key;
?>
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0][0]->smartyRender(array('identifier'=>$_smarty_tpl->tpl_vars['step']->value['identifier'],'position'=>($_smarty_tpl->tpl_vars['index']->value+1),'ui'=>$_smarty_tpl->tpl_vars['step']->value['ui']),$_smarty_tpl);?>

<?php } ?>
<?php }} ?>
