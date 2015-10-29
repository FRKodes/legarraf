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
				<img id="nieve-normal" src="/images/fresco-original-divertido.png" alt="fresco-original-divertido" class="fresh-img"> <br>
				<img id="nieve-normal-shadow" src="/images/shadow.png" alt="ice cream shadow" class="shadow-img">
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
				<img id="nieve-splenda" src="/images/endulzada-con-splenda.png" alt="Nieve endulzada con Splenda" class="fresh-img"> <br>
				<img id="nieve-splenda-shadow" src="/images/shadow.png" alt="ice cream shadow" class="shadow-img">
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
			<img id="agua" src="/images/garrafon_agua.png" alt="producto garrafon" class="fresh-img"> <br>
			<img id="agua-shadow" src="/images/shadow.png" alt="garrafón shadow" class="shadow-img">
			<p class="oswald cafe b-top b-bottom">
				FRESCO, FRUTAL<br>
				<span class="satisfy">y natural</span>
			</p>
			<p>
				<a href="#" class="cafe"><b>CONOCE GARRAFÓN</b> <span class="icon-arrow"></span></a>
			</p>
		</div>

	</div>
@stop