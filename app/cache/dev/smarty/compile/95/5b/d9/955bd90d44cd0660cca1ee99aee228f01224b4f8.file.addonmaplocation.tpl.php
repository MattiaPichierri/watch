<?php /* Smarty version Smarty-3.1.19, created on 2018-02-23 01:58:26
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\modules\jmspagebuilder\views\templates\hook\addonmaplocation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3695a8f75423c5a81-66124123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '955bd90d44cd0660cca1ee99aee228f01224b4f8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\modules\\jmspagebuilder\\views\\templates\\hook\\addonmaplocation.tpl',
      1 => 1516090205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3695a8f75423c5a81-66124123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'locations' => 0,
    'location' => 0,
    'root_url' => 0,
    'addon_title' => 0,
    'addon_desc' => 0,
    'map_width' => 0,
    'map_height' => 0,
    'show_dropdown' => 0,
    'dropdown_pos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8f7542413c83_66834661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8f7542413c83_66834661')) {function content_5a8f7542413c83_66834661($_smarty_tpl) {?>
<div class="jms-maplocation">
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyC7dBv2gOklszmw9xcyI1BCIL2_bzZpjdc"></script>
<script>
	 var map, markers, infowindow,current_pos,directionsService,directionsDisplay;	 
	 function attachSecretMessage(marker, message) {
		infowindow = new google.maps.InfoWindow(
			{ content: message
			});
		google.maps.event.addListener(marker, 'click', function() {					
			infowindow.setContent(message);
			infowindow.open(map,marker);			
		});    
	}
	 function InitMap() {
		 	var mapOptions = {	
		          center: new google.maps.LatLng(46.856614, 2.3522219),
		          zoom: 6,
		          mapTypeId: google.maps.MapTypeId.ROADMAP
		    }; 
			map = new google.maps.Map(document.getElementById('locations_map'),mapOptions);
			directionsService = new google.maps.DirectionsService();
		    directionsDisplay = new google.maps.DirectionsRenderer();	
			var geocoder = new google.maps.Geocoder();
			var bounds = new google.maps.LatLngBounds();		
			markers = new Array();
			<?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['location']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['location']->_loop = true;
?>
				var pos = new google.maps.LatLng(<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['location']->value['latitude'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['location']->value['longitude'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
);
				map.setCenter(pos);
				bounds.extend(pos);
				var marker = new google.maps.Marker({
			            map: map,
						code:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['location']->value['id_loc'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,		
			            title: '<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['location']->value['title'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
',			            			            
			            position: pos,
			            brief: '<strong><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['location']->value['title'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</strong><br /><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['location']->value['address'],''), ENT_QUOTES, 'UTF-8');?>
'
			    });	         
			    var image = {
						url: '<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['root_url']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
modules/jmsmaplocation/views/img/point.png',	 
		                 origin: new google.maps.Point(0, 0),
		                 anchor: new google.maps.Point(17, 34),
		                 scaledSize: new google.maps.Size(17, 25)
		    	};
		   		marker.setIcon(image);	
			    marker.setTitle('<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['location']->value['title'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
');	     
			    markers.push(marker);
			    attachSecretMessage(marker, marker.brief);
			<?php } ?>			
			
		    map.fitBounds(bounds);				
		    var cpos = new google.maps.LatLng(46.856614, 2.3522219) 
		    map.setCenter(cpos);   
	}
	 
    google.maps.event.addDomListener(window, 'load', InitMap);      
</script>
<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
	<h3><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['addon_title']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</h3>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<p class="addon-desc"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['addon_desc']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?>
<div id="locations_map" style="<?php if ($_smarty_tpl->tpl_vars['map_width']->value) {?>width:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['map_width']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;<?php }?> <?php if ($_smarty_tpl->tpl_vars['map_height']->value) {?>height:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['map_height']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"></div>
<?php if ($_smarty_tpl->tpl_vars['show_dropdown']->value) {?>
<div class="maploc-find-stores <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['dropdown_pos']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
		<h4><?php echo smartyTranslate(array('s'=>'Find our stores','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</h4>
		<select id="maploc-stores-list" class="form-control">
		<option value=""><?php echo smartyTranslate(array('s'=>'Choose Store Location','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</option>
		<?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['location']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['location']->_loop = true;
?>
		<option value="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['location']->value['id_loc'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['location']->value['title'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</option>
		<?php } ?>	
	</select>
</div>
<?php }?>
</div>
<?php if ($_smarty_tpl->tpl_vars['show_dropdown']->value) {?>
<script>
function openInfo (id) {
	var mark;
	for (var i=0; i < markers.length; i++) {
		if (markers[i].code == id) {
			mark = markers[i];	
		}
	}
						
	if (infowindow) {
	    infowindow.close();
	}			
			
	map.setCenter(mark.position);
	map.setZoom(13);
	infowindow.setContent(mark.brief);
	infowindow.open(map,mark);	
}

$(document).ready(function(){	
	$('#maploc-stores-list').change(function(e) {
		var loc_id = $(this).val();
		var cpos;
		for (var i=0; i < markers.length; i++) {		
			if (markers[i].code == loc_id) {
				latlng = markers[i].position;									
				map.setCenter(latlng); 
				map.setZoom(20);
				openInfo(loc_id);
			}
		}		
	});
	
});
</script>
<?php }?>

<?php }} ?>
