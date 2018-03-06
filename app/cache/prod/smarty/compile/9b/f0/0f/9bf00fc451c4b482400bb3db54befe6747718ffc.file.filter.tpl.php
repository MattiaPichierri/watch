<?php /* Smarty version Smarty-3.1.19, created on 2018-03-05 02:10:38
         compiled from "D:\xampp\htdocs\jms_watch\modules\jmsblog\views\templates\admin\jmsblog_post\filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49465a9ca71e7702e4-30016412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bf00fc451c4b482400bb3db54befe6747718ffc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\modules\\jmsblog\\views\\templates\\admin\\jmsblog_post\\filter.tpl',
      1 => 1516090197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49465a9ca71e7702e4-30016412',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'categories' => 0,
    'category' => 0,
    'filter_category_id' => 0,
    'filter_state' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9ca71e7e55e5_53624798',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9ca71e7e55e5_53624798')) {function content_5a9ca71e7e55e5_53624798($_smarty_tpl) {?>
<script type="text/javascript">
$( document ).ready(function() {
	$( "#filter_category_id" ).change(function() {
		filterchange();
	});
	$( "#filter_state" ).change(function() {
		filterchange();
	});
});
function filterchange(){
	var category_id = $( "#filter_category_id" ).val();
	var state = $( "#filter_state" ).val();
	var url = "<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogPost');?>
&configure=jmsblog&filter_category_id=" + category_id + "&filter_state=" + state;
	url = url.replace('&amp;','&');
	window.location = url;
}
</script>
<div class="jms-blog-filter">
	<span><?php echo smartyTranslate(array('s'=>'Category Filter','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>
</span>
	<select id="filter_category_id">
		<option value="0"><?php echo smartyTranslate(array('s'=>'Select Category','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>
</option>
		<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
		<option <?php if ($_smarty_tpl->tpl_vars['category']->value['category_id']==$_smarty_tpl->tpl_vars['filter_category_id']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</option>
		<?php } ?>
	</select>
	
	<span><?php echo smartyTranslate(array('s'=>'State Filter','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>
</span>
	<select id="filter_state">
		<option <?php if ($_smarty_tpl->tpl_vars['filter_state']->value==-1) {?>selected<?php }?> value="-1"><?php echo smartyTranslate(array('s'=>'Select Status','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>
</option>		
		<option <?php if ($_smarty_tpl->tpl_vars['filter_state']->value==1) {?>selected<?php }?> value="1"><?php echo smartyTranslate(array('s'=>'Enabled','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>
</option>		
		<option <?php if ($_smarty_tpl->tpl_vars['filter_state']->value==0) {?>selected<?php }?> value="0"><?php echo smartyTranslate(array('s'=>'Disabled','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>
</option>
	</select>
</div><?php }} ?>
