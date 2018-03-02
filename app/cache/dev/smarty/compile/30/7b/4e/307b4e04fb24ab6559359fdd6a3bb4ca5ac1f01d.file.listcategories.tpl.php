<?php /* Smarty version Smarty-3.1.19, created on 2018-02-26 04:16:30
         compiled from "D:\xampp\htdocs\jms_watch\modules\jmsblog\views\templates\admin\jmsblog_categories\listcategories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:221355a938a1eae7426-35577296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '307b4e04fb24ab6559359fdd6a3bb4ca5ac1f01d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\modules\\jmsblog\\views\\templates\\admin\\jmsblog_categories\\listcategories.tpl',
      1 => 1516090197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '221355a938a1eae7426-35577296',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'items' => 0,
    'category' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a938a1eb5c727_47552261',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a938a1eb5c727_47552261')) {function content_5a938a1eb5c727_47552261($_smarty_tpl) {?>
<div class="panel"><h3><i class="icon-list-ul"></i> <?php echo smartyTranslate(array('s'=>'Categories','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>

	<span class="panel-heading-action">
		<a class="list-toolbar-btn" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogCategories');?>
&configure=jmsblog&addCategory=1">
			<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Add new" data-html="true">
				<i class="process-icon-new "></i>
			</span>
		</a>
	</span>
	</h3>	
	<div class="table-responsive-row clearfix">
		<table class="table tableDnD"><tbody id="categories">
			<tr class="heading">
				<th><?php echo smartyTranslate(array('s'=>'ID','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>
</th>
				<th><?php echo smartyTranslate(array('s'=>'Category Title','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>
</th>
				<th></th>
				<th class="right"><?php echo smartyTranslate(array('s'=>'Action','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>
</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['category']->key;
?>
				<tr id="categories_<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['i']->value%2==1) {?>odd<?php }?>">					
					<td class="row-id">
						<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
 
					</td>
					<td class="title">
						<h4 class="pull-left"><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</h4>
					</td>
					<td>
						<span><i class="icon-arrows "></i></span>
					</td>
					<td>
						<div class="btn-group-action pull-right">
							<a class="btn <?php if ($_smarty_tpl->tpl_vars['category']->value['active']) {?>btn-success<?php } else { ?>btn-danger<?php }?>"	href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogCategories');?>
&configure=jmsblog&status_id_category=<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
&changeCategoryStatus" title="<?php if ($_smarty_tpl->tpl_vars['category']->value['active']) {?>Enabled<?php } else { ?>Disabled<?php }?>">
								<i class="<?php if ($_smarty_tpl->tpl_vars['category']->value['active']) {?>icon-check<?php } else { ?>icon-remove<?php }?>"></i><?php if ($_smarty_tpl->tpl_vars['category']->value['active']) {?>Enabled<?php } else { ?>Disabled<?php }?>
							</a>
							<a class="btn btn-default"									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogCategories');?>
&configure=jmsblog&id_category=<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
">
								<i class="icon-edit"></i>
								<?php echo smartyTranslate(array('s'=>'Edit','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>

							</a>								
							<a class="btn btn-default"
									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogCategories');?>
&configure=jmsblog&delete_id_category=<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
" onclick="return confirm('Are you sure you want to delete this item?');">
								<i class="icon-trash"></i>
								<?php echo smartyTranslate(array('s'=>'Delete','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>

							</a>
						</div>
					</td>
				</tr>				
			<?php } ?>
		</tbody></table>
	</div>		
</div><?php }} ?>
