<?php /* Smarty version Smarty-3.1.19, created on 2018-02-26 10:31:10
         compiled from "modules\jmsblogwidget\views\templates\hook\sidebar-widget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200275a93e1eeeffd95-18681545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebd8c8cf2cd7cab3ab1f4547790eaa51076c85fb' => 
    array (
      0 => 'modules\\jmsblogwidget\\views\\templates\\hook\\sidebar-widget.tpl',
      1 => 1516090198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200275a93e1eeeffd95-18681545',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'widget_setting' => 0,
    'popularpost' => 0,
    'post' => 0,
    'params' => 0,
    'image_baseurl' => 0,
    'latestpost' => 0,
    'latestcomment' => 0,
    'comment' => 0,
    'category_menu' => 0,
    'archives' => 0,
    'archive' => 0,
    'aparams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a93e1ef088bc2_42042953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a93e1ef088bc2_42042953')) {function content_5a93e1ef088bc2_42042953($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\jms_watch\\vendor\\prestashop\\smarty\\plugins\\modifier.date_format.php';
?>
<aside class="blog-widget widget-tabs">	
	<div role="tabpanel" class="jms-tab">		  
		 <ul class="nav nav-tabs">			
			<?php if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_POPULAR']) {?>
			<li class="nav-item active"><a href="#popularpost" aria-controls="popularpost" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Popular','d'=>'Modules.JmsBlogwidget'),$_smarty_tpl);?>
</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_RECENT']) {?>
			<li class="nav-item <?php if (!$_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_POPULAR']) {?>active<?php }?>"><a href="#latestpost" aria-controls="latestpost" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Recent','d'=>'Modules.JmsBlogwidget'),$_smarty_tpl);?>
</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_LATESTCOMMENT']) {?>
			<li class="nav-item <?php if (!$_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_POPULAR']&&!$_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_RECENT']) {?> active<?php }?>"><a href="#latestcomment" aria-controls="latestpost" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Comments','d'=>'Modules.JmsBlogwidget'),$_smarty_tpl);?>
</a></li>
			<?php }?>
		  </ul>
		  <div class="tab-content">
			<?php if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_POPULAR']) {?>
			<div class="tab-pane active" id="popularpost">				
				<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['popularpost']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['post']->key;
?>	
					<?php $_smarty_tpl->tpl_vars["show_view"] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value['views']+1, null, 0);?>	
					<?php $_smarty_tpl->tpl_vars['params'] = new Smarty_variable(array('post_id'=>$_smarty_tpl->tpl_vars['post']->value['post_id'],'category_slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['alias']), null, 0);?>
					<article class="item-post clearfix">
							<a href="<?php echo jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value);?>
" class="post-img">
							<?php if ($_smarty_tpl->tpl_vars['post']->value['image']) {?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;?>
thumb_<?php echo $_smarty_tpl->tpl_vars['post']->value['image'];?>
" class="img-responsive" />
							<?php } else { ?>	
								<img src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;?>
no-img.jpg" class="img-responsive" />
							<?php }?>
							<p class="post-created"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['created'],'htmlall','UTF-8'),"%B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
</p>
							<h6><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</h6>
							
							</a>
					</article>
				<?php } ?>				
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_RECENT']) {?>
			<div class="tab-pane<?php if (!$_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_POPULAR']) {?> active<?php }?>" id="latestpost">				
				<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['latestpost']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['post']->key;
?>
					<?php $_smarty_tpl->tpl_vars["show_view"] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value['views']+1, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['params'] = new Smarty_variable(array('post_id'=>$_smarty_tpl->tpl_vars['post']->value['post_id'],'category_slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['alias']), null, 0);?>
					<article class="item-post clearfix">
						<a href="<?php echo jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value);?>
" class="post-img">
						<?php if ($_smarty_tpl->tpl_vars['post']->value['image']) {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;?>
thumb_<?php echo $_smarty_tpl->tpl_vars['post']->value['image'];?>
" class="img-responsive" />
						<?php } else { ?>	
							<img src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;?>
no-img.jpg" class="img-responsive" />
						<?php }?>
						<p class="post-created"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['created'],'htmlall','UTF-8'),"%B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
</p>
						<h6><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</h6>
					
						</a>
					</article>
				<?php } ?>				
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_LATESTCOMMENT']) {?>
			<div class="tab-pane<?php if (!$_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_POPULAR']&&!$_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_RECENT']) {?> active<?php }?>" id="latestcomment">
				<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['latestcomment']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['comment']->key;
?>
					<article class="comment-item">
						<img src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;?>
user.png" class="img-responsive">
						<h6><?php echo $_smarty_tpl->tpl_vars['comment']->value['customer_name'];?>
:</h6>
						<p><?php echo $_smarty_tpl->tpl_vars['comment']->value['comment'];?>
</p>
					</article>
				<?php } ?>	
			</div>
			<?php }?>
		  </div>

	</div>
</aside>
<?php if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_CATEGORYMENU']) {?>
<aside class="blog-widget widget-categories">
	<h3 class="widget-title"><span><?php echo smartyTranslate(array('s'=>'Categories','d'=>'Modules.JmsBlogwidget'),$_smarty_tpl);?>
</span></h3>
	<ul>
	<?php echo $_smarty_tpl->tpl_vars['category_menu']->value;?>

	</ul>
</aside>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_ARCHIVES']) {?>
<aside class="blog-widget widget-archives">
	<h3 class="widget-title"><span><?php echo smartyTranslate(array('s'=>'Archives','d'=>'Modules.JmsBlogwidget'),$_smarty_tpl);?>
</span></h3>
	<ul>
	<?php  $_smarty_tpl->tpl_vars['archive'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['archive']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['archives']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['archive']->key => $_smarty_tpl->tpl_vars['archive']->value) {
$_smarty_tpl->tpl_vars['archive']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['aparams'] = new Smarty_variable(array('archive'=>$_smarty_tpl->tpl_vars['archive']->value['postmonth']), null, 0);?>
		<li><a href="<?php echo htmlspecialchars(jmsblog::getPageLink('jmsblog-archive',$_smarty_tpl->tpl_vars['aparams']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['archive']->value['postmonth'];?>
</a></li>
	<?php } ?>
	</ul>
</aside>
<?php }?>
<?php }} ?>
