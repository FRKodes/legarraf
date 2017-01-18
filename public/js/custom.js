/*-------------------------------
	VALIDATE.JS
	A barebones jQuery validation plugin
	@author Todd Francis
	@version 1.0.3
-------------------------------*/
;(function(r,d,l){d.fn.validate=function(m){return this.each(function(){var f=d(this);if(l===f.data("validate")){var j=new d.validate(m,f);f.data("validate",j)}})};d.validate=function(m,f){function j(a,b){-1==d.inArray(a,b)&&b.push(a);return b}function p(a){a=a.slice(a.indexOf("[")+1,-1);return-1!==a.indexOf(",")?a.split(","):[a]}function n(a){for(var b=[],c=0;c<a.length;c++){var g=a[c],d=[],h=g.indexOf("[");-1!==h&&(d=d.concat(p(g)),g=g.slice(0,h));b.push({rule:g,args:d})}return b}var h=d.extend(!0,
{debug:!1,autoDetect:!1,visibleOnly:!0,beforeSubmit:function(){},singleError:function(){},overallError:function(){},singleSuccess:function(){},overallSuccess:function(){},regExp:{alpha:/^[a-zA-Z]*$/,numeric:/^[0-9]*$/,alphanumeric:/^[a-zA-Z0-9]*$/,url:/^(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$/,email:/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/}},
m),c=this,q=["checkGroupRequired","checkGroupMin","checkGroupMax"];c.$form=f;c.version="1.0.0";if(f!==l)f.on("submit",function(a){if(!c.validate()||h.debug)a.stopImmediatePropagation(),a.preventDefault()});c.validate=function(a){a="undefined"===typeof a?c.$form:a;var b=!1,e=d();h.beforeSubmit.call(c);c.fieldsToCheck(a).each(function(){var a=d(this);if((h.visibleOnly&&a.is(":visible")||!h.visibleOnly)&&!c.checkField(a))b=!0,e=e.add(a)});b?h.overallError.call(c,a,e):!1===h.overallSuccess.call(c,a)&&
(b=!0);return!b};c.checkField=function(a){var b=a.data("validate")?a.data("validate").split("|"):[];a.val();var e=[];if(h.autoDetect&&a.is('input:not([type="checkbox"], [type="radio"])')&&"text"!=a.attr("type"))switch(e=a.attr("type"),e){case "number":b=j("numeric",b);break;default:b=j(e,b)}b=n(b);e=c.checkValue(a,b);if(e instanceof Object)return h.singleError.call(c,a,e),!1;h.singleSuccess.call(c,a,b);return!0};c.checkValue=function(a,b){if(!b)return!0;b="string"==typeof b?n(b):b;for(var e=[],g=
0;g<b.length;g++){var f=b[g].rule,k="",j=[a].concat(b[g].args.slice());f.indexOf("[");k="check"+f.charAt(0).toUpperCase()+f.slice(1);"checkRequired"==k&&a.is('input[type="checkbox"]')?k="checkRequiredCheckbox":-1!=d.inArray(k,q)&&(f=d('input[type="checkbox"]',a),f.length||(f=d('input[type="radio"]',a)),j=[f].concat(j.slice(1)));c[k]instanceof Function?c[k].apply(c,j)||e.push(b[g]):h.regExp[b[g].rule]?""!==a.val()&&!c.checkRegExp(a,b[g].rule)&&e.push(b[g]):e.push(b[g])}return 0<e.length?e:!0};c.fieldsToCheck=
function(a){a=d("[data-validate]",a===l?c.$form:a);h.autoDetect&&(a=d("input[required]").add(a));return a};c.checkRequired=function(a){return 0<a.val().length?!0:!1};c.checkRequiredCheckbox=function(a){return a.is(":checked")};c.checkGroupRequired=function(a){return a.filter(":checked").length?!0:!1};c.checkGroupMin=function(a,b){return a.filter(":checked").length>=b};c.checkGroupMax=function(a,b){return a.filter(":checked").length<=b};c.checkCustomRegExp=function(a,b,c){if(""===a.val())return!0;
b=RegExp(b,c);return a.val().match(b)?!0:!1};c.checkRegExp=function(a,b){return a.val().match(h.regExp[b])?!0:!1};c.checkMaxLength=function(a,b){return""===a.val()?!0:a.val().length<=b};c.checkMinLength=function(a,b){return""===a.val()?!0:a.val().length>=b};c.checkMax=function(a,b){return""===a.val()?!0:parseFloat(a.val())<=parseFloat(b)};c.checkMin=function(a,b){return""===a.val()?!0:parseFloat(a.val())>=parseFloat(b)}}})(window,jQuery);

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
	$('.col-xs-3.flavors').addClass('hidden');
	$('.' + _current_).removeClass('hidden').addClass('magictime vanishIn');
});

