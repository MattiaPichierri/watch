<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 07:13:59
         compiled from "D:\xampp\htdocs\jms_watch\modules\jmspagebuilder\views\templates\hook\addonbannerproduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78425a8fbf37d7dc14-99579030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20e3b49dd03fa970f79cc37bb3c422fb9d714965' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\modules\\jmspagebuilder\\views\\templates\\hook\\addonbannerproduct.tpl',
      1 => 1516090200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78425a8fbf37d7dc14-99579030',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cols' => 0,
    'cols_md' => 0,
    'cols_sm' => 0,
    'cols_xs' => 0,
    'addon_title' => 0,
    'addon_desc' => 0,
    'addon_tpl_dir' => 0,
    'banner_img1' => 0,
    'root_url' => 0,
    'banner_html1' => 0,
    'banner_link1' => 0,
    'products_slides' => 0,
    'products_slide' => 0,
    'product' => 0,
    'banner_img2' => 0,
    'banner_html2' => 0,
    'banner_link2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8fbf37e7bad7_00525847',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8fbf37e7bad7_00525847')) {function content_5a8fbf37e7bad7_00525847($_smarty_tpl) {?>
<script type="text/javascript">
var bp_items = <?php if ($_smarty_tpl->tpl_vars['cols']->value) {?><?php echo $_smarty_tpl->tpl_vars['cols']->value;?>
<?php } else { ?>4<?php }?>;
var bp_itemsDesktop = <?php if ($_smarty_tpl->tpl_vars['cols']->value) {?><?php echo $_smarty_tpl->tpl_vars['cols']->value;?>
<?php } else { ?>4<?php }?>;
var bp_itemsDesktopSmall = <?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {?><?php echo $_smarty_tpl->tpl_vars['cols_md']->value;?>
<?php } else { ?>3<?php }?>;
var bp_itemsTablet = <?php if ($_smarty_tpl->tpl_vars['cols_sm']->value) {?><?php echo $_smarty_tpl->tpl_vars['cols_sm']->value;?>
<?php } else { ?>2<?php }?>;
var bp_itemsMobile = <?php if ($_smarty_tpl->tpl_vars['cols_xs']->value) {?><?php echo $_smarty_tpl->tpl_vars['cols_xs']->value;?>
<?php } else { ?>1<?php }?>;
</script>
<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
	<h3><?php echo $_smarty_tpl->tpl_vars['addon_title']->value;?>
</h3>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<p class="addon-desc"><?php echo $_smarty_tpl->tpl_vars['addon_desc']->value;?>
</p>
<?php }?>	
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addon_tpl_dir']->value;?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["box_template"] = new Smarty_variable($_tmp1."productbox.tpl", null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['banner_img1']->value) {?>
<div class="banner-1 col-lg-6 col-md-6 col-xs-12">
	<img src="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['banner_img1']->value;?>
" alt="" class="img-responsive" />
	<div class="banner-content">
	<?php if ($_smarty_tpl->tpl_vars['banner_html1']->value) {?>
		<?php echo $_smarty_tpl->tpl_vars['banner_html1']->value;?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['banner_link1']->value) {?>
		<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['banner_link1']->value;?>
"><?php echo smartyTranslate(array('s'=>'SHOP NOW','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
! <span class="fa fa-long-arrow-right"></span></a>
	<?php }?>
	</div>
</div>
<?php }?>
<div class="product-box col-lg-6 col-md-6 col-xs-12">
	<div class="banner-product-carousel">	
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
	<?php if ($_smarty_tpl->tpl_vars['banner_img2']->value) {?>
	<div class="banner-2">	
		<img src="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['banner_img2']->value;?>
" alt="" class="img-responsive" />
		<div class="banner-content">
			<?php if ($_smarty_tpl->tpl_vars['banner_html2']->value) {?>
				<?php echo $_smarty_tpl->tpl_vars['banner_html2']->value;?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['banner_link2']->value) {?>
			<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['banner_link2']->value;?>
"><?php echo smartyTranslate(array('s'=>'SHOP NOW','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
! <span class="fa fa-long-arrow-right"></span></a>
			<?php }?>
		</div>	
	</div>	
	<?php }?>	
</div><?php }} ?>
