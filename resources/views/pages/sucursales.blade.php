@extends('app')

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
			<h2 class="title cafe oswald"><span class="icon-garrafa"></span> PABLO NERUDA</h2>
			<p class="address">
				Av. Pablo Neruda 3158 <br>
				Col. Providencia <br>
				<a class="cafe" href="#ver mapa">VER MAPA <span class="icon-arrow"></span></a>
			</p>
			<div class="images">
				<figure><img src="/images/sucursal.jpg" alt="sucursal le garraf"></figure>
			</div>
		</div>

		<div class="sucursal col-xs-12 col-sm-6">
			<h2 class="title cafe oswald"><span class="icon-garrafa"></span> CHAPALITA</h2>
			<p class="address">
				Niño Obrero # 1466 esq. Guadalupe <br>
				Colonia Chapalita<br>
				<a class="cafe" href="#ver mapa">VER MAPA <span class="icon-arrow"></span></a>
			</p>
			<div class="images">
				<figure><img src="/images/sucursal.jpg" alt="sucursal le garraf"></figure>
			</div>
		</div>

		<div class="sucursal col-xs-12 col-sm-6">
			<h2 class="title cafe oswald"><span class="icon-garrafa"></span> ANDARES</h2>
			<p class="address">
				Plaza Andares <br>
				Planta baja <br>
				<a class="cafe" href="#ver mapa">VER MAPA <span class="icon-arrow"></span></a>
			</p>
			<div class="images">
				<figure><img src="/images/sucursal.jpg" alt="sucursal le garraf"></figure>
			</div>
		</div>

		<div class="sucursal col-xs-12 col-sm-6">
			<h2 class="title cafe oswald"><span class="icon-garrafa"></span> TOSCANA</h2>
			<p class="address">
				Próximamente.<br><br>
				<a class="cafe" href="#ver mapa">VER MAPA <span class="icon-arrow"></span></a>
			</p>
			<div class="images">
				<figure><img src="/images/sucursal.jpg" alt="sucursal le garraf"></figure>
			</div>
		</div>

	</div>

	<div class="container-fluid">
		<div class="row all-long">
			<div class="top"></div>
			<img class="hidden-md hidden-lg hidden-xl" src="http://maps.googleapis.com/maps/api/staticmap?center=20.699776,-103.417528&size=860x400&style=feature:landscape|element:geometry|saturation:-500&markers=20.697196,-103.390865|20.708532,-103.411972|20.665309,-103.408640|20.729280,-103.435140&zoom=12&key=AIzaSyA5T-k23n9ncuGYzXtd7ayCWkJEdXduzBc" alt="Mapa de sucursales LE GARRAF">
			<div id="map"></div>
			<div class="bottom"></div>
		</div>
	</div>
@stop