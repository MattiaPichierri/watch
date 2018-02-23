<?php /* Smarty version Smarty-3.1.19, created on 2018-02-22 09:26:43
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\modules\jmspagebuilder\views\templates\hook\addonpopupadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171135a8e8cd3809655-34692098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00542614c68beaab961aa5ae27d8f112c0c3163f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\modules\\jmspagebuilder\\views\\templates\\hook\\addonpopupadvertising.tpl',
      1 => 1516090205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171135a8e8cd3809655-34692098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'popup_title' => 0,
    'popup_content' => 0,
    'popup_width' => 0,
    'popup_height' => 0,
    'loadtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8e8cd381cee6_79756857',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8e8cd381cee6_79756857')) {function content_5a8e8cd381cee6_79756857($_smarty_tpl) {?>
<div class="jms-popup-overlay" style="display:none;">
	<div class="jms-popup">		
		<?php if ($_smarty_tpl->tpl_vars['popup_title']->value) {?>
		<h2>
			<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['popup_title']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>

		</h2>
		<?php }?>
		<div class="jms-popup-content">
			<div>
				<?php echo $_smarty_tpl->tpl_vars['popup_content']->value;?>

			</div>
		</div>				
		<div class="dontshow">
			<input type="checkbox" name="dontshowagain" value="1" id="dontshowagain" /> 
			<label><?php echo smartyTranslate(array('s'=>'Dont show this box again','d'=>'Shop.Theme'),$_smarty_tpl);?>
</label>
		</div>		
		<a class="popup-close"></a>
		<input type="hidden" name="width_default" id="width-default" value="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['popup_width']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />
		<input type="hidden" name="height_default" id="height-default" value="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['popup_height']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />
		<input type="hidden" name="loadtime" id="loadtime" value="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['loadtime']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />
	</div>
</div><?php }} ?>
