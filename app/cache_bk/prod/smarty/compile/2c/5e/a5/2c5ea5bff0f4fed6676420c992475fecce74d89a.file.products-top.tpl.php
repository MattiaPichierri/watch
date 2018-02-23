<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 03:09:11
         compiled from "D:\xampp\htdocs\jms_fluent\themes\jms_fluent\templates\catalog\_partials\products-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75925a73d657433468-60492221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c5ea5bff0f4fed6676420c992475fecce74d89a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_fluent\\themes\\jms_fluent\\templates\\catalog\\_partials\\products-top.tpl',
      1 => 1517222091,
      2 => 'file',
    ),
    '4fc1dbffbd2afe563f21ba0788b3a7f3f4e3b214' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_fluent\\themes\\jms_fluent\\templates\\catalog\\_partials\\sort-orders.tpl',
      1 => 1516090206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75925a73d657433468-60492221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jpb_grid' => 0,
    'listing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a73d6574a8764_62379366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73d6574a8764_62379366')) {function content_5a73d6574a8764_62379366($_smarty_tpl) {?>
	<div id="js-product-list-top" class="filters-panel">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-5 col-xs-6 view-mode left clearfix">
				<label class="sort-by">View mode:</label>
				<a class="view-grid <?php if ($_smarty_tpl->tpl_vars['jpb_grid']->value==1) {?>active<?php }?>" href="#">
				</a>
				<a class="view-list <?php if ($_smarty_tpl->tpl_vars['jpb_grid']->value==0) {?>active<?php }?>" href="#">
				</a>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-7 col-xs-6 right">
				<div class="view-mode ">
					
					<?php /*  Call merged included template "catalog/_partials/sort-orders.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, '75925a73d657433468-60492221');
content_5a73d657481666_00896522($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/sort-orders.tpl" */?>
				
				</div>
			</div>
		</div>
	</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 03:09:11
         compiled from "D:\xampp\htdocs\jms_fluent\themes\jms_fluent\templates\catalog\_partials\sort-orders.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a73d657481666_00896522')) {function content_5a73d657481666_00896522($_smarty_tpl) {?>
 <div class="inlude_sort_by">
<span class="hidden-sm-down sort-by"><?php echo smartyTranslate(array('s'=>'Sort by:','d'=>'Shop.Theme'),$_smarty_tpl);?>
</span>
<div class="<?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?><?php } else { ?><?php }?>  products-sort-order dropdown">
  <a class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span><?php if (isset($_smarty_tpl->tpl_vars['listing']->value['sort_selected'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['sort_selected'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Select','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
<?php }?></span>
    <i class="fa fa-angle-down"></i>
  </a>
  <div class="dropdown-menu">
    <?php  $_smarty_tpl->tpl_vars['sort_order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sort_order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listing']->value['sort_orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sort_order']->key => $_smarty_tpl->tpl_vars['sort_order']->value) {
$_smarty_tpl->tpl_vars['sort_order']->_loop = true;
?>
      <a
        rel="nofollow"
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_order']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
        class="select-list <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames(array('current'=>$_smarty_tpl->tpl_vars['sort_order']->value['current'],'js-search-link'=>true)), ENT_QUOTES, 'UTF-8');?>
"
      >
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_order']->value['label'], ENT_QUOTES, 'UTF-8');?>

      </a>
    <?php } ?>
  </div>
</div>
</div>
<?php }} ?>
