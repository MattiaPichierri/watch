<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 06:41:33
         compiled from "module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184495a74081d94c640-18592354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl',
      1 => 1508746794,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '184495a74081d94c640-18592354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'nw_error' => 0,
    'urls' => 0,
    'value' => 0,
    'conditions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a74081d973744_19845687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a74081d973744_19845687')) {function content_5a74081d973744_19845687($_smarty_tpl) {?>

<div class="email_subscription">
  <h4><?php echo smartyTranslate(array('s'=>'Newsletter','d'=>'Modules.Emailsubscription.Shop'),$_smarty_tpl);?>
</h4>
  <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
    <p class="notification <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>notification-error<?php } else { ?>notification-success<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>
</p>
  <?php }?>
  <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
" method="post">
    <input type="text" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Your e-mail','d'=>'Modules.Emailsubscription.Shop'),$_smarty_tpl);?>
" />
    <?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
      <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>
    <?php }?>
    <input type="submit" value="ok" name="submitNewsletter" />
    <input type="hidden" name="action" value="0" />
  </form>
</div>
<?php }} ?>
