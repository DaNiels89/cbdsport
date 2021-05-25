jQuery(document).ready(function ($) {
	// Add class show to Bootstrap accordion on big sizes so it fully opens
	if ($(window).width() < 768) {
		// alert("Less than 960");
	} else {
		// $("#collapseTwo").addClass("show");
		// $("#collapseThree").addClass("show");
		$(".collapse").addClass("show");
		// alert("More than 960");
	}
});
