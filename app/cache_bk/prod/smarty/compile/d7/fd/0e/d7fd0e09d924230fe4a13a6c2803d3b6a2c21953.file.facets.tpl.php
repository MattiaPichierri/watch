<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 02:43:13
         compiled from "D:\xampp\htdocs\jms_fluent\themes\jms_fluent\templates\catalog\_partials\facets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:315845a73d0418fd124-47397949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7fd0e09d924230fe4a13a6c2803d3b6a2c21953' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_fluent\\themes\\jms_fluent\\templates\\catalog\\_partials\\facets.tpl',
      1 => 1517215834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315845a73d0418fd124-47397949',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'clear_all_link' => 0,
    'facets' => 0,
    'facet' => 0,
    'filter' => 0,
    '_expand_id' => 0,
    '_collapse' => 0,
    'js_enabled' => 0,
    'sort_order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a73d041a0e823_75214209',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73d041a0e823_75214209')) {function content_5a73d041a0e823_75214209($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\xampp\\htdocs\\jms_fluent\\vendor\\prestashop\\smarty\\plugins\\modifier.replace.php';
?>
  <div id="search_filters">
	<div class="filter-box">
		<div class="box-title title-block">
			<h3 class="hidden-sm-down"><?php echo smartyTranslate(array('s'=>'Filter By','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</h3>
		</div>
		<div id="_desktop_search_filters_clear_all" class="hidden-sm-down clear-all-wrapper">
		  <button data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['clear_all_link']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn-default btn-tertiary js-search-filters-clear-all button-small btn-effect btn-active">
				<?php echo smartyTranslate(array('s'=>'Clear all','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

		  </button>
		</div>
	</div>
    <?php  $_smarty_tpl->tpl_vars["facet"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["facet"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['facets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["facet"]->key => $_smarty_tpl->tpl_vars["facet"]->value) {
$_smarty_tpl->tpl_vars["facet"]->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['facet']->value['displayed']) {?>
        <section class="facet <?php echo htmlspecialchars(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['facet']->value['label'], 'UTF-8'),' ',''), ENT_QUOTES, 'UTF-8');?>
">
          <h4 class="facet-title hidden-sm-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
</h4>
          <?php $_smarty_tpl->tpl_vars['_expand_id'] = new Smarty_variable(mt_rand(10,100000), null, 0);?>
          <?php $_smarty_tpl->tpl_vars['_collapse'] = new Smarty_variable(true, null, 0);?>
          <?php  $_smarty_tpl->tpl_vars["filter"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filter"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['facet']->value['filters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filter"]->key => $_smarty_tpl->tpl_vars["filter"]->value) {
$_smarty_tpl->tpl_vars["filter"]->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?><?php $_smarty_tpl->tpl_vars['_collapse'] = new Smarty_variable(false, null, 0);?><?php }?>
          <?php } ?>
          <?php if ($_smarty_tpl->tpl_vars['facet']->value['widgetType']!=='dropdown') {?>
			<div class="flex-box">
				<ul id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?>">
              <?php  $_smarty_tpl->tpl_vars["filter"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filter"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['facet']->value['filters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filter"]->key => $_smarty_tpl->tpl_vars["filter"]->value) {
$_smarty_tpl->tpl_vars["filter"]->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['filter']->value['displayed']) {?>
                  <li <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color'])) {?>class="color-style"<?php }?>>
                    <label class="facet-label<?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> active <?php }?>">
                      <?php if ($_smarty_tpl->tpl_vars['facet']->value['multipleSelectionAllowed']) {?>
                        <span class="custom-checkbox">
                          <input
                            data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                            type="checkbox"
                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> checked <?php }?>
                          >
                              <span class="checkbox-color <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>
" style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>
"></span>

                          <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color'])) {?>
                            <span class="color" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['properties']['color'], ENT_QUOTES, 'UTF-8');?>
"></span>
                            <?php } elseif (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'])) {?>
                              <span class="color texture" style="background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'], ENT_QUOTES, 'UTF-8');?>
)"></span>
                            <?php } else { ?>
                            <span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>></span>
                          <?php }?>
						  
                        </span>
                      <?php } else { ?>
                        <span class="custom-checkbox">
                          <input
                            data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                            type="radio"
                            name="filter <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> checked <?php }?>
                          >
                          <span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>></span>
                        </span>
                      <?php }?>
                          <a
                              href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                              class="_gray-darker search-link js-search-link <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>
"
                              rel="nofollow"
                          >
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>


						<?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude']) {?>
                          <span class="magnitude">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)</span>
                        <?php }?>

                      </a>
                    </label>
                  </li>
                <?php }?>
              <?php } ?>
            </ul>
			</div>
          <?php } else { ?>
            <form>
              <input type="hidden" name="order" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_order']->value, ENT_QUOTES, 'UTF-8');?>
">
              <select name="q">
                <option disabled selected hidden><?php echo smartyTranslate(array('s'=>'(no filter)','d'=>'Shop.Theme'),$_smarty_tpl);?>
</option>
                <?php  $_smarty_tpl->tpl_vars["filter"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filter"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['facet']->value['filters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filter"]->key => $_smarty_tpl->tpl_vars["filter"]->value) {
$_smarty_tpl->tpl_vars["filter"]->_loop = true;
?>
                  <?php if ($_smarty_tpl->tpl_vars['filter']->value['displayed']) {?>
                    <option
                      <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                        selected
                        value="<?php echo htmlspecialchars($_GET['q'], ENT_QUOTES, 'UTF-8');?>
"
                      <?php } else { ?>
                        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacets'], ENT_QUOTES, 'UTF-8');?>
"
                      <?php }?>
                    >
                      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                      <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude']) {?>
                        (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)
                      <?php }?>
                    </option>
                  <?php }?>
                <?php } ?>
              </select>
              <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?>
                <button class="ps-hidden-by-js" type="submit">
                  <?php echo smartyTranslate(array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

                </button>
              <?php }?>
            </form>
          <?php }?>
        </section>
      <?php }?>
    <?php } ?>
  </div>
<?php }} ?>
