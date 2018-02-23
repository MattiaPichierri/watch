<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 07:15:33
         compiled from "D:\xampp\htdocs\jms_watch\modules\jmspagebuilder\views\templates\hook\addonbookblock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4545a8fbf95d7f394-78525226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df3df706343210d834294d49d9eb7d25ca5e0815' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\modules\\jmspagebuilder\\views\\templates\\hook\\addonbookblock.tpl',
      1 => 1516090200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4545a8fbf95d7f394-78525226',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon_title' => 0,
    'addon_desc' => 0,
    'box_class' => 0,
    'contents' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8fbf95e0bdc3_86040331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8fbf95e0bdc3_86040331')) {function content_5a8fbf95e0bdc3_86040331($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
	<h3><?php echo $_smarty_tpl->tpl_vars['addon_title']->value;?>
</h3>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<p class="addon-desc"><?php echo $_smarty_tpl->tpl_vars['addon_desc']->value;?>
</p>
<?php }?>
<div id="bb-bookblock" class="bb-bookblock<?php if (isset($_smarty_tpl->tpl_vars['box_class']->value)&&$_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['box_class']->value;?>
<?php }?>">
<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['content']->value['content']) {?>
	<div class="bb-item">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value['content'])&&$_smarty_tpl->tpl_vars['content']->value['content']) {?><?php echo $_smarty_tpl->tpl_vars['content']->value['content'];?>
<?php }?>		
	</div>
	<?php }?>
<?php } ?>
</div>
<nav>
	<a id="bb-nav-first" href="#" class="bb-custom-icon bb-custom-icon-first">First page</a>
	<a id="bb-nav-prev" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>
	<a id="bb-nav-next" href="#" class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>
	<a id="bb-nav-last" href="#" class="bb-custom-icon bb-custom-icon-last">Last page</a>
</nav>
<script>
	var Page = (function() {				
		var config = {
			$bookBlock : $( '#bb-bookblock' ),
			$navNext : $( '#bb-nav-next' ),
			$navPrev : $( '#bb-nav-prev' ),
			$navFirst : $( '#bb-nav-first' ),
			$navLast : $( '#bb-nav-last' )
		},
		init = function() {
			config.$bookBlock.bookblock( {
				speed : 1000,
				shadowSides : 0.8,
				shadowFlip : 0.4
			} );
			initEvents();
		},
		initEvents = function() {						
			var $slides = config.$bookBlock.children();
			// add navigation events
			config.$navNext.on( 'click touchstart', function() {
				config.$bookBlock.bookblock( 'next' );
				return false;
			} );
			config.$navPrev.on( 'click touchstart', function() {
				config.$bookBlock.bookblock( 'prev' );
				return false;
			} );
			config.$navFirst.on( 'click touchstart', function() {
				config.$bookBlock.bookblock( 'first' );
				return false;
			} );
			config.$navLast.on( 'click touchstart', function() {
				config.$bookBlock.bookblock( 'last' );
				return false;
			} );						
			// add swipe events
			$slides.on( {
				'swipeleft' : function( event ) {
					config.$bookBlock.bookblock( 'next' );
					return false;
				},
				'swiperight' : function( event ) {
					config.$bookBlock.bookblock( 'prev' );
					return false;
				}
			} );

			// add keyboard events
			$( document ).keydown( function(e) {
				var keyCode = e.keyCode || e.which,
				arrow = {
					left : 37,
					up : 38,
					right : 39,
					down : 40
				};
				switch (keyCode) {
					case arrow.left:
						config.$bookBlock.bookblock( 'prev' );
						break;
					case arrow.right:
						config.$bookBlock.bookblock( 'next' );
						break;
					}
				} );
			};
		return { init : init };
	})();
</script>
<script>
	Page.init();
</script><?php }} ?>
