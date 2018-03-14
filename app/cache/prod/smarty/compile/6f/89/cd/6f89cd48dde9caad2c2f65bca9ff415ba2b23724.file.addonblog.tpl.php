<?php /* Smarty version Smarty-3.1.19, created on 2018-03-13 09:55:44
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\modules\jmspagebuilder\views\templates\hook\addonblog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:307425aa7a02057a284-77223090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f89cd48dde9caad2c2f65bca9ff415ba2b23724' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\modules\\jmspagebuilder\\views\\templates\\hook\\addonblog.tpl',
      1 => 1520310059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307425aa7a02057a284-77223090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items_show' => 0,
    'items_show_md' => 0,
    'items_show_sm' => 0,
    'items_show_xs' => 0,
    'navigation' => 0,
    'pagination' => 0,
    'autoplay' => 0,
    'addon_title' => 0,
    'addon_desc' => 0,
    'posts' => 0,
    'post' => 0,
    'show_media' => 0,
    'params' => 0,
    'image_url' => 0,
    'show_category' => 0,
    'catparams' => 0,
    'show_time' => 0,
    'show_nviews' => 0,
    'show_ncomments' => 0,
    'show_introtext' => 0,
    'show_readmore' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa7a020704b50_12609969',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa7a020704b50_12609969')) {function content_5aa7a020704b50_12609969($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\xampp\\htdocs\\jms_watch\\vendor\\prestashop\\smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\jms_watch\\vendor\\prestashop\\smarty\\plugins\\modifier.date_format.php';
?>
<script type="text/javascript">
	var blog_items = 3,
	    blog_itemsDesktop = <?php if ($_smarty_tpl->tpl_vars['items_show']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['items_show']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>3<?php }?>,
	    blog_itemsDesktopSmall = <?php if ($_smarty_tpl->tpl_vars['items_show_md']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['items_show_md']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>2<?php }?>,
	    blog_itemsTablet = <?php if ($_smarty_tpl->tpl_vars['items_show_sm']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['items_show_sm']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>2<?php }?>,
	    blog_itemsMobile = <?php if ($_smarty_tpl->tpl_vars['items_show_xs']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['items_show_xs']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>1<?php }?>;
		var p_nav_blog = <?php if ($_smarty_tpl->tpl_vars['navigation']->value==1) {?>true<?php } else { ?>false<?php }?>;
	    var p_pag_blog = <?php if ($_smarty_tpl->tpl_vars['pagination']->value==1) {?>true<?php } else { ?>false<?php }?>;
		var auto_play_blog = <?php if ($_smarty_tpl->tpl_vars['autoplay']->value==1) {?>true<?php } else { ?>false<?php }?>;
</script>
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
				<h4 class="post-title">
					<a href="<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value),'htmlall','UTF-8'),'&amp;','&'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value['title'],40,'...'),'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a>
				</h4>
				<ul class="post-meta">
					<?php if ($_smarty_tpl->tpl_vars['show_category']->value=='1') {?>
						<li>
							<?php echo smartyTranslate(array('s'=>'In','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
: 
								<a href="<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(jmsblog::getPageLink('jmsblog-category',$_smarty_tpl->tpl_vars['catparams']->value),'htmlall','UTF-8'),'&amp;','&'), ENT_QUOTES, 'UTF-8');?>
">
									<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['category_name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

								</a>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['show_time']->value=='1') {?>
						<li>
								<span class="post-created">
									<i class="fa fa-calendar-o" aria-hidden="true"></i>
									<!-- <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['created'],'html','UTF-8'),'%b %e, %Y'), ENT_QUOTES, 'UTF-8');?>
 -->
									<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['created'],'html','UTF-8'),'%b'), ENT_QUOTES, 'UTF-8');?>
<br>
									<b><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['created'],'html','UTF-8'),'%e'), ENT_QUOTES, 'UTF-8');?>
</b>
								</span>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['show_nviews']->value=='1') {?>
						<li>
							<span>
								<i class="fa fa-eye" aria-hidden="true"></i>
								<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['views'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php echo smartyTranslate(array('s'=>'views','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>

							</span>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['show_ncomments']->value=='1') {?>		
						<li>
							<span>
								<i class="fa fa-comment-o"></i>
								<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['comment_count'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php echo smartyTranslate(array('s'=>'comments','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>

							</span>
						</li>
					<?php }?>
				</ul>
				<?php if ($_smarty_tpl->tpl_vars['show_introtext']->value=='1') {?>	
					<div class="post-intro"><?php echo $_smarty_tpl->tpl_vars['post']->value['introtext'];?>
</div>	
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['show_readmore']->value=='1') {?>	
					<a class="post-readmore btn-hover" href="<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value),'htmlall','UTF-8'),'&amp;','&'), ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Read more','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</a>	
				<?php }?>
			</div>
		</div>		
	<?php } ?>	
</div>	
<?php }?>	<?php }} ?>
