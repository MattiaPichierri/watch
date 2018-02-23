<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 02:12:01
         compiled from "D:\xampp\htdocs\jms_fluent\modules\jmspagebuilder\views\templates\admin\jmspagebuilder_media\explorerform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:235025a73c8f1c84564-31113422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cb2c63b2c44074629ed795a4a589befdcf34091' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_fluent\\modules\\jmspagebuilder\\views\\templates\\admin\\jmspagebuilder_media\\explorerform.tpl',
      1 => 1516090200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235025a73c8f1c84564-31113422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'root_folder' => 0,
    'current_folder' => 0,
    'fid' => 0,
    'previous_folder' => 0,
    'folders' => 0,
    'folder' => 0,
    'files' => 0,
    'file' => 0,
    'file_url' => 0,
    'root_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a73c8f1d95c60_65920473',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73c8f1d95c60_65920473')) {function content_5a73c8f1d95c60_65920473($_smarty_tpl) {?>
<form name="adminForm" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderMedia'),'html','UTF-8');?>
" method="post" enctype="multipart/form-data">
<div class="explorer-form">		
	<div class="col-sm-12 row">						
		<div class="media-form path-form">
			<i class="icon-folder-open"></i> <?php echo smartyTranslate(array('s'=>'Path','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
 : <?php if ($_smarty_tpl->tpl_vars['root_folder']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['root_folder']->value,'htmlall','UTF-8');?>
<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current_folder']->value,'htmlall','UTF-8');?>
			
			<div class="pull-right">
				<a class="btn-insert" onclick="window.parent.document.getElementById('jms-image-' + <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fid']->value,'htmlall','UTF-8');?>
).value = document.getElementById('i_url').value; window.parent.document.getElementById('media-preview-' + <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fid']->value,'htmlall','UTF-8');?>
).src = document.getElementById('root-url').value + document.getElementById('i_url').value; window.parent.jQuery.fancybox.close();">Insert</a>
			</div>
		</div>
		<div class="media-list col-sm-12">
			<?php if ($_smarty_tpl->tpl_vars['current_folder']->value) {?>
			<div class="media-box">				
				<div class="thumb-icon"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderMedia'),'html','UTF-8');?>
&current_folder=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['previous_folder']->value,'htmlall','UTF-8');?>
"><i class="icon-level-up"></i></a></div>
				<div class="name"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderMedia'),'html','UTF-8');?>
&current_folder=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['previous_folder']->value,'htmlall','UTF-8');?>
&fid=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fid']->value,'htmlall','UTF-8');?>
">..</a></div>
			</div>	
			<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['folders']->value)) {?>
		<?php  $_smarty_tpl->tpl_vars['folder'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['folder']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['folders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['folder']->key => $_smarty_tpl->tpl_vars['folder']->value) {
$_smarty_tpl->tpl_vars['folder']->_loop = true;
?>			
			<div class="media-box">				
				<div class="thumb-icon"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderMedia'),'html','UTF-8');?>
&current_folder=<?php if ($_smarty_tpl->tpl_vars['current_folder']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current_folder']->value,'htmlall','UTF-8');?>
/<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['folder']->value['name'],'htmlall','UTF-8');?>
"><i class="icon-folder-open"></i></a></div>
				<div class="name"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderMedia'),'html','UTF-8');?>
&current_folder=<?php if ($_smarty_tpl->tpl_vars['current_folder']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current_folder']->value,'htmlall','UTF-8');?>
/<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['folder']->value['name'],'htmlall','UTF-8');?>
&fid=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fid']->value,'htmlall','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['folder']->value['name'],'htmlall','UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['folder']->value['name'],'htmlall','UTF-8'),12);?>
</a></div>				
			</div>	
		<?php } ?>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['files']->value)) {?>
		<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>			
			<div class="media-box">				
				<div class="thumb-icon">
					<?php if ($_smarty_tpl->tpl_vars['file']->value['type']=='jpg'||$_smarty_tpl->tpl_vars['file']->value['type']=='png'||$_smarty_tpl->tpl_vars['file']->value['type']=='jpeg'||$_smarty_tpl->tpl_vars['file']->value['type']=='gif') {?>
						<a class="img-thumb" onclick="document.getElementById('i_url').value = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['root_folder']->value,'htmlall','UTF-8');?>
' + '<?php if ($_smarty_tpl->tpl_vars['current_folder']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current_folder']->value,'htmlall','UTF-8');?>
/<?php }?>' + '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['file']->value['name'],'htmlall','UTF-8');?>
';" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['file']->value['name'],'htmlall','UTF-8');?>
"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['file_url']->value,'htmlall','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current_folder']->value,'htmlall','UTF-8');?>
/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['file']->value['name'],'htmlall','UTF-8');?>
" /></a>					
					<?php }?>	
				</div>
				<div class="name"><a title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['file']->value['name'],'htmlall','UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['file']->value['name'],'htmlall','UTF-8'),12);?>
</a></div>					
			</div>	
		<?php } ?>
		<?php }?>
		</div>
		<div class="media-form url-form">
			<label>Image Url : <input type="text" id="i_url" />
		</div>
		<div class="media-form upload-form">			
			<input type="file" name="newfile" />
			<button name="submitImage" id="upload-file" class="btn btn-success"><?php echo smartyTranslate(array('s'=>'Upload File','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</button> <span>(<?php echo smartyTranslate(array('s'=>'Maximum Size','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(ini_get('upload_max_filesize'),'htmlall','UTF-8');?>
B)</span>
		</div>
	</div>
</div>
<input type="hidden" name="current_folder" id="current-folder" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current_folder']->value,'htmlall','UTF-8');?>
" />
<input type="hidden" name="root_url" id="root-url" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['root_url']->value,'htmlall','UTF-8');?>
" />
<input type="hidden" name="fid" id="fid" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fid']->value,'htmlall','UTF-8');?>
" />
</form>
<style type="text/css">
.media-box {
    border: 1px solid #ddd;
    box-shadow: 0 2px 4px #ccc;
    cursor: pointer;
    float: left;
    height: 70px;
    margin-bottom: 20px;
    margin-right: 20px;
    text-align: center;
    width: 90px;
	cursor: pointer;
    text-align: center;
	background:#efefef;
	padding:10px 0px;
}
.thumb-icon i {
    font-size: 30px;
}
.thumb-icon .img-thumb img {
    height: 50px;
    width: 60px;
}
.media-form {
	background: #fff none repeat scroll 0 0;
    border:1px solid #ccc;
    height: 30px;
    position: fixed;    
    width: 562px;
	padding:10px;
}

.path-form {
	top: 0;
}
.url-form {
	bottom: 60px;
}
.upload-form {
	bottom: 0px;
}
.media-list {
    height: 300px;
    margin-top: 70px;
    overflow-y: auto;
}
.pull-right {
	float:right;
}
#i_url {
	line-height:30px;
	width:300px;
}
.btn-insert {
    background: #428bca none repeat scroll 0 0;
    border-radius: 2px;
    color: #fff;
    cursor: pointer;
    font-size: 13px;
    padding: 5px 10px;
    text-transform: uppercase;
}
</style><?php }} ?>
