<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 02:38:52
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\templates\catalog\_partials\quickview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28905a8f7ebcc29d58-49237987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1cef9d8d43afa87bd3e36633f7dfb33863c1ca0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\templates\\catalog\\_partials\\quickview.tpl',
      1 => 1516090206,
      2 => 'file',
    ),
    'e4c703b3938e800743f792200deb8c2c60f2c573' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\templates\\catalog\\_partials\\product-cover-thumbnails.tpl',
      1 => 1517887881,
      2 => 'file',
    ),
    '1aea71526c62e2d59ab9fad737ced97bedabd92f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\templates\\catalog\\_partials\\product-prices.tpl',
      1 => 1516090206,
      2 => 'file',
    ),
    'a4152b7827600e8f76ccddab4fe5ad1049197f77' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\templates\\catalog\\_partials\\product-variants.tpl',
      1 => 1518152186,
      2 => 'file',
    ),
    'aaaccd6c2d9bd386cb7db026768b93567b33c4bd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\templates\\catalog\\_partials\\product-add-to-cart.tpl',
      1 => 1516090206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28905a8f7ebcc29d58-49237987',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'urls' => 0,
    'static_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8f7ebcdf4d31_41012234',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8f7ebcdf4d31_41012234')) {function content_5a8f7ebcdf4d31_41012234($_smarty_tpl) {?>
