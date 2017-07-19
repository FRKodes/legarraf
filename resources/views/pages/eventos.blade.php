@extends('app')

@section('current_section_title', '¿Tienes un evento? ahí nos vemos!')

@section('content')
	<div class="container-fluid">
		<div class="row wood">
			<div class="logo-top icon-garraf"></div>
			<p class="slogan oswald">
				¿TIENES UN EVENTO?<br>
				<span class="satisfy">ahí nos vemos</span>
			</p>
		</div>
	</div>
	
	<div class="container productos">

		<div class="helados-mobile home">
			<div class="item"><img class="slide" src="/images/evento-nieves-le-garraf-carrito.png" width="600" height="488" alt="eventos productos le garraf"></div>
			<div class="item"><img class="slide" src="/images/evento-agua.png" width="600" height="488" alt="Así servimos las aguas en tu evento"></div>
			<div class="item"><img class="slide" src="/images/evento-nieves-le-garraf.png" width="600" height="488" alt="Así servimos las aguas en tu evento"></div>
			<div class="item"><img class="slide" src="/images/eventos-productos-le-garraf-new.png" width="600" height="488" alt="Así servimos las nieves en tu evento"></div>
		</div>

		<p class="text-center eventos-cel"><img src="/images/whatsapp.jpg" class="wats-logo" alt="whatsapp logo teléfono de contacto">EVENTOS CEL : 333 5842942</p>
	</div>

	<div class="row all-long top">
		<div class="top"></div>
	</div>
	<div class="row all-long products">
		<div class="quotation">
			<h1 class="text-center eventos blanco oswald">¡SIMULA UNA COTIZACIÓN DE TU EVENTO!</h1>
			{!! Form::open(['url'=>'sendmail2', 'id'=>'eventForm']) !!}
				{!! Form::input('hidden', 'price_per_head', 14, ['id'=>'price_per_head']) !!}
				{!! Form::input('hidden', 'price_garrafon', 600, ['id'=>'price_garrafon']) !!}
				{!! Form::input('hidden', 'total_price', null, ['id'=>'total_price']) !!}
				{!! Form::input('hidden', 'total_price_agua', null, ['id'=>'total_price_agua']) !!}
				
				<div class="form-group date">
					{!! Form::input('text', 'datepicker', null, ['class'=>'form-control', 'id'=>'datepicker', 'data-validate'=>'required', 'placeholder'=>'Selecciona la fecha de tu evento']) !!}
				</div>

				{{-- <div class="form-group people">
					<p class="people_click">Nº de personas</p>
					<button class="icon-arrow text-center blanco"></button>
					{!! Form::input('hidden', 'num_people', null, ['id'=>'num_people', 'data-validate' => 'required']) !!}
				</div>
				<ul class="people-population">
					<li><a href="#" data-balls="Hasta 2 sabores de nieve." data-number="90" data-value="Hasta 90 personas">Hasta 90 personas</a></li>
					<li><a href="#" data-balls="Hasta 3 sabores de nieve." data-number="100" data-value="Hasta 100 personas">Hasta 100 personas</a></li>
					<li><a href="#" data-balls="Hasta 6 sabores de nieve." data-number="200" data-value="Hasta 200 personas">Hasta 200 personas</a></li>
					<li><a href="#" data-balls="Hasta 9 sabores de nieve." data-number="300" data-value="Hasta 300 personas">Hasta 300 personas</a></li>
				</ul> --}}
				
				<div class="form-group">
					{!! Form::input('text', 'num_people', '', ['class'=>'form-control', 'id'=>'num_people', 'data-validate'=>'required|min[100]','placeholder'=>'Introduce el número de personas en tu evento' ]) !!}
					<small>*El mínimo de personas para un evento son 100.</small>
				</div>

				<div class="disclaimer text-center">
					<p>Selecciona un número aproximado de personas, el número de sabores a elegir depende del número de personas en tu evento.</p>
					<span class="icon-ice-cream balls _90 _100 _200 _300"></span>
					<span class="icon-ice-cream balls _90 _100 _200 _300"></span>
					<span class="icon-ice-cream balls _100 _200 _300"></span>
					<span class="icon-ice-cream balls _200 _300"></span>
					<span class="icon-ice-cream balls _200 _300"></span>
					<span class="icon-ice-cream balls _200 _300"></span>
					<span class="icon-ice-cream balls _300"></span>
					<span class="icon-ice-cream balls _300"></span>
					<span class="icon-ice-cream balls _300"></span>
				</div>
				
				<div class="col-xs-12 col-sm-4">
					<p class="chalk_it title mayus"><span>agua</span></p>
					<ul class="flavors chalk_it mayus">
						<li>Pitaya <span class="icon pitaya"></span></li>
						<li>Sandía c / chile <span class="icon sandia-chile"></span></li>
						<li>Naranja <span class="icon naranja"></span></li>
						<li>Lima <span class="icon lima"></span></li>
						<li>Limón <span class="icon limon"></span></li>
						<li>Fresa <span class="icon fresa"></span></li>
						<li>Mandarina <span class="icon mandarina"></span></li>
						<li>Guanabana <span class="icon guanabana"></span></li>
						<li>Mango <span class="icon mango"></span></li>
						<li>Ciruela <span class="icon ciruela"></span></li>
						<li>Limón con chía <span class="icon limon_chia"></span></li>
						<li>Pulparindo <span class="icon pulparindo"></span></li>
						<li>Maracuyá <span class="icon maracuya"></span></li>
						<li>Clamato <span class="icon clamato"></span></li>
					</ul>
				</div>

				<div class="col-xs-12 col-sm-4">
					<p class="chalk_it title mayus"><span>crema</span></p>
					<ul class="flavors chalk_it mayus">
						<li>matcha <span class="icon matcha"></span></li>
						<li>taro <span class="icon taro"></span></li>
						<li>Vainilla <span class="icon vainilla"></span></li>
						<li>Plátano <span class="icon platano"></span></li>
						<li>Chocolate <span class="icon choco"></span></li>
						<li>Coco <span class="icon coco"></span></li>
						<li>Mamey <span class="icon mamey"></span></li>
						<li>Nuez <span class="icon nuez"></span></li>
						<li>Cajeta <span class="icon cajeta"></span></li>
						<li>nutella <span class="icon nutella"></span></li>
						<li>mazapan <span class="icon mazapan"></span></li>
						<li>danonino <span class="icon danonino"></span></li>
						<li>baileys <span class="icon baileys"></span></li>
						<li>chongos <span class="icon chongos"></span></li>
					</ul>
				</div>

				<div class="col-xs-12 col-sm-4">
					<p class="chalk_it title mayus"><span>splenda</span></p>
					<ul class="flavors chalk_it mayus">
						<li>Hierbabuena <span class="icon hierbabuena_plain"></span></li>
						<li>limón <span class="icon limon"></span></li>
						<li>jamaica <span class="icon jamaica"></span></li>
						<li>ciruela <span class="icon ciruela"></span></li>
						<li>fresa <span class="icon fresa"></span></li>
						<li>mango <span class="icon mango"></span></li>
						<li>vainilla <span class="icon vainilla"></span></li>
						<li>mamey <span class="icon mamey"></span></li>
						<li>coco <span class="icon coco"></span></li>
						<li>nuez <span class="icon nuez"></span></li>
						<li>limón con chía <span class="icon limon_chia"></span></li>
					</ul>
				</div>
				
				<div class="text-center">*No es necesario que elijas los sabores en este momento.</div>
				
				<div class="form-group">
					{!! Form::input('hidden', 'toppings_price', 3, ['id'=>'toppings_price', 'data-checked'=>'No']) !!}
					<span class="add">Deseas agregar: </span> &nbsp;
					<a href="#toppings" class="check_selector" id="check_top"></a>
					<div class="checkside satisfy"> &nbsp; Toppings </div> + $3 por persona
				</div>

				<p>Aquí están algunos de los toppings que puedes agregar:</p>

				<div class="col-xs-12 col-sm-6">
					<p class="satisfy title">para nieves de agua:</p>
					<ul class="flavors chalk_it mayus">
						<li>Pica piñas</li>
						<li>Pulparindo</li>
						<li>Mango con chile</li>
						<li>Rielitos</li>
						<li>Chamoy</li>
					</ul>
				</div>

				<div class="col-xs-12 col-sm-6">
					<p class="satisfy title">para nieves de crema:</p>
					<ul class="flavors chalk_it mayus">
						<li>Granola</li>
						<li>Coco tostado</li>
						<li>Lunetas</li>
						<li>Mazapán</li>
						<li>Cereal</li>
						<li>Chocolate</li>
					</ul>
				</div>
				
				<p>Deseas que tu nieve sea endulzada con:</p>

				<div class="form-group">
					{!! Form::input('hidden', 'splenda_price', 3, ['id'=>'splenda_price', 'data-checked'=>'No']) !!}
					<a href="#splenda" class="check_selector" id="check_spl"></a>
					<div class="checkside satisfy"> &nbsp; Splenda </div> + $3 por persona
				</div>
				
				<h2 class="chalk_it mayus blanco text-center"><img src="/images/aguas-icon.png" id="aguas-icon-top" alt="aguas icon">aguas frescas</h2>
				<div class="col-xs-12 col-sm-6">
					<p class="chalk_it title mayus text-center"><span>normal</span></p>
					<ul class="flavors chalk_it mayus">
						<li>Lima <span class="icon lima"></span></li>
						<li>Ciruela amarilla <span class="icon ciruela"></span></li>
						<li>mango <span class="icon mango"></span></li>
						<li>Maracuyá <span class="icon maracuya"></span></li>
						<li>Coco <span class="icon coco"></span></li>
						<li>Coco Natural <span class="icon coco"></span></li>
						<li>Mamey <span class="icon mamey"></span></li>
						<li>Guanabana <span class="icon guanabana"></span></li>
					</ul>
				</div>

				<div class="col-xs-12 col-sm-6">
					<p class="chalk_it title mayus text-center"><span>splenda</span></p>
					<ul class="flavors chalk_it mayus">
						<li>Hierbabuena con Limón <span class="icon hierbabuena"></span></li>
						<li>Limón con chía <span class="icon limon_chia"></span></li>
						<li>alfalfa con limón <span class="icon alfalfa"></span></li>
						<li>Horchata de fresa <span class="icon horchata"></span></li>
						<li>Pepino con limón <span class="icon pepino"></span></li>
					</ul>
				</div>


				<div class="col-xs-12"><p>&nbsp;</p></div>

				<div class="form-group">
					{!! Form::input('text', 'num_garrafones', '', ['class'=>'form-control', 'id'=>'num_garrafones', 'maxlength'=>'2', 'placeholder'=>'Escribe el número de garrafones' ]) !!}
					<small>*Cada garrafón contiene 19 Litros, no hay medios garrafones.</small>
				</div>

				<p>Deseas que tu Garrafón sea endulzado con Splenda?:</p>

				<div class="form-group">
					{!! Form::input('hidden', 'splenda_price_agua', 100, ['id'=>'splenda_price_agua', 'data-checked'=>'No']) !!}
					<a href="#splenda" class="check_selector" id="check_spl_agua"></a>
					<div class="checkside satisfy"> &nbsp; Splenda </div> + $100 por garrafón
				</div>

				<div class="form-group">{!! Form::input('text', 'nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'data-validate' => 'required', 'maxlength'=>'50']) !!}</div>
				<div class="form-group">{!! Form::input('text', 'email', null, ['class' => 'form-control', 'placeholder' => 'Correo', 'data-validate' => 'required|email', 'maxlength'=>'70']) !!}</div>
				<div class="alert alert-danger hidden">
					Por favor verifica que seleccionaste una fecha para la cotización de tu evento, el número de personas y proporciona tu nombre y un correo electrónico válido.
				</div>
				<p class="text-center white">*Al cotizar NO se está resrvando tu evento. A la brevedad nos pondremos en contacto contigo para ponernos a tus órdenes sin compromiso.</p>
				<div class="price text-center verde" id="total_"></div>
				<div class="submit"> {!! Form::submit('ENVIAR', ['class'=>'btn btn-primary']) !!} </div>
				<div class="sent_mail_alert white"><b>¡GRACIAS!</b><br>Nos pondremos en contacto a la brevedad para atender tu solicitud.</div>
			{!! Form::close() !!}
		</div>


	</div>
	<div class="row all-long bottom">
		<div class="bottom"></div>
	</div>

	<div class="faq">
		<p class="question"></p>
		<p class="answer"></p>
		<p class="question">¿Cuál es el mínimo de personas para nieves?</p>
		<p class="answer">100 personas</p>
		<p class="question">¿Cuál es el mínimo si quiero contratar aguas?</p>
		<p class="answer">Si ya contrataste nieve 1 garrafón, si no 3 garrafones.</p>
		<p class="question">¿Cuál es el costo por persona?</p>
		<p class="answer">El costo por persona es de $14</p>
		<p class="question">¿Cuántos sabores?</p>
		<p class="answer">Por cada 100 personas puedes agregar 3 sabores.</p>
		<p class="question">¿Cuátos litros llevan para 100 personas?</p>
		<p class="answer">Para 100 personas son 15 litros de nieve.</p>
		<p class="question">¿Cuánto tiempo se quedan en el evento?</p>
		<p class="answer">En el evento la personas se queda 2 horas.</p>
		<p class="question">¿Puede ir una persona a servirme el evento?</p>
		<p class="answer">Sí el evento lo puede servir una persona.</p>
		<p class="question">¿Que llevan para servir? ¿Tengo que poner algo?</p>
		<p class="answer">La persona lleva todo lo necesario para servir el evento, llevamos una mesa con mantel, una estructura de garrafas. </p>
		<p class="question">¿En que lo sirven?</p>
		<p class="answer">La nieve se sirve en vasitos de le garraf y en conos. En vasos de medio litro en caso de agua.</p>
		<p class="question">¿Cuántas bolas le dan a cada persona?</p>
		<p class="answer">Aproximadamente se sirven 2 bolas por vasito.</p>
		<p class="question">Si quiero toppings, ¿Cuánto me incrementa?</p>
		<p class="answer">Si quieres toppings en tu evento te incrementa $3 por persona</p>
		<p class="question">¿Cómo van vestidos las personas que sirven el evento?</p>
		<p class="answer">Las personas van uniformadas de LE GARRAF.</p>
		<p class="question">¿Si me sobra nieve?</p>
		<p class="answer">Si te sobra nieve se te envasa en medios y litros, pero no te preocupes seguro no te va a sobrar.</p>
		<p class="question">¿Cuánto rinde un garrafón?</p>
		<p class="answer">Cada garrafón rinde 19 litros y rinde 38 vasos de medio litro.</p>
		<p class="question">¿Cuánto cuesta 1 garrafón?</p>
		<p class="answer">$600 normal y endulzado con splenda $700</p>
	</div>
			
@stop