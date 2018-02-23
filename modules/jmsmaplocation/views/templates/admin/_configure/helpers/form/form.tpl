{*
* 2007-2014 PrestaShop
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
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{extends file="helpers/form/form.tpl"}
{block name="field"}
	{if $input.type == 'map'}
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyC7dBv2gOklszmw9xcyI1BCIL2_bzZpjdc"></script>
	<script>
		 function codeAddress() {
			var geocoder = new google.maps.Geocoder(); 
			var address = document.getElementById("address").value;
			geocoder.geocode( { 'address': address}, function(results, status) {
			  if (status == google.maps.GeocoderStatus.OK) {
				map.setCenter(results[0].geometry.location);
				var marker = new google.maps.Marker({
					map: map,
					position: results[0].geometry.location
				});
			  }
			});
		  }
			
		  function initialize() {
			var mapOptions = {
			  center: new google.maps.LatLng(-33.8688, 151.2195),
			  zoom: 13,
			  mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			var map = new google.maps.Map(document.getElementById('map-canvas'),
			  mapOptions);

			var input = document.getElementById('address');
			var autocomplete = new google.maps.places.Autocomplete(input);
			
			autocomplete.bindTo('bounds', map);
			
			var infowindow = new google.maps.InfoWindow();
			var marker = new google.maps.Marker({
			  map: map
			});
			//hainn add
			var geocoder = new google.maps.Geocoder(); 
			var address = input.value;
			geocoder.geocode( { 'address': address}, function(results, status) {
			  if (status == google.maps.GeocoderStatus.OK) {
				  var current_location = results[0].geometry.location;	    	  
				  map.setCenter(current_location);
				  map.setZoom(17);  // Why 17? Because it looks good.	          
				  marker.setPosition(current_location);
				  marker.setVisible(true);
					
			  }
			});
			// If the place has a geometry, then present it on a map.	        
				   
			//hainn end add		
			google.maps.event.addListener(autocomplete, 'place_changed', function() {          
			  infowindow.close();
			  marker.setVisible(false);
			  input.className = '';
			  
			  var place = autocomplete.getPlace();
			  if (!place.geometry) {
				// Inform the user that the place was not found and return.
				input.className = 'notfound';
				return;
			  }

			  // If the place has a geometry, then present it on a map.
			  if (place.geometry.viewport) {
				//map.fitBounds(place.geometry.viewport);
			  } else {
				map.setCenter(place.geometry.location);
				map.setZoom(17);  // Why 17? Because it looks good.
			  }
			 
			  var image = {
				url: place.icon,
				size: new google.maps.Size(71, 71),
				origin: new google.maps.Point(0, 0),
				anchor: new google.maps.Point(17, 34),
				scaledSize: new google.maps.Size(35, 35)
			  };
			  marker.setIcon(image);
			  marker.setPosition(place.geometry.location);
			  marker.setVisible(true);
			  document.getElementById('latitude').value 	= place.geometry.location.lat();
			  document.getElementById('longitude').value 	= place.geometry.location.lng();
			  var address = '';
			  if (place.address_components) {
				address = [
				  (place.address_components[0] && place.address_components[0].short_name || ''),
				  (place.address_components[1] && place.address_components[1].short_name || ''),
				  (place.address_components[2] && place.address_components[2].short_name || '')
				].join(' ');
			  }

			  infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
			  infowindow.open(map, marker);
			});

			// Sets a listener on a radio button to change the filter type on Places
			// Autocomplete.
			function setupClickListener(id, types) {
			  var radioButton = document.getElementById(id);
			  google.maps.event.addDomListener(radioButton, 'click', function() {
				autocomplete.setTypes(types);
			  });
			}

			setupClickListener('changetype-all', []);
			setupClickListener('changetype-establishment', ['establishment']);
			setupClickListener('changetype-geocode', ['geocode']);
		  }
		  google.maps.event.addDomListener(window, 'load', initialize);
	</script>
		<div class="row">			
					<div class="col-lg-6">												
						<div id="map-canvas"></div>	
					</div>			
		</div>
	{/if}
	{$smarty.block.parent}
{/block}