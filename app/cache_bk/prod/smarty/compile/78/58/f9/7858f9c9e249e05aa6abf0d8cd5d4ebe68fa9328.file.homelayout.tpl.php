<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 01:52:28
         compiled from "D:\xampp\htdocs\jms_fluent\modules\jmspagebuilder\views\templates\admin\jmspagebuilder_homepages\homelayout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86685a73c45c40fd54-53861877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7858f9c9e249e05aa6abf0d8cd5d4ebe68fa9328' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_fluent\\modules\\jmspagebuilder\\views\\templates\\admin\\jmspagebuilder_homepages\\homelayout.tpl',
      1 => 1516090200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86685a73c45c40fd54-53861877',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homepages' => 0,
    'home' => 0,
    'homepage' => 0,
    'link' => 0,
    'jsonfiles' => 0,
    'jsonfile' => 0,
    'languages' => 0,
    'language' => 0,
    'rows' => 0,
    'row' => 0,
    'column' => 0,
    'addon' => 0,
    'root_url' => 0,
    'ajax_url' => 0,
    'addonslist' => 0,
    'addonlist' => 0,
    'modules' => 0,
    'module' => 0,
    'modules_url' => 0,
    'mediatoken' => 0,
    'ad' => 0,
    'converturl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a73c45c596752_36029303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73c45c596752_36029303')) {function content_5a73c45c596752_36029303($_smarty_tpl) {?>
<div class="layout-tools">		
		<select id="select-home">
			<?php  $_smarty_tpl->tpl_vars['home'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['home']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['homepages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['home']->key => $_smarty_tpl->tpl_vars['home']->value) {
$_smarty_tpl->tpl_vars['home']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['home']->key;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['home']->value['id_homepage'];?>
" <?php if ($_smarty_tpl->tpl_vars['home']->value['id_homepage']==$_smarty_tpl->tpl_vars['homepage']->value['id_homepage']) {?>selected="selected"<?php }?>><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['home']->value['title'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
</option>
			<?php } ?>
		</select>
		<ul class="device-icons">
			<li class="active" data-device="lg"><a class="lg-device label-tooltip" data-original-title="Large Device"><i class="icon-desktop"></i></a></li>
			<li data-device="md"><a class="md-device label-tooltip" data-original-title="Medium Device"><i class="icon-laptop"></i></a></li>
			<li data-device="sm"><a class="sm-device label-tooltip" data-original-title="Small Device"><i class="icon-tablet"></i></a></li>
			<li data-device="xs"><a class="xs-device label-tooltip" data-original-title="Mobile Device"><i class="icon-mobile"></i></a></li>
		</ul>
		<ul class="import-export">
			<li><a class="copy-lang label-tooltip" data-original-title="Copy Language Data for All Language"><i class="icon-language"></i></a></li>	
			<li><a class="export-link label-tooltip" data-original-title="Export Layout" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderHomepages');?>
&configure=jmspagebuilder&export_id_homepage=<?php echo $_smarty_tpl->tpl_vars['homepage']->value['id_homepage'];?>
"><i class="icon-download"></i></a></li>			
			<li><a class="import-link label-tooltip" data-original-title="Import Layout"><i class="icon-upload"></i></a></li>			
		</ul>
</div>
<div class="import-form" style="display:none;">
<form name="adminForm" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderHomepages');?>
&configure=jmspagebuilder" method="post" enctype="multipart/form-data">
		<select name="import_file">
			<?php  $_smarty_tpl->tpl_vars['jsonfile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jsonfile']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['jsonfiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jsonfile']->key => $_smarty_tpl->tpl_vars['jsonfile']->value) {
$_smarty_tpl->tpl_vars['jsonfile']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['jsonfile']->key;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['jsonfile']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['jsonfile']->value;?>
</option> 	
			<?php } ?>
		</select>
		<button type="submit">Import</button>			
		<br /><span><?php echo smartyTranslate(array('s'=>'Files in','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
 <strong>modules/jmspagebuilder/json/</strong> Folder</span>
		<input type="hidden" name="import_id_homepage" value="<?php echo $_smarty_tpl->tpl_vars['homepage']->value['id_homepage'];?>
" /> 
</form>	
</div>
<div class="language-form" style="display:none;">
<form name="adminForm" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderHomepages');?>
&configure=jmspagebuilder" method="post">
	<label>Copy Data From : </label>
	<select name="src_lang_id">
	<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</option> 	
	<?php } ?>
	</select>
	<button type="submit">Copy</button>
	<br /><span><strong>Note : Export Layout Before Do this Action.</strong></span>
	<input type="hidden" name="lang_id_homepage" value="<?php echo $_smarty_tpl->tpl_vars['homepage']->value['id_homepage'];?>
" /> 
</form>
</div>
<div class="pagebuilder-panel">
	<div id="rowlist" class="lg-layout" data-id="<?php echo $_smarty_tpl->tpl_vars['homepage']->value['id_homepage'];?>
">
	<div class="rowlist">
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
			<div class="row" data-layout="<?php echo $_smarty_tpl->tpl_vars['row']->value->layout;?>
" data-name="<?php if (isset($_smarty_tpl->tpl_vars['row']->value->name)) {?><?php echo $_smarty_tpl->tpl_vars['row']->value->name;?>
<?php }?>"  data-custom_class="<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->custom_class)) {?><?php echo $_smarty_tpl->tpl_vars['row']->value->settings->custom_class;?>
<?php }?>" data-fluid="<?php echo $_smarty_tpl->tpl_vars['row']->value->settings->fluid;?>
" data-background_img="<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_img)) {?><?php echo $_smarty_tpl->tpl_vars['row']->value->settings->background_img;?>
<?php }?>" data-background_size="<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_size)) {?><?php echo $_smarty_tpl->tpl_vars['row']->value->settings->background_size;?>
<?php }?>" data-background_repeat="<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_repeat)) {?><?php echo $_smarty_tpl->tpl_vars['row']->value->settings->background_repeat;?>
<?php }?>" data-background_position="<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_position)) {?><?php echo $_smarty_tpl->tpl_vars['row']->value->settings->background_position;?>
<?php }?>" data-background_attachment="<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_attachment)) {?><?php echo $_smarty_tpl->tpl_vars['row']->value->settings->background_attachment;?>
<?php }?>" data-hook="<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->hook)) {?><?php echo $_smarty_tpl->tpl_vars['row']->value->settings->hook;?>
<?php }?>" data-active="<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->active)) {?><?php echo $_smarty_tpl->tpl_vars['row']->value->settings->active;?>
<?php } else { ?>1<?php }?>">
				<div class="row-title">						
					<div class="pull-left">
						<span><i class="icon-arrows"></i></span>						
						<strong class="row-name"><?php if (isset($_smarty_tpl->tpl_vars['row']->value->name)) {?><?php echo $_smarty_tpl->tpl_vars['row']->value->name;?>
<?php }?></strong>
					</div>
					<div class="pull-right">
						<ul class="button-group" role="menu" aria-labelledby="dLabel">
							<li class="layout-action">
								<a class="btn btn-default label-tooltip" data-original-title="Row Layout"><i class="icon-th"></i></a>
								<ul class="column-list">
									<li><a data-original-title="12" data-layout="12" class="column-layout label-tooltip column-layout-12" href="#"></a></li>
									<li><a data-original-title="6,6" data-layout="6,6" class="column-layout label-tooltip column-layout-66" href="#"></a></li>
									<li><a data-original-title="4,4,4" data-layout="4,4,4" class="column-layout label-tooltip column-layout-444" href="#"></a></li>
									<li><a data-original-title="3,3,3,3" data-layout="3,3,3,3" class="column-layout label-tooltip column-layout-3333" href="#"></a></li>
									<li><a data-original-title="4,8" data-layout="4,8" class="column-layout label-tooltip column-layout-48" href="#"></a></li>
									<li><a data-original-title="3,9" data-layout="3,9" class="column-layout label-tooltip column-layout-39 active" href="#"></a></li>
									<li><a data-original-title="3,6,3" data-layout="3,6,3" class="column-layout label-tooltip column-layout-363" href="#"></a></li>
									<li><a data-original-title="2,6,4" data-layout="2,6,4" class="column-layout label-tooltip column-layout-264" href="#"></a></li>
									<li><a data-original-title="2,10" data-layout="2,10" class="column-layout label-tooltip column-layout-210" href="#"></a></li>
									<li><a data-original-title="5,7" data-layout="5,7" class="column-layout label-tooltip column-layout-57" href="#"></a></li>
									<li><a data-original-title="2,3,7" data-layout="2,3,7" class="column-layout label-tooltip column-layout-237" href="#"></a></li>
									<li><a data-original-title="2,5,5" data-layout="2,5,5" class="column-layout label-tooltip column-layout-255" href="#"></a></li>
									<li><a data-original-title="2,8,2" data-layout="2,8,2" class="column-layout label-tooltip column-layout-282" href="#"></a></li>
									<li><a data-original-title="2,4,4,2" data-layout="2,4,4,2" class="column-layout label-tooltip column-layout-2442" href="#"></a></li> 
									<li><a data-original-title="Custom Layout" data-layout="custom" class="column-layout column-layout-custom label-tooltip" href="#"></a></li> 
								</ul>
							</li>
							<li>
								<a class="btn btn-default row-setting label-tooltip" data-original-title="Row Setting"><i class="icon-cogs"></i></a>
							</li>							
							<li>
							<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->active)&&$_smarty_tpl->tpl_vars['row']->value->settings->active==0) {?>
								<a class="btn btn-default active-row label-tooltip" data-original-title="Active Row"><i class="icon-remove"></i></a>
							<?php } else { ?>
								<a class="btn btn-default active-row label-tooltip" data-original-title="UnActive Row"><i class="icon-check"></i></a>
							<?php }?>		
							</li>
							<li>
								<a class="btn btn-default duplicate-row label-tooltip" data-original-title="Duplicate Row"><i class="icon-copy"></i></a>
							</li>
							<li>
								<a class="btn btn-default remove-row label-tooltip" data-original-title="Delete This Row"><i class="icon-trash"></i></a>
							</li>	
						</ul>
					</div>
				</div>	
				<div class="row-columns">
					<?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_smarty_tpl->tpl_vars['cindex'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value->cols; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
 $_smarty_tpl->tpl_vars['cindex']->value = $_smarty_tpl->tpl_vars['column']->key;
?>
						<div class="<?php echo $_smarty_tpl->tpl_vars['column']->value->className;?>
" data-custom_class="<?php if (isset($_smarty_tpl->tpl_vars['column']->value->settings->custom_class)) {?><?php echo $_smarty_tpl->tpl_vars['column']->value->settings->custom_class;?>
<?php }?>" data-md_col="<?php if (isset($_smarty_tpl->tpl_vars['column']->value->settings->md_col)) {?><?php echo $_smarty_tpl->tpl_vars['column']->value->settings->md_col;?>
<?php }?>" data-sm_col="<?php if (isset($_smarty_tpl->tpl_vars['column']->value->settings->sm_col)) {?><?php echo $_smarty_tpl->tpl_vars['column']->value->settings->sm_col;?>
<?php }?>" data-xs_col="<?php if (isset($_smarty_tpl->tpl_vars['column']->value->settings->xs_col)) {?><?php echo $_smarty_tpl->tpl_vars['column']->value->settings->xs_col;?>
<?php }?>" data-background_img="<?php if (isset($_smarty_tpl->tpl_vars['column']->value->settings->background_img)) {?><?php echo $_smarty_tpl->tpl_vars['column']->value->settings->background_img;?>
<?php }?>" data-background_size="<?php if (isset($_smarty_tpl->tpl_vars['column']->value->settings->background_size)) {?><?php echo $_smarty_tpl->tpl_vars['column']->value->settings->background_size;?>
<?php }?>" data-background_repeat="<?php if (isset($_smarty_tpl->tpl_vars['column']->value->settings->background_repeat)) {?><?php echo $_smarty_tpl->tpl_vars['column']->value->settings->background_repeat;?>
<?php }?>" data-background_position="<?php if (isset($_smarty_tpl->tpl_vars['column']->value->settings->background_position)) {?><?php echo $_smarty_tpl->tpl_vars['column']->value->settings->background_position;?>
<?php }?>" data-background_attachment="<?php if (isset($_smarty_tpl->tpl_vars['column']->value->settings->background_attachment)) {?><?php echo $_smarty_tpl->tpl_vars['column']->value->settings->background_attachment;?>
<?php }?>">
							<div class="column">
								<?php  $_smarty_tpl->tpl_vars['addon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['addon']->_loop = false;
 $_smarty_tpl->tpl_vars['aindex'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['column']->value->addons; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['addon']->key => $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->_loop = true;
 $_smarty_tpl->tpl_vars['aindex']->value = $_smarty_tpl->tpl_vars['addon']->key;
?>
									<?php echo $_smarty_tpl->tpl_vars['addon']->value->addon_box;?>

								<?php } ?>
							</div>
							<div class="col-tools">
								<a href="#" class="column-setting pull-right label-tooltip" data-original-title="Column Setting"><i class="icon-cog"></i><span>Setting</span></a>
								<a href="#" class="add-addon pull-right label-tooltip" data-original-title="Add Addons/Modules"><i class="icon-plus-circle"></i><span>Addons</span></a>
							</div>	
						</div>
					<?php } ?>
				</div>	
			</div>
		<?php } ?>		
	</div>
