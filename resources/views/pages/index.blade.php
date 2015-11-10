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
			<img class="img-left" src="/images/nieve_izquierda.png" width="250" height="253" alt="Nieve izq">
			<img class="img-center" src="/images/nieve_centro.png" width="449" height="479" alt="Nieve con rielitos">
			<img class="img-right" src="/images/nieve_derecha.png" width="240" height="279" alt="Nieve der">
		</div>

		<div class="home-prod m-top-65">
			<p class="oswald cafe hidden-sm hidden-md hidden-lg">
				FRESCO, ORIGINAL <br>
				<span class="satisfy">y divertido</span>
			</p>
			<div class="images">
				<img id="nieve-normal" src="/images/scone-especial.png" width="290" height="405" alt="scone especial fresco original divertido" class="fresh-img"> <br>
				<img id="nieve-normal-shadow" src="/images/shadow.png" width="220" height="47" alt="ice cream shadow" class="shadow-img">
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
				<img id="nieve-splenda" src="/images/endulzada-con-splenda.png" width="350" height="267" alt="Nieve endulzada con Splenda" class="fresh-img"> <br>
				<img id="nieve-splenda-shadow" src="/images/shadow.png" alt="ice cream shadow" width="220" height="47" class="shadow-img">
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
			<img id="agua" src="/images/garrafon_agua.png" width="450" height="789" alt="producto garrafon" class="fresh-img"> <br>
			<img id="agua-shadow" src="/images/shadow.png" width="220" height="47" alt="garrafón shadow" class="shadow-img">
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