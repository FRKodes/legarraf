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
	
	$("#datepicker").datepicker();

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
	$('.quotation button, .quotation p.people_click').on('click', function (e){
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
		reference();
	});
	
	$('#check_top').on('click', function(){
		$(this).toggleClass('checked');
		var price_per_head = parseInt($('#price_per_head').val());
		var toppings = parseInt($('#toppings_price').val());

		if ($(this).hasClass('checked')) {
			$('#price_per_head').val(price_per_head + toppings);
		}else{
			$('#price_per_head').val(price_per_head - toppings);
		};
		reference();
	});

	$('#check_spl').on('click', function(){
		$(this).toggleClass('checked');
		var price_per_head = parseInt($('#price_per_head').val());
		var splenda = parseInt($('#splenda_price').val());

		if ($(this).hasClass('checked')) {
			$('#price_per_head').val(price_per_head + splenda);
		}else{
			$('#price_per_head').val(price_per_head - splenda);
		};
		reference();
	});
	
});

var reference = (function thename(){
	var total = $('#price_per_head').val() * $('#num_people').val();
	parseInt(total);
    console.log('' + 'Total: ' + total);
    $('#total_price').val(total);
    $('#total_').html(total);
    return thename; //return the function itself to reference
}());

/* validator */
$(function(){
	var formSettings = {
		singleError : function($field, rules){ $field.closest('.form-group').removeClass('valid').addClass('error'); $('.alert.alert-danger').removeClass('hidden');},
		singleSuccess : function($field, rules){ $field.closest('.form-group').removeClass('error').addClass('valid'); $('.alert.alert-danger').addClass('hidden');},
		overallSuccess : function(){

			var form    	= $('#eventForm'),
				nombre   	= form.find( "input[name='nombre']" ).val(),
				email   	= form.find( "input[name='email']" ).val(),
				num_people	= form.find( "input[name='num_people']" ).val(),
				total		= form.find( "input[name='total_price']" ).val(),
				toppings	= form.find( "input[name='toppings_price']" ).val(),
				splenda		= form.find( "input[name='splenda_price']" ).val(),
				_token   	= form.find( "input[name='_token']" ).val(),
				action  	= form.attr( "action"),
				url     	= action;
				
			console.log(_token);
			console.log(action);
			console.log(num_people);
			console.log(toppings);
			console.log(splenda);
			console.log('Total: '+ total);
			console.log(nombre);
			console.log(email);


			var posting = $.post( 
				
				url, { nombre: nombre, email: email, num_people: num_people, total: total, toppings: toppings, splenda: splenda, _token: _token }

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