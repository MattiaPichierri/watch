<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 04:58:02
         compiled from "D:\xampp\htdocs\jms_watch\modules\jmspagebuilder\views\templates\hook\addonfeature.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167305a73efda33b7e5-41836132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55edc418f89f4e503b3ee60977a1442cd19cf75b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\modules\\jmspagebuilder\\views\\templates\\hook\\addonfeature.tpl',
      1 => 1516090200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167305a73efda33b7e5-41836132',
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
  'unifunc' => 'content_5a73efda3628e7_52066843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73efda3628e7_52066843')) {function content_5a73efda3628e7_52066843($_smarty_tpl) {?>
<div class="feature-box<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" <?php if ($_smarty_tpl->tpl_vars['text_align']->value) {?>style="text-align:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['text_align']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;"<?php }?>>
<?php if ($_smarty_tpl->tpl_vars['image_type']->value=='image'&&$_smarty_tpl->tpl_vars['image']->value) {?>	
	<img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['root_url']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['image']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['alt_text']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />	
<?php } elseif ($_smarty_tpl->tpl_vars['icon_class']->value) {?>
	<i class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['icon_class']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"></i>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['title']->value) {?>	
<h2><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['title']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</h2>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['html_content']->value) {?>
<?php echo $_smarty_tpl->tpl_vars['html_content']->value;?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['button_text']->value) {?>
<a href="<?php if ($_smarty_tpl->tpl_vars['button_link']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['button_link']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>#<?php }?>"<?php if ($_smarty_tpl->tpl_vars['target']->value=='new window') {?> target="_blank"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['button_text']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a>
<?php }?>
</div>	
<?php }} ?>
