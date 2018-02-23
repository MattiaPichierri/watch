<?php /* Smarty version Smarty-3.1.19, created on 2018-02-22 09:34:41
         compiled from "D:\xampp\htdocs\jms_watch\modules\jmspagebuilder\views\templates\hook\addoncategoryshow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:223055a8e8eb1ed1107-83641771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d462ecf946ac0f0e478b5bc78b83f286b0323cc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\modules\\jmspagebuilder\\views\\templates\\hook\\addoncategoryshow.tpl',
      1 => 1516090200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '223055a8e8eb1ed1107-83641771',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_cat' => 0,
    'show_img' => 0,
    'category' => 0,
    'link' => 0,
    'categoryLink' => 0,
    'name' => 0,
    'image_url' => 0,
    'num_child' => 0,
    'child' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8e8eb1f2ed11_24416261',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8e8eb1f2ed11_24416261')) {function content_5a8e8eb1f2ed11_24416261($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['id_cat']->value)&&$_smarty_tpl->tpl_vars['id_cat']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['show_img']->value==1) {?>
	<?php $_smarty_tpl->tpl_vars['categoryLink'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getcategoryLink($_smarty_tpl->tpl_vars['id_cat']->value,$_smarty_tpl->tpl_vars['category']->value['link_rewrite']), null, 0);?>
	<div class="thumb">
		<a href="<?php echo $_smarty_tpl->tpl_vars['categoryLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="category_image">
			<img src="<?php echo $_smarty_tpl->tpl_vars['image_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['id_cat']->value;?>
_thumb.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="img-responsive"/>
		</a>
	</div>
	<?php }?>
	<div class="parent-category">
		<a href="<?php echo $_smarty_tpl->tpl_vars['categoryLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['num_child']->value!=0) {?>
		<ul class="child-categories">
			<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['child']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
				<?php $_smarty_tpl->tpl_vars['categoryLink'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getcategoryLink($_smarty_tpl->tpl_vars['c']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']), null, 0);?>
				<li>			
					<a href="<?php echo $_smarty_tpl->tpl_vars['categoryLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
</a>
				</li>
			<?php } ?>
		</ul>
	<?php }?>
<?php } else { ?>
	<p><?php echo smartyTranslate(array('s'=>'No categories','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</p>
<?php }?>

<?php }} ?>
