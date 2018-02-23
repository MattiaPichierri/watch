<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 04:10:48
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\modules\jmspagebuilder\views\templates\hook\addontestimonial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:244255a8f9448d64964-69397573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c90de2b0ebc99a7704f3bb92a5f713943f8014f2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\modules\\jmspagebuilder\\views\\templates\\hook\\addontestimonial.tpl',
      1 => 1516090205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '244255a8f9448d64964-69397573',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items_show' => 0,
    'items_show_md' => 0,
    'items_show_sm' => 0,
    'items_show_xs' => 0,
    'navigation' => 0,
    'pagination' => 0,
    'autoplay' => 0,
    'addon_title' => 0,
    'addon_desc' => 0,
    'testimonials' => 0,
    'show_image' => 0,
    'image_url' => 0,
    'testimonial' => 0,
    'show_office' => 0,
    'show_time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8f9448dddb03_39144434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8f9448dddb03_39144434')) {function content_5a8f9448dddb03_39144434($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\jms_watch\\vendor\\prestashop\\smarty\\plugins\\modifier.date_format.php';
?>

<script type="text/javascript">
	var testi_items = 3,
	    testi_itemsDesktop = <?php if ($_smarty_tpl->tpl_vars['items_show']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['items_show']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>1<?php }?>,
	    testi_itemsDesktopSmall = <?php if ($_smarty_tpl->tpl_vars['items_show_md']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['items_show_md']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>1<?php }?>,
	    testi_itemsTablet = <?php if ($_smarty_tpl->tpl_vars['items_show_sm']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['items_show_sm']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>1<?php }?>,
	    testi_itemsMobile = <?php if ($_smarty_tpl->tpl_vars['items_show_xs']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['items_show_xs']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>1<?php }?>;
		var p_nav_testi = <?php if ($_smarty_tpl->tpl_vars['navigation']->value==1) {?>true<?php } else { ?>false<?php }?>;
	    var p_pag_testi = <?php if ($_smarty_tpl->tpl_vars['pagination']->value==1) {?>true<?php } else { ?>false<?php }?>;
		var auto_play_testi = <?php if ($_smarty_tpl->tpl_vars['autoplay']->value==1) {?>true<?php } else { ?>false<?php }?>;
	
</script>

<div class="addon-title">
<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
	<h3><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['addon_title']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</h3>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<p class="addon-desc"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['addon_desc']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?>	
</div>
<div id="testimonial">
<div class="testimonial-carousel">
<?php  $_smarty_tpl->tpl_vars['testimonial'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['testimonial']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['testimonials']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['testimonial']->key => $_smarty_tpl->tpl_vars['testimonial']->value) {
$_smarty_tpl->tpl_vars['testimonial']->_loop = true;
?>	
<div class="testimonial-box">
			<?php if ($_smarty_tpl->tpl_vars['show_image']->value) {?>
						<div class="testimonial-img">
							<img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['image_url']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
resized_<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['testimonial']->value['image'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['testimonial']->value['author'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />
						</div>
			<?php }?>
			<div class="info_people">
			<div class="testimonial-author">
				<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['testimonial']->value['author'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

			</div>
			<?php if ($_smarty_tpl->tpl_vars['show_office']->value) {?>
				<span class="show_office">
					<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['testimonial']->value['office'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

				</span>
			<?php }?>
		</div>
			<div class="testimonial-info">
			  <div class="testimonial-comment" >
				<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['testimonial']->value['comment'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

			  </div>
			<?php if ($_smarty_tpl->tpl_vars['show_time']->value) {?>
				<div class="testimonial-date">
					<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(smarty_modifier_date_format($_smarty_tpl->tpl_vars['testimonial']->value['posttime'],"%b %e, %Y"),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

				</div>
			<?php }?>
		
			</div>
		
</div>	
<?php } ?>
</div>
</div><?php }} ?>
