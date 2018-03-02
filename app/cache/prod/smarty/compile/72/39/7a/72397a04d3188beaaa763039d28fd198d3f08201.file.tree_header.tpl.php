<?php /* Smarty version Smarty-3.1.19, created on 2018-03-01 04:12:29
         compiled from "D:\xampp\htdocs\jms_watch\admin367i0kovu\themes\default\template\helpers\tree\tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185405a977dad1cefb0-50913958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72397a04d3188beaaa763039d28fd198d3f08201' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\admin367i0kovu\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1508746756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185405a977dad1cefb0-50913958',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a977dad1d6cb9_86009644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a977dad1d6cb9_86009644')) {function content_5a977dad1d6cb9_86009644($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div>
<?php }} ?>
