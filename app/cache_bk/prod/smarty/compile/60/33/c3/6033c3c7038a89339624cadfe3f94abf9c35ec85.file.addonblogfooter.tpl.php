<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 01:55:57
         compiled from "D:\xampp\htdocs\jms_fluent\themes\jms_fluent\modules\jmspagebuilder\views\templates\hook\addonblogfooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:253405a73c52d900be3-00584678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6033c3c7038a89339624cadfe3f94abf9c35ec85' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_fluent\\themes\\jms_fluent\\modules\\jmspagebuilder\\views\\templates\\hook\\addonblogfooter.tpl',
      1 => 1516090205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253405a73c52d900be3-00584678',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon_title' => 0,
    'addon_desc' => 0,
    'posts' => 0,
    'post' => 0,
    'show_media' => 0,
    'params' => 0,
    'image_url' => 0,
    'show_time' => 0,
    'show_nviews' => 0,
    'show_ncomments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a73c52d975ee1_38341290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73c52d975ee1_38341290')) {function content_5a73c52d975ee1_38341290($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\xampp\\htdocs\\jms_fluent\\vendor\\prestashop\\smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\jms_fluent\\vendor\\prestashop\\smarty\\plugins\\modifier.date_format.php';
?>
<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
	<div class="addon-title title-blog">
		<h3><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['addon_title']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</h3>
	</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
	<p class="addon-desc"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['addon_desc']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['posts']->value)>0) {?>
<div class="blog-carousel">	
	<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>				
		<?php $_smarty_tpl->tpl_vars['params'] = new Smarty_variable(array('post_id'=>$_smarty_tpl->tpl_vars['post']->value['post_id'],'category_slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['alias']), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['catparams'] = new Smarty_variable(array('category_id'=>$_smarty_tpl->tpl_vars['post']->value['category_id'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias']), null, 0);?>	
		<div class="blog-item">
			<?php if ($_smarty_tpl->tpl_vars['post']->value['link_video']&&($_smarty_tpl->tpl_vars['show_media']->value=='1')) {?>
				<div class="post-thumb">
					<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['link_video'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>

				</div>
			<?php } elseif ($_smarty_tpl->tpl_vars['post']->value['image']&&($_smarty_tpl->tpl_vars['show_media']->value=='1')) {?>
				<div class="post-thumb">
					<a href="<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value),'htmlall','UTF-8'),'&amp;','&'), ENT_QUOTES, 'UTF-8');?>
">
						<img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['image_url']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['image'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['title'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="img-responsive" />
					</a>
				</div>
			<?php }?>
			<div class="post-info">
				<ul class="post-meta">		
                  <a class="post-title" href="<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value),'htmlall','UTF-8'),'&amp;','&'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value['title'],40,'...'),'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a>				
					<?php if ($_smarty_tpl->tpl_vars['show_time']->value=='1') {?>
						<li>
								<span class="post-created">
									<i class="fa fa-calendar-o" aria-hidden="true"></i>
									<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['created'],'html','UTF-8'),'%b %e, %Y'), ENT_QUOTES, 'UTF-8');?>

								</span>
						</li>
					<?php }?>
				
					<?php if ($_smarty_tpl->tpl_vars['show_nviews']->value=='1') {?>
						<li>
							<span>
								<i class="fa fa-eye" aria-hidden="true"></i>
								<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['views'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php echo smartyTranslate(array('s'=>'views','d'=>'Shop.Theme'),$_smarty_tpl);?>

							</span>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['show_ncomments']->value=='1') {?>		
						<li>
							<span>
							     <i class="fa fa-comments-o" aria-hidden="true"></i>
								<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['comment_count'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php echo smartyTranslate(array('s'=>'comments','d'=>'Shop.Theme'),$_smarty_tpl);?>

							</span>
						</li>
					<?php }?>
				</ul>
			</div>
		</div>	
	<?php } ?>	
</div>	
<?php }?>	<?php }} ?>
