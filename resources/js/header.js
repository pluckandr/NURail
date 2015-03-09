var nurailBanner = $(".nurail-banner");
var nurailNav = $(".navbar-nurail");
var nurailSwoosh = $(".navbar-brand");

$(window).scroll(function() {
	if ($(this).scrollTop() > nurailBanner.innerHeight()) {
		nurailNav.addClass("navbar-nurail-scrolled");
		nurailSwoosh.show();
	} else {
		nurailNav.removeClass("navbar-nurail-scrolled");
		nurailSwoosh.hide();
	}
});