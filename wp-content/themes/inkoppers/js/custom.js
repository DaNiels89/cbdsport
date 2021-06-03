jQuery(document).ready(function ($) {
	// Header onclick menu button
	$("#header-menu-btn").on("click", function () {
		$("#header-main-nav").toggleClass("d-none");
	});
	// Cookie bar
	$("#cookie-btn").on("click", function () {
		$("#cookie-div").addClass("d-none");
	});
	// Slick Slider mobile
	$(".qb-slider-mobile").slick();
	// Slick Slider desktop
	$(".qb-slider-desktop").slick({
		infinite: true,
		slidesToShow: 2,
		slidesToScroll: 1,
	});
});
