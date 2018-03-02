<?php /* Smarty version Smarty-3.1.19, created on 2018-03-01 07:47:40
         compiled from "module:ps_contactinfo/ps_contactinfo-rich.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177025a97b01c774a86-16403772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '628089b29e2c5fb69de1c5694b088f988b830ba7' => 
    array (
      0 => 'module:ps_contactinfo/ps_contactinfo-rich.tpl',
      1 => 1516090205,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '177025a97b01c774a86-16403772',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contact_infos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a97b01c788303_95000447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a97b01c788303_95000447')) {function content_5a97b01c788303_95000447($_smarty_tpl) {?>

<div class="contact-rich">
  <h4> <i class="material-icons fa fa-map-marker"></i> <?php echo smartyTranslate(array('s'=>'Store information','d'=>'Shop.Theme'),$_smarty_tpl);?>
</h4>
  <div class="block">
    <div class="data"><?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>
</div>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
    <hr/>
    <div class="block">
      <div class="icon"><i class="material-icons">&#xE0CD;</i></div>
      <div class="data">
        <?php echo smartyTranslate(array('s'=>'Call us:','d'=>'Shop.Theme'),$_smarty_tpl);?>
<br/>
        <a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</a>
       </div>
    </div>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
    <hr/>
    <div class="block">
      <div class="icon"><i class="material-icons">&#xE0DF;</i></div>
      <div class="data">
        <?php echo smartyTranslate(array('s'=>'Fax:','d'=>'Shop.Theme'),$_smarty_tpl);?>
<br/>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['fax'], ENT_QUOTES, 'UTF-8');?>

      </div>
    </div>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
    <hr/>
    <div class="block">
      <div class="icon"><h4> <i class="material-icons fa fa-envelope"></i><?php echo smartyTranslate(array('s'=>'Email Contact','d'=>'Shop.Theme'),$_smarty_tpl);?>
 </h4></div>
      <div class="data email">
        <?php echo smartyTranslate(array('s'=>'Email us:','d'=>'Shop.Theme'),$_smarty_tpl);?>
<br/>
       </div>
       <a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
    </div>
  <?php }?>
</div>
<?php }} ?>
