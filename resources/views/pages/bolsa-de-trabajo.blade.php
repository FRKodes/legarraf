@extends('app')

@section('current_section_title', 'Bolsa de trabajo')

@section('content')
	<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>

	<div class="container-fluid">
		<div class="row wood">
			<div class="logo-top icon-garraf"></div>
			<p class="slogan oswald">
				ÚNETE A NUESTRO<br>
				<span class="satisfy">equipo</span>
			</p>
		</div>
	</div>
	
	<div class="container productos">
		<div class="helados-mobile bolsa">
			<img class="img-bolsa" src="/images/bolsa_de_trabajo.png" alt="bolsa de trabajo le garraf">
		</div>
	</div>
	
	<div class="container needyou">
		<h1 class="text-center cafe oswald">¡LE GARRAF TE NECESITA!</h1>
		<h2 class="text-center satisfy cafe">¡Únete a nuestro equipo!</h2>
	</div>	
	
	<div class="container bolsa">
		{!! Form::open(['url'=>'sendmail-unete', 'id'=>'unete']) !!}
		<div class="form-group">{!! Form::input('text', 'nombre', null, ['class'=>'form-control', 'placeholder'=>'Nombre', 'data-validate'=>'required']) !!} </div>
		<div class="form-group">{!! Form::input('text', 'email', null, ['class'=>'form-control', 'placeholder'=>'E-mail', 'data-validate'=>'required|email']) !!}</div>
		<div class="form-group">{!! Form::input('text', 'telefono', null, ['class'=>'form-control', 'placeholder'=>'Teléfono', 'data-validate'=>'required']) !!}</div>
		<div class="form-group">{!! Form::input('text', 'celular', null, ['class'=>'form-control', 'placeholder'=>'Celular']) !!}</div>
		<div class="form-group styled-select">{!! Form::select('sucursal', [''=>'Sucursal', 'Chapalita'=>'Chapalita', 'Pablo Neruda'=>'Pablo Neruda', 'Andares'=>'Andares', 'Toscana'=>'Toscana'], 'selected', ['class'=>'form-control', 'data-validate'=>'required']) !!}</div>
		<div class="form-group styled-select">{!! Form::select('turno', [''=>'Turno', 'Matutino'=>'Matutino', 'Vespertino'=>'Vespertino'], 'selected', ['class'=>'form-control', 'data-validate'=>'required']) !!}</div>
		<div class="form-group box">
			{!! Form::file('file-7[]', ['class'=>'form-control inputfile inputfile-6', 'data-multiple-caption'=>'{count} files selected', 'id'=>'file-7']) !!}
			<label class="magic-container" for="file-7"><span></span> <strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Choose a file&hellip;</strong></label>
		</div>
		<div class="form-group">{!! Form::textarea('mensaje', null, ['class'=>'form-control', 'placeholder'=>'Déjanos un mensaje']) !!}</div>
		<div class="form-group">{!! Form::submit('ENVIAR', ['class'=>'btn btn-primary send-cv']) !!}</div>
		<div class="sent_mail_alert white unete"><b>¡GRACIAS!</b><br>Nos pondremos en contacto a la brevedad para atender tu solicitud.</div>
		{!! Form::close() !!}
	</div>
			
@stop