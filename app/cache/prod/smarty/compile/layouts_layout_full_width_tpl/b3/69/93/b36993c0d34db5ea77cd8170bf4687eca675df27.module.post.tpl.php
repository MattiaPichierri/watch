<?php /* Smarty version Smarty-3.1.19, created on 2018-03-01 07:48:13
         compiled from "module:jmsblog/views/templates/front/post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173665a97b03d5ddf12-02171251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b36993c0d34db5ea77cd8170bf4687eca675df27' => 
    array (
      0 => 'module:jmsblog/views/templates/front/post.tpl',
      1 => 1516090204,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '173665a97b03d5ddf12-02171251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a97b03d6205a2_54023990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a97b03d6205a2_54023990')) {function content_5a97b03d6205a2_54023990($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['sidebar']->value=='left') {?> 
	<?php $_smarty_tpl->tpl_vars["layout"] = new Smarty_variable("layouts/layout-left-column.tpl", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value=='right') {?>
	<?php $_smarty_tpl->tpl_vars["layout"] = new Smarty_variable("layouts/layout-right-column.tpl", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value=='no') {?>	
	<?php $_smarty_tpl->tpl_vars["layout"] = new Smarty_variable("layouts/layout-full-width.tpl", null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("module:jmsblog/views/templates/front/".((string)$_smarty_tpl->tpl_vars['post_layout']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
