jQuery(document).ready(function ($) {
	// Add class show to Bootstrap accordion on big sizes so it fully opens
	if ($(window).width() < 960) {
		// alert("Less than 960");
	} else {
		$("#collapseTwo").addClass("show");
		$("#collapseThree").addClass("show");
		// alert("More than 960");
	}
});
