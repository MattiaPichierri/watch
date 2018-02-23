<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 07:03:47
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\templates\checkout\_partials\cart-detailed-actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138035a8fbcd398e5e7-95023764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47bebee2b71182f7b4855364970b8b99e2f6a86a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\templates\\checkout\\_partials\\cart-detailed-actions.tpl',
      1 => 1516090206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138035a8fbcd398e5e7-95023764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8fbcd39c1275_61124999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8fbcd39c1275_61124999')) {function content_5a8fbcd39c1275_61124999($_smarty_tpl) {?>
<div class="checkout cart-detailed-actions card-block">
  <?php if ($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired']) {?>
    <div class="alert alert-warning" role="alert">
      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired'], ENT_QUOTES, 'UTF-8');?>

    </div>
    <div class="text-xs-center">
      <button type="button" class="btn-default disabled button-small btn-effect" disabled><?php echo smartyTranslate(array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</button>
    </div>
  <?php } else { ?>
    <div class="text-xs-center">
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order'], ENT_QUOTES, 'UTF-8');?>
" class="btn-default button-small btn-effect"><?php echo smartyTranslate(array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayExpressCheckout'),$_smarty_tpl);?>

    </div>
  <?php }?>
</div>
<?php }} ?>
