<?php /* Smarty version Smarty-3.1.19, created on 2018-02-22 10:04:50
         compiled from "module:ps_sharebuttons/views/templates/hook/ps_sharebuttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:312335a8e95c273bb64-21072775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce908e3af500ef88d0be39d6badc82307b6995cd' => 
    array (
      0 => 'module:ps_sharebuttons/views/templates/hook/ps_sharebuttons.tpl',
      1 => 1516090206,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '312335a8e95c273bb64-21072775',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'social_share_links' => 0,
    'social_share_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8e95c274b567_09237052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8e95c274b567_09237052')) {function content_5a8e95c274b567_09237052($_smarty_tpl) {?><!-- begin D:\xampp\htdocs\jms_watch/themes/jms_watch/modules/ps_sharebuttons/views/templates/hook/ps_sharebuttons.tpl -->

  <?php if ($_smarty_tpl->tpl_vars['social_share_links']->value) {?>
    <div class="block-social">
      <ul>
			<li class="social-title">
				<?php echo smartyTranslate(array('s'=>'Share','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

			</li>
			<?php  $_smarty_tpl->tpl_vars['social_share_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['social_share_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['social_share_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['social_share_link']->key => $_smarty_tpl->tpl_vars['social_share_link']->value) {
$_smarty_tpl->tpl_vars['social_share_link']->_loop = true;
?>
				<li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_link']->value['class'], ENT_QUOTES, 'UTF-8');?>
 icon-gray">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="text-hide" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_link']->value['label'], ENT_QUOTES, 'UTF-8');?>
" target="_blank">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_link']->value['label'], ENT_QUOTES, 'UTF-8');?>

					</a>
				</li>
			<?php } ?>
      </ul>
    </div>
  <?php }?>

<!-- end D:\xampp\htdocs\jms_watch/themes/jms_watch/modules/ps_sharebuttons/views/templates/hook/ps_sharebuttons.tpl --><?php }} ?>
