@extends('app')

@section('body_page', 'garrafon')

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
	</div>

	<div class="container">
		<div class="home-prod m-top-65">
			<p class="oswald cafe hidden-sm hidden-md hidden-lg">
				TOPPING<br>
				<span class="satisfy">mix</span>
			</p>
			<div class="images">
				<img id="garrafon-topping-mix" src="/images/garrafon-topping-mix.jpg" alt="garrafon topping mix" class="fresh-img garrafon">
			</div>
			<div class="info">
				<p class="oswald cafe hidden-xs">
					TOPPING<br>
					<span class="satisfy">mix</span>
				</p>
				<p>
					El topping mix es una mezcla personalizada de papas, frutas y toppings se mezclan con 3 tipos de salsas: salsa negra, salsa clamato, salsa negra y salsa pelon pelo rico y se le agrega una banderilla. <br>
					Tenemos 3 tamaños : chico, mediano y grande.
				</p>
			</div>
		</div>

		<div class="toppings">
			<h2 class="oswald text-center cafe">¡HAZ TU COMBINACIÓN PREFERIDA!<br><span class="satisfy">con todos nuestros toppings</span></h2>
			<div class="col-xs-3"><img src="images/toppings-01.jpg" alt="Toppings GARRAFÓN 1"></div>
			<div class="col-xs-3"><img src="images/toppings-02.jpg" alt="Toppings GARRAFÓN 2"></div>
			<div class="col-xs-3"><img src="images/toppings-03.jpg" alt="Toppings GARRAFÓN 3"></div>
			<div class="col-xs-3"><img src="images/toppings-04.jpg" alt="Toppings GARRAFÓN 4"></div>
		</div>

		<div class="home-prod alternativa">
			<p class="oswald cafe  hidden-sm hidden-md hidden-lg hidden-xl">
				COCO<br>
				<span class="satisfy">loco</span>
			</p>
			<div class="images alternativa">
				<img id="coco" src="/images/garrafon-topping-mix-coco.jpg" alt="garrafon topping mix coco" class="fresh-img garrafon">
			</div>
			<div class="info">
				<p class="oswald cafe hidden-xs">
					COCO<br>
					<span class="satisfy">loco</span>
				</p>
				<p>
					El coco loco es uno de los preferidos de garrafón , mezcla los ingredientes de tu agrado en el interior de medio coco , selecciona una de nuestras salsas , mézclalo y disfruta una alternativa única como nunca antes la habías visto.
				</p>
			</div>
		</div>
	</div>

	<div class="container-fluid" style="display:none">
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
				
				<div class="col-xs-3 col-sm-2 flavors normal"><p class="satisfy text-center blanco">coco normal</p><img src="/images/agua-coconatural.png" alt="sabor agua coconatural"></div>
				<div class="col-xs-3 col-sm-2 flavors normal"><p class="satisfy text-center blanco">mamey</p><img src="/images/agua-mamey.png" alt="sabor agua mamey"></div>
				<div class="col-xs-3 col-sm-2 flavors normal"><p class="satisfy text-center blanco">mango</p><img src="/images/agua-mango.png" alt="sabor agua mango"></div>
				<div class="col-xs-3 col-sm-2 flavors normal"><p class="satisfy text-center blanco">guanabana</p><img src="/images/agua-guanabana.png" alt="sabor agua guanabana"></div>
				<div class="col-xs-3 col-sm-2 flavors normal"><p class="satisfy text-center blanco">ciruela</p><img src="/images/agua-ciruela-amarilla.png" alt="sabor agua ciruela amarilla"></div>
				<div class="col-xs-3 col-sm-2 flavors normal"><p class="satisfy text-center blanco">crema de coco</p><img src="/images/agua-crema-de-coco.png" alt="sabor agua crema de coco"></div>
				<div class="col-xs-3 col-sm-2 flavors normal"><p class="satisfy text-center blanco">pepino con limón</p><img src="/images/agua-pepino-con-limon.png" alt="sabor agua pepino con limon"></div>
				<div class="col-xs-3 col-sm-2 flavors splenda hidden"><p class="satisfy text-center blanco">horchata</p><img src="/images/agua-splenda-horchata.png" alt="sabor agua splenda horchata"></div>
				<div class="col-xs-3 col-sm-2 flavors splenda hidden"><p class="satisfy text-center blanco">alfalfa con limón</p><img src="/images/agua-splenda-alfalfa-con-limon.png" alt="sabor agua splenda alfalfa con limon"></div>
				<div class="col-xs-3 col-sm-2 flavors splenda hidden"><p class="satisfy text-center blanco">limón con chía</p><img src="/images/agua-splenda-limon-con-chia.png" alt="sabor agua splenda limon con chia"></div>
				<div class="col-xs-3 col-sm-2 flavors splenda hidden"><p class="satisfy text-center blanco">yerba buena limón</p><img src="/images/agua-splenda-yerba-buena-limon.png" alt="sabor agua splenda yerba buena limon"></div>

			</div>

			<div class="container">
				<p class="text-center blanco">Puedes agregar una o dos bolas de nieve de tu elección.</p>
			</div>
		</div>

		<div class="row all-long bottom">
			<div class="bottom"></div>
		</div>
	</div>

	<div class="container productos">

		<div class="home-prod m-top-65">
			<p class="oswald cafe garrafon hidden-sm hidden-md hidden-lg">
				TE PRESENTAMOS NUESTRA <br>
				<span class="satisfy">gran variedad de paletas</span>
			</p>
			<div class="images paletas">
				<div><img src="/images/garrafon-paletas.jpg" alt="garrafón todas nuestras paletas 01" class="fresh-img garrafon opacity1"></div>
				<div><img src="/images/garrafon-paletas_02.jpg" alt="garrafón todas nuestras paletas 02" class="fresh-img garrafon"></div>
				<div><img src="/images/garrafon-paletas_03.jpg" alt="garrafón todas nuestras paletas 03" class="fresh-img garrafon"></div>
			</div>
			<div class="info">
				<p class="oswald cafe garrafon hidden-xs">
					TE PRESENTAMOS NUESTRA <br>
					<span class="satisfy">gran variedad de paletas</span>
				</p>
				<p class="text-left">
					
					<span class="satisfy cafe">agua</span><br>
					Limón, mango, fresa y ciruela.<br><br>

					<span class="satisfy cafe">crema</span><br>
					Cajeta, nuez, pay limón, nutella, coco, horchata de fresa y chocomilk.<br><br>

					<span class="satisfy cafe">splenda</span><br>
					Jamaica, limón con chía, chocolate y ciruela.<br><br>
				
					<span class="satisfy cafe">chile</span><br>
					Mango con chile, clamato con rielitos, limón con rielitos, piña con picapica, pulparindo, pelón pelo rico.<br><br>

					<span class="satisfy cafe">kids</span><br>
					Danonino, vainilla con kisses, limón con panditas, limón y chocolate.
				</p>
				<p class="text-left">Las puedes bañar en chamoi, chocolate blanco u oscuro sin ningún costo y les puedes agregar toppings de chile y dulces.</p>
			</div>
		</div>

		<div class="home-prod alternativa">
			<p class="oswald cafe  hidden-sm hidden-md hidden-lg hidden-xl">
				AGUAS<br><br><br>
				<span class="satisfy">de 1/2 litro y 1 litro</span>
			</p>
			<div class="images alternativa">
				<img src="/images/aguas.jpg" alt="aguas frescas GARRAFÓN" class="fresh-img opacity-1">
			</div>
			<div class="info">
				<p class="oswald cafe hidden-xs">
					AGUAS<br><br><br>
					<span class="satisfy">de 1/2 litro y 1 litro</span>
				</p>
				<p class="cafe sabores">
					<span class="satisfy font14">normal</span> <br>
					Coco, Mamey, Mango, Guanabana, Ciruela, Crema de coco y Pepino con limón. <br><br>

					<span class="satisfy font14">splenda</span><br>
					Horchata, Alfalfa con limón, Limón con chía, Yerbabuena con limón.
				</p>
			</div>
		</div>

	</div>
			
@stop