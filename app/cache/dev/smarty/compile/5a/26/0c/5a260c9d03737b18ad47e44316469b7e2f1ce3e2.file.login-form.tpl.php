<?php /* Smarty version Smarty-3.1.19, created on 2018-02-22 10:23:55
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\templates\checkout\_partials\login-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209045a8e9a3bb38d13-25260001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a260c9d03737b18ad47e44316469b7e2f1ce3e2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\templates\\checkout\\_partials\\login-form.tpl',
      1 => 1516090206,
      2 => 'file',
    ),
    '9bfd29bb43fccb3347e0c953a0be2bfcad80965e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\templates\\customer\\_partials\\login-form.tpl',
      1 => 1516090206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209045a8e9a3bb38d13-25260001',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'action' => 0,
    'formFields' => 0,
    'field' => 0,
    'urls' => 0,
    'fb_on' => 0,
    'JMSFB_BUTTON_SIZE' => 0,
    'JMSFB_BUTTON_TEXT' => 0,
    'JMSFB_SHOW_FRIENDS' => 0,
    'JMSFB_LOGOUT_BUTTON' => 0,
    'JMSFB_PROFILE_INCLUDED' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8e9a3bb6b998_26259065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8e9a3bb6b998_26259065')) {function content_5a8e9a3bb6b998_26259065($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0);?>




<form id="login-form" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">

  <section>
    
      <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
        
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0][0]->smartyFormField(array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl);?>

        
      <?php } ?>
    
    <div class="forgot-password">
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
        <?php echo smartyTranslate(array('s'=>'Forgot your password?','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>

      </a>
	  <?php if (isset($_smarty_tpl->tpl_vars['fb_on']->value)&&$_smarty_tpl->tpl_vars['fb_on']->value) {?>
		<br /><div class="fb-login-button" data-max-rows="1" data-size="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JMSFB_BUTTON_SIZE']->value, ENT_QUOTES, 'UTF-8');?>
" data-button-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JMSFB_BUTTON_TEXT']->value, ENT_QUOTES, 'UTF-8');?>
" data-show-faces="<?php if ($_smarty_tpl->tpl_vars['JMSFB_SHOW_FRIENDS']->value) {?>true<?php } else { ?>false<?php }?>" data-auto-logout-link="<?php if ($_smarty_tpl->tpl_vars['JMSFB_LOGOUT_BUTTON']->value) {?>true<?php } else { ?>false<?php }?>" data-use-continue-as="<?php if ($_smarty_tpl->tpl_vars['JMSFB_PROFILE_INCLUDED']->value) {?>true<?php } else { ?>false<?php }?>"></div>
	<?php }?>
    </div>	
  </section>

  <footer class="form-footer text-xs-center clearfix">
    <input type="hidden" name="submitLogin" value="1">
    
  <button
    class="continue btn btn-primary pull-xs-right button-small"
    name="continue"
    data-link-action="sign-in"
    type="submit"
    value="1"
  >
    <?php echo smartyTranslate(array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

  </button>

  </footer>
</form>
<?php }} ?>
