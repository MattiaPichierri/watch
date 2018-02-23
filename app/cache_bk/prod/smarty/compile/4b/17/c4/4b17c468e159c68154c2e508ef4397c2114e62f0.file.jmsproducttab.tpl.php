<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 02:45:34
         compiled from "D:\xampp\htdocs\jms_fluent\modules\jmsproducttab\views\templates\hook\jmsproducttab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102515a73d0ce378859-61694632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b17c468e159c68154c2e508ef4397c2114e62f0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_fluent\\modules\\jmsproducttab\\views\\templates\\hook\\jmsproducttab.tpl',
      1 => 1516090200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102515a73d0ce378859-61694632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
    'id_lang_default' => 0,
    'tabcontent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a73d0ce39f950_64958675',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73d0ce39f950_64958675')) {function content_5a73d0ce39f950_64958675($_smarty_tpl) {?><h3><?php echo smartyTranslate(array('s'=>'Custom Tab','mod'=>'jmsproducttab'),$_smarty_tpl);?>
</h3>
<div class="form-group">				
	<label class="form-control-label"><?php echo smartyTranslate(array('s'=>'Tab Title','mod'=>'jmsproducttab'),$_smarty_tpl);?>
</label>
	<div class="translations tabbable">
		<div class="translationsFields tab-content">
		<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
			<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
			<div class="translatable-field tab-pane translation-label-<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
 <?php if ($_smarty_tpl->tpl_vars['id_lang_default']->value==$_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>active<?php }?>">													
			<?php }?>			
				<input id="tabtitle_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" type="text" class="form-control" name="tabtitle[<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
]" value="<?php echo $_smarty_tpl->tpl_vars['tabcontent']->value->tab_title[$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
" />
			<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
			</div>													
			<?php }?>	
		<?php } ?>
		</div>
	</div>		
</div>
<div class="form-group">				
	<label class="form-control-label"><?php echo smartyTranslate(array('s'=>'Tab Content','mod'=>'jmsproducttab'),$_smarty_tpl);?>
</label>
	<div class="translations tabbable">
		<div class="translationsFields tab-content">
		<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
			<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
			<div class="translatable-field tab-pane translation-label-<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
 <?php if ($_smarty_tpl->tpl_vars['id_lang_default']->value==$_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>active<?php }?>">													
			<?php }?>
				<textarea id="tabcontent_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" name="tabcontent[<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
]" class="autoload_rte form-control"><?php echo $_smarty_tpl->tpl_vars['tabcontent']->value->html_content[$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
</textarea>				
			<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
			</div>													
			<?php }?>	
		<?php } ?>
		</div>
	</div>		
</div><?php }} ?>
