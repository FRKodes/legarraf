@extends('app')

@section('current_section_title', 'GARRAFON')

@section('content')
	<div class="container-fluid">
		<div class="row wood bricks">
			<div class="logo-top icon-garrafon"></div>
			<p class="slogan oswald garrafon">
				¿SE TE ANTOJA<br>
				<span class="satisfy">algo más?</span>
			</p>
		</div>
	</div>
	
	<div class="container productos">
		<div class="helados-mobile garrafon">
			<img class="img-productos" src="/images/garrafon-productos.png" alt="productos garrafón">
		</div>

		<div class="home-prod m-top-65">
			<p class="oswald cafe garrafon hidden-sm hidden-md hidden-lg">
				TE PRESENTAMOS NUESTRA <br>
				<span class="satisfy">gran variedad de paletas</span>
			</p>
			<div class="images">
				<img id="paletas" src="/images/garrafon-paletas.png" alt="garrafón todas nuestras paletas" class="fresh-img"> <br>
				<img id="paletas-shadow" src="/images/shadow.png" alt="ice cream shadow" class="shadow-img">
			</div>
			<div class="info">
				<p class="oswald cafe garrafon hidden-xs">
					TE PRESENTAMOS NUESTRA <br>
					<span class="satisfy">gran variedad de paletas</span>
				</p>
				<p class="text-left">
					<span class="satisfy cafe">agua</span><br>
					Limón, mango, fresa y ciruela.
				</p>
				<p class="text-left">
					<span class="satisfy cafe">crema</span><br>
					Cajeta, nuez, pay limón, nutella, coco, horchata de fresa y chocomilk.
				</p>
				<p class="text-left">
					<span class="satisfy cafe">splenda</span><br>
					Jamaica, limón con chía, chocolate y ciruela.
				</p>
				<p class="text-left">
					<span class="satisfy cafe">chile</span><br>
					Mango con chile, clamato con rielitos, limón con rielitos, piña con picapica, pulparindo, pelón pelo rico.
				</p>
				<p class="text-left">
					<span class="satisfy cafe">kids</span><br>
					Danonino, vainilla con kisses, limón con panditas, limón y chocolate.
				</p>
				<p class="text-left">Las puedes bañar en chamoi, chocolate blanco u oscuro sin ningún costo y les puedes agregar toppings de chile y dulces.</p>
			</div>
		</div>

	</div>

	<div class="container-fluid">
		<div class="row all-long top">
			<div class="top"></div>
		</div>
		
		<div class="row all-long products">
			
			<h2 class="text-center oswald aguas blanco">AGUAS DE 1/2 LITRO Y DE 1 LITRO</h2>
			
			<ul class="products-menu oswald">
				<li><a class="active" href="#normal">NORMAL</a></li>
				<li><a href="#splenda">SPLENDA</a></li>
			</ul>
			
			<div class="container">
				
				<div class="col-xs-6 col-sm-4 flavors normal"><p class="satisfy text-center blanco">coco normal</p><img src="/images/agua-coconatural.png" alt="sabor agua coconatural"></div>
				<div class="col-xs-6 col-sm-4 flavors normal"><p class="satisfy text-center blanco">mamey</p><img src="/images/agua-mamey.png" alt="sabor agua mamey"></div>
				<div class="col-xs-6 col-sm-4 flavors normal"><p class="satisfy text-center blanco">mango</p><img src="/images/agua-mango.png" alt="sabor agua mango"></div>
				<div class="col-xs-6 col-sm-4 flavors normal"><p class="satisfy text-center blanco">guanabana</p><img src="/images/agua-guanabana.png" alt="sabor agua guanabana"></div>
				<div class="col-xs-6 col-sm-4 flavors normal"><p class="satisfy text-center blanco">ciruela</p><img src="/images/agua-ciruela-amarilla.png" alt="sabor agua ciruela amarilla"></div>
				<div class="col-xs-6 col-sm-4 flavors normal"><p class="satisfy text-center blanco">crema de coco</p><img src="/images/agua-crema-de-coco.png" alt="sabor agua crema de coco"></div>
				<div class="col-xs-6 col-sm-4 flavors normal"><p class="satisfy text-center blanco">pepino con limón</p><img src="/images/agua-pepino-con-limon.png" alt="sabor agua pepino con limon"></div>
				<div class="col-xs-6 col-sm-4 flavors splenda hidden"><p class="satisfy text-center blanco">horchata</p><img src="/images/agua-splenda-horchata.png" alt="sabor agua splenda horchata"></div>
				<div class="col-xs-6 col-sm-4 flavors splenda hidden"><p class="satisfy text-center blanco">alfalfa con limón</p><img src="/images/agua-splenda-alfalfa-con-limon.png" alt="sabor agua splenda alfalfa con limon"></div>
				<div class="col-xs-6 col-sm-4 flavors splenda hidden"><p class="satisfy text-center blanco">limón con chía</p><img src="/images/agua-splenda-limon-con-chia.png" alt="sabor agua splenda limon con chia"></div>
				<div class="col-xs-6 col-sm-4 flavors splenda hidden"><p class="satisfy text-center blanco">yerba buena limón</p><img src="/images/agua-splenda-yerba-buena-limon.png" alt="sabor agua splenda yerba buena limon"></div>

			</div>

			<div class="container">
				<p class="text-center blanco">Puedes agregar una o dos bolas de nieve de tu elección.</p>
			</div>
		</div>

		<div class="row all-long bottom">
			<div class="bottom"></div>
		</div>
	</div>

	<div class="container">
		<div class="home-prod m-top-65">
			<p class="oswald cafe hidden-sm hidden-md hidden-lg">
				TOPPING<br>
				<span class="satisfy">mix</span>
			</p>
			<div class="images">
				<img id="garrafon-topping-mix" src="/images/garrafon-topping-mix.png" alt="garrafon topping mix" class="fresh-img"> <br>
				<img id="garrafon-topping-mix-shadow" src="/images/shadow.png" alt="garrafon topping mix shadow" class="shadow-img">
			</div>
			<div class="info">
				<p class="oswald cafe hidden-xs">
					TOPPING<br>
					<span class="satisfy">mix</span>
				</p>
				<p>
					El topping mix es una mezcla personalizada de papas, frutas y toppings se mezclan con 3 tipos de salsas: salsa negra, salsa clamato, salsa negra y salsa pulparindo y se le agrega una banderilla. <br>
					Tenemos 3 tamaños : chico, mediano y grande.
				</p>
			</div>
		</div>

		<div class="home-prod alternativa">
			<p class="oswald cafe  hidden-sm hidden-md hidden-lg hidden-xl">
				COCO<br>
				<span class="satisfy">loco</span>
			</p>
			<div class="images alternativa">
				<img id="coco" src="/images/garrafon-topping-mix-coco.png" alt="" class="fresh-img"> <br>
				<img id="coco-shadow" src="/images/shadow.png" alt="garrafon topping mix coco shadow" class="shadow-img">
			</div>
			<div class="info">
				<p class="oswald cafe hidden-xs">
					COCO<br>
					<span class="satisfy">loco</span>
				</p>
				<p>
					El topping mix es una mezcla personalizada de papas, frutas y toppings se mezclan con 3 tipos de salsas: salsa negra, salsa clamato, salsa negra y salsa pulparindo, todo sobre una base de coco, se le agrega una banderilla.
				</p>
			</div>
		</div>
	</div>
			
@stop