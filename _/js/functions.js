$(document).ready(function(){

	$("body").css('display', 'none');
	
	$("ul.screenshots a").click(function() {
		
		$("div#inner").css("background-image", "url(" + $(this).attr("href") + ")");
		$("div#overlay").css("top", $(window).scrollTop());
		$("div#overlay").fadeIn(400);
		return false;
		
	});
	
	$("div#overlay").click(function() {
	
		$(this).fadeOut(200);
	
	});
	
	$("a").mouseover(function() {
	
		if ($(this).attr("data-twitter")) {
			
			thisPosition = $(this).position();
			thisWidth = $(this).width();
			
			$(this).after("<span class='twitterInfo' style='left: " + (thisPosition.left + thisWidth + 3) + "px; top: " + (thisPosition.top - 8) + "px;'><a href='http://twitter.com/" + $(this).attr("data-twitter") + "'>@" + $(this).attr("data-twitter") + "</a></span>");
			
			$("span.twitterInfo").fadeIn(300);
		
		}
	
	});
	
	$("a").mouseout(function() {
	
		if ($(this).attr("data-twitter")) {
		
			$("span.twitterInfo").delay(100).fadeOut(300, function () {
			
	            $(this).remove();
			
			});
		
		}
	
	});
	
	$("span.twitterInfo").live('mouseenter', function() {

		$("span.twitterInfo").stop(true,false);
		$(this).prev().mouseover();
	
	});
	
	$("span.twitterInfo").live('mouseleave', function() {

		$(this).prev().mouseout();
	
	});
		
});

$(window).bind("load", function() {
	
	$("body").css('display', 'block');

});