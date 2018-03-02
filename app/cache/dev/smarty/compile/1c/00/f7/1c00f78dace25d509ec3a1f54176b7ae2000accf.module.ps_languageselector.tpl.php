<?php /* Smarty version Smarty-3.1.19, created on 2018-02-28 07:28:11
         compiled from "module:ps_languageselector/ps_languageselector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:319765a8e8cc89407c8-53612535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c00f78dace25d509ec3a1f54176b7ae2000accf' => 
    array (
      0 => 'module:ps_languageselector/ps_languageselector.tpl',
      1 => 1519786727,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '319765a8e8cc89407c8-53612535',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8e8cc894c349_18183791',
  'variables' => 
  array (
    'jpb_homepage' => 0,
    'languages' => 0,
    'language' => 0,
    'current_language' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8e8cc894c349_18183791')) {function content_5a8e8cc894c349_18183791($_smarty_tpl) {?><!-- begin D:\xampp\htdocs\jms_watch/themes/jms_watch/modules/ps_languageselector/ps_languageselector.tpl -->
<!-- Block languages module -->
<?php if ($_smarty_tpl->tpl_vars['jpb_homepage']->value==1||$_smarty_tpl->tpl_vars['jpb_homepage']->value==6) {?>
	<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
		<div class="btn-group compact-hidden languages-info">
			<span class="btn-name"><?php echo smartyTranslate(array('s'=>'Select Languages','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
			<ul class="languages-list">
				<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
					<li <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']==$_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> class="current" <?php }?>>
						<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl);?>
" class="dropdown-item">
						  <img alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
img/l/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8');?>
.jpg" width="20" height="14"/>
						</a>
					</li>
				<?php } ?>		
			</ul>
		</div>
	<?php }?>	
<?php } elseif ($_smarty_tpl->tpl_vars['jpb_homepage']->value==4||$_smarty_tpl->tpl_vars['jpb_homepage']->value==7) {?>
	<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
		<div class="btn-group compact-hidden languages-info">
			<a href="#"  class="btn-xs dropdown-toggle" data-toggle="dropdown">
				<span class="btn-name"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['current_language']->value['name_simple'],3,''), ENT_QUOTES, 'UTF-8');?>
</span>
			
			</a>
			<ul class="dropdown-menu" role="menu">
				<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
					<li <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']==$_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> class="current" <?php }?>>
						<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl);?>
" class="dropdown-item">
							<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['language']->value['name_simple'],3,''), ENT_QUOTES, 'UTF-8');?>

						</a>
					</li>
				<?php } ?>		
			</ul>
		</div>
	<?php }?>
<?php } else { ?>
<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
		<div class="btn-group compact-hidden languages-info">
			<a href="#"  class="btn-xs dropdown-toggle" data-toggle="dropdown">
				<span class="btn-name"><?php echo smartyTranslate(array('s'=>'Languages','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>			
			</a>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
					<li <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']==$_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> class="current" <?php }?>>
						<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl);?>
" class="dropdown-item">
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>

						</a>
					</li>
				<?php } ?>		
			</ul>
		</div>
	<?php }?>
<?php }?>
<!-- /Block languages module -->
<!-- end D:\xampp\htdocs\jms_watch/themes/jms_watch/modules/ps_languageselector/ps_languageselector.tpl --><?php }} ?>