<div id="quickview-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" class="modal fade quickview" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog cover_product1 container" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
      <div class="row">
        <div class="col-md-6 col-sm-6 hidden-xs-down left">
          
            <?php /*  Call merged included template "catalog/_partials/product-cover-thumbnails.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '28905a8f7ebcc29d58-49237987');
content_5a8f7ebcc8b7e2_72532177($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-cover-thumbnails.tpl" */?>
          
        </div>
		
        <div class="col-md-6 col-sm-6 right">
          <h2 class="product-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h2>
		  
					<?php /*  Call merged included template "catalog/_partials/product-prices.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '28905a8f7ebcc29d58-49237987');
content_5a8f7ebcccfda8_30902336($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-prices.tpl" */?>
		  
          
            <div id="product-description-short" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
          
		 <ul class="other-info">
						<?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {?>
												<!-- number of item in stock -->
						<li id="product_reference">
							<label><?php echo smartyTranslate(array('s'=>'Product Code:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</label>
							<span class="editable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</span>
						</li>
						<?php }?>
						<li id="pQuantityAvailable">
							<label><?php echo smartyTranslate(array('s'=>'Quantity:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</label>
							<span id="quantityAvailable"><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['quantity']), ENT_QUOTES, 'UTF-8');?>
</span>
							<span <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']>1) {?> style="display: none;"<?php }?>><?php echo smartyTranslate(array('s'=>'Item','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</span>
							<span <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']==1) {?> style="display: none;"<?php }?>><?php echo smartyTranslate(array('s'=>'Items','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</span>
						</li>
												<!-- availability or doesntExist -->
						<li id="availability_statut">
							<label id="availability_label">
								<?php echo smartyTranslate(array('s'=>'Availability:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

							</label>
							<span id="availability_value" class="label-availability">
								<?php if (intval($_smarty_tpl->tpl_vars['product']->value['quantity'])<=0) {?>
									<?php echo smartyTranslate(array('s'=>'Out stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

								<?php } else { ?>
									<?php echo smartyTranslate(array('s'=>'In stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

								<?php }?>
							</span>
						</li>
						<li>
						<?php if ($_smarty_tpl->tpl_vars['product']->value['additional_shipping_cost']>0) {?>
							<label><?php echo smartyTranslate(array('s'=>'Shipping tax: '),$_smarty_tpl);?>
</label>
								<span class="shipping_cost"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['additional_shipping_cost'], ENT_QUOTES, 'UTF-8');?>
</span>
						<?php } else { ?>
							<label><?php echo smartyTranslate(array('s'=>'Shipping tax:'),$_smarty_tpl);?>
</label><span class="shipping_cost"><?php echo smartyTranslate(array('s'=>' Free'),$_smarty_tpl);?>
</span>
						<?php }?>
					</li>
	   </ul>
	   
          
            <div class="product-actions">
              <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">
                
                  <?php /*  Call merged included template "catalog/_partials/product-variants.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '28905a8f7ebcc29d58-49237987');
content_5a8f7ebcd4ecf8_69447543($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-variants.tpl" */?>
                
				
                
                  <?php /*  Call merged included template "catalog/_partials/product-add-to-cart.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '28905a8f7ebcc29d58-49237987');
content_5a8f7ebcdba3b3_86709470($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-add-to-cart.tpl" */?>
                
                
                
                  <input class="product-refresh" data-url-update="false" name="refresh" type="submit" value="<?php echo smartyTranslate(array('s'=>'Refresh','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
" hidden>
                
				
            </form>
          </div>
		  <div class="modal-footer">
		   <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

		  </div>
        
        </div>
      </div>
     </div>
     
   </div>
 </div>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 02:38:52
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\templates\catalog\_partials\product-cover-thumbnails.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a8f7ebcc8b7e2_72532177')) {function content_5a8f7ebcc8b7e2_72532177($_smarty_tpl) {?>
<div class="images-container">
  
    <div class="product-cover">
      <img class="js-qv-product-cover" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" style="width:100%;" itemprop="image">
      <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
        <i class="material-icons zoom-in">&#xE8FF;</i>
      </div>
    </div>
  

  
    <div class="js-qv-mask mask">
      <ul class="product-images js-qv-product-images">
        <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
          <li class="thumb-container">
            <img
              class="thumb js-thumb <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image']==$_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> selected <?php }?>"
              data-image-medium-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
              data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
              src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
              alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
              title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
              width="100"
              itemprop="image"
            >
          </li>
        <?php } ?>
      </ul>
    </div>
  
</div>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterProductThumbs'),$_smarty_tpl);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 02:38:52
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\templates\catalog\_partials\product-prices.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a8f7ebcccfda8_30902336')) {function content_5a8f7ebcccfda8_30902336($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
   <div class="product-prices content_price">
	
      <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>

          <span class="price old"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
      <?php }?>
    
	 <span itemprop="price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
" class="price new"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
    
      <div
        class="product-price h5 <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>has-discount<?php }?>"
        itemprop="offers"
        itemscope
        itemtype="https://schema.org/Offer"
      >
        <link itemprop="availability" href="https://schema.org/InStock"/>
        <meta itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
        
          <?php if ($_smarty_tpl->tpl_vars['displayUnitPrice']->value) {?>
            <p class="product-unit-price sub"><?php echo smartyTranslate(array('s'=>'(%unit_price%)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%unit_price%'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_full'])),$_smarty_tpl);?>
</p>
          <?php }?>
        
      </div>
    

    
      <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==2) {?>
        <p class="product-without-taxes"><?php echo smartyTranslate(array('s'=>'%price% tax excl.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc'])),$_smarty_tpl);?>
</p>
      <?php }?>
    

    
      <?php if ($_smarty_tpl->tpl_vars['displayPackPrice']->value) {?>
        <p class="product-pack-price"><span><?php echo smartyTranslate(array('s'=>'Instead of %price%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['noPackPrice']->value)),$_smarty_tpl);?>
</span></p>
      <?php }?>
    

    
      <?php if ($_smarty_tpl->tpl_vars['product']->value['ecotax']['amount']>0) {?>
        <p class="price-ecotax"><?php echo smartyTranslate(array('s'=>'Including %amount% for ecotax','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['ecotax']['value'])),$_smarty_tpl);?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
            <?php echo smartyTranslate(array('s'=>'(not impacted by the discount)','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

          <?php }?>
        </p>
      <?php }?>
    

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight",'hook_origin'=>'product_sheet'),$_smarty_tpl);?>

  </div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 02:38:52
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\templates\catalog\_partials\product-variants.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a8f7ebcd4ecf8_69447543')) {function content_5a8f7ebcd4ecf8_69447543($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\xampp\\htdocs\\jms_watch\\vendor\\prestashop\\smarty\\plugins\\modifier.replace.php';
?>
 <div class="product-variants">
  <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['id_attribute_group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['id_attribute_group']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
    <div class="clearfix product-variants-item <?php echo htmlspecialchars(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['group']->value['name'], 'UTF-8'),' ',''), ENT_QUOTES, 'UTF-8');?>
">
      <span class="control-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
      <?php if ($_smarty_tpl->tpl_vars['group']->value['group_type']=='select') {?>
        <select
          id="group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
"
          data-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
"
          name="group[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
]">
          <?php  $_smarty_tpl->tpl_vars['group_attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_attribute']->_loop = false;
 $_smarty_tpl->tpl_vars['id_attribute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_attribute']->key => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->_loop = true;
 $_smarty_tpl->tpl_vars['id_attribute']->value = $_smarty_tpl->tpl_vars['group_attribute']->key;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
          <?php } ?>
        </select>
      <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_type']=='color') {?>
        <ul id="group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
">
          <?php  $_smarty_tpl->tpl_vars['group_attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_attribute']->_loop = false;
 $_smarty_tpl->tpl_vars['id_attribute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_attribute']->key => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->_loop = true;
 $_smarty_tpl->tpl_vars['id_attribute']->value = $_smarty_tpl->tpl_vars['group_attribute']->key;
?>
            <li class="pull-xs-left input-container">
              <input class="input-color" type="radio" data-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
" name="group[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> checked="checked"<?php }?>>
              <span class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['html_color_code']) {?>class="color" style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['html_color_code'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['texture']) {?>class="color texture" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['texture'], ENT_QUOTES, 'UTF-8');?>
)" <?php }?>
              ><span class="sr-only"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></span>
            </li>
          <?php } ?>
        </ul>
      <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_type']=='radio') {?>
        <ul id="group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
">
          <?php  $_smarty_tpl->tpl_vars['group_attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_attribute']->_loop = false;
 $_smarty_tpl->tpl_vars['id_attribute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_attribute']->key => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->_loop = true;
 $_smarty_tpl->tpl_vars['id_attribute']->value = $_smarty_tpl->tpl_vars['group_attribute']->key;
?>
            <li class="input-container pull-xs-left">
              <input class="input-radio" type="radio" data-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
" name="group[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> checked="checked"<?php }?>>
              <span class="radio-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
            </li>
          <?php } ?>
        </ul>
      <?php }?>
    </div>
  <?php } ?>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 02:38:52
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\templates\catalog\_partials\product-add-to-cart.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a8f7ebcdba3b3_86709470')) {function content_5a8f7ebcdba3b3_86709470($_smarty_tpl) {?>
<div class="product-add-to-cart">
  <?php if (isset($_smarty_tpl->tpl_vars['configuration']->value['is_catalog'])&&!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
    
      <div class="product-quantity">
			<div class="qty">
			  <input
				type="text"
				name="qty"
				id="quantity_wanted"
				value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_wanted'], ENT_QUOTES, 'UTF-8');?>
"
				class="input-group"
				min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
			  />
			</div>
        <div class="add">
			
				<button class="btn-effect add-to-cart btn-default btn-active" data-button-action="add-to-cart" type="submit" <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>disabled<?php }?>>
					  <span class="text-addcart"><?php echo smartyTranslate(array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
	</span>		
					  <span class="text-outofstock"><?php echo smartyTranslate(array('s'=>'Sold out','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
				</button>
			
				
				  <span id="product-availability">
					<?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability']&&$_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
					  <?php if ($_smarty_tpl->tpl_vars['product']->value['availability']=='available') {?>
						<i class="material-icons product-available">&#xE5CA;</i>
					  <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability']=='last_remaining_items') {?>
						<i class="material-icons product-last-items">&#xE002;</i>
					  <?php } else { ?>
						<i class="material-icons product-unavailable">&#xE14B;</i>
					  <?php }?>
					  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

					<?php }?>
				  </span>
				
			
        </div>
      </div>
      <div class="clearfix"></div>
    

    
      <p class="product-minimal-quantity">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']>1) {?>
          <?php echo smartyTranslate(array('s'=>'The minimum purchase order quantity for the product is %quantity%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%quantity%'=>$_smarty_tpl->tpl_vars['product']->value['minimal_quantity'])),$_smarty_tpl);?>

        <?php }?>
      </p>
    
  <?php }?>
</div>
<?php }} ?>
