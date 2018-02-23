<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 04:58:28
         compiled from "D:\xampp\htdocs\jms_watch\modules\jmspagebuilder\views\templates\hook\addonsliderlayer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194105a73eff466e063-92386214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bb5da9f9493a8ee80c9723efe247cb36b777de7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\modules\\jmspagebuilder\\views\\templates\\hook\\addonsliderlayer.tpl',
      1 => 1516090200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194105a73eff466e063-92386214',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'slides' => 0,
    'slide' => 0,
    'image_url' => 0,
    'layer' => 0,
    'configs' => 0,
    'vimeo_link' => 0,
    'navigation' => 0,
    'pagination' => 0,
    'autoplay' => 0,
    'pausehover' => 0,
    'max_width' => 0,
    'max_height' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a73eff4731567_47792415',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73eff4731567_47792415')) {function content_5a73eff4731567_47792415($_smarty_tpl) {?>
<div class="jms-slider-wrapper">
	<div class="responisve-container">
		<div class="slider" >
		<div class="fs_loader"></div>
		<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
			<div class="slide <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slide']->value['class_suffix'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" style="background:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slide']->value['bg_color'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 url(<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['image_url']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
slides/<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slide']->value['bg_image'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
) no-repeat left top;background-size:cover;" <?php if ($_smarty_tpl->tpl_vars['slide']->value['slide_link']) {?>onclick="document.location='<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slide']->value['slide_link'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
';"<?php }?>>
				<?php  $_smarty_tpl->tpl_vars['layer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['layer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slide']->value['layers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['layer']->key => $_smarty_tpl->tpl_vars['layer']->value) {
$_smarty_tpl->tpl_vars['layer']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['layer']->value['data_type']=='text') {?>
					<div class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_class_suffix'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 jms-slide-content" 
					<?php if ($_smarty_tpl->tpl_vars['layer']->value['data_fixed']) {?>data-fixed<?php }?> 
					data-position="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_y'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_x'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
					data-fontsize = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_font_size'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
					<?php if ($_smarty_tpl->tpl_vars['layer']->value['data_line_height']) {?>
					data-lineheight = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_line_height'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
px"
					<?php }?>
					data-in="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_in'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
					data-out="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_out'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
					data-delay="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_delay'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
					data-ease-in="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_ease_in'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
					data-ease-out="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_ease_out'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
					data-step="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_step'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
					data-special="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_special'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
					data-time = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_time'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
					style="font-size: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_font_size'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
px; font-style:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_style'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
; color: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_color'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
; line-height:<?php if ($_smarty_tpl->tpl_vars['layer']->value['data_line_height']) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_line_height'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
px<?php }?>;"					
					><?php echo $_smarty_tpl->tpl_vars['layer']->value['data_html'];?>

					</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['layer']->value['data_type']=='image') {?>					
					<img class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_class_suffix'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 jms-slide-content" 
					src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['image_url']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
layers/<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_image'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
					<?php if ($_smarty_tpl->tpl_vars['layer']->value['data_fixed']) {?>data-fixed<?php }?> 
					data-position="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_y'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_x'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
					data-in="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_in'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
					data-out="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_out'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
					data-delay="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_delay'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
					data-ease-in="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_ease_in'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
					data-ease-out="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_ease_out'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
					data-time = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_time'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
					data-step="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_step'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
					data-special="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_special'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
					width="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_width'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
					height="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_height'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"/>
					<?php } else { ?>
						
					<iframe class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_class_suffix'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 jms-slide-content"
					<?php if ($_smarty_tpl->tpl_vars['layer']->value['data_fixed']||$_smarty_tpl->tpl_vars['layer']->value['data_video_bg']) {?>data-fixed<?php }?> 
					data-position="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_y'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_x'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
					data-in="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_in'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
					data-out="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_out'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
					<?php if ($_smarty_tpl->tpl_vars['layer']->value['data_video_bg']) {?>data-delay="0"<?php } else { ?>data-delay="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_delay'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
					data-ease-in="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_ease_in'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
					data-ease-out="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_ease_out'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
					data-step="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_step'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
					data-special="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_special'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
					data-time = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_time'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
					<?php if ($_smarty_tpl->tpl_vars['layer']->value['data_video_bg']) {?>
						width="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_WIDTH'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
						height="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_HEIGHT'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
					<?php } else { ?>
						width="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_width'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
						height="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_height'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['layer']->value['videotype']=='youtube') {?>							src="//www.youtube.com/embed/<?php echo htmlspecialchars(substr($_smarty_tpl->tpl_vars['layer']->value['data_video'],(strpos($_smarty_tpl->tpl_vars['layer']->value['data_video'],'?v=')+3)), ENT_QUOTES, 'UTF-8');?>
?autoplay=<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_video_autoplay'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
&controls=<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_video_controls'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
&loop=<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_video_loop'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
					<?php } elseif ($_smarty_tpl->tpl_vars['layer']->value['videotype']=='vimeo') {?>
						 <?php $_smarty_tpl->tpl_vars['vimeo_link'] = new Smarty_variable((explode("/",$_smarty_tpl->tpl_vars['layer']->value['data_video'])), null, 0);?>
						src="https://player.vimeo.com/video/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vimeo_link']->value[count($_smarty_tpl->tpl_vars['vimeo_link']->value)-1], ENT_QUOTES, 'UTF-8');?>
?autoplay=<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_video_autoplay'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
&loop=<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['data_video_loop'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
					<?php }?>	
					allowfullscreen 
					frameborder="0">
					</iframe> 
					<?php }?>
				<?php } ?>
			</div>
		<?php } ?>
		</div>
	</div>
