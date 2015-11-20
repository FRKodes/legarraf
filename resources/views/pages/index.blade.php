@extends('app')

@section('current_section_title', 'La nieve como nunca la habías visto.')

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
		<div class="helados-mobile home">
			<div class="item"><img class="slide" src="/images/productos-le-garraf-a-cazuelita.png" width="600" height="488" alt="productos le garraf cazuelita"></div>
			<div class="item"><img class="slide" src="/images/productos-le-garraf-b-limon-con-chia.png" width="600" height="488" alt="productos le garraf limon con chia"></div>
			<div class="item"><img class="slide" src="/images/productos-le-garraf-c-nieve-con-rielitos.png" width="600" height="488" alt="productos le garraf nieve con rielitos"></div>
			<div class="item"><img class="slide" src="/images/productos-le-garraf-d-pastel-tres-leches.png" width="600" height="488" alt="productos le garraf pastel tres leches"></div>
			<div class="item"><img class="slide" src="/images/productos-le-garraf-e-scone-especial.png" width="600" height="488" alt="productos le garraf scone especial"></div>
			<div class="item"><img class="slide" src="/images/productos-le-garraf-f-cookie-sandwich.png" width="600" height="488" alt="productos le garraf cookie sandwich"></div>
			<div class="item"><img class="slide" src="/images/productos-le-garraf-g-nieve-splenda.png" width="600" height="488" alt="productos le garraf nieve splenda"></div>
			<div class="item"><img class="slide" src="/images/productos-le-garraf-h-paletas.png" width="600" height="488" alt="productos le garraf paletas"></div>
			<div class="item"><img class="slide" src="/images/productos-le-garraf-i-topping-mix.png" width="600" height="488" alt="productos le garraf topping mix"></div>
			<div class="item"><img class="slide" src="/images/productos-le-garraf-j-agua.png" width="600" height="488" alt="productos le garraf agua"></div>
		</div>

		<div class="home-prod m-top-65">
			<p class="oswald cafe hidden-sm hidden-md hidden-lg">
				FRESCO, ORIGINAL <br>
				<span class="satisfy">y divertido</span>
			</p>
			<div class="images">
				<img id="nieve-normal" src="/images/cazuelita_chamoy_fresco_original.jpg" width="250" height="253" alt="cazuelita de chamoy fresco original divertido" class="fresh-img"> <br>
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
				<img id="nieve-splenda" src="/images/nieve-limon-con-chia-splenda.jpg" width="350" height="267" alt="nieve-limon con chia endulzada con Splenda" class="fresh-img"> <br>
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
				<a href="garrafon" class="cafe"><b>CONOCE GARRAFÓN</b> <span class="icon-arrow"></span></a>
			</p>
		</div>

	</div>
@stop