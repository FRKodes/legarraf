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
	if (nieve_normal.length) {

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
	if ($('#lunetas').length) {

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
	if ($('#garrafon-topping-mix').length) {
		// console.log('paletas');
		// var paletas = $('#paletas').offset().top-650;
		// if (scroll > paletas) {
		// 	setTimeout(function(){
		// 	    $('#paletas').addClass('magictime vanishIn');
		// 	}, 200);
		// 	setTimeout(function(){
		// 	    $('#paletas-shadow').addClass('magictime slideDownRetourn');
		// 	}, 1000);
		// };
		
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

	var myLatlng = new google.maps.LatLng(20.699776,-103.417528);
	var neruda = new google.maps.LatLng(20.697196,-103.390865);
	var chapalita = new google.maps.LatLng(20.708532,-103.411972);
	var andares = new google.maps.LatLng(20.665309,-103.408640);
	var toscana = new google.maps.LatLng(20.729280,-103.435140);
	var mapOptions = {
	  zoom: 12,
	  center: myLatlng
	}
	var map = new google.maps.Map(document.getElementById("map"), mapOptions);

	var marker = new google.maps.Marker({
	    position: neruda,
	    title:"LE GARRAF Pablo Neruda"
	});

	var marker_chapalita = new google.maps.Marker({
	    position: chapalita,
	    title:"LE GARRAF Chapalita"
	});

	var marker_andares = new google.maps.Marker({
	    position: andares,
	    title:"LE GARRAF Andares"
	});

	var marker_toscana = new google.maps.Marker({
	    position: toscana,
	    title:"LE GARRAF Toscana"
	});

	// To add the marker to the map, call setMap();
	marker_toscana.setMap(map);
	marker_andares.setMap(map);
	marker_chapalita.setMap(map);
	marker.setMap(map);


});

$('.navbar-toggle').on('click', function (){
	$('.navbar-default').toggleClass('active_');
});

$('.products-menu a').on('click', function(){
	var _current_ = $(this).attr('href').substr(1);
	$('.products-menu a').removeClass('active');
	$(this).addClass('active');
	$('.col-xs-3.flavors').addClass('hidden');
	$('.' + _current_).removeClass('hidden').addClass('magictime vanishIn');
});

setTimeout(function(){
    $('.helados-mobile').addClass('magictime puffIn');
}, 200);


$(document).ready(function(){
	$('.images.paletas').slick({
		autoplay: true,
		autoplaySpeed: 3500,
		dots: true
	});
	$('.helados-mobile.home').slick({
		autoplay: true,
		autoplaySpeed: 3000,
		dots: true
	});
	$('.quotation button, .quotation p').on('click', function (e){
		e.preventDefault();
		$('.people-population').toggleClass('visible');
	});
	$('.people-population a').on('click', function (e){
		e.preventDefault();
		var num_people = $(this).attr('data-value');
		var number = $(this).attr('data-number');
		var balls = $(this).attr('data-balls');
		$('.people-population').removeClass('visible');
		$('.people p').html(num_people);
		$('#num_people').val(number);
		$('.disclaimer p').html(balls);
		$('span.balls').removeClass('visible');
		$('._' + number).addClass('visible');

		// console.log();
		reference();
	});

	$('#toppings label').on('click', function(){
		var checkBox = $('#checkbox_toppings');
        checkBox.attr("checked", !checkBox.attr("checked"));
        console.log(checkBox.val());
        if (checkBox.attr("checked") === "checked") {
        	$('#price_per_head').val();
        	console.log('ok');
        };
	});
	$('#splenda label').on('click', function(){
		var checkBox = $('#checkbox_splenda');
        checkBox.attr("checked", !checkBox.attr("checked"));
        console.log(checkBox.val());
	});
});

var reference = (function thename(){
	var total = $('#price_per_head').val() * $('#num_people').val();
    console.log(total);
    return thename; //return the function itself to reference
    $('#total_').html('total');
}());