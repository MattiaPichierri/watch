
$(document).ready(function() {
	if ($("#index").hasClass('home_8')) {
		$('.myContainer').multiscroll({
			sectionsColor: ['#fff', '#fff', '#fff' , '#fff', '#fff'],
			anchors: ['first', 'second', 'third', 'four', 'five'],
			menu: '#menu',
			navigation: true,
			navigationTooltips: ['First', 'Second', 'Third', 'Four' , 'Five'],

			
		});
	}
	    	
});