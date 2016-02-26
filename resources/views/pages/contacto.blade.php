@extends('app')

@section('current_section_title', 'Contacto')

@section('content')
	<div class="container-fluid">
		<div class="row wood">
			<div class="logo-top icon-garraf"></div>
			<p class="slogan oswald">
				PONTE EN<br>
				<span class="satisfy">contacto</span>
			</p>
		</div>
	</div>
	
	<div class="container productos">
		<div class="helados-mobile eventos">
			<img class="img-contacto" src="/images/contacto.png" alt="contacto le garraf">
		</div>
	</div>
	
	<div class="container needyou">
		<h1 class="text-center cafe oswald">¡QUEREMOS ESCUCHARTE!</h1>
		<h2 class="text-center satisfy cafe">Para nosotros tu opinión es lo más importante.</h2>
	</div>	
	
	<div class="container bolsa">
		{!! Form::open(['url'=>'sendmail-contacto', 'id'=>'contacto']) !!}
		<div class="form-group">{!! Form::input('text', 'nombre', null, ['class'=>'form-control', 'placeholder'=>'Nombre', 'data-validate'=>'required']) !!} </div>
		<div class="form-group">{!! Form::input('text', 'email', null, ['class'=>'form-control', 'placeholder'=>'E-mail', 'data-validate'=>'required|email']) !!}</div>
		<div class="form-group">{!! Form::input('text', 'telefono', null, ['class'=>'form-control', 'placeholder'=>'Teléfono']) !!}</div>
		<div class="form-group">{!! Form::textarea('mensaje', null, ['class'=>'form-control', 'placeholder'=>'Déjanos un mensaje']) !!}</div>
		<div class="form-group">{!! Form::submit('ENVIAR', ['class'=>'btn btn-primary send-cv']) !!}</div>
		<div class="sent_mail_alert white unete"><b>¡GRACIAS!</b><br>Nos pondremos en contacto a la brevedad para atender tu solicitud.</div>
		{!! Form::close() !!}
	</div>

	<div class="container"><h3 class="text-center">"No tenemos franquicias"</h3></div>
			
@stop