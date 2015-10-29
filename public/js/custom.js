$( window ).scroll(function() {
	var scroll = $(window).scrollTop();
	console.log(scroll);
	if (scroll > 130) {
		$('.navbar-default, .navbar-brand, li.icon').addClass('active');
	} else{
		$('.navbar-default, .navbar-brand, li.icon').removeClass('active');
	};
});

$('.navbar-toggle').on('click', function (){
	$('.navbar-default').toggleClass('active_');
});