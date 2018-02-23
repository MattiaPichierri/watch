<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 02:40:49
         compiled from "module:ps_shoppingcart/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9995a73cfb1418071-19731799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0de54a7df2ce9f325675562cb8b6164899785ff9' => 
    array (
      0 => 'module:ps_shoppingcart/modal.tpl',
      1 => 1516090206,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '9995a73cfb1418071-19731799',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'property' => 0,
    'property_value' => 0,
    'cart' => 0,
    'cart_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a73cfb14c0016_21061304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73cfb14c0016_21061304')) {function content_5a73cfb14c0016_21061304($_smarty_tpl) {?><div id="blockcart-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-xs-center" id="myModalLabel">
			<?php echo smartyTranslate(array('s'=>'Product successfully added to your shopping cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>

		</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-5 divide-right col-xs-6">
            
                <img class="product-image" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image">        
                <h6 class="h6 product-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h6>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl);?>

                <?php  $_smarty_tpl->tpl_vars["property_value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["property_value"]->_loop = false;
 $_smarty_tpl->tpl_vars["property"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["property_value"]->key => $_smarty_tpl->tpl_vars["property_value"]->value) {
$_smarty_tpl->tpl_vars["property_value"]->_loop = true;
 $_smarty_tpl->tpl_vars["property"]->value = $_smarty_tpl->tpl_vars["property_value"]->key;
?>
                  <span><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['property']->value, ENT_QUOTES, 'UTF-8');?>
</strong>: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['property_value']->value, ENT_QUOTES, 'UTF-8');?>
</span><br>
                <?php } ?>
                <strong><?php echo smartyTranslate(array('s'=>'Quantity:','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</strong>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cart_quantity'], ENT_QUOTES, 'UTF-8');?>

             
            
          </div>
          <div class="col-md-7  col-xs-6 divide-left">
            <div class="cart-content">
              <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>1) {?>
                <p class="cart-products-count"><?php echo smartyTranslate(array('s'=>'There are %products_count% items in your cart.','sprintf'=>array('%products_count%'=>$_smarty_tpl->tpl_vars['cart']->value['products_count']),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</p>
              <?php } else { ?>
                <p class="cart-products-count"><?php echo smartyTranslate(array('s'=>'There is %product_count% item in your cart.','sprintf'=>array('%product_count%'=>$_smarty_tpl->tpl_vars['cart']->value['products_count']),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</p>
              <?php }?>
              <p><strong><?php echo smartyTranslate(array('s'=>'Total products:','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</strong>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['value'], ENT_QUOTES, 'UTF-8');?>
</p>
              <p><strong><?php echo smartyTranslate(array('s'=>'Total shipping:','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</strong>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['shipping']['value'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCheckoutSubtotalDetails','subtotal'=>$_smarty_tpl->tpl_vars['cart']->value['subtotals']['shipping']),$_smarty_tpl);?>
</p>
              <?php if ($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']) {?>
              	<p><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label'], ENT_QUOTES, 'UTF-8');?>
</strong>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</p>
              <?php }?>
              <p><strong><?php echo smartyTranslate(array('s'=>'Total:','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</strong>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</p>
              <button type="button" class="btn-default btn-secondary btn-effect btn-active  btn-cart" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</button>
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn-default btn-secondary btn-effect  btn-cart"><?php echo smartyTranslate(array('s'=>'proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
