@extends('app')
@section('current_section_title', 'Encuentra tu sucural más cercana')
@section('content')
	<div class="container-fluid">
		<div class="row wood">
			<div class="logo-top icon-garraf"></div>
			<p class="slogan oswald">
				ENCUENTRA TU SUCURAL<br>
				<span class="satisfy">más cercana</span>
			</p>
		</div>
	</div>
	
	<div class="container">
		<div class="helados-mobile map-branches">
			<img class="img-mapa" src="/images/mapa-sucursales-le-garraf.png" alt="mapa sucursales le garraf">
		</div>

		<div class="sucursal col-xs-12 col-sm-6">
			<h2 class="title cafe oswald"><span class="icon-garrafa"></span> PROVIDENCIA</h2>
			<p class="address">
				Av. Pablo Neruda 3158 <br>
				Col. Providencia <br>
				<a class="cafe" href="https://www.google.com.mx/maps/place/Le+Garraf/@20.6973157,-103.3905785,19z/data=!4m2!3m1!1s0x0000000000000000:0x7f3e51e76414fd2d?hl=es-419" target="_blank">VER MAPA <span class="icon-arrow"></span></a>
			</p>
			<div class="images">
				<figure><img src="/images/legarrag-pablo-neruda.jpg" alt="sucursal le garraf Pablo Neruda"></figure>
			</div>
		</div>

		<div class="sucursal col-xs-12 col-sm-6">
			<h2 class="title cafe oswald"><span class="icon-garrafa"></span> CHAPALITA</h2>
			<p class="address">
				Niño Obrero # 1466 esq. Guadalupe <br>
				Colonia Chapalita<br>
				<a class="cafe" href="https://www.google.com.mx/maps/dir//20.6653762,-103.4085075/@20.6652946,-103.4091365,19z?hl=es-419" target="_blank">VER MAPA <span class="icon-arrow"></span></a>
			</p>
			<div class="images">
				<figure><img src="/images/legarraf-chapalita.jpg" alt="fachada le garraf sucursal chapalita"></figure>
			</div>
		</div>

		<div class="sucursal col-xs-12 col-sm-6">
			<h2 class="title cafe oswald"><span class="icon-garrafa"></span> ANDARES</h2>
			<p class="address">
				Plaza Andares <br>
				Planta baja <br>
				<a class="cafe" href="https://www.google.com.mx/maps/dir//20.7090166,-103.4121508/@20.7088328,-103.4130688,17.44z?hl=es-419" target="_blank">VER MAPA <span class="icon-arrow"></span></a>
			</p>
			<div class="images">
				<figure><img src="/images/andares.jpg" alt="sucursal le garraf andares"></figure>
			</div>
		</div>

		<div class="sucursal col-xs-12 col-sm-6">
			<h2 class="title cafe oswald"><span class="icon-garrafa"></span> TOSCANA</h2>
			<p class="address">
				Avenida Santa Margarita #3849.<br>
				Plaza la Toscana<br>
				<a class="cafe" href="https://www.google.com.mx/maps/dir//20.7286718,-103.4342957/@20.7293794,-103.4339654,18.12z?hl=es-419" target="_blank">VER MAPA <span class="icon-arrow"></span></a>
			</p>
			<div class="images">
				<figure><img src="/images/sucursal-toscana.jpg" alt="sucursal le garraf toscana"></figure>
			</div>
		</div>

		<div class="sucursal col-xs-12 col-sm-6">
			<h2 class="title cafe oswald"><span class="icon-garrafoncito"></span> GARRAFÓN PROVIDENCIA</h2>
			<p class="address">
				Av. Pablo Neruda 3158 <br>
				Col. Providencia <br>
				<a class="cafe" href="https://www.google.com.mx/maps/dir//20.6970416,-103.3915761/@20.6974921,-103.3918268,17.9z?hl=es-419" target="_blank">VER MAPA <span class="icon-arrow"></span></a>
			</p>
			<div class="images">
				<figure><img src="/images/sucursal-garrafon.jpg" alt="GARRAFÓN pablo neruda"></figure>
			</div>
		</div>

	</div>

	<div class="container-fluid">
		<div class="row all-long">
			<div class="top"></div>
			<img class="hidden-md hidden-lg hidden-xl" src="http://maps.googleapis.com/maps/api/staticmap?center=20.699776,-103.417528&size=860x400&style=feature:landscape|element:geometry|saturation:-500&markers=20.697196,-103.390865|20.708532,-103.411972|20.665309,-103.408640|20.729280,-103.435140&zoom=12&key=AIzaSyA5T-k23n9ncuGYzXtd7ayCWkJEdXduzBc" alt="Mapa de sucursales LE GARRAF">
			<div id="map" class="hidden-xs hidden-sm"></div>
			<div class="bottom"></div>
		</div>
	</div>
@stop