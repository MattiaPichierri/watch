<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 01:52:32
         compiled from "module:ps_shoppingcart/ps_shoppingcart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:292095a73c46016e944-72678292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:ps_shoppingcart/ps_shoppingcart.tpl',
      1 => 1516182454,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '292095a73c46016e944-72678292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'jpb_addtocart' => 0,
    'refresh_url' => 0,
    'product' => 0,
    'subtotal' => 0,
    'cart_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a73c4601c09e2_45117418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73c4601c09e2_45117418')) {function content_5a73c4601c09e2_45117418($_smarty_tpl) {?><div class="btn-group compact-hidden blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>0) {?>active<?php } else { ?>inactive<?php }?> dropdown js-dropdown <?php if (isset($_smarty_tpl->tpl_vars['jpb_addtocart']->value)&&$_smarty_tpl->tpl_vars['jpb_addtocart']->value=='ajax_cartbottom') {?>shoppingcart-bottom<?php }?>" id="cart_block" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
			<a href="#" class="dropdown-toggle cart-icon" data-toggle="dropdown">			
				<span class="text-box">
		        
					<span class="shopping-cart"></span>
				<span class="ajax_cart_quantity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span>
			</a>
			<a href="#" class="btn-xs tab-title dropdown-toggle" data-toggle="dropdown">		 
				<span><span class="box-cart ajax_cart_quantity"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span> <?php echo smartyTranslate(array('s'=>'item(s) in your cart','mod'=>'blockcart'),$_smarty_tpl);?>
<i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></span>
			</a>
	<div class="dropdown-menu shoppingcart-box">
	   <div class="shoppingcart-content">
        <span class="ajax_cart_no_product" <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']!=0) {?>style="display:none"<?php }?>><?php echo smartyTranslate(array('s'=>'There is no product','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
			<ul class="list products cart_block_list">
				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
					<li><?php echo $_smarty_tpl->getSubTemplate ('module:ps_shoppingcart/ps_shoppingcart-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>
</li>
				<?php } ?>
			</ul>
			</div>
			<div class="cart-prices">
			<div class="checkout-info">
					<?php  $_smarty_tpl->tpl_vars["subtotal"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["subtotal"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['subtotals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["subtotal"]->key => $_smarty_tpl->tpl_vars["subtotal"]->value) {
$_smarty_tpl->tpl_vars["subtotal"]->_loop = true;
?>
						<div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
 cart-prices-line"  >
							<span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
							<span class="value pull-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
</span>
						</div>
					<?php } ?>
				<div class="cart-button">
					<a id="button_order_cart" class="btn-default btn-effect" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Check out','d'=>'Shop.Theme'),$_smarty_tpl);?>
" rel="nofollow">
						<?php echo smartyTranslate(array('s'=>'Check out','d'=>'Shop.Theme'),$_smarty_tpl);?>

					</a> 
				</div>
			</div>
			</div>
	</div>
</div>
<?php }} ?>
