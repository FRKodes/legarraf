$( window ).scroll(function() {
	var scroll = $(window).scrollTop();
	if (scroll > 130) {
		$('.navbar-default, .navbar-brand, li.icon').addClass('active');
	} else{
		$('.navbar-default, .navbar-brand, li.icon').removeClass('active');
	};

	/*
	 Animations home page
	 */
	var nieve_normal = $('#nieve-normal');
	if (nieve_normal) {

		var nieve = $('#nieve-normal').offset().top-650;
		if (scroll > nieve) {
			setTimeout(function(){
			    $('#nieve-normal').addClass('magictime vanishIn');
			}, 200);
			setTimeout(function(){
			    $('#nieve-normal-shadow').addClass('magictime slideDownRetourn');
			}, 1000);
		};
		
		var splenda = $('#nieve-splenda').offset().top-650;
		if (scroll > splenda) {
			setTimeout(function(){
			    $('#nieve-splenda').addClass('magictime vanishIn');
			}, 200);
			setTimeout(function(){
			    $('#nieve-splenda-shadow').addClass('magictime slideDownRetourn');
			}, 1000);
		};

		var agua = $('#agua').offset().top-650;
		if (scroll > agua) {
			setTimeout(function(){
			    $('#agua').addClass('magictime puffIn');
			}, 200);
			setTimeout(function(){
			    $('#agua-shadow').addClass('magictime slideDownRetourn');
			}, 1000);
		};
	};

	/*
	 Animations about page
	 */
	if ($('#lunetas')) {

		var lunetas = $('#lunetas').offset().top-650;
		if (scroll > lunetas) {
			setTimeout(function(){
			    $('#lunetas').addClass('magictime vanishIn');
			}, 200);
			setTimeout(function(){
			    $('#lunetas-shadow').addClass('magictime slideDownRetourn');
			}, 1000);
		};
		
		var vaso = $('#vaso').offset().top-650;
		if (scroll > vaso) {
			setTimeout(function(){
			    $('#vaso').addClass('magictime vanishIn');
			}, 200);
			setTimeout(function(){
			    $('#vaso-shadow').addClass('magictime slideDownRetourn');
			}, 1000);
		};
	};

	/*
	 Animations garrafon page
	 */
	console.log(scroll);
	if ($('#paletas')) {
		// console.log('paletas');
		var paletas = $('#paletas').offset().top-650;
		if (scroll > paletas) {
			setTimeout(function(){
			    $('#paletas').addClass('magictime vanishIn');
			}, 200);
			setTimeout(function(){
			    $('#paletas-shadow').addClass('magictime slideDownRetourn');
			}, 1000);
		};
		
		var garrafon_topping_mix = $('#garrafon-topping-mix').offset().top-650;
		if (scroll > garrafon_topping_mix) {
			setTimeout(function(){
			    $('#garrafon-topping-mix').addClass('magictime vanishIn');
			}, 200);
			setTimeout(function(){
			    $('#garrafon-topping-mix-shadow').addClass('magictime slideDownRetourn');
			}, 1000);
		};

		var coco = $('#coco').offset().top-650;
		if (scroll > coco) {
			setTimeout(function(){
			    $('#coco').addClass('magictime vanishIn');
			}, 200);
			setTimeout(function(){
			    $('#coco-shadow').addClass('magictime slideDownRetourn');
			}, 1000);
		};
	};

});

$('.navbar-toggle').on('click', function (){
	$('.navbar-default').toggleClass('active_');
});

$('.products-menu a').on('click', function(){
	var _current_ = $(this).attr('href').substr(1);
	$('.products-menu a').removeClass('active');
	$(this).addClass('active');
	$('.col-xs-6.flavors').addClass('hidden');
	$('.' + _current_).removeClass('hidden').addClass('magictime vanishIn');
});

setTimeout(function(){
    $('.helados-mobile').addClass('magictime puffIn');
}, 200);