</div>
</div>
<input id="root_url" type="hidden" name="root_url" value="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
" />
<input id="ajax_url" type="hidden" name="ajax_url" value="<?php echo $_smarty_tpl->tpl_vars['ajax_url']->value;?>
" />
<input id="current_url" type="hidden" name="current_url" value="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderHomepages');?>
&configure=jmspagebuilder&editAddon=1" />
<input id="backend_url" type="hidden" name="backend_url" value="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderHomepages');?>
" />
<div class="hidden">
    <div id="jmspagebuilder-row">
		<div class="row" data-name="Row" data-fluid="0" data-layout="12" data-active="1">
			<div class="row-title">						
				<div class="pull-left">
					<span><i class="icon-arrows"></i></span>						
					<strong class="row-name">Row</strong>
				</div>
				<div class="pull-right">
					<ul aria-labelledby="dLabel" role="menu" class="button-group">
						<li class="layout-action">
							<a class="btn btn-default label-tooltip" data-original-title="Row Layout"><i class="icon-th"></i></a>
							<ul class="column-list">
								<li><a href="#" class="column-layout label-tooltip column-layout-12 " data-layout="12" data-original-title="12"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-66 " data-layout="6,6" data-original-title="6,6"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-444 " data-layout="4,4,4" data-original-title="4,4,4"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-3333 " data-layout="3,3,3,3" data-original-title="3,3,3,3"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-48 " data-layout="4,8" data-original-title="4,8"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-39 active" data-layout="3,9" data-original-title="3,9"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-363 " data-layout="3,6,3" data-original-title="3,6,3"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-264 " data-layout="2,6,4" data-original-title="2,6,4"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-210 " data-layout="2,10" data-original-title="2,10"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-57 " data-layout="5,7" data-original-title="5,7"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-237 " data-layout="2,3,7" data-original-title="2,3,7"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-255 " data-layout="2,5,5" data-original-title="2,5,5"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-282 " data-layout="2,8,2" data-original-title="2,8,2"></a></li>
								<li><a href="#" class="column-layout label-tooltip column-layout-2442 " data-layout="2,4,4,2" data-original-title="2,4,4,2"></a></li>                  
								<li><a data-original-title="Custom Layout" data-layout="custom" class="column-layout column-layout-custom label-tooltip" href="#"></a></li>								
							</ul>
						</li>						
						<li>
							<a class="btn btn-default row-setting label-tooltip" data-original-title="Row Setting"><i class="icon-cogs"></i></a>
						</li>						
							<a class="btn btn-default active-row label-tooltip" data-original-title="UnActive Row"><i class="icon-check"></i></a>						
						<li>
							<a class="btn btn-default duplicate-row label-tooltip" data-original-title="Duplicate Row"><i class="icon-copy"></i></a>
						</li>
						<li>
							<a class="btn btn-default remove-row label-tooltip" data-original-title="Delete This Row"><i class="icon-trash"></i></a>
						</li>	
					</ul>
				</div>
			</div>	
			<div class="row-columns">
			</div>	
		</div>
	</div>
