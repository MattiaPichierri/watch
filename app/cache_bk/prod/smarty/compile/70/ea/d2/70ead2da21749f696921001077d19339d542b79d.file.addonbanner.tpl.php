<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 04:58:02
         compiled from "D:\xampp\htdocs\jms_watch\modules\jmspagebuilder\views\templates\hook\addonbanner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:285555a73efda3628e0-67166490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70ead2da21749f696921001077d19339d542b79d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\modules\\jmspagebuilder\\views\\templates\\hook\\addonbanner.tpl',
      1 => 1516090200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285555a73efda3628e0-67166490',
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
  'unifunc' => 'content_5a73efda3899e7_76433103',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73efda3899e7_76433103')) {function content_5a73efda3899e7_76433103($_smarty_tpl) {?>
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
