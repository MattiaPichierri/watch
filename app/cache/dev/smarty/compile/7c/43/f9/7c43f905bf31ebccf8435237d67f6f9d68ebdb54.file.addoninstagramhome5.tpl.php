<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 04:10:50
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\modules\jmspagebuilder\views\templates\hook\addoninstagramhome5.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199505a8f944a104e32-08338774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c43f905bf31ebccf8435237d67f6f9d68ebdb54' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\modules\\jmspagebuilder\\views\\templates\\hook\\addoninstagramhome5.tpl',
      1 => 1516090205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199505a8f944a104e32-08338774',
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
  'unifunc' => 'content_5a8f944a1186b5_55753222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8f944a1186b5_55753222')) {function content_5a8f944a1186b5_55753222($_smarty_tpl) {?>
<div class="instagram-carousel">
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
