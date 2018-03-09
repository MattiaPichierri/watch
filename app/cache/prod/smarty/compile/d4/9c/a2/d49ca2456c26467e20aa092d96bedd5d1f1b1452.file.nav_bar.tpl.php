<?php /* Smarty version Smarty-3.1.19, created on 2018-03-09 01:59:51
         compiled from "D:\xampp\htdocs\jms_watch\admin367i0kovu\themes\new-theme\template\components\layout\nav_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164165aa1ea97ab9b52-77282295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd49ca2456c26467e20aa092d96bedd5d1f1b1452' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\admin367i0kovu\\themes\\new-theme\\template\\components\\layout\\nav_bar.tpl',
      1 => 1508746756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164165aa1ea97ab9b52-77282295',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tabs' => 0,
    'level1' => 0,
    'level1Href' => 0,
    'level1Name' => 0,
    'level2' => 0,
    'level2Href' => 0,
    'level2Name' => 0,
    'level3' => 0,
    'level3Href' => 0,
    'level3Name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa1ea97b2ee50_13727975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa1ea97b2ee50_13727975')) {function content_5aa1ea97b2ee50_13727975($_smarty_tpl) {?>
<nav class="nav-bar">
  <ul class="main-menu">

    <?php  $_smarty_tpl->tpl_vars['level1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['level1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['level1']->key => $_smarty_tpl->tpl_vars['level1']->value) {
$_smarty_tpl->tpl_vars['level1']->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['level1']->value['active']) {?>

        <?php $_smarty_tpl->tpl_vars['level1Href'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level1']->value['href'],'html','UTF-8'), null, 0);?>
        <?php if (count($_smarty_tpl->tpl_vars['level1']->value['sub_tabs'])&&isset($_smarty_tpl->tpl_vars['level1']->value['sub_tabs'][0]['href'])) {?>
          <?php $_smarty_tpl->tpl_vars['level1Href'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level1']->value['sub_tabs'][0]['href'],'html','UTF-8'), null, 0);?>
        <?php }?>

        <?php $_smarty_tpl->tpl_vars['level1Name'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level1']->value['name'],'html','UTF-8'), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['level1']->value['name']=='') {?>
          <?php $_smarty_tpl->tpl_vars['level1Name'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level1']->value['class_name'],'html','UTF-8'), null, 0);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['level1']->value['icon']!='') {?>

          <li class="link-levelone <?php if ($_smarty_tpl->tpl_vars['level1']->value['current']) {?>-active<?php }?>" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level1']->value['id_tab'];?>
">
            <a href="<?php echo $_smarty_tpl->tpl_vars['level1Href']->value;?>
" class="link" >
              <i class="material-icons"><?php echo $_smarty_tpl->tpl_vars['level1']->value['icon'];?>
</i> <span><?php echo $_smarty_tpl->tpl_vars['level1Name']->value;?>
</span>
            </a>
          </li>

        <?php } else { ?>

          <li class="category-title hidden-sm-down <?php if ($_smarty_tpl->tpl_vars['level1']->value['current']) {?>-active<?php }?>" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level1']->value['id_tab'];?>
">
              <span class="title"><?php echo $_smarty_tpl->tpl_vars['level1Name']->value;?>
</span>
          </li>

            <?php  $_smarty_tpl->tpl_vars['level2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['level2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['level1']->value['sub_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['level2']->key => $_smarty_tpl->tpl_vars['level2']->value) {
$_smarty_tpl->tpl_vars['level2']->_loop = true;
?>
              <?php if ($_smarty_tpl->tpl_vars['level2']->value['active']) {?>

                <?php $_smarty_tpl->tpl_vars['level2Href'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level2']->value['href'],'html','UTF-8'), null, 0);?>

                <?php $_smarty_tpl->tpl_vars['level2Name'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level2']->value['name'],'html','UTF-8'), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['level2']->value['name']=='') {?>
                  <?php $_smarty_tpl->tpl_vars['level2Name'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level2']->value['class_name'],'html','UTF-8'), null, 0);?>
                <?php }?>

                <li class="link-levelone <?php if ($_smarty_tpl->tpl_vars['level2']->value['current']) {?>-active<?php }?>" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level2']->value['id_tab'];?>
">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['level2Href']->value;?>
" class="link">
                    <i class="material-icons"><?php echo $_smarty_tpl->tpl_vars['level2']->value['icon'];?>
</i>
                    <span>
                    <?php echo $_smarty_tpl->tpl_vars['level2Name']->value;?>

                    <?php if (count($_smarty_tpl->tpl_vars['level2']->value['sub_tabs'])) {?>
                      <i class="material-icons pull-right hidden-md-up">keyboard_arrow_down</i>
                    <?php }?>
                    </span>

                  </a>
                    <?php if (count($_smarty_tpl->tpl_vars['level2']->value['sub_tabs'])) {?>
                      <ul id="collapse-<?php echo $_smarty_tpl->tpl_vars['level2']->value['id_tab'];?>
" class="submenu panel-collapse">
                        <?php  $_smarty_tpl->tpl_vars['level3'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['level3']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['level2']->value['sub_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['level3']->key => $_smarty_tpl->tpl_vars['level3']->value) {
$_smarty_tpl->tpl_vars['level3']->_loop = true;
?>
                          <?php if ($_smarty_tpl->tpl_vars['level3']->value['active']) {?>

                            <?php $_smarty_tpl->tpl_vars['level3Href'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level3']->value['href'],'html','UTF-8'), null, 0);?>

                            <?php $_smarty_tpl->tpl_vars['level3Name'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level3']->value['name'],'html','UTF-8'), null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['level3']->value['name']=='') {?>
                              <?php $_smarty_tpl->tpl_vars['level3Name'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level3']->value['class_name'],'html','UTF-8'), null, 0);?>
                            <?php }?>

                            <li class="link-leveltwo <?php if ($_smarty_tpl->tpl_vars['level3']->value['current']) {?>-active<?php }?>" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level3']->value['id_tab'];?>
">
                              <a href="<?php echo $_smarty_tpl->tpl_vars['level3Href']->value;?>
" class="link"> <?php echo $_smarty_tpl->tpl_vars['level3Name']->value;?>

                              </a>
                            </li>

                          <?php }?>
                        <?php } ?>
                      </ul>
                    <?php }?>
                </li>
              <?php }?>
            <?php } ?>

        <?php }?>

      <?php }?>
    <?php } ?>
  </ul>

  <span class="menu-collapse hidden-md-down">
    <i class="material-icons">&#xE8EE;</i>
  </span>

  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminNavBarBeforeEnd'),$_smarty_tpl);?>

</nav>
<?php }} ?>