</div>	
<div class="hidden">
	<div class="addon-box module" data-addon="module" data-modulename="" data-hook="" data-active="1">
		<i class="addon-icon module-icon"></i><span class="addon-title">Module</span>
		<div class="addon-tools">
			<a class="active-addon"><i class="icon-check"></i></a>	
			<a class="edit-addon"><i class="icon-edit"></i></a>	
			<a class="duplicate-addon"><i class="icon-copy"></i></a>	
			<a class="remove-addon"><i class="icon-trash"></i></a>				
		</div>
	</div>	
</div>
<div class="hidden">
	<div class="row-settings">
		<div class="form-group">
			<label><?php echo smartyTranslate(array('s'=>'Row Name','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</label>
			<input type="text" value="" data-attrname="name" class="form-control addon-input addon-name">
		</div>
		<div class="form-group">
			<label><?php echo smartyTranslate(array('s'=>'Hook','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</label>
			<select data-attrname="hook" class="form-control addon-input" required>
				<option value="top">Top</option>
				<option value="body" selected="selected">Body</option>
				<option value="footer">Footer</option>
			</select>
			<p class="help-block">Top : this row will show on header, Body : this row will show on Body, Footer : This row will show on Footer.</p>
		</div>
		<div class="form-group">
			<label><?php echo smartyTranslate(array('s'=>'Custom CSS Class','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</label>
			<input type="text" value="" data-attrname="custom_class" class="form-control addon-input addon-custom_class">
			<p class="help-block">use this field to add a class name and then refer to it in your css file.</p>
		</div>
		<div class="form-group">
			<div class="checkbox"><label><input type="checkbox" data-attrname="fluid" class="addon-input input-fluid"><?php echo smartyTranslate(array('s'=>'Fluid Width','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</label></div>
			<p class="help-block">Enable this option to make this row fluid. Fluid row will help you to publish full width content.</p>
		</div>
		<div class="form-group">
			<label><?php echo smartyTranslate(array('s'=>'Background Image','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</label>
			<input type="hidden" data-multilang="0" data-attrname="background_img" data-type="image" class="addon-input jms-image"><img height="100px" class="media-preview" ><a href="index.php?controller=AdminJmspagebuilderMedia" class="show-fancybox btn btn-primary" title="Select">Select</a><a class="btn btn-danger remove-media" href="#"><i class="icon-trash"></i></a>
			<p class="help-block">Set Background Image for Row</p>
		</div>	
		<div class="form-group">
			<label><?php echo smartyTranslate(array('s'=>'Background Size','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</label>
			<select data-attrname="background_size" class="form-control addon-input">
				<option value="cover">Cover</option>
				<option value="contain">Contain</option>
				<option value="inherit">Inherit</option>
			</select>
		</div>
		<div class="form-group">
			<label><?php echo smartyTranslate(array('s'=>'Background Repeat','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</label>
			<select data-attrname="background_repeat" class="form-control addon-input">
				<option value="no-repeat">No Repeat</option>
				<option value="repeat">Repeat All</option>
				<option value="repeat-x">Repeat Horizontally</option>
				<option value="repeat-y">Repeat Vertically</option>
				<option value="inherit">Inherit</option>
			</select>
		</div>
		<div class="form-group">
			<label><?php echo smartyTranslate(array('s'=>'Background Position','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</label>
			<select data-attrname="background_position" class="form-control addon-input">
				<option value="0 0">Left Top</option>
				<option value="0 50%">Left Center</option>
				<option value="0 100%">Left Bottom</option>
				<option value="50% 0">Center Top</option>
				<option value="50% 50%">Center Center</option>
				<option value="50% 100%">Center Bottom</option>
				<option value="100% 0">Right Top</option>
				<option value="100% 50%">Right Center</option>
				<option value="100% 100%">Right Bottom</option>
			</select>
		</div>
		<div class="form-group">
			<label><?php echo smartyTranslate(array('s'=>'Background Attachment','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</label>
			<select data-attrname="background_attachment" class="form-control addon-input">
				<option value="fixed">Fixed</option>
				<option value="scroll">Scroll</option>
				<option value="inherit">Inherit</option>
			</select>
		</div>	
	</div>	
</div>
<div class="hidden">
	<div class="column-settings">
		<div class="form-group">
			<label><?php echo smartyTranslate(array('s'=>'Custom CSS Class','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</label>
			<input type="text" value="" data-attrname="custom_class" class="form-control addon-input addon-custom_class">
			<p class="help-block">use this field to add a class name and then refer to it in your css file.</p>
		</div>
		<div class="form-group md_col">
			<label><?php echo smartyTranslate(array('s'=>'Medium Layout','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</label>
			<select data-attrname="md_col" class="form-control addon-input">
				<option selected="" value=""></option>
				<option value="col-md-1">col-md-1</option>
				<option value="col-md-2">col-md-2</option>
				<option value="col-md-3">col-md-3</option>
				<option value="col-md-4">col-md-4</option>
				<option value="col-md-5">col-md-5</option>
				<option value="col-md-6">col-md-6</option>
				<option value="col-md-7">col-md-7</option>
				<option value="col-md-8">col-md-8</option>
				<option value="col-md-9">col-md-9</option>
				<option value="col-md-10">col-md-10</option>
				<option value="col-md-11">col-md-11</option>
				<option value="col-md-12">col-md-12</option>
			</select>
			<p class="help-block">Set the class of this column for medium devices.</p>
		</div>
		<div class="form-group sm_col">
			<label><?php echo smartyTranslate(array('s'=>'Tablet Layout','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</label>
			<select data-attrname="sm_col" class="form-control addon-input">
				<option selected="" value=""></option>
				<option value="col-sm-1">col-sm-1</option>
				<option value="col-sm-2">col-sm-2</option>
				<option value="col-sm-3">col-sm-3</option>
				<option value="col-sm-4">col-sm-4</option>
				<option value="col-sm-5">col-sm-5</option>
				<option value="col-sm-6">col-sm-6</option>
				<option value="col-sm-7">col-sm-7</option>
				<option value="col-sm-8">col-sm-8</option>
				<option value="col-sm-9">col-sm-9</option>
				<option value="col-sm-10">col-sm-10</option>
				<option value="col-sm-11">col-sm-11</option>
				<option value="col-sm-12">col-sm-12</option>
			</select>
			<p class="help-block">Set the class of this column for tablets.</p>
		</div>
		<div class="form-group xs_col">
			<label><?php echo smartyTranslate(array('s'=>'Mobile Layout','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</label>
			<select data-attrname="xs_col" class="form-control addon-input">
				<option selected="" value=""></option>
				<option value="col-xs-1">col-xs-1</option>
				<option value="col-xs-2">col-xs-2</option>
				<option value="col-xs-3">col-xs-3</option>
				<option value="col-xs-4">col-xs-4</option>
				<option value="col-xs-5">col-xs-5</option>
				<option value="col-xs-6">col-xs-6</option>
				<option value="col-xs-7">col-xs-7</option>
				<option value="col-xs-8">col-xs-8</option>
				<option value="col-xs-9">col-xs-9</option>
				<option value="col-xs-10">col-xs-10</option>
				<option value="col-xs-11">col-xs-11</option>
				<option value="col-xs-12">col-xs-12</option>
			</select>
			<p class="help-block">Set the class of this column for mobile.</p>
		</div>
		<div class="form-group">
			<label><?php echo smartyTranslate(array('s'=>'Background Image','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</label>
			<input type="hidden" data-multilang="0" data-attrname="background_img" data-type="image" class="addon-input jms-image"><img height="100px" class="media-preview" ><a href="index.php?controller=AdminJmspagebuilderMedia" class="show-fancybox btn btn-primary" title="Select">Select</a><a class="btn btn-danger remove-media" href="#"><i class="icon-trash"></i></a>
			<p class="help-block">Set Background Image for Column</p>
		</div>	
		<div class="form-group">
			<label><?php echo smartyTranslate(array('s'=>'Background Size','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</label>
			<select data-attrname="background_size" class="form-control addon-input">
				<option value="cover">Cover</option>
				<option value="contain">Contain</option>
				<option value="inherit">Inherit</option>
			</select>
		</div>
		<div class="form-group">
			<label><?php echo smartyTranslate(array('s'=>'Background Repeat','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</label>
			<select data-attrname="background_repeat" class="form-control addon-input">
				<option value="no-repeat">No Repeat</option>
				<option value="repeat">Repeat All</option>
				<option value="repeat-x">Repeat Horizontally</option>
				<option value="repeat-y">Repeat Vertically</option>
				<option value="inherit">Inherit</option>
			</select>
		</div>
		<div class="form-group">
			<label><?php echo smartyTranslate(array('s'=>'Background Position','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</label>
			<select data-attrname="background_position" class="form-control addon-input">
				<option value="0 0">Left Top</option>
				<option value="0 50%">Left Center</option>
				<option value="0 100%">Left Bottom</option>
				<option value="50% 0">Center Top</option>
				<option value="50% 50%">Center Center</option>
				<option value="50% 100%">Center Bottom</option>
				<option value="100% 0">Right Top</option>
				<option value="100% 50%">Right Center</option>
				<option value="100% 100%">Right Bottom</option>
			</select>
		</div>
		<div class="form-group">
			<label><?php echo smartyTranslate(array('s'=>'Background Attachment','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</label>
			<select data-attrname="background_attachment" class="form-control addon-input">
				<option value="fixed">Fixed</option>
				<option value="scroll">Scroll</option>
				<option value="inherit">Inherit</option>
			</select>
		</div>
	</div>
</div>	
<div class="hidden">	
	<ul class="pagebuilder-addons clearfix">	
		<?php  $_smarty_tpl->tpl_vars['addonlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['addonlist']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['addonslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['addonlist']->key => $_smarty_tpl->tpl_vars['addonlist']->value) {
$_smarty_tpl->tpl_vars['addonlist']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['addonlist']->key;
?>
			<li class="addon-cat-addons">
				<?php echo $_smarty_tpl->tpl_vars['addonlist']->value;?>
					
			</li>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['module']->key;
?>
			<li class="addon-cat-modules">
				<a class="addon-title" data-module="<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
">			
					<img src="<?php echo $_smarty_tpl->tpl_vars['modules_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
/logo.png" />
					<span class="element-title"><?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
</span>
					<span class="element-description"><?php if (isset($_smarty_tpl->tpl_vars['module']->value['short_desc'])) {?><?php echo $_smarty_tpl->tpl_vars['module']->value['short_desc'];?>
<?php }?></span>
				</a>
			</li>
		<?php } ?>
	</ul>	
</div>	
<div class="jms-modal" id="layout-modal" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true" style="display: none;">
    <div class="jms-modal-dialog">
        <div class="jms-modal-content">
            <div class="jms-modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="jms-modal-title" id="modal-label"></h3>
            </div>
            <div class="jms-modal-body"></div>
            <div class="jms-modal-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-success pull-left" id="save-settings" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>'Apply','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</a>
                <button class="btn btn-danger pull-left" data-dismiss="modal" aria-hidden="true"><?php echo smartyTranslate(array('s'=>'Cancel','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</button>
            </div>
        </div>
    </div>
</div>
<div class="jms-modal" id="addon-modal" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true" style="display: none;">
    <div class="jms-modal-dialog">
        <div class="jms-modal-content">
            <div class="jms-modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="jms-modal-title" id="modal-label"></h3>
            </div>
            <div class="jms-modal-body"></div>
            <div class="jms-modal-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-success pull-left" id="save-addons" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>'Apply','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</a>
                <button class="btn btn-danger pull-left" data-dismiss="modal" aria-hidden="true"><?php echo smartyTranslate(array('s'=>'Cancel','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</button>
            </div>
        </div>
    </div>
</div>
<div class="jms-modal fade" id="modal-addons" tabindex="-1" role="dialog" aria-labelledby="modal-addon-label" aria-hidden="true">
	<div class="jms-modal-dialog jms-modal-xlg">
		<div class="jms-modal-content">
			<div class="jms-modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="jms-modal-title" id="modal-addons-label"><?php echo smartyTranslate(array('s'=>'Add Addon or Module','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</h3>
				<div class="addon-filter">
					<ul>
						<li data-category="all" class="active"><a href="javascript:void(0)">All</a></li>
						<li data-category="addons"><a href="javascript:void(0)">Addons</a></li>
						<li data-category="modules"><a href="javascript:void(0)">Modules</a></li>
					</ul>
				</div>				
			</div>
			<div class="jms-modal-body">
			</div>
		</div>
	</div>
</div>

<input type="hidden" name="mediatoken" id="mediatoken" value="<?php echo $_smarty_tpl->tpl_vars['mediatoken']->value;?>
" />
<form name="layoutForm" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderHomepages');?>
&configure=jmspagebuilder" method="post">
<input type="hidden" name="jmsformjson" id="jmsformjson" value="" />
<input type="hidden" name="json_home_id" value="<?php echo $_smarty_tpl->tpl_vars['homepage']->value['id_homepage'];?>
" />
<input type="hidden" name="saveLayout" value="1" />
</form>
<script type="text/javascript">
	var iso = 'en';
	var pathCSS = '<?php echo addslashes(@constant('_THEME_CSS_DIR_'));?>
';
	var ad = '<?php echo $_smarty_tpl->tpl_vars['ad']->value;?>
';

	$(document).ready(function(){
		
			tinySetup({
				mode : "textareas",
				editor_selector :"jms_editor",
				relative_urls : false,
				remove_script_host : false,
				convert_urls : <?php if ($_smarty_tpl->tpl_vars['converturl']->value) {?>true<?php } else { ?>false<?php }?>,
				document_base_url : "<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
"
			});
		
	});	
	$(document).ready(function(){
		$('body').addClass('page-sidebar-closed');
	});		
</script><?php }} ?>
