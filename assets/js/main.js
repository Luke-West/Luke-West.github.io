$(function() {
	$('.chevron-down').click(function () {
		$('html, body').animate({
            scrollTop: $("#pricing").offset().top - 180
        }, 2000);
	});
});

function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

$(window).on("scroll", function() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }

    var scrollPos = $(window).scrollTop();
    if (scrollPos <= 0) {
      $(".chevron-middle").fadeIn(1300);
    } else {
      $(".chevron-middle").fadeOut();
    }
});

function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}