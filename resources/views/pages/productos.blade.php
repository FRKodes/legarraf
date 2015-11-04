@extends('app')

@section('current_section_title', 'Productos LE GARRAF')

@section('content')
	<div class="container-fluid">
			<div class="row wood">
				<div class="logo-top icon-garraf"></div>
				<p class="slogan oswald">
					CONOCE TODO LO QUE TENEMOS<br>
					<span class="satisfy">para tí...</span>
				</p>
			</div>
		</div>
		
		<div class="container productos">
			<div class="helados-mobile">
				<img class="img-productos" src="/images/productos-le-garraf.png" alt="productos le garraf">
			</div>
			
			<h2 class="oswald cafe text-center">Tenemos 3<br><span class="satisfy">tamaños</span></h2>

			<div class="col-xs-12 cafe text-center">
				<h3 class="title">CHICO</h3>
				<p>3 bolas + 1 topping</p>
				<span class="icon-ice-cream"></span>
				<span class="icon-ice-cream"></span>
				<span class="icon-ice-cream"></span>
			</div>

			<div class="col-xs-12 cafe text-center">
				<h3 class="title">MEDIANO</h3>
				<p>4 bolas + 2 topping</p>
				<span class="icon-ice-cream"></span>
				<span class="icon-ice-cream"></span>
				<span class="icon-ice-cream"></span>
				<span class="icon-ice-cream"></span>
			</div>

			<div class="col-xs-12 cafe text-center">
				<h3 class="title">GRANDE</h3>
				<p>5 bolas + 3 topping</p>
				<span class="icon-ice-cream"></span>
				<span class="icon-ice-cream"></span>
				<span class="icon-ice-cream"></span>
				<span class="icon-ice-cream"></span>
				<span class="icon-ice-cream"></span>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row all-long top">
				<div class="top"></div>
			</div>
			
			<div class="row all-long products">
				
				
				<ul class="products-menu oswald">
					<li><a class="active" href="#agua">AGUA</a></li>
					<li><a href="#crema">CREMA</a></li>
					<li><a href="#splenda">ESPLENDA</a></li>
				</ul>
				
				<div class="col-xs-6 agua splenda"><p class="satisfy text-center blanco">ciruela</p><img src="/images/ciruela.png" alt="sabor ciruela"></div>
				<div class="col-xs-6 agua splenda"><p class="satisfy text-center blanco">fresa</p><img src="/images/fresa.png" alt="sabor fresa"></div>
				<div class="col-xs-6 agua"><p class="satisfy text-center blanco">guanabana</p><img src="/images/guanabana.png" alt="sabor guanabana"></div>
				<div class="col-xs-6 agua splenda"><p class="satisfy text-center blanco">limón</p><img src="/images/limon.png" alt="sabor limon"></div>
				<div class="col-xs-6 agua"><p class="satisfy text-center blanco">mandarina</p><img src="/images/mandarina.png" alt="sabor mandarina"></div>
				<div class="col-xs-6 agua splenda"><p class="satisfy text-center blanco">mango</p><img src="/images/mango.png" alt="sabor mango"></div>
				
				<div class="col-xs-6 crema hidden"><p class="satisfy text-center blanco">cajeta</p><img src="/images/cajeta.png" alt="sabor cajeta"></div>
				<div class="col-xs-6 crema hidden"><p class="satisfy text-center blanco">chocolate</p><img src="/images/chocolate.png" alt="sabor chocolate"></div>
				<div class="col-xs-6 crema splenda hidden"><p class="satisfy text-center blanco">coco</p><img src="/images/coco.png" alt="sabor coco"></div>
				<div class="col-xs-6 crema splenda hidden"><p class="satisfy text-center blanco">mamey</p><img src="/images/mamey.png" alt="sabor mamey"></div>
				<div class="col-xs-6 crema splenda hidden"><p class="satisfy text-center blanco">nuez</p><img src="/images/nuez.png" alt="sabor nuez"></div>
				<div class="col-xs-6 crema hidden"><p class="satisfy text-center blanco">nutella</p><img src="/images/nutella.png" alt="sabor nutella"></div>
				<div class="col-xs-6 crema hidden"><p class="satisfy text-center blanco">platano</p><img src="/images/platano.png" alt="sabor platano"></div>
				<div class="col-xs-6 crema splenda hidden"><p class="satisfy text-center blanco">vainilla</p><img src="/images/vainilla.png" alt="sabor vainilla"></div>

				<div class="col-xs-6 splenda hidden"><p class="satisfy text-center blanco">jamaica</p><img src="/images/jamaica.png" alt="sabor jamaica splenda"></div>
				<div class="col-xs-6 splenda hidden"><p class="satisfy text-center blanco">limon con chía</p><img src="/images/limon_chia.png" alt="sabor limón con chía"></div>

			</div>

			<div class="row all-long bottom">
				<div class="bottom"></div>
			</div>
		</div>
@stop