<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 06:41:34
         compiled from "D:\xampp\htdocs\jms_watch\modules\jmspagebuilder\views\templates\hook\addonproductcarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:317635a74081e04bb42-14660493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1af777c5e98853b1f0847760ddf8e08f44d22489' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\modules\\jmspagebuilder\\views\\templates\\hook\\addonproductcarousel.tpl',
      1 => 1516090200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317635a74081e04bb42-14660493',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon_title' => 0,
    'products_slides' => 0,
    'products_slide' => 0,
    'product' => 0,
    'cols' => 0,
    'cols_md' => 0,
    'cols_sm' => 0,
    'cols_xs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a74081e072c48_63079437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a74081e072c48_63079437')) {function content_5a74081e072c48_63079437($_smarty_tpl) {?>


<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
	<h3><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['addon_title']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</h3>
</div>
<?php }?>	
<div class="product-carousel">	
	<?php  $_smarty_tpl->tpl_vars['products_slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['products_slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['products_slide']->key => $_smarty_tpl->tpl_vars['products_slide']->value) {
$_smarty_tpl->tpl_vars['products_slide']->_loop = true;
?>
		<div class="item">
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products_slide']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
				<?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

			<?php } ?>
		</div>
	<?php } ?>
</div>
<script type="text/javascript">
var items = <?php if ($_smarty_tpl->tpl_vars['cols']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cols']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>4<?php }?>;
var itemsDesktop = <?php if ($_smarty_tpl->tpl_vars['cols']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cols']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>4<?php }?>;
var itemsDesktopSmall = <?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>3<?php }?>;
var itemsTablet = <?php if ($_smarty_tpl->tpl_vars['cols_sm']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cols_sm']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>2<?php }?>;
var itemsMobile = <?php if ($_smarty_tpl->tpl_vars['cols_xs']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cols_xs']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>1<?php }?>;
</script><?php }} ?>
