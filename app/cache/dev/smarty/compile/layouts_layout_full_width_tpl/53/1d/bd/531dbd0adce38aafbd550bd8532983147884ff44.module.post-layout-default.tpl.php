<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 08:52:31
         compiled from "module:jmsblog/views/templates/front/post-layout-default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:261925a8fd64fb13016-51012976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '531dbd0adce38aafbd550bd8532983147884ff44' => 
    array (
      0 => 'module:jmsblog/views/templates/front/post-layout-default.tpl',
      1 => 1516090204,
      2 => 'module',
    ),
    'a110056bbbd4362f54632a66586b06409ea643a7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\templates\\page.tpl',
      1 => 1516090206,
      2 => 'file',
    ),
    '7c6cc39ed0d2b2757eb1669d207ef15df2272ce8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\templates\\layouts\\layout-full-width.tpl',
      1 => 1516090206,
      2 => 'file',
    ),
    'dcc2f0daa267d1432a8f538d63fa7a5fb8579537' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1518141541,
      2 => 'file',
    ),
    '46e43fb98d73a9b6e7ce124eadf4384d39134346' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\templates\\_partials\\stylesheets.tpl',
      1 => 1517198228,
      2 => 'file',
    ),
    '3d6128dc2ed375140f7608e4896ba536e6d6e577' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\templates\\_partials\\javascript.tpl',
      1 => 1516285671,
      2 => 'file',
    ),
    '8d94d552b61c8e9181ec5bd6f7f15424583f9676' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\templates\\_partials\\head.tpl',
      1 => 1516090206,
      2 => 'file',
    ),
    '89e135baf9aef0cd2a23d6b305646edb469a5d92' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\templates\\catalog\\_partials\\product-activation.tpl',
      1 => 1516090206,
      2 => 'file',
    ),
    '3507fcd7a8304f08a9e6f411b63923199321a9d7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\templates\\_partials\\header.tpl',
      1 => 1516090206,
      2 => 'file',
    ),
    '567d9a8f94e174f4230e76db1bf04de7453dc699' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\templates\\_partials\\breadcrumb.tpl',
      1 => 1516090206,
      2 => 'file',
    ),
    'ce4fd27d5c96453aa5f508916bdb6a13625f2423' => 
    array (
      0 => 'modules\\jmsblog\\views\\templates\\front\\comment_default.tpl',
      1 => 1516090197,
      2 => 'file',
    ),
    'e46c65a36529f8d7917ef4f22445a79eca830715' => 
    array (
      0 => 'modules\\jmsblog\\views\\templates\\front\\comment_facebook.tpl',
      1 => 1516090197,
      2 => 'file',
    ),
    'b0441f5e0a42f78cb4c6a52266cd2bc43728150a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\templates\\_partials\\footer.tpl',
      1 => 1516090206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261925a8fd64fb13016-51012976',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebar' => 0,
    'layout' => 0,
    'language' => 0,
    'page' => 0,
    'jpb_homeclass' => 0,
    'jpb_rtl' => 0,
    'jpb_loadingstyle' => 0,
    'jpb_mobilemenu' => 0,
    'javascript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8fd64fcef988_61161608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8fd64fcef988_61161608')) {function content_5a8fd64fcef988_61161608($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\jms_watch\\vendor\\prestashop\\smarty\\plugins\\modifier.date_format.php';
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '261925a8fd64fb13016-51012976');
content_5a8fd64fb45c92_47549678($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/head.tpl" */?>
    
  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames($_smarty_tpl->tpl_vars['page']->value['body_classes']), ENT_QUOTES, 'UTF-8');?>
 <?php if (isset($_smarty_tpl->tpl_vars['jpb_homeclass']->value)&&$_smarty_tpl->tpl_vars['jpb_homeclass']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_homeclass']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['jpb_rtl']->value) {?> rtl<?php }?>">
	<?php if ($_smarty_tpl->tpl_vars['jpb_loadingstyle']->value) {?>
		<div class="preloader">
			<div class="spinner<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_loadingstyle']->value, ENT_QUOTES, 'UTF-8');?>
">
				<div class="dot1"></div>
				<div class="dot2"></div>
			    <div class="bounce1"></div>
			    <div class="bounce2"></div>
			    <div class="bounce3"></div>
			</div>
		</div>
	<?php }?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['jpb_mobilemenu']->value) {?>
		<div class="menu-wrap hidden-lg hidden-md">
			<button id="close-button" class="close-button"> <?php echo smartyTranslate(array('s'=>'Menu','d'=>'Shop.Theme'),$_smarty_tpl);?>
</button>
				<nav id="off-canvas-menu">					
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTopColumn'),$_smarty_tpl);?>

				</nav>				
				
			</div>
	<?php }?>
    <div class="main-site">
      
        <?php /*  Call merged included template "catalog/_partials/product-activation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '261925a8fd64fb13016-51012976');
content_5a8fd64fbaf439_30209135($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-activation.tpl" */?>
      
      <header id="header">
        
          <?php /*  Call merged included template "_partials/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '261925a8fd64fb13016-51012976');
content_5a8fd64fbbafb6_65418613($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/header.tpl" */?>
        
      </header>
      
     
      
		<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']!='index') {?>
			
			   <?php /*  Call merged included template "_partials/breadcrumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '261925a8fd64fb13016-51012976');
content_5a8fd64fbc2cb2_65231129($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/breadcrumb.tpl" */?>
			
		<?php }?>
        <div id="wrapper" <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']!='index') {?>class="container"<?php }?>> 
		<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']!='index') {?>
		<div class="row">
		<?php }?>
          

          
  <div id="content-wrapper" <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']!="index") {?>class="col-lg-12 col-md-12 col-sm-12 col-xs-12"<?php }?>>
    

  <section id="main">
	
    
      <section id="content" class="page-content card card-block row">
        
        
