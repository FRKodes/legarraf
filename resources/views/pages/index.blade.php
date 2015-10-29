@extends('app')

@section('current_section_title', 'Inicio')

@section('content')
	<div class="container-fluid">
		<div class="row wood">
			<div class="logo-top icon-garraf"></div>
			<p class="slogan oswald">
				LA NIEVE COMO NUNCA ANTES <br>
				<span class="satisfy">la habías visto</span>
			</p>
		</div>
	</div>
	<div class="container">
		<div class="helados-mobile">
			<img class="img-left" src="/images/nieve_izquierda.png" alt="Nieve izq">
			<img class="img-center" src="/images/nieve_centro.png" alt="Nieve con rielitos">
			<img class="img-right" src="/images/nieve_derecha.png" alt="Nieve der">
		</div>

		<div class="home-prod m-top-65">
			<p class="oswald cafe hidden-sm hidden-md hidden-lg">
				FRESCO, ORIGINAL <br>
				<span class="satisfy">y divertido</span>
			</p>
			<div class="images">
				<img src="/images/fresco-original-divertido.png" alt="fresco-original-divertido" class="fresh-img magic"> <br>
				<img src="/images/shadow.png" alt="ice cream shadow" class="shadow-img magic">
			</div>
			<div class="info">
				<p class="oswald cafe hidden-xs">
					FRESCO, ORIGINAL <br>
					<span class="satisfy">y divertido</span>
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. A laborum maxime facilis fugit asperiores porro, id, minus, hic libero corrupti voluptatem ipsam nisi nesciunt! Perferendis exercitationem cupiditate voluptas placeat fugiat.
				</p>
				<a href="#" class="cafe"><b>NUESTROS PRODUCTOS</b> <span class="icon-arrow"></span></a>
			</div>
		</div>

		<div class="home-prod alternativa">
			<p class="oswald cafe  hidden-sm hidden-md hidden-lg hidden-xl">
				UNA ALTERNATIVA <br>
				<span class="satisfy">saludable</span>
			</p>
			<div class="images alternativa">
				<img src="/images/endulzada-con-splenda.png" alt="Nieve endulzada con Splenda" class="fresh-img magic"> <br>
				<img src="/images/shadow.png" alt="ice cream shadow" class="shadow-img magic">
			</div>
			<div class="info">
				<p class="oswald cafe hidden-xs">
					UNA ALTERNATIVA <br>
					<span class="satisfy">saludable</span>
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. A laborum maxime facilis fugit asperiores porro, id, minus, hic libero corrupti voluptatem ipsam nisi nesciunt! Perferendis exercitationem cupiditate voluptas placeat fugiat.
				</p>
				<a href="#" class="cafe"><b>NUESTROS PRODUCTOS</b> <span class="icon-arrow"></span></a>
			</div>
		</div>

	</div>
	<div class="bricks">
		<div class="icon-garrafon"></div>	
	</div>

	<div class="container">
		<div class="home-prod m-top-230 garrafon">
			<img src="/images/garrafon.png" alt="producto garrafon" class="fresh-img magic"> <br>
			<img src="/images/shadow.png" alt="garrafón shadow" class="shadow-img magic">
			<p class="oswald cafe b-top b-bottom">
				FRESCO, FRUTAL<br>
				<span class="satisfy">y natural</span>
			</p>
			<p>
				<a href="#" class="cafe"><b>CONOCE GARRAFÓN</b> <span class="icon-arrow"></span></a>
			</p>
		</div>

	</div>
	
	<div class="container-fluid branches">
		<div class="row">
			<div class="container">
				<h2 class="title oswald cafe">SUCURSALES</h2>
				
				<div class="address">
					<div class="title oswald cafe"><span class="icon-garrafa"></span> PABLO NERUDA</div>
					<div class="info">
						<p>
							Av. Pablo Neruda 3158 <br>
							Col. Providencia <br>
							<a href="#" class="cafe">VER MÁS <span class="icon-arrow"></span></a>
						</p>
					</div>
				</div>

				<div class="address">
					<div class="title oswald cafe"><span class="icon-garrafa"></span>Chapalita</div>
					<div class="info">
						<p>
							Niño Obrero # 1466 esq. Guadalupe <br>
							Colonia Chapalita<br>
							<a href="#" class="cafe">VER MÁS <span class="icon-arrow"></span></a>
						</p>
					</div>
				</div>

				<div class="address">
					<div class="title oswald cafe"><span class="icon-garrafa"></span>Andares</div>
					<div class="info">
						<p>
							Plaza Andares <br>
							Planta baja <br>
							<a href="#" class="cafe">VER MÁS <span class="icon-arrow"></span></a>
						</p>
					</div>
				</div>

				<div class="address">
					<div class="title oswald cafe"><span class="icon-garrafa"></span>Toscana</div>
					<div class="info">
						<p>
							Próximamente.<br>
							<a href="#" class="cafe">VER MÁS <span class="icon-arrow"></span></a>
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>
@stop