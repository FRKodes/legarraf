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
			<div class="item"><img class="slide" src="/images/productos-le-garraf-nieve-agua-chile-rielitos.png" width="600" height="488" alt="productos le garraf nieve con rielitos"></div>
			<div class="item"><img class="slide" src="/images/productos-le-garraf-a-cazuelita.png" width="600" height="488" alt="productos le garraf cazuelita"></div>
			<div class="item"><img class="slide" src="/images/productos-le-garraf-papas-cuerdas.png" width="600" height="488" alt="productos le garraf papas cuerdas"></div>
			<div class="item"><img class="slide" src="/images/productos-le-garraf-bolis.png" width="600" height="488" alt="productos le garraf limon con chia"></div>
			<div class="item"><img class="slide" src="/images/productos-le-garraf-litros-medios-litros.png" width="600" height="488" alt="productos le garraf litros y medios litros"></div>
			<div class="item"><img class="slide" src="/images/productos-le-garraf-scone-especial.png" width="600" height="488" alt="productos le garraf scone especial"></div>
			<div class="item"><img class="slide" src="/images/productos-le-garraf-mochis.png" width="600" height="488" alt="productos le garraf scone especial"></div>
			<div class="item"><img class="slide" src="/images/productos-le-garraf-le-garraf-soda.png" width="600" height="488" alt="productos le garraf nieve con rielitos"></div>
			<div class="item"><img class="slide" src="/images/productos-le-garraf-b-limon-con-chia.png" width="600" height="488" alt="productos le garraf limon con chia"></div>
			<div class="item"><img class="slide" src="/images/productos-le-garraf-f-cookie-sandwich.png" width="600" height="488" alt="productos le garraf cookie sandwich"></div>
			<div class="item"><img class="slide" src="/images/productos-le-garraf-g-nieve-splenda.png" width="600" height="488" alt="productos le garraf nieve splenda"></div>
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
					Tres calificativos que incluímos en cada una de nuestras creaciones, a través de las cuales satisfacemos los antojos de nuestros consumidores. Una de las principales recetas de nuestra marca es la innovación, constantemente sacamos productos acorde a ciertas temporadas en el año, innovaciones que hacen de nuestra empresa una de las preferidas de los paladares tapatíos.
				</p>
				<a href="productos" class="cafe"><b>NUESTROS PRODUCTOS</b> <span class="icon-arrow"></span></a>
			</div>
		</div>

		<div class="home-prod alternativa">
			<p class="oswald cafe  hidden-sm hidden-md hidden-lg hidden-xl">
				UNA ALTERNATIVA <br>
				<span class="satisfy">saludable</span>
			</p>
			<div class="images alternativa">
				<img id="nieve-splenda" src="/images/nieve-limon-con-chia-splenda-new.png" width="350" height="267" alt="nieve-limon con chia endulzada con Splenda" class="fresh-img"> <br>
				<img id="nieve-splenda-shadow" src="/images/shadow.png" alt="ice cream shadow" width="220" height="47" class="shadow-img">
			</div>
			<div class="info">
				<p class="oswald cafe hidden-xs">
					UNA ALTERNATIVA <br>
					<span class="satisfy">saludable</span>
				</p>
				<p>
					En Le Garraf contamos con una amplia gama de posibilidades para nuestros clientes que buscan una línea saludable . Nieves , Paletas , Aguas entre otros que permiten seguir con la dieta ; así como una barra de toppings , frutas e ingredientes naturales a través de los cuales nos posicionamos como una marca que satisface los antojos de clientes que cuidan la figura.
				</p>
				<a href="productos" class="cafe"><b>NUESTROS PRODUCTOS</b> <span class="icon-arrow"></span></a>
			</div>
		</div>

	</div>
	

@stop