<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 01:55:58
         compiled from "D:\xampp\htdocs\jms_fluent\themes\jms_fluent\modules\jmspagebuilder\views\templates\hook\addoninstagram.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75575a73c52e927cf6-93192206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cf8b50edc970bfc5150fffe060ec2f231a933a9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_fluent\\themes\\jms_fluent\\modules\\jmspagebuilder\\views\\templates\\hook\\addoninstagram.tpl',
      1 => 1516090205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75575a73c52e927cf6-93192206',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'insta_images' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a73c52e927cf3_62235083',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73c52e927cf3_62235083')) {function content_5a73c52e927cf3_62235083($_smarty_tpl) {?>
<div class="addon-title">
	<h3>
		<?php echo smartyTranslate(array('s'=>'INSTAGRAM','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>

	</h3>
</div>
<div class="instagram-images">
	<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['insta_images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
		<a class="grouped_elements" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['img']->value['url'];?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['url'];?>
" alt="<?php echo smartyTranslate(array('s'=>'Instagram Image','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
"/>
		</a>
	<?php } ?>
</div>
<?php }} ?>
