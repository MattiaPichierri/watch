<?php /* Smarty version Smarty-3.1.19, created on 2018-03-12 01:54:30
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\modules\jmspagebuilder\views\templates\hook\addonbanner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182525a8e8cd394d9f7-97005054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ff0d25d8a8a3e71be8817e787b1f402362a6069' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\modules\\jmspagebuilder\\views\\templates\\hook\\addonbanner.tpl',
      1 => 1520568818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182525a8e8cd394d9f7-97005054',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8e8cd3961270_63831351',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8e8cd3961270_63831351')) {function content_5a8e8cd3961270_63831351($_smarty_tpl) {?>

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
