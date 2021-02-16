$(function() {
	$('.chevron-down').click(function () {
		$('html, body').animate({
            scrollTop: $("#pricing").offset().top - 180
        }, 2000);
	});
});