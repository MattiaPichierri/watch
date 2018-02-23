<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 01:52:32
         compiled from "D:\xampp\htdocs\jms_fluent\themes\jms_fluent\modules\jmspagebuilder\views\templates\hook\addoncontactinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202025a73c46035eaf4-73960218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83e40a898aa43ba779494902b12c3e207c5ea511' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_fluent\\themes\\jms_fluent\\modules\\jmspagebuilder\\views\\templates\\hook\\addoncontactinfo.tpl',
      1 => 1516090205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202025a73c46035eaf4-73960218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon_title' => 0,
    'addon_desc' => 0,
    'box_class' => 0,
    'ci_address' => 0,
    'phone' => 0,
    'email' => 0,
    'opentime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a73c4603f12c7_26784127',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73c4603f12c7_26784127')) {function content_5a73c4603f12c7_26784127($_smarty_tpl) {?>
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
<div class="contact-info<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>">
	<ul>
       <?php if ($_smarty_tpl->tpl_vars['ci_address']->value!='') {?><li><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['ci_address']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</li><?php }?>
       <?php if ($_smarty_tpl->tpl_vars['phone']->value!='') {?><li><span><?php echo smartyTranslate(array('s'=>'Tel: ','d'=>'Shop.Theme'),$_smarty_tpl);?>
 </span><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['phone']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</li><?php }?>
	   <?php if ($_smarty_tpl->tpl_vars['email']->value!='') {?><li><span><?php echo smartyTranslate(array('s'=>'Email: ','d'=>'Shop.Theme'),$_smarty_tpl);?>
</span><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['email']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</li><?php }?>
	   <?php if ($_smarty_tpl->tpl_vars['opentime']->value!='') {?><li><span><?php echo smartyTranslate(array('s'=>'Open: ','d'=>'Shop.Theme'),$_smarty_tpl);?>
 </span><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['opentime']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</li><?php }?>
    </ul>
</div>
<?php }} ?>
