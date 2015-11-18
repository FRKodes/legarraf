@extends('app')

@section('current_section_title', 'Acerca de nosotros')

@section('content')
	<div class="container-fluid">
		<div class="row wood">
			<div class="logo-top icon-garraf"></div>
			<p class="slogan oswald">
				ACERCA DE<br>
				<span class="satisfy">nosotros</span>
			</p>
		</div>
	</div>
	<div class="container">
		<div class="helados-mobile">
			<img class="img-garrafa" src="/images/garrafa.png" width="320" height="469" alt="garrafa">
		</div>

		<div class="home-prod m-top-65">
			<p class="oswald cafe hidden-sm hidden-md hidden-lg">
				CONOCE NUESTRA <br>
				<span class="satisfy">historia</span>
			</p>
			<div class="images">
				<img id="lunetas" src="/images/nosotros_sinlunetas.jpg" width="400" height="410" alt="nieve nosotros, conoce nuestra historia" class="fresh-img m-top-55"> <br>
				<img id="lunetas-shadow" src="/images/shadow.png" width="220" height="47" alt="ice cream shadow" class="shadow-img">
			</div>
			<div class="info">
				<p class="oswald cafe hidden-xs">
					CONOCE NUESTRA <br>
					<span class="satisfy">historia</span>
				</p>
				<p>
					A mediados de Abril de 2014 nace “Le Garraf” una marca cuya finalidad principal es ofrecer una opción : fresca , original , divertida a los antojos de nuestros clientes. <br>
					Desde el principio , la intención fué crear una atmósfera única ofreciendo sabores de nieve artesanal fuera de lo convencional (Como Pulparindo , Mazapán , Danonino , pelón Pelo Rico ) ofreciendo la posibilidad de mezclar estos sabores con “toppings” mismos que son el complemento perfecto para probar una nieve como no lo habías hecho antes. <br>
					Cabe mencionar que para los clientes que cuidan su salud y su figura “Le Garraf” desarrolló una línea de sabores hechos con Splenda ,  ofreciendo opciones alternativas apegadas a la tendencia saludable.
				</p>
			</div>
		</div>

		<div class="home-prod alternativa">
			<p class="oswald cafe  hidden-sm hidden-md hidden-lg hidden-xl">
				NIEVE DE GARRAFA <br>
				<span class="satisfy">y algo más</span>
			</p>
			<div class="images alternativa">
				<img id="vaso" src="/images/garrafon.png" width="350" height="471" alt="garrafon" class="fresh-img m-top-55 m-top0"> <br>
				<img id="vaso-shadow" src="/images/shadow.png" width="220" height="47" alt="ice cream shadow" class="shadow-img">
			</div>
			<div class="info">
				<p class="oswald cafe hidden-xs">
					NIEVE DE GARRAFA<br>
					<span class="satisfy">y algo más</span>
				</p>
				<p>
					Además de estas combinaciones en le garraf ofrecemos una red de antojos como papas cuerdas que mezclan ingredientes que hacen salivar a nuestros clientes , postres desde pastel de tres leches , scones de chispas de chocolate , galletas las cuales se pueden combinar con nieve de garrafa creando el “Le Garraf Cookie Sandwich” entre muchos otros antojos más. <br>					 
					Gracias a nuestras propuestas , nuestra mezcla de sabores , nuestra innovación diaria decimos que Le Garraf vino a cambiar el esquema de las nieves de garrafa tradicionales haciendo un concepto saludable , divertido y único en su especie.
				</p>
			</div>
		</div>

	</div>
@stop