$(function() {
	$('.chevron-down').click(function () {
		$('html, body').animate({
            scrollTop: $("#services").offset().top - 180
        }, 2000);
	});
});