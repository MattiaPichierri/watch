<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 01:52:30
         compiled from "D:\xampp\htdocs\jms_fluent\themes\jms_fluent\modules\jmspagebuilder\views\templates\hook\addonbanner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104505a73c45ebf3b60-68824674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6db529c846dfef2afd6236d4c282b22478f439ad' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_fluent\\themes\\jms_fluent\\modules\\jmspagebuilder\\views\\templates\\hook\\addonbanner.tpl',
      1 => 1516090205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104505a73c45ebf3b60-68824674',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'box_class' => 0,
    'banner' => 0,
    'banner_link' => 0,
    'target' => 0,
    'root_url' => 0,
    'alt_text' => 0,
    'html_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a73c45ec361f0_26642337',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73c45ec361f0_26642337')) {function content_5a73c45ec361f0_26642337($_smarty_tpl) {?>
<div class="jms-banner<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>">
<?php if ($_smarty_tpl->tpl_vars['banner']->value) {?>
	
		<a href="<?php if ($_smarty_tpl->tpl_vars['banner_link']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['banner_link']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>#<?php }?>"<?php if ($_smarty_tpl->tpl_vars['target']->value=='new window') {?> target="_blank"<?php }?>>
			<img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['root_url']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['banner']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['alt_text']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />
		</a>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['html_content']->value) {?>
<?php echo $_smarty_tpl->tpl_vars['html_content']->value;?>

<?php }?>
</div>	
<?php }} ?>
