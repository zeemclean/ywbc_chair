$(document).ready(function(){
	var visiblePage = $('.content-section:visible');
	var visibleId = visiblePage.attr('id');
	var activeLink = $('.contentLink').attr('href', visibleId);

	activeLink.css('color', '$mist');
})