</div>

  
<script type="text/javascript">	
	var jmsslider_trans = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_TRANS'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
";
	var jmsslider_end_animate = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_TRANS'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
";
	var jmsslider_trans_in = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_TRANS'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
";	
	var jmsslider_trans_out = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_TRANS_OUT'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
";	
	<?php if ($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_FULL_WIDTH']) {?>
		var jmsslider_full_width = true;
	<?php } else { ?>	
		var jmsslider_full_width = false;
	<?php }?>
	var jmsslider_delay = <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_DELAY'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;
	var jmsslider_duration = <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_DURATION'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;
	var jmsslider_speed_in = <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_SPEED_IN'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;
	var jmsslider_speed_out = <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_SPEED_OUT'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;
	var jmsslider_ease_in = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_EASE_IN'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
";
	var jmsslider_ease_out = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_EASE_OUT'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
";
	<?php if ($_smarty_tpl->tpl_vars['navigation']->value) {?>
		var jmsslider_navigation = true;
	<?php } else { ?>	
		var jmsslider_navigation = false;
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>
		var jmsslider_pagination = true;
	<?php } else { ?>	
		var jmsslider_pagination = false;
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['autoplay']->value) {?>
		var jmsslider_autoplay = true;
	<?php } else { ?>	
		var jmsslider_autoplay = false;
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['pausehover']->value) {?>
		var jmsslider_pausehover = true;
	<?php } else { ?>	
		var jmsslider_pausehover = false;
	<?php }?>	
	<?php if ($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_BG_ANIMATE']) {?>
		var jmsslider_bg_animate = true;
	<?php } else { ?>	
		var jmsslider_bg_animate = false;
	<?php }?>
	var jmsslider_bg_ease = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_BG_EASE'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
";
	<?php if ($_smarty_tpl->tpl_vars['configs']->value['JMS_SLIDER_RESPONSIVE']) {?>
		var jmsslider_responsive = true;
	<?php } else { ?>	
		var jmsslider_responsive = false;
	<?php }?>	
	var jmsslider_dimensions = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['max_width']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['max_height']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
";
</script><?php }} ?>
