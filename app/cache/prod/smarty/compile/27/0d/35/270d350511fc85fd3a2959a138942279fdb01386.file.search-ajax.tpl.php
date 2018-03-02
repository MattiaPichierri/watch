<?php /* Smarty version Smarty-3.1.19, created on 2018-03-01 03:56:05
         compiled from "D:\xampp\htdocs\jms_watch\modules\jmsajaxsearch\views\templates\hook\search-ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:293965a9779d5960bb2-00119181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '270d350511fc85fd3a2959a138942279fdb01386' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\modules\\jmsajaxsearch\\views\\templates\\hook\\search-ajax.tpl',
      1 => 1516090197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '293965a9779d5960bb2-00119181',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'show_image' => 0,
    'product' => 0,
    'link' => 0,
    'show_desc' => 0,
    'desc_count' => 0,
    'show_price' => 0,
    'no_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9779d59be7d1_20580203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9779d59be7d1_20580203')) {function content_5a9779d59be7d1_20580203($_smarty_tpl) {?>
<div class="result_div">
    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <div class="results">
            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                <div class="item clearfix">     
					<?php if ($_smarty_tpl->tpl_vars['show_image']->value==1) {?>
                    <div class="left-img">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" class="product_image">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['id_image'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" class="img-responsive" />
                        </a>
                    </div>
					<?php }?>	
                    <div class="right-info">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
">
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],35,'...');?>

                        </a>
                        <?php if ($_smarty_tpl->tpl_vars['show_desc']->value==1) {?>
                            <p class="desc"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['desc'],$_smarty_tpl->tpl_vars['desc_count']->value,'...');?>
</p>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['show_price']->value==1) {?>
                            <span class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span>
                        <?php }?>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['no_text']->value;?>

    <?php }?>
</div><?php }} ?>