<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<div class="single-blog">
<div class="blog-post">
		<?php $_smarty_tpl->tpl_vars['catparams'] = new Smarty_variable(array('category_id'=>$_smarty_tpl->tpl_vars['post']->value['category_id'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias']), null, 0);?>	
		<?php if ($_smarty_tpl->tpl_vars['post']->value['link_video']&&$_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_MEDIA']) {?>
			<div class="post-video">
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['link_video'], ENT_QUOTES, 'UTF-8');?>

			</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['post']->value['image']&&$_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_MEDIA']) {?>
			<div class="post-thumb">
				<img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['image_baseurl']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['image'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo smartyTranslate(array('s'=>'Image Blog','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>
" />
			</div>
		<?php }?>
		<h1 class="title"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</h1>
		<ul class="post-meta">
			<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_CATEGORY']) {?>
				<li>
					<span>
						<?php echo smartyTranslate(array('s'=>'In:','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>
 
						<a href="<?php echo htmlspecialchars(jmsblog::getPageLink('jmsblog-category',$_smarty_tpl->tpl_vars['catparams']->value), ENT_QUOTES, 'UTF-8');?>
">
							<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['category_name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

						</a>
					</span>
				</li>
			<?php }?>
			<li>
				<span><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['created'],'html','UTF-8'),"%B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
</span>
			</li>
			<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_COMMENTS']) {?>
				<li>
					<span><?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['comments']->value), ENT_QUOTES, 'UTF-8');?>
<?php echo smartyTranslate(array('s'=>' comments','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>
</span>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_VIEWS']) {?>
				<li>
					<span><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['views'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php echo smartyTranslate(array('s'=>'view(s)','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>
</span>
				</li>
			<?php }?>
		</ul>
		<div class="post-fulltext">
			<?php echo $_smarty_tpl->tpl_vars['post']->value['fulltext'];?>
	
		</div>
	</div>
<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_SOCIAL_SHARING']) {?>
<div class="social-sharing">

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "a6f949b3-864b-44c5-b0ec-4140186ad958", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<span class='st_sharethis_large' displayText='ShareThis'></span>
<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_FACEBOOK']) {?>
<span class='st_facebook_large' displayText='Facebook'></span>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_TWITTER']) {?>
<span class='st_twitter_large' displayText='Tweet'></span>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_GOOGLEPLUS']) {?>
<span class='st_googleplus_large' displayText='Google +'></span>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_LINKEDIN']) {?>
<span class='st_linkedin_large' displayText='LinkedIn'></span>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_PINTEREST']) {?>
<span class='st_pinterest_large' displayText='Pinterest'></span>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_EMAIL']) {?>
<span class='st_email_large' displayText='Email'></span>
<?php }?>
</div>
<?php }?>
</div>
	<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_COMMENT_ENABLE']) {?>	
		<div id="comments">
			<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_FACEBOOK_COMMENT']==0) {?>
				<?php /*  Call merged included template "modules/jmsblog/views/templates/front/comment_default.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("modules/jmsblog/views/templates/front/comment_default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '261925a8fd64fb13016-51012976');
content_5a8fd64fc3fcd9_56043729($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "modules/jmsblog/views/templates/front/comment_default.tpl" */?>		
			<?php } else { ?>
				<?php /*  Call merged included template "modules/jmsblog/views/templates/front/comment_facebook.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("modules/jmsblog/views/templates/front/comment_facebook.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '261925a8fd64fb13016-51012976');
content_5a8fd64fc72969_24390808($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "modules/jmsblog/views/templates/front/comment_facebook.tpl" */?>		
			<?php }?>
		</div>
	<?php }?>

      </section>
    

    
     
    

  </section>


  </div>


          
			
        <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']!='index') {?>
		</div>
		<?php }?>
      </div>

      <footer id="footer">
        
          <?php /*  Call merged included template "_partials/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '261925a8fd64fb13016-51012976');
content_5a8fd64fce3e05_09086663($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/footer.tpl" */?>
        
      </footer>

    </div>

    
      <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '261925a8fd64fb13016-51012976');
content_5a8fd64fb74aa1_93904575($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>
    

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='cms') {?>		 
		 <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBv9p77jYCRrlLa3xx1hwemtEjUyH3YcZo&callback=initMap">
        </script>
		<?php }?>
  </body>

</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 08:52:31
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\templates\_partials\head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a8fd64fb45c92_47549678')) {function content_5a8fd64fb45c92_47549678($_smarty_tpl) {?>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">


  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</title>
  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots']!=='index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>


<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">

  <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '261925a8fd64fb13016-51012976');
content_5a8fd64fb61229_17023337($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '261925a8fd64fb13016-51012976');
content_5a8fd64fb74aa1_93904575($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>


<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 08:52:31
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\templates\_partials\stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a8fd64fb61229_17023337')) {function content_5a8fd64fb61229_17023337($_smarty_tpl) {?>

<link href="https://fonts.googleapis.com/css?family=Old+Standard+TT:400,400i,700|Roboto:400,400i,500,500i" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
 <link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
/css/neueeinstellung/neueeinstellung.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
/css/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

	    
  </style>
<?php } ?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 08:52:31
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\templates\_partials\javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a8fd64fb74aa1_93904575')) {function content_5a8fd64fb74aa1_93904575($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'UTF-8');?>
></script>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  </script>
<?php } ?>

