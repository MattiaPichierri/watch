<?php /* Smarty version Smarty-3.1.19, created on 2018-03-01 02:36:05
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\modules\jmspagebuilder\views\templates\hook\addonfeature.tpl" */ ?>
<?php /*%%SmartyHeaderCode:234485a97671519da16-03844627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1839b255a99863e7f388601da3a940e9020350f8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\modules\\jmspagebuilder\\views\\templates\\hook\\addonfeature.tpl',
      1 => 1516090205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234485a97671519da16-03844627',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'box_class' => 0,
    'text_align' => 0,
    'image_type' => 0,
    'image' => 0,
    'root_url' => 0,
    'alt_text' => 0,
    'icon_class' => 0,
    'title' => 0,
    'html_content' => 0,
    'button_text' => 0,
    'button_link' => 0,
    'target' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9767151c4b14_38533540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9767151c4b14_38533540')) {function content_5a9767151c4b14_38533540($_smarty_tpl) {?>
<div class="feature-box<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" <?php if ($_smarty_tpl->tpl_vars['text_align']->value) {?>style="text-align:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['text_align']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;"<?php }?>>
<?php if ($_smarty_tpl->tpl_vars['image_type']->value=='image'&&$_smarty_tpl->tpl_vars['image']->value) {?>	
	<div class="image"><img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['root_url']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['image']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['alt_text']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['icon_class']->value) {?>
	<div class="feature-img">
		<i class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['icon_class']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"></i>
	</div>
<?php }?>
	  <div class="include_content_s">
		<?php if ($_smarty_tpl->tpl_vars['title']->value) {?>	
			<h4><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['title']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</h4>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['html_content']->value) {?>
			<?php echo $_smarty_tpl->tpl_vars['html_content']->value;?>

		<?php }?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['button_text']->value) {?>
			<a class="btn-effect1 btn-shopnow"  href="<?php if ($_smarty_tpl->tpl_vars['button_link']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['button_link']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>#<?php }?>"<?php if ($_smarty_tpl->tpl_vars['target']->value=='new window') {?> target="_blank"
			<?php }?>><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['button_text']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a>
		<?php }?>
</div>	
<?php }} ?>
