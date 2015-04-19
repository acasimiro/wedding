$('#padrinhos .row > div').mouseenter(function () {
	$('.testimony', this).animate({
		height: '100%'
	});
}).mouseleave(function () {
	$('.testimony', this).animate({
		height: '48px'
	});
});