<?php if (isset($_smarty_tpl->tpl_vars['vars']->value)&&count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <script type="text/javascript">
    <?php  $_smarty_tpl->tpl_vars['var_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var_value']->_loop = false;
 $_smarty_tpl->tpl_vars['var_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var_value']->key => $_smarty_tpl->tpl_vars['var_value']->value) {
$_smarty_tpl->tpl_vars['var_value']->_loop = true;
 $_smarty_tpl->tpl_vars['var_name']->value = $_smarty_tpl->tpl_vars['var_value']->key;
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['var_value']->value);?>
;
    <?php } ?>
  </script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['jpb_homepage']->value==8) {?>
<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['themename']->value, ENT_QUOTES, 'UTF-8');?>
/assets/js/jquery.multiscroll.extensions.min.js"></script>
<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['themename']->value, ENT_QUOTES, 'UTF-8');?>
/assets/js/jquery.multiscroll.js"></script>
<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 08:52:31
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\templates\catalog\_partials\product-activation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a8fd64fbaf439_30209135')) {function content_5a8fd64fbaf439_30209135($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['admin_notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
          <div class="col-sm-12">
            <i class="material-icons pull-xs-left">&#xE001;</i>
            <p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 08:52:31
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\templates\_partials\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a8fd64fbbafb6_65418613')) {function content_5a8fd64fbbafb6_65418613($_smarty_tpl) {?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTop'),$_smarty_tpl);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 08:52:31
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\templates\_partials\breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a8fd64fbc2cb2_65231129')) {function content_5a8fd64fbc2cb2_65231129($_smarty_tpl) {?>
 <div class="breadcrumb">
<div class="breadcrumb-box container">
<span class="title_meta"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</span>
	<div data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb-inner hidden-sm-down">
  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']++;
?>
      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
           <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
        </a>
        <meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['iteration'], ENT_QUOTES, 'UTF-8');?>
">
      </li>
    <?php } ?>
  </ol>
</div>
</div>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 08:52:31
         compiled from "modules\jmsblog\views\templates\front\comment_default.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a8fd64fc3fcd9_56043729')) {function content_5a8fd64fc3fcd9_56043729($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['msg']->value==1) {?><div class="success"><?php echo smartyTranslate(array('s'=>'Your comment submited','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>
 ! <?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_AUTO_APPROVE_COMMENT']==0) {?> <?php echo smartyTranslate(array('s'=>'Please waiting approve from Admin','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>
