<?php /* Smarty version Smarty-3.1.19, created on 2018-02-22 09:53:07
         compiled from "module:ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44545a8e9303a68272-69973176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa6cc378d2942c8857b89d6bca728048c0caeedd' => 
    array (
      0 => 'module:ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl',
      1 => 1516955852,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '44545a8e9303a68272-69973176',
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
  'unifunc' => 'content_5a8e9303a73df4_89529507',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8e9303a73df4_89529507')) {function content_5a8e9303a73df4_89529507($_smarty_tpl) {?><!-- begin D:\xampp\htdocs\jms_watch/themes/jms_watch/modules/ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl --><section class="featured-products clearfix">
	<div class="addon-title">
		<h3 class="products-section-title text-uppercase ">
			<?php echo smartyTranslate(array('s'=>'Feature Products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

		</h3>
	</div>
  
  <div class="products">
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
      <?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

    <?php } ?>
  </div>
</section><!-- end D:\xampp\htdocs\jms_watch/themes/jms_watch/modules/ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl --><?php }} ?>
