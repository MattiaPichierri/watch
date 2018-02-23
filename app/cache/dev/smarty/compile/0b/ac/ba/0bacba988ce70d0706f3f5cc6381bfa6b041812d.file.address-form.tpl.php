<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 07:56:38
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\templates\customer\_partials\address-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37475a8fc9369d8cb0-76610819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bacba988ce70d0706f3f5cc6381bfa6b041812d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\templates\\customer\\_partials\\address-form.tpl',
      1 => 1516090206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37475a8fc9369d8cb0-76610819',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'id_address' => 0,
    'formFields' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8fc9369f4234_24184665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8fc9369f4234_24184665')) {function content_5a8fc9369f4234_24184665($_smarty_tpl) {?>
<div class="js-address-form">
  <?php echo $_smarty_tpl->getSubTemplate ('_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0);?>


  <form
    method="POST"
    action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'address','params'=>array('id_address'=>$_smarty_tpl->tpl_vars['id_address']->value)),$_smarty_tpl);?>
"
    data-id-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_address']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-refresh-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'address','params'=>array('ajax'=>1,'action'=>'addressForm')),$_smarty_tpl);?>
"
  >
    <section class="form-fields">
      
        <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
          
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0][0]->smartyFormField(array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl);?>

          
        <?php } ?>
      
    </section>

    <footer class="form-footer clearfix">
      <input type="hidden" name="submitAddress" value="1">
      
        <button class="btn btn-primary pull-xs-right button-small" type="submit" class="form-control-submit">
          <?php echo smartyTranslate(array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

        </button>
      
    </footer>
  </form>
</div>
<?php }} ?>
