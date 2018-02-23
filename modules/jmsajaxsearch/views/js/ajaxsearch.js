/**
* 2007-2017 PrestaShop
*
* Jms Ajax Search
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/


$(document).ready(function() {
	var timer;	
	$( "#ajax_search" ).keyup(function() {
		clearTimeout(timer);
		timer = setTimeout(function() {
			var search_key = $( "#ajax_search" ).val();
			$.ajax({
				type: 'GET',
				url: prestashop['urls']['base_url'] + 'modules/jmsajaxsearch/ajax_search.php',
				headers: { "cache-control": "no-cache" },
				async: true,
				data: 'search_key=' + search_key,
				success: function(data)
				{
					$('#search_result').innerHTML = data;
				}
			}) .done(function( msg ) {
			$( "#search_result" ).html(msg);
			});
		}, 1000);
	})
	$('html').click(function() {
		$( "#search_result" ).html('');
	});

	$('#search_result').click(function(event){
		event.stopPropagation();
	});
});