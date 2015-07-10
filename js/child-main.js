(function($){
	$(document).ready(function(){
	$(".projects-sub-menu-container").appendTo("li.menu-item-423");

	$(".menu-item-423 > a").click(function(e){
		e.preventDefault();
		$(this)
			.siblings(".projects-sub-menu-container")
			.slideToggle();
	});

	if ( $("body").hasClass("single-project") )
		$("#secondary .projects-sub-menu-container").show();

	$(".current-item").hover(function(){
		$(this).find(".current-item-overlay").stop().animate({
			opacity: 1
		}, "fast");
	}, function(){
		$(this).find(".current-item-overlay").stop().animate({
			opacity: 0
		}, "fast");
	});
});

})(jQuery);
