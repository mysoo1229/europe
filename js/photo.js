$(function(){
	
	$('.grid').masonry({
		itemSelector: '.grid-item',
		columnWidth: 225
	});

	lightbox.option({
		'resizeDuration': 250,
		'albumLabel':""
	});

});