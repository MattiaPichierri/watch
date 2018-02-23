<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 04:58:28
         compiled from "module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61965a73eff461fe62-27684078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '61965a73eff461fe62-27684078',
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
  'unifunc' => 'content_5a73eff4646f63_14780351',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73eff4646f63_14780351')) {function content_5a73eff4646f63_14780351($_smarty_tpl) {?><!-- begin D:\xampp\htdocs\jms_watch/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl -->

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
<!-- end D:\xampp\htdocs\jms_watch/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl --><?php }} ?>
