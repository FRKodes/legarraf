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

		<div class="helados-mobile eventos">
			<img class="img-productos" src="/images/eventos-productos-le-garraf.png" alt="eventos productos le garraf">
		</div>
		
		<p class="text-center eventos">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, eveniet. Libero qui deserunt, harum sed incidunt quia accusamus quidem fugit quasi quod quisquam quis consequatur nobis veritatis ex ab molestiae!
		</p>

		<div class="quotation">
			{!! Form::open() !!}
				{!! Form::input('hidden', 'num_people', null, ['id'=>'num_people']) !!}
				{!! Form::input('hidden', 'price_per_head', 12, ['id'=>'price_per_head']) !!}
				<div class="form-group people">
					<p>Nº de personas</p>
					<button class="icon-arrow text-center blanco"></button>
				</div>
				<ul class="people-population">
					<li><a href="#" data-balls="Hasta 2 sabores de nieve." data-number="90" data-value="Hasta 90 personas">Hasta 90 personas</a></li>
					<li><a href="#" data-balls="Hasta 3 sabores de nieve." data-number="100" data-value="Hasta 100 personas">Hasta 100 personas</a></li>
					<li><a href="#" data-balls="Hasta 6 sabores de nieve." data-number="200" data-value="Hasta 200 personas">Hasta 200 personas</a></li>
					<li><a href="#" data-balls="Hasta 9 sabores de nieve." data-number="300" data-value="Hasta 300 personas">Hasta 300 personas</a></li>
				</ul>
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
				<div class="form-group text-right">
					<span>Deseas agregar: </span>
					<div class="squaredTwo" id="toppings">
						{!! Form::checkbox('toppings', '2', null, ['id'=>'checkbox_toppings']) !!}
						<label for="checkbox_toppings"></label>
					</div>
					<div class="checkside">Toppings</div>

					<div class="squaredTwo margin-left" id="splenda">
						{!! Form::checkbox('splenda', '3', null, ['id'=>'checkbox_splenda']) !!}
						<label for="checkbox_splenda"></label>
					</div>
					<div class="checkside">Splenda</div>
				</div>
				{!! Form::input('hidden', 'num_people', null, []) !!}
				<div class="form-group">{!! Form::input('text', 'nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'data-validate' => 'required']) !!}</div>
				<div class="form-group">{!! Form::input('text', 'email', null, ['class' => 'form-control', 'placeholder' => 'Correo', 'data-validate' => 'required|email']) !!}</div>
				<div class="price text-center" id="total_">999.00</div>
				<div class="submit"> {!! Form::submit('ENVIAR', ['class'=>'btn btn-primary']) !!} </div>
			{!! Form::close() !!}
		</div>

		<div class="faq">
			<p class="question"></p>
			<p class="answer"></p>
			<p class="question">¿Cuál es el mínimo de personas?</p>
			<p class="answer">90 personas</p>
			<p class="question">¿Cuál es el costo por persona?</p>
			<p class="answer">El costo por persona es de $12</p>
			<p class="question">¿Cuántos sabores?</p>
			<p class="answer">Por cada 90 personas puedes agregar 3 sabores.</p>
			<p class="question">¿Cuátos litros llevan para 90 personas?</p>
			<p class="answer">Para 90 personas son 10 litros de nieve.</p>
			<p class="question">¿Cuánto tiempo se quedan en el evento?</p>
			<p class="answer">En el evento la personas se queda 2 horas.</p>
			<p class="question">¿Puede ir una persona a servirme el evento?</p>
			<p class="answer">Sí el evento lo puede servir una persona.</p>
			<p class="question">¿Que llevan para servir? ¿Tengo que poner algo?</p>
			<p class="answer">La persona lleva todo lo necesario para servir el evento, llevamos una mesa con mantel, una estructura de garrafas. </p>
			<p class="question">¿En que lo sirven?</p>
			<p class="answer">La nieve se sirve en vasitos de le garraf y en conos.</p>
			<p class="question">¿Cuántas bolas le dan a cada persona?</p>
			<p class="answer">Aproximadamente se sirven 2 bolas por vasito.</p>
			<p class="question">Si quiero toppings, ¿Cuánto me incrementa?</p>
			<p class="answer">Si quieres toppings en tu evento te incrementa $3 por persona</p>
			<p class="question">¿Cómo van vestidos las personas que sirven el evento?</p>
			<p class="answer">Las personas van uniformadas de LE GARRAF.</p>
			<p class="question">¿Si me sobra nieve?</p>
			<p class="answer">Si te sobra nieve se te envasa en medios y litros, pero no te preocupes seguro no te va a sobrar.</p>
		</div>

	</div>
			
@stop