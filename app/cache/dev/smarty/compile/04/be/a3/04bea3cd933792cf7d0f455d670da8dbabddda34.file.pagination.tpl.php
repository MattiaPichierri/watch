<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 06:56:22
         compiled from "D:\xampp\htdocs\jms_watch\modules\jmsblog\views\templates\admin\jmsblog_post\pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:286235a8fbb16955e93-93465425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04bea3cd933792cf7d0f455d670da8dbabddda34' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\modules\\jmsblog\\views\\templates\\admin\\jmsblog_post\\pagination.tpl',
      1 => 1516090197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286235a8fbb16955e93-93465425',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'limit' => 0,
    'pages' => 0,
    'foo' => 0,
    'start' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8fbb1697cf93_31551582',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8fbb1697cf93_31551582')) {function content_5a8fbb1697cf93_31551582($_smarty_tpl) {?>
<div class="jms-blog-pagination">	
	<?php if ($_smarty_tpl->tpl_vars['total']->value>$_smarty_tpl->tpl_vars['limit']->value) {?>
	<div class="pagination">
		<ul>
		<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
			<li class="<?php if (($_smarty_tpl->tpl_vars['foo']->value-1)*$_smarty_tpl->tpl_vars['limit']->value==$_smarty_tpl->tpl_vars['start']->value) {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogPost');?>
&configure=jmsblog&start=<?php echo ($_smarty_tpl->tpl_vars['foo']->value-1)*$_smarty_tpl->tpl_vars['limit']->value;?>
&limit=<?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
		<?php }} ?>
		</ul>
	</div>
	<?php }?>
	<div class="counter-div">
		<span>Total : <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 items</span>
	</div>
</div><?php }} ?>