.<?php }?></div><?php }?>
<?php if (count($_smarty_tpl->tpl_vars['cerrors']->value)>0) {?>
	<ul>
	<?php  $_smarty_tpl->tpl_vars['cerror'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cerror']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cerrors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cerror']->key => $_smarty_tpl->tpl_vars['cerror']->value) {
$_smarty_tpl->tpl_vars['cerror']->_loop = true;
?>
		<li class="error"><?php echo $_smarty_tpl->tpl_vars['cerror']->value;?>
</li>
	<?php } ?>	
	</ul>
<?php }?>
<div id="accordion" class="panel-group">
	<div class="panel panel-default">
		<div class="comment-heading clearfix">
			<h5><a data-toggle="collapse" data-parent="#accordion" href="#post-comments"><?php echo count($_smarty_tpl->tpl_vars['comments']->value);?>
 <?php echo smartyTranslate(array('s'=>'Comments','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>
</a></h5>
		</div>		
		<div id="post-comments" class="panel-collapse collapse">
		<?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['comment']->key;
?>
				<div class="post-comment clearfix">
					<div class="post-comment-info">
					<img class="attachment-widget wp-post-image img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;?>
user.png" />
					<h6><?php echo $_smarty_tpl->tpl_vars['comment']->value['customer_name'];?>
</h6>
					<span class="customer_site"><?php echo $_smarty_tpl->tpl_vars['comment']->value['customer_site'];?>
</span>
					<span class="time_add"><?php echo $_smarty_tpl->tpl_vars['comment']->value['time_add'];?>
</small>
					</div>
					<p class="post-comment-content"><?php echo $_smarty_tpl->tpl_vars['comment']->value['comment'];?>
</p>
				</div>
			<?php } ?>	
		<?php }?>
		</div>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_ALLOW_GUEST_COMMENT']||(!$_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_ALLOW_GUEST_COMMENT']&&$_smarty_tpl->tpl_vars['logged']->value)) {?>	
<div class="commentForm">
	<form id="commentForm" enctype="multipart/form-data" method="post" action="index.php?fc=module&module=jmsblog&controller=post&post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
&action=submitComment">
		<div class="row">
			<div class="col-sm-12">
				<h4 class="heading">Leave a Comment</h4>
				<p class="h-info"><?php echo smartyTranslate(array('s'=>'Your email address will not be published','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>
.</p>
			</div>
		</div>	
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="comment_name"><?php echo smartyTranslate(array('s'=>'Your Name','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>
<sup class="required">*</sup></label>
					<input id="customer_name" class="form-control" name="customer_name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
" required />
				</div>	
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="comment_title"><?php echo smartyTranslate(array('s'=>'Your Email','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>
<sup class="required">*</sup></label>
					<input id="comment_title" class="form-control" name="email" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['email'], ENT_QUOTES, 'UTF-8');?>
" required />
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="comment_title"><?php echo smartyTranslate(array('s'=>'Your Website','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>
</label>
			<input id="customer_site" class="form-control" name="customer_site" type="text" value=""/></br>
		</div>
		<div class="form-group">
			<label for="content"><?php echo smartyTranslate(array('s'=>'Your Comment','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>
<sup class="required">*</sup></label>
			<textarea id="comment" class="form-control" name="comment" rows="8" required></textarea>
		</div>
		<div id="new_comment_form_footer">
			<input id="item_id_comment_send" name="post_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" />
			<input id="item_id_comment_reply" name="post_id_comment_reply" type="hidden" value="" />
			<p class="">
				<button id="submitComment" class="btn btn-default" name="submitComment" type="submit"><?php echo smartyTranslate(array('s'=>'Submit Comment','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>
</button>
			</p>
		</div>
	</form>
	<script>
	$("#commentForm").validate({
	  rules: {		
		customer_name: "required",		
		email: {
		  required: true,
		  email: true
		}
	  }
	});
	</script>
</div>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_ALLOW_GUEST_COMMENT']&&!$_smarty_tpl->tpl_vars['logged']->value) {?>
	<?php echo smartyTranslate(array('s'=>'Please Login to comment','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>

<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 08:52:31
         compiled from "modules\jmsblog\views\templates\front\comment_facebook.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a8fd64fc72969_24390808')) {function content_5a8fd64fc72969_24390808($_smarty_tpl) {?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-href="<?php echo htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8');?>
" data-width="100%" data-numposts="5"></div><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 08:52:31
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\templates\_partials\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a8fd64fce3e05_09086663')) {function content_5a8fd64fce3e05_09086663($_smarty_tpl) {?>
 <div class="back-to-top" id="back-to-top">
			<span class="fa fa-angle-up"></span>
</div>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooter'),$_smarty_tpl);?>


<?php }} ?>
