<?php /* Smarty version Smarty-3.1.19, created on 2018-02-26 09:11:31
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\modules\jmsproductvideo\views\templates\hook\jmsproductvideo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109445a93cf435cae74-57002311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c36afd0cbe362bd8904dc642e10a9037e76671a9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\modules\\jmsproductvideo\\views\\templates\\hook\\jmsproductvideo.tpl',
      1 => 1516090205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109445a93cf435cae74-57002311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
    'id_lang_default' => 0,
    'videos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a93cf43647e93_07183282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a93cf43647e93_07183282')) {function content_5a93cf43647e93_07183282($_smarty_tpl) {?><h3><?php echo smartyTranslate(array('s'=>'Video\'s Product','mod'=>'jmsproductvideo'),$_smarty_tpl);?>
</h3>
<input type = "hidden" id="edit" value="0" name="edit" />
<input type = "hidden" id="position_" value="0" name="position_" />			
<div class="form-group">				
	<label class="form-control-label"><?php echo smartyTranslate(array('s'=>'Video Title','mod'=>'jmsproductvideo'),$_smarty_tpl);?>
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
			<?php $_smarty_tpl->tpl_vars['lang'] = new Smarty_variable($_smarty_tpl->tpl_vars['language']->value['id_lang']-1, null, 0);?>						
				<input id="jms_product_titlevideo_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" type="text" class="form-control" name="videotitle[<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
]" value="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
<?php $_tmp1=ob_get_clean();?><?php echo (($tmp = @smarty_modifier_htmlentitiesUTF8($_smarty_tpl->tpl_vars['videos']->value[$_tmp1]['title']))===null||$tmp==='' ? '' : $tmp);?>
" />
			<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
			</div>													
			<?php }?>	
		<?php } ?>
		</div>
	</div>		
</div>
<div class="form-group">
	<label class="form-control-label"><?php echo smartyTranslate(array('s'=>'Video Links','mod'=>'jmsproductvideo'),$_smarty_tpl);?>
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
			<?php $_smarty_tpl->tpl_vars['lang'] = new Smarty_variable($_smarty_tpl->tpl_vars['language']->value['id_lang']-1, null, 0);?>						
				<input id="jms_product_titlevideo_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" type="text" class="form-control" name="videolink[<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
]" value="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
<?php $_tmp2=ob_get_clean();?><?php echo (($tmp = @smarty_modifier_htmlentitiesUTF8($_smarty_tpl->tpl_vars['videos']->value[$_tmp2]['link']))===null||$tmp==='' ? '' : $tmp);?>
" />
			<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
			</div>													
			<?php }?>	
		<?php } ?>
		<p class="help-block"> Videos seperate by "," . Eg : https://www.youtube.com/watch?v=GyrH6xiFiT0,https://vimeo.com/63528500 </p>
		</div>
	</div>		
</div><?php }} ?>