setTimeout(function(){
    $('.helados-mobile').addClass('magictime puffIn');
}, 200);


$(document).ready(function(){
	
	$("#datepicker").datepicker();
	$("#datepicker").blur(function(){
		console.log('texto: ' + $(this).val());
	});

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
	
	// $('.quotation button, .quotation p.people_click').on('click', function (e){
	// 	e.preventDefault();
	// 	$('.people-population').toggleClass('visible');
	// });

	// $('.people-population a').on('click', function (e){
	// 	e.preventDefault();
	// 	var num_people = $(this).attr('data-value');
	// 	var number = $(this).attr('data-number');
	// 	var balls = $(this).attr('data-balls');
	// 	$('.people-population').removeClass('visible');
	// 	$('.people p').html(num_people);
	// 	$('#num_people').val(number);
	// 	$('.disclaimer p').html(balls);
	// 	$('span.balls').removeClass('visible');
	// 	$('._' + number).addClass('visible');
	// 	reference();
	// });
	
	$('#num_people').blur(function (){

		var num_people = parseInt($(this).val());
		var balls = [];

		if (num_people >= 90 && num_people <100) { balls.number = 0; balls.disclaimer = 'El <b>mínimo</b> de personas para un evento es 100. '; };
		if (num_people >= 100 && num_people <200) { balls.number = 100; balls.disclaimer = 'Con <b>' + num_people + '</b> personas en tu evento puedes seleccionar hasta <b>3</b> sabores de nieve.'; };
		if (num_people >= 200 && num_people <300) { balls.number = 200; balls.disclaimer = 'Con <b>' + num_people + '</b> personas en tu evento puedes seleccionar hasta <b>6</b> sabores de nieve.'; };
		if (num_people >= 300) { balls.number = 300; balls.disclaimer = 'Con <b>' + num_people + '</b> personas en tu evento puedes seleccionar hasta <b>9</b> sabores de nieve.'; };

		$('.disclaimer p').html(balls.disclaimer);
		$('span.balls').removeClass('visible');
		$('._' + balls.number).addClass('visible');

		// console.log('Num personas: ' + num_people + ' // Balls: ' + balls.number);

		reference();
	});
	
	$('#num_garrafones').blur(function (){
		var num_garrafones = parseInt($(this).val());
		reference();
	});
	
	$('#check_top').on('click', function(){
		$(this).toggleClass('checked');
		var price_per_head = parseInt($('#price_per_head').val());
		var toppings = parseInt($('#toppings_price').val());

		if ($(this).hasClass('checked')) {
			$('#price_per_head').val(price_per_head + toppings);
			$('#toppings_price').attr('data-checked', 'Si');
		}else{
			$('#price_per_head').val(price_per_head - toppings);
			$('#toppings_price').attr('data-checked', 'No');
		};
		reference();
	});

	$('#check_spl').on('click', function(){
		$(this).toggleClass('checked');
		var price_per_head = parseInt($('#price_per_head').val());
		var splenda = parseInt($('#splenda_price').val());

		if ($(this).hasClass('checked')) {
			$('#price_per_head').val(price_per_head + splenda);
			$('#splenda_price').attr('data-checked', 'Si');
		}else{
			$('#price_per_head').val(price_per_head - splenda);
			$('#splenda_price').attr('data-checked', 'No');
		};
		reference();
	});
	
	$('#check_spl_agua').on('click', function(){
		$(this).toggleClass('checked');
		var price_garrafon = parseInt($('#price_garrafon').val());
		var splenda_agua = parseInt($('#splenda_price_agua').val());

		if ($(this).hasClass('checked')) {
			$('#price_garrafon').val(price_garrafon + splenda_agua);
			$('#splenda_price_agua').attr('data-checked', 'Si');
		}else{
			$('#price_garrafon').val(price_garrafon - splenda_agua);
			$('#splenda_price_agua').attr('data-checked', 'No');
		};
		reference();
	});
	
});

var reference = (function thename(){
	var total = $('#price_per_head').val() * $('#num_people').val();
	var total_agua = $('#price_garrafon').val() * $('#num_garrafones').val();
	var litros = $('#num_people').val()/100*15;
	var litros_agua = $('#num_garrafones').val() * 19;
	litros = litros.toFixed(1);

	parseInt(total);
    parseInt(total_agua);
    $('#total_price').val(total);
    $('#total_price_agua').val(total_agua);
    $('#total_').html(total + ' ( ' + litros + ' litros de nieve)' + ' <br> $' + total_agua + ' ( ' + litros_agua + ' litros de agua )');
    return thename; //return the function itself to reference
}());

