{*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2017 PrestaShop SA
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div class="jms-maplocation">
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&key={$map_api_key|escape:'htmlall':'UTF-8'}"></script>
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
			{foreach from=$locations item=location}
				var pos = new google.maps.LatLng({$location.latitude|escape:'htmlall':'UTF-8'}, {$location.longitude|escape:'htmlall':'UTF-8'});
				map.setCenter(pos);
				bounds.extend(pos);
				var marker = new google.maps.Marker({
			            map: map,
						code:{$location.id_loc|escape:'htmlall':'UTF-8'},		
			            title: '{$location.title|escape:'htmlall':'UTF-8'}',			            			            
			            position: pos,
			            brief: '<strong>{$location.title|escape:'htmlall':'UTF-8'}</strong><br />{$location.address|escape:''}'
			    });	         
			    var image = {
						url: '{$root_url|escape:'htmlall':'UTF-8'}modules/jmsmaplocation/views/img/point.png',	 
		                 origin: new google.maps.Point(0, 0),
		                 anchor: new google.maps.Point(17, 34),
		                 scaledSize: new google.maps.Size(17, 25)
		    	};
		   		marker.setIcon(image);	
			    marker.setTitle('{$location.title|escape:'htmlall':'UTF-8'}');	     
			    markers.push(marker);
			    attachSecretMessage(marker, marker.brief);
			{/foreach}			
			
		    map.fitBounds(bounds);				
		    var cpos = new google.maps.LatLng(46.856614, 2.3522219) 
		    map.setCenter(cpos);   
	}
	 
    google.maps.event.addDomListener(window, 'load', InitMap);      
</script>
{if $addon_title}
<div class="addon-title">
	<h3>{$addon_title|escape:'htmlall':'UTF-8'}</h3>
</div>
{/if}
{if $addon_desc}
<p class="addon-desc">{$addon_desc|escape:'htmlall':'UTF-8'}</p>
{/if}
<div id="locations_map" style="{if $map_width}width:{$map_width|escape:'htmlall':'UTF-8'};{/if} {if $map_height}height:{$map_height|escape:'htmlall':'UTF-8'};{/if}"></div>
{if $show_dropdown}
<div class="maploc-find-stores {$dropdown_pos|escape:'htmlall':'UTF-8'}">
		<h4>{l s='Find our stores' d='Modules.JmsPagebuilder'}</h4>
		<select id="maploc-stores-list" class="form-control">
		<option value="">{l s='Choose Store Location' d='Modules.JmsPagebuilder'}</option>
		{foreach from=$locations item=location}
		<option value="{$location.id_loc|escape:'htmlall':'UTF-8'}">{$location.title|escape:'htmlall':'UTF-8'}</option>
		{/foreach}	
	</select>
</div>
{/if}
</div>
{if $show_dropdown}
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
{/if}
</div>
