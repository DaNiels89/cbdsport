jQuery(document).ready(function ($) {
	// Header onclick menu button
	$("#header-menu-btn").on("click", function () {
		$("#header-main-nav").toggleClass("d-none");
	});
	// Add class show to Bootstrap accordion on big sizes so it fully opens
	if ($(window).width() > 767) {
		$(".collapse").addClass("show");
	}
});
