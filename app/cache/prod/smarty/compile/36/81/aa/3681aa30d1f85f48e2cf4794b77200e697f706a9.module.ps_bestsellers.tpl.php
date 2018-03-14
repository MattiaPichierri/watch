<?php /* Smarty version Smarty-3.1.19, created on 2018-03-14 01:54:21
         compiled from "module:ps_bestsellers/views/templates/hook/ps_bestsellers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116085aa880cd828690-16690669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3681aa30d1f85f48e2cf4794b77200e697f706a9' => 
    array (
      0 => 'module:ps_bestsellers/views/templates/hook/ps_bestsellers.tpl',
      1 => 1516090205,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '116085aa880cd828690-16690669',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa880cd828697_67845880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa880cd828697_67845880')) {function content_5aa880cd828697_67845880($_smarty_tpl) {?>
<div class="best-sellers_block_right">
	<div class="title-block">
		<h3>
			<?php echo smartyTranslate(array('s'=>'Best Sellers','d'=>'Modules.Bestsellers.Shop'),$_smarty_tpl);?>

		</h3>
	</div>
	<div class="products">
		<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
			<?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

		<?php } ?>
	</div>
</div>
<?php }} ?>
