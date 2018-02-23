<?php /* Smarty version Smarty-3.1.19, created on 2018-02-22 09:26:43
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\modules\jmspagebuilder\views\templates\hook\addonbrand.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31285a8e8cd3e7dc53-87297279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a1631df44e45407aee1283ab4e8b0869c180923' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\modules\\jmspagebuilder\\views\\templates\\hook\\addonbrand.tpl',
      1 => 1516454483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31285a8e8cd3e7dc53-87297279',
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
    'brands' => 0,
    'brand' => 0,
    'link_enable' => 0,
    'image_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8e8cd3ea4d58_07805770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8e8cd3ea4d58_07805770')) {function content_5a8e8cd3ea4d58_07805770($_smarty_tpl) {?>
<script type="text/javascript">    	
	var brand_items = 3,
	    brand_itemsDesktop = <?php if ($_smarty_tpl->tpl_vars['items_show']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['items_show']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>5<?php }?>,
	    brand_itemsDesktopSmall = <?php if ($_smarty_tpl->tpl_vars['items_show_md']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['items_show_md']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>4<?php }?>,
	    brand_itemsTablet = <?php if ($_smarty_tpl->tpl_vars['items_show_sm']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['items_show_sm']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>3<?php }?>,
	    brand_itemsMobile = <?php if ($_smarty_tpl->tpl_vars['items_show_xs']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['items_show_xs']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>2<?php }?>;
        var p_nav_brand = <?php if ($_smarty_tpl->tpl_vars['navigation']->value==1) {?>true<?php } else { ?>false<?php }?>;
	    var p_pag_brand = <?php if ($_smarty_tpl->tpl_vars['pagination']->value==1) {?>true<?php } else { ?>false<?php }?>;
        var auto_play_brand = <?php if ($_smarty_tpl->tpl_vars['autoplay']->value==1) {?>true<?php } else { ?>false<?php }?>;		
</script>
<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
	<h3><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['addon_title']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</h3>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<p class="addon-desc"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['addon_desc']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?>
<div class="brand-carousel">
	<?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
		<div class="brand-item">	
			<?php if ($_smarty_tpl->tpl_vars['brand']->value['image']) {?>
			<a href="<?php if ($_smarty_tpl->tpl_vars['link_enable']->value=='1') {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['brand']->value['url'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>#<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['brand']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">					
				<img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['image_url']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['brand']->value['image'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['brand']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />
			</a>
			<?php }?>
		</div>
	<?php } ?>
</div><?php }} ?>
