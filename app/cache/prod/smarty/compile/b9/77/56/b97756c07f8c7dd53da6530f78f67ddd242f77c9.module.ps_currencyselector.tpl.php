<?php /* Smarty version Smarty-3.1.19, created on 2018-03-13 09:55:42
         compiled from "module:ps_currencyselector/ps_currencyselector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:291355aa7a01e7758d4-89873657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b97756c07f8c7dd53da6530f78f67ddd242f77c9' => 
    array (
      0 => 'module:ps_currencyselector/ps_currencyselector.tpl',
      1 => 1519786661,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '291355aa7a01e7758d4-89873657',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jpb_homepage' => 0,
    'currencies' => 0,
    'currency' => 0,
    'current_currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa7a01e7b0262_58214481',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa7a01e7b0262_58214481')) {function content_5aa7a01e7b0262_58214481($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['jpb_homepage']->value==1||$_smarty_tpl->tpl_vars['jpb_homepage']->value==6) {?>
	<div id="_desktop_currency_selector" class="btn-group compact-hidden currency-info">
		<span class="btn-name"><?php echo smartyTranslate(array('s'=>'Select Currency','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
		<ul class="curentry-list">
			
			<?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
				<li <?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> class="current" <?php }?>>
				  <a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
</a>
				</li>
           <?php } ?>
		</ul>
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['jpb_homepage']->value==4||$_smarty_tpl->tpl_vars['jpb_homepage']->value==7) {?>
	<div id="_desktop_currency_selector" class="btn-group compact-hidden currency-info">
	   <a href="#"  class="btn-xs dropdown-toggle" data-toggle="dropdown">
			<span class="btn-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
</span>
		</a>
		<ul class="dropdown-menu hidden-sm-down" aria-labelledby="currency-selector-label">
			
			<?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
				<li <?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> class="current" <?php }?>>
				  <a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item">
                 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
</a>
				</li>
           <?php } ?>
		</ul>
	</div>
<?php } else { ?>
	
	<div id="_desktop_currency_selector" class="btn-group compact-hidden currency-info">
		<span class="btn-name"><?php echo smartyTranslate(array('s'=>'Currency','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>	
		 <ul>
      <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
        <li <?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> class="current" <?php }?>>
          <a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
</a>
        </li>
      <?php } ?>
    </ul>
	</div>
	
<?php }?>
<?php }} ?>
