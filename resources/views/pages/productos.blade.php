@extends('app')

@section('current_section_title', 'Conoce todo lo que tenemos para tí...')

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
				<img class="img-productos" src="/images/productos-le-garraf.png" width="550" height="392" alt="productos le garraf">
			</div>
			
		</div>

		<div class="container cafe">
			<h2 class="oswald text-center m-top0">ESTAS SON NUESTRAS<br><span class="satisfy">especialidades</span></h2>
			<div class="especialidad col-xs-6 col-md-4"><p class="satisfy text-center">cazuelita chamoy</p><img src="/images/cazuelita.jpg" width="320" height="320" alt="czuelita de chamoy LE GARRAF"></div>
			<div class="especialidad col-xs-6 col-md-4"><p class="satisfy text-center">pastel de 3 leches</p><img class="tresleches" src="/images/pastel.jpg" width="320" height="422" alt="pastel de tres leches LE GARRAF"></div>
			<div class="especialidad col-xs-6 col-md-4"><p class="satisfy text-center">flanke</p><img class="flanke" src="/images/flanke.jpg" width="320" height="320" alt="flanke LE GARRAF"></div>
			<div class="especialidad col-xs-6 col-md-4"><p class="satisfy text-center">cookie sandwich</p><img src="/images/cookie_sandwich.jpg" width="320" height="358" alt="coockie sandwich LE GARRAF"></div>
			<div class="especialidad col-xs-6 col-md-4"><p class="satisfy text-center">scone especial</p><img class="scone" src="/images/scone-especial.jpg" width="320" height="487" alt="scone especial LE GARRAF"></div>
			<div class="especialidad col-xs-6 col-md-4"><p class="satisfy text-center">papas cuerdas</p><img class="papas" src="/images/papas-cuerdas.jpg" width="320" height="467" alt="papas cuerdas garrafón"></div>
		</div>

		<div class="container-fluid">
			<div class="row all-long top">
				<div class="top"></div>
			</div>
			
			<div class="row all-long products">
				
				
				<ul class="products-menu oswald">
					<li><a class="active" href="#agua">AGUA</a></li>
					<li><a href="#crema">CREMA</a></li>
					<li><a href="#splenda">SPLENDA</a></li>
				</ul>
				
				<div class="container">
					
					<div class="col-xs-3 col-sm-2 flavors agua splenda"><p class="satisfy text-center blanco">ciruela</p><img src="/images/ciruela.png" width="120" height="120" alt="sabor ciruela"></div>
					<div class="col-xs-3 col-sm-2 flavors agua splenda"><p class="satisfy text-center blanco">fresa</p><img src="/images/fresa.png" width="120" height="120" alt="sabor fresa"></div>
					<div class="col-xs-3 col-sm-2 flavors agua"><p class="satisfy text-center blanco">guanabana</p><img class="guanabana" src="/images/guanabana.png" width="120" height="120" alt="sabor guanabana"></div>
					<div class="col-xs-3 col-sm-2 flavors agua splenda"><p class="satisfy text-center blanco">limón</p><img class="limon" src="/images/limon.png" width="120" height="120" alt="sabor limon"></div>
					<div class="col-xs-3 col-sm-2 flavors agua"><p class="satisfy text-center blanco">mandarina</p><img src="/images/mandarina.png" width="120" height="120" alt="sabor mandarina"></div>
					<div class="col-xs-3 col-sm-2 flavors agua splenda"><p class="satisfy text-center blanco">mango</p><img class="mango" src="/images/mango.png" width="120" height="120" alt="sabor mango"></div>
					
					<div class="col-xs-3 col-sm-2 flavors crema hidden"><p class="satisfy text-center blanco">berries</p><img src="/images/berries.png" width="120" height="120" alt="sabor berries"></div>
					<div class="col-xs-3 col-sm-2 flavors crema hidden"><p class="satisfy text-center blanco">cajeta</p><img src="/images/cajeta.png" width="120" height="120" alt="sabor cajeta"></div>
					<div class="col-xs-3 col-sm-2 flavors crema hidden"><p class="satisfy text-center blanco">chocolate</p><img src="/images/chocolate.png" width="120" height="120" alt="sabor chocolate"></div>
					<div class="col-xs-3 col-sm-2 flavors crema hidden"><p class="satisfy text-center blanco">chongos</p><img src="/images/chongos.png" width="120" height="120" alt="sabor chongos"></div>
					<div class="col-xs-3 col-sm-2 flavors crema splenda hidden"><p class="satisfy text-center blanco">coco</p><img src="/images/coco.png" width="120" height="120" alt="sabor coco"></div>
					<div class="col-xs-3 col-sm-2 flavors crema hidden"><p class="satisfy text-center blanco">danonino</p><img src="/images/danonino.png" width="120" height="120" alt="sabor danonino"></div>
					<div class="col-xs-3 col-sm-2 flavors crema splenda hidden"><p class="satisfy text-center blanco">mamey</p><img src="/images/mamey.png" width="120" height="120" alt="sabor mamey"></div>
					<div class="col-xs-3 col-sm-2 flavors crema splenda hidden"><p class="satisfy text-center blanco">mazapan</p><img src="/images/mazapan.png" width="120" height="120" alt="sabor mazapan"></div>
					<div class="col-xs-3 col-sm-2 flavors crema splenda hidden"><p class="satisfy text-center blanco">nuez</p><img src="/images/nuez.png" width="120" height="120" alt="sabor nuez"></div>
					<div class="col-xs-3 col-sm-2 flavors crema hidden"><p class="satisfy text-center blanco">nutella</p><img src="/images/nutella.png" width="120" height="120" alt="sabor nutella"></div>
					<div class="col-xs-3 col-sm-2 flavors crema hidden"><p class="satisfy text-center blanco">platano</p><img src="/images/platano.png" width="120" height="120" alt="sabor platano"></div>
					<div class="col-xs-3 col-sm-2 flavors crema splenda hidden"><p class="satisfy text-center blanco">vainilla</p><img src="/images/vainilla.png" width="120" height="120" alt="sabor vainilla"></div>

					<div class="col-xs-3 col-sm-2 flavors splenda hidden"><p class="satisfy text-center blanco">jamaica</p><img src="/images/jamaica.png" width="120" height="120" alt="sabor jamaica splenda"></div>
					<div class="col-xs-3 col-sm-2 flavors splenda hidden"><p class="satisfy text-center blanco">limón con chía</p><img src="/images/limon_chia.png" width="120" height="120" alt="sabor limón con chía"></div>

				</div>

			</div>

			<div class="row all-long bottom">
				<div class="bottom"></div>
			</div>
		</div>
		
		<div class="container">
			
			<h2 class="oswald cafe text-center">TENEMOS 3<br><span class="satisfy">tamaños</span></h2>

			<div class="col-xs-12 col-sm-4 cafe text-center">
				<h3 class="title">CHICO</h3>
				<p>3 bolas + 1 topping</p>
				<span class="icon-ice-cream"></span>
				<span class="icon-ice-cream"></span>
				<span class="icon-ice-cream"></span>
			</div>

			<div class="col-xs-12 col-sm-4 cafe text-center">
				<h3 class="title">MEDIANO</h3>
				<p>4 bolas + 2 topping</p>
				<span class="icon-ice-cream"></span>
				<span class="icon-ice-cream"></span>
				<span class="icon-ice-cream"></span>
				<span class="icon-ice-cream"></span>
			</div>

			<div class="col-xs-12 col-sm-4 cafe text-center">
				<h3 class="title">GRANDE</h3>
				<p>5 bolas + 3 topping</p>
				<span class="icon-ice-cream"></span>
				<span class="icon-ice-cream"></span>
				<span class="icon-ice-cream"></span>
				<span class="icon-ice-cream"></span>
				<span class="icon-ice-cream"></span>
			</div>
			
			<h2 class="cafe satisfy text-center litros col-xs-12">1 litro y 1/2 litro</h2>
			<p class="text-center">
				<img class="litro-img" src="images/litro.jpg" alt="litro y medio litro nieve LE GARRAF">
			</p>
		</div>
		
@stop