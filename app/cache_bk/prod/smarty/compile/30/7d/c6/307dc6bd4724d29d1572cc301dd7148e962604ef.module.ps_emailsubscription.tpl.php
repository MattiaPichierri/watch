<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 01:52:32
         compiled from "module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144565a73c4604a0f44-67751525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl',
      1 => 1517454567,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '144565a73c4604a0f44-67751525',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jpb_homepage' => 0,
    'urls' => 0,
    'msg' => 0,
    'nw_error' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a73c460500a95_63210995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73c460500a95_63210995')) {function content_5a73c460500a95_63210995($_smarty_tpl) {?>

<!-- Block Newsletter module-->
	<div id="newsletter_block_left" class="block">	
		<div class="block_content">
		
				<div class="textnews_h1 addon-title">
				<h3><?php echo smartyTranslate(array('s'=>'The News Letter','d'=>'Shop.Theme'),$_smarty_tpl);?>
</h3>
				<!-- <span><?php echo smartyTranslate(array('s'=>'Subscribe now to get 15 percent off on any product','d'=>'Shop.Theme'),$_smarty_tpl);?>
</span> -->
				</div>
			
				<div class="textnews_h4">
				<h3><?php echo smartyTranslate(array('s'=>'Newsletter','d'=>'Shop.Theme'),$_smarty_tpl);?>
</h3>
				<span><?php echo smartyTranslate(array('s'=>'Get all the best deals, sales and offers from shop the best.','d'=>'Shop.Theme'),$_smarty_tpl);?>
</span>
				</div>
				
				<div class="textnews_h3">
				<h3><?php echo smartyTranslate(array('s'=>'Get Our Latest Update In Your Email','d'=>'Shop.Theme'),$_smarty_tpl);?>
</h3>
				<span><?php echo smartyTranslate(array('s'=>'Subscribe now to get 15 percent off on any product','d'=>'Shop.Theme'),$_smarty_tpl);?>
</span>
				</div>
			
			<?php if ($_smarty_tpl->tpl_vars['jpb_homepage']->value==1) {?>
					<div class="textnews_popup addon-title">
						<h2>
							<?php echo smartyTranslate(array('s'=>'Sign Up Our Newsletter','d'=>'Shop.Theme'),$_smarty_tpl);?>

						</h2>
						<span>
							<?php echo smartyTranslate(array('s'=>'For receive and never miss the latest products, news, events, promotion and many more','d'=>'Shop.Theme'),$_smarty_tpl);?>

						</span>
					</div>
		<?php }?>
			<div class="news_content">
	         <div  class="block_content block_c_right">
			<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
					<div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value) {?> <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>form-error<?php } else { ?>form-ok<?php }?><?php }?>" >
					   <button type="submit" name="submitNewsletter" class="newsletter-btn button">
							<?php echo smartyTranslate(array('s'=>'Subscribe','d'=>'Shop.Theme'),$_smarty_tpl);?>

						</button>
						<input class="inputNew form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Your email...','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
" />
						
						<button type="submit" name="submitNewsletter" class="newsletter-btn buttonh2 ">
							
						</button>
						<button type="submit" name="submitNewsletter" class="newsletter-btn buttonh1  btn-default btn-active btn-effect">
							<?php echo smartyTranslate(array('s'=>'Subscribe','d'=>'Shop.Theme'),$_smarty_tpl);?>

						</button>
						<input type="hidden" name="action" value="0" />
					</div>
				</form>
				</div>
	       </div>
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
        <div class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php }?>
<?php }} ?>
