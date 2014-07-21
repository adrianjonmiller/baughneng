DLN.Behaviors.flexslider = function(container){
	container.flexslider();
};


DLN.Behaviors.flexslider_thumbnails = function(container){
	container.flexslider({
		controlNav: "thumbnails"
	});
};


DLN.Behaviors.same_height = function(container) {
	var tallest = 0;
	container.imagesLoaded(function() {
		console.log("success");
		container.children().each(function() {
			if($(this).outerHeight() >= tallest) {
				tallest = $(this).height();
			}
		});

		container.find('a').each(function() {
			$(this).css('height', tallest);
		});
	});
	console.log(tallest);
}