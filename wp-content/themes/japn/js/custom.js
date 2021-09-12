$(".mobile-menu-icon-hp").click(function() {
	$(".menu-toggle-btn").toggleClass("open");
	$(this).toggleClass("open");
	if($(".menu-toggle-btn").hasClass("open") == true){
		$(".menu-text-hp").text("CLOSE");	
		$(".navigation").fadeToggle('fast');
		// $(".navigation").css('right', '0');;

	}
	else
	{
		$(".menu-text-hp").text("MENU");	
		$(".navigation").fadeToggle('fast');
		// $(".navigation").css('right', '-1000px');;
	}
	// $(".navigation").slideToggle();
	// $(".navigation").css('right', '0');;
	$(".overlay-mobile-menu-hp").fadeToggle();
});

$('#gototop'). click(function() {
	$('html, body'). animate({
		scrollTop: 0
	}, 1000);
});

$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('#gototop').fadeIn();
    } else {
        $('#gototop').fadeOut();
    }
});

$("#gototop").click(function () {
   //1 second of animation time
   //html works for FFX but not Chrome
   //body works for Chrome but not FFX
   //This strange selector seems to work universally
   $("html, body").animate({scrollTop: 0}, 1000);
});
