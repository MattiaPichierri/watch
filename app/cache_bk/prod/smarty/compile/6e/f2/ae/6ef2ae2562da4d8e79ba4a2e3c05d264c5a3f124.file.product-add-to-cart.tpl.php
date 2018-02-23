<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 02:42:53
         compiled from "D:\xampp\htdocs\jms_fluent\themes\jms_fluent\templates\catalog\_partials\product-add-to-cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18215a73d02dd60788-20832799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ef2ae2562da4d8e79ba4a2e3c05d264c5a3f124' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_fluent\\themes\\jms_fluent\\templates\\catalog\\_partials\\product-add-to-cart.tpl',
      1 => 1516090206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18215a73d02dd60788-20832799',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'configuration' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a73d02dd87886_78116406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73d02dd87886_78116406')) {function content_5a73d02dd87886_78116406($_smarty_tpl) {?>
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
