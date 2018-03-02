<?php /* Smarty version Smarty-3.1.19, created on 2018-03-02 03:58:29
         compiled from "D:\xampp\htdocs\jms_watch\modules\ps_facetedsearch\views\templates\admin\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83445a98cbe5476180-15655697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '376d5df69b8367da0f8cc2dd99d62bdb416f437a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\modules\\ps_facetedsearch\\views\\templates\\admin\\view.tpl',
      1 => 1508746796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83445a98cbe5476180-15655697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'limit_warning' => 0,
    'price_indexer_url' => 0,
    'full_price_indexer_url' => 0,
    'attribute_indexer_url' => 0,
    'filters_templates' => 0,
    'template' => 0,
    'current_url' => 0,
    'show_quantities' => 0,
    'full_tree' => 0,
    'category_depth' => 0,
    'price_use_tax' => 0,
    'price_use_rounding' => 0,
    'PS_LAYERED_INDEXED' => 0,
    'token' => 0,
    'id_lang' => 0,
    'base_folder' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a98cbe555c931_50484887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a98cbe555c931_50484887')) {function content_5a98cbe555c931_50484887($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php }?>
<div id="ajax-message-ok" class="conf ajax-message alert alert-success" style="display: none">
	<span class="message"></span>
</div>
<div id="ajax-message-ko" class="error ajax-message alert alert-danger" style="display: none">
	<span class="message"></span>
</div>
<?php if (!empty($_smarty_tpl->tpl_vars['limit_warning']->value)) {?>
	<div class="alert alert-danger">
		<?php if ($_smarty_tpl->tpl_vars['limit_warning']->value['error_type']=='suhosin') {?>
			<?php echo smartyTranslate(array('s'=>'Warning! Your hosting provider is using the Suhosin patch for PHP, which limits the maximum number of fields allowed in a form:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>


			<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['post.max_vars'];?>
</b> <?php echo smartyTranslate(array('s'=>'for suhosin.post.max_vars.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
<br/>
			<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['request.max_vars'];?>
</b> <?php echo smartyTranslate(array('s'=>'for suhosin.request.max_vars.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
<br/>
			<?php echo smartyTranslate(array('s'=>'Please ask your hosting provider to increase the Suhosin limit to','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>

		<?php } else { ?>
			<?php echo smartyTranslate(array('s'=>'Warning! Your PHP configuration limits the maximum number of fields allowed in a form:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
<br/>
			<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['max_input_vars'];?>
</b> <?php echo smartyTranslate(array('s'=>'for max_input_vars.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
<br/>
			<?php echo smartyTranslate(array('s'=>'Please ask your hosting provider to increase this limit to','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>

		<?php }?>
		<?php echo smartyTranslate(array('s'=>'%s at least, or you will have to edit the translation files manually.','sprintf'=>$_smarty_tpl->tpl_vars['limit_warning']->value['needed_limit'],'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>

	</div>
<?php }?>
<div class="panel">
	<h3><i class="icon-cogs"></i> <?php echo smartyTranslate(array('s'=>'Indexes and caches','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
</h3>
	<div id="indexing-warning" class="alert alert-warning" style="display: none">
		<?php echo smartyTranslate(array('s'=>'Indexing is in progress. Please do not leave this page','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>

	</div>
	<div class="row">
		<p>
			<a class="ajaxcall-recurcive btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['price_indexer_url']->value;?>
"><?php echo smartyTranslate(array('s'=>'Index all missing prices','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
</a>
			<a class="ajaxcall-recurcive btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['full_price_indexer_url']->value;?>
"><?php echo smartyTranslate(array('s'=>'Rebuild entire price index','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
</a>
			<a class="ajaxcall btn btn-default" id="attribute-indexer" rel="attribute" href="<?php echo $_smarty_tpl->tpl_vars['attribute_indexer_url']->value;?>
"><?php echo smartyTranslate(array('s'=>'Build attribute index','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
</a>
		</p>
	</div>
	<div class="row">
		<div class="alert alert-info">
			<?php echo smartyTranslate(array('s'=>'You can set a cron job that will rebuild price index using the following URL:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>

			<br>
			<strong><?php echo $_smarty_tpl->tpl_vars['price_indexer_url']->value;?>
</strong>
			<br>
			<br>
			<?php echo smartyTranslate(array('s'=>'You can set a cron job that will rebuild attribute index using the following URL:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>

			<br>
			<strong><?php echo $_smarty_tpl->tpl_vars['attribute_indexer_url']->value;?>
</strong>
		</div>
	</div>
	<div class="row">
		<div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'A nightly rebuild is recommended.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
</div>
	</div>
</div>
<div class="panel">
	<h3><i class="icon-cogs"></i> <?php echo smartyTranslate(array('s'=>'Filters templates','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
<span class="badge"><?php echo count($_smarty_tpl->tpl_vars['filters_templates']->value);?>
</span></h3>
	<?php if (count($_smarty_tpl->tpl_vars['filters_templates']->value)>0) {?>
	<div class="row">
		<table class="table">
			<thead>
				<tr>
					<th class="fixed-width-xs center"><span class="title_box"><?php echo smartyTranslate(array('s'=>'ID','d'=>'Admin.Global'),$_smarty_tpl);?>
</span></th>
					<th><span class="title_box text-left"><?php echo smartyTranslate(array('s'=>'Name','d'=>'Admin.Global'),$_smarty_tpl);?>
</span></th>
					<th class="fixed-width-sm center"><span class="title_box"><?php echo smartyTranslate(array('s'=>'Categories','d'=>'Admin.Global'),$_smarty_tpl);?>
</span></th>
					<th class="fixed-width-lg"><span class="title_box"><?php echo smartyTranslate(array('s'=>'Created on','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
</span></th>
					<th class="fixed-width-sm"><span class="title_box text-right"><?php echo smartyTranslate(array('s'=>'Actions','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
</span></th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters_templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->_loop = true;
?>
				<tr>
					<td class="center"><?php echo (int)$_smarty_tpl->tpl_vars['template']->value['id_layered_filter'];?>
</td>
					<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
</td>
					<td class="center"><?php echo (int)$_smarty_tpl->tpl_vars['template']->value['n_categories'];?>
</td>
					<td><?php echo Tools::displayDate($_smarty_tpl->tpl_vars['template']->value['date_add'],null,true);?>
</td>
					<td>
						<?php if (empty($_smarty_tpl->tpl_vars['limit_warning']->value)) {?>
						<div class="btn-group-action">
							<div class="btn-group pull-right">
								<a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
&amp;edit_filters_template=1&amp;id_layered_filter=<?php echo (int)$_smarty_tpl->tpl_vars['template']->value['id_layered_filter'];?>
" class="btn btn-default">
									<i class="icon-pencil"></i> <?php echo smartyTranslate(array('s'=>'Edit','d'=>'Admin.Actions'),$_smarty_tpl);?>

								</a>
								<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<span class="caret"></span>&nbsp;
								</button>
								<ul class="dropdown-menu">
									<li>
										<a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
&amp;deleteFilterTemplate=1&amp;id_layered_filter=<?php echo (int)$_smarty_tpl->tpl_vars['template']->value['id_layered_filter'];?>
"
						onclick="return confirm('<?php echo smartyTranslate(array('s'=>'Do you really want to delete this filter template?','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
');">
											<i class="icon-trash"></i> <?php echo smartyTranslate(array('s'=>'Delete','d'=>'Admin.Actions'),$_smarty_tpl);?>

										</a>
									</li>
								</ul>
							</div>
						</div>
						<?php }?>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<div class="clearfix">&nbsp;</div>
	</div>
	<?php } else { ?>
		<div class="row alert alert-warning"><?php echo smartyTranslate(array('s'=>'No filter template found.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
</div>
	<?php }?>
	<?php if (empty($_smarty_tpl->tpl_vars['limit_warning']->value)) {?>
	<div class="panel-footer">
		<a class="btn btn-default pull-right" href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
&amp;add_new_filters_template=1"><i class="process-icon-plus"></i> <?php echo smartyTranslate(array('s'=>'Add new template','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
</a>
	</div>
	<?php }?>
</div>
<div class="panel">
	<h3><i class="icon-cogs"></i> <?php echo smartyTranslate(array('s'=>'Configuration','d'=>'Admin.Global'),$_smarty_tpl);?>
</h3>
	<form action="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
" method="post" class="form-horizontal">
		<div class="form-group">
			<label class="col-lg-3 control-label"><?php echo smartyTranslate(array('s'=>'Show the number of matching products','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" name="ps_layered_show_qties" id="ps_layered_show_qties_on" value="1"<?php if ($_smarty_tpl->tpl_vars['show_quantities']->value) {?> checked="checked"<?php }?>>
					<label for="ps_layered_show_qties_on" class="radioCheck">
						<i class="color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl);?>

					</label>
					<input type="radio" name="ps_layered_show_qties" id="ps_layered_show_qties_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['show_quantities']->value) {?> checked="checked"<?php }?>>
					<label for="ps_layered_show_qties_off" class="radioCheck">
						<i class="color_danger"></i> <?php echo smartyTranslate(array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl);?>

					</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-3 control-label"><?php echo smartyTranslate(array('s'=>'Show products from subcategories','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" name="ps_layered_full_tree" id="ps_layered_full_tree_on" value="1"<?php if ($_smarty_tpl->tpl_vars['full_tree']->value) {?> checked="checked"<?php }?>>
					<label for="ps_layered_full_tree_on" class="radioCheck">
						<i class="color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl);?>

					</label>
					<input type="radio" name="ps_layered_full_tree" id="ps_layered_full_tree_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['full_tree']->value) {?> checked="checked"<?php }?>>
					<label for="ps_layered_full_tree_off" class="radioCheck">
						<i class="color_danger"></i> <?php echo smartyTranslate(array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl);?>

					</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-3 control-label"><?php echo smartyTranslate(array('s'=>'Category filter depth (0 for no limits, 1 by default)','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<input type="text" name="ps_layered_filter_category_depth" value="<?php if ($_smarty_tpl->tpl_vars['category_depth']->value!==false) {?><?php echo $_smarty_tpl->tpl_vars['category_depth']->value;?>
<?php } else { ?>1<?php }?>" class="fixed-width-sm" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-3 control-label"><?php echo smartyTranslate(array('s'=>'Use tax to filter price','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" name="ps_layered_filter_price_usetax" id="ps_layered_filter_price_usetax_on" value="1"<?php if ($_smarty_tpl->tpl_vars['price_use_tax']->value) {?> checked="checked"<?php }?>>
					<label for="ps_layered_filter_price_usetax_on" class="radioCheck">
						<i class="color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl);?>

					</label>
					<input type="radio" name="ps_layered_filter_price_usetax" id="ps_layered_filter_price_usetax_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['price_use_tax']->value) {?> checked="checked"<?php }?>>
					<label for="ps_layered_filter_price_usetax_off" class="radioCheck">
						<i class="color_danger"></i> <?php echo smartyTranslate(array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl);?>

					</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-3 control-label"><?php echo smartyTranslate(array('s'=>'Use rounding to filter price','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" name="ps_layered_filter_price_rounding" id="ps_layered_filter_price_rounding_on" value="1"<?php if ($_smarty_tpl->tpl_vars['price_use_rounding']->value) {?> checked="checked"<?php }?>/>
					<label for="ps_layered_filter_price_rounding_on" class="radioCheck">
						<i class="color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl);?>

					</label>
					<input type="radio" name="ps_layered_filter_price_rounding" id="ps_layered_filter_price_rounding_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['price_use_rounding']->value) {?> checked="checked"<?php }?>/>
					<label for="ps_layered_filter_price_rounding_off" class="radioCheck">
						<i class="color_danger"></i> <?php echo smartyTranslate(array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl);?>

					</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
		<div class="panel-footer">
			<button type="submit" class="btn btn-default pull-right" name="submitLayeredSettings"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','d'=>'Admin.Actions'),$_smarty_tpl);?>
</button>
		</div>
	</form>
</div>

<script type="text/javascript">
	<?php if (isset($_smarty_tpl->tpl_vars['PS_LAYERED_INDEXED']->value)) {?>var PS_LAYERED_INDEXED = <?php echo $_smarty_tpl->tpl_vars['PS_LAYERED_INDEXED']->value;?>
;<?php }?>
	var token = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';
	var id_lang = <?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
;
	var base_folder = '<?php echo $_smarty_tpl->tpl_vars['base_folder']->value;?>
';
	var translations = new Array();

	translations['in_progress'] = '<?php echo smartyTranslate(array('s'=>'(in progress)','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
';
	translations['url_indexation_finished'] = '<?php echo smartyTranslate(array('s'=>'URL indexing finished','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
';
	translations['attribute_indexation_finished'] = '<?php echo smartyTranslate(array('s'=>'Attribute indexing finished','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
';
	translations['url_indexation_failed'] = '<?php echo smartyTranslate(array('s'=>'URL indexing failed','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
';
	translations['attribute_indexation_failed'] = '<?php echo smartyTranslate(array('s'=>'Attribute indexing failed','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
';
	translations['price_indexation_finished'] = '<?php echo smartyTranslate(array('s'=>'Price indexing finished','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
';
	translations['price_indexation_failed'] = '<?php echo smartyTranslate(array('s'=>'Price indexing failed','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
';
	translations['price_indexation_in_progress'] = '<?php echo smartyTranslate(array('s'=>'(in progress, %s products price to index)','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
';
	translations['loading'] = '<?php echo smartyTranslate(array('s'=>'Loading...','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
';
	translations['delete_all_filters_templates'] = '<?php echo smartyTranslate(array('s'=>'You selected -All categories-: all existing filter templates will be deleted. Is it OK?','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
';
	translations['no_selected_categories'] = '<?php echo smartyTranslate(array('s'=>'You must select at least one category','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl);?>
';
</script>
<?php }} ?>
