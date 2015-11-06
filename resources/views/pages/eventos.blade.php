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
				<div class="form-group people">
					<p>Nº de personas</p>
					<button class="icon-arrow text-center blanco"></button>
				</div>
				<div class="disclaimer text-center">
					Selecciona un número aproximado de personas, el número de sabores a elegir depende del número de personas en tu evento.
				</div>
				<div class="form-group text-right">
					<span>Deseas agregar: </span>
					<div class="squaredTwo">
						{!! Form::checkbox('toppings', 'toppings', null, ['id'=>'checkbox_toppings']) !!}
						<label for="checkbox_toppings"></label>
					</div>
					<div class="checkside">Toppings</div>
					<div class="squaredTwo margin-left">
						{!! Form::checkbox('splenda', 'splenda', null, ['id'=>'checkbox_splenda']) !!}
						<label for="checkbox_splenda"></label>
					</div>
					<div class="checkside">Splenda</div>
				</div>
				{!! Form::input('hidden', 'num_people', null, []) !!}
				<div class="form-group">{!! Form::input('text', 'nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'data-validate' => 'required']) !!}</div>
				<div class="form-group">{!! Form::input('text', 'email', null, ['class' => 'form-control', 'placeholder' => 'Correo', 'data-validate' => 'required|email']) !!}</div>
				<div class="price text-center">999.00</div>
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
			<p class="answer">Las personas van vestidas con polos blancas de le garraf, mandil y cachucha.</p>
			<p class="question">¿Si me sobra nieve?</p>
			<p class="answer">Si te sobre nieve te la envasan en litros y te dejan.</p>
		</div>

	</div>
			
@stop