/* validator */
$(function(){
	var formSettings = {
		singleError : function($field, rules){ $field.closest('.form-group').removeClass('valid').addClass('error'); $('.alert.alert-danger').removeClass('hidden');},
		singleSuccess : function($field, rules){ $field.closest('.form-group').removeClass('error').addClass('valid'); $('.alert.alert-danger').addClass('hidden');},
		overallSuccess : function(){

			var form    	= $('#eventForm'),
				nombre   		= form.find( "input[name='nombre']" ).val(),
				email   		= form.find( "input[name='email']" ).val(),
				num_people		= form.find( "input[name='num_people']" ).val(),
				toppings		= form.find( "input[name='toppings_price']" ).attr('data-checked'),
				splenda			= form.find( "input[name='splenda_price']" ).attr('data-checked'),
				num_garrafones	= form.find( "input[name='num_garrafones']" ).val(),
				splenda_agua	= form.find( "input[name='splenda_price_agua']" ).attr('data-checked'),
				total_agua		= form.find( "input[name='total_price_agua']" ).val(),
				total			= form.find( "input[name='total_price']" ).val(),
				fecha			= form.find( "input[name='datepicker']" ).val(),
				_token   		= form.find( "input[name='_token']" ).val(),
				action  		= form.attr( "action"),
				url     		= action;
			var posting = $.post( 
				url, { 
					nombre: nombre,
					email: email,
					num_people: num_people,
					total: total,
					fecha: fecha,
					toppings: toppings,
					splenda: splenda,
					num_garrafones: num_garrafones,
					total_agua: total_agua,
					splenda_agua: splenda_agua,
					_token: _token 
				}
				);
			posting.done(function( data ) {
				console.log(data);
				console.log('email sent!');
				$('#eventForm')[0].reset();
				$('.sent_mail_alert').fadeIn().delay(2000).fadeOut();
			});

		},
		overallError : function($form, fields){ /*Do nothing, just show the error fields*/ },
		autoDetect : true, debug : true
	};
	var $validate = $('#eventForm').validate(formSettings).data('validate');
});

$(function(){
	var formSettings = {
		singleError : function($field, rules){ $field.closest('.form-group').removeClass('valid').addClass('error'); $('.alert.alert-danger').removeClass('hidden');},
		singleSuccess : function($field, rules){ $field.closest('.form-group').removeClass('error').addClass('valid'); $('.alert.alert-danger').addClass('hidden');},
		overallSuccess : function(){

			var form    	= $('#unete'),
				nombre   	= form.find( "input[name='nombre']" ).val(),
				email		= form.find( "input[name='email']" ).val(),
				telefono	= form.find( "input[name='telefono']" ).val(),
				celular		= form.find( "input[name='celular']" ).val(),
				sucursal	= form.find( "select[name='sucursal']" ).val(),
				turno		= form.find( "select[name='turno']" ).val(),
				mensaje		= form.find( "textarea[name='mensaje']" ).val(),
				_token   	= form.find( "input[name='_token']" ).val(),
				action  	= form.attr( "action"),
				url     	= action;
			var posting = $.post( 
				url, { 	nombre: nombre, 
						email: email, 
						telefono: telefono, 
						celular: celular, 
						sucursal: sucursal, 
						turno: turno, 
						mensaje: mensaje, 
						_token: _token
					}
				);
			posting.done(function( data ) {
				console.log(data);
				console.log('email sent!');
				$('#unete')[0].reset();
				$('.sent_mail_alert').fadeIn().delay(2000).fadeOut();
			});

		},
		overallError : function($form, fields){ /*Do nothing, just show the error fields*/ },
		autoDetect : true, debug : true
	};
	var $validate = $('#unete').validate(formSettings).data('validate');
});

$(function(){
	var formSettings = {
		singleError : function($field, rules){ $field.closest('.form-group').removeClass('valid').addClass('error'); $('.alert.alert-danger').removeClass('hidden');},
		singleSuccess : function($field, rules){ $field.closest('.form-group').removeClass('error').addClass('valid'); $('.alert.alert-danger').addClass('hidden');},
		overallSuccess : function(){

			var form    	= $('#contacto'),
				nombre   	= form.find( "input[name='nombre']" ).val(),
				email		= form.find( "input[name='email']" ).val(),
				telefono	= form.find( "input[name='telefono']" ).val(),
				mensaje		= form.find( "textarea[name='mensaje']" ).val(),
				_token   	= form.find( "input[name='_token']" ).val(),
				action  	= form.attr( "action"),
				url     	= action;
			var posting = $.post( 
				url, { 	nombre: nombre, 
						email: email, 
						telefono: telefono, 
						mensaje: mensaje, 
						_token: _token
					}
				);
			posting.done(function( data ) {
				console.log(data);
				console.log('email sent!');
				$('#contacto')[0].reset();
				$('.sent_mail_alert').fadeIn().delay(2000).fadeOut();
			});

		},
		overallError : function($form, fields){ /*Do nothing, just show the error fields*/ },
		autoDetect : true, debug : true
	};
	var $validate = $('#contacto').validate(formSettings).data('validate');
});