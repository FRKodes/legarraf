<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand icon-garrafa" href="/"></a>
		</div>

		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li @if(Route::getCurrentRoute()->getPath() == "/") class="active" @endif><a href="/">Inicio</a></li>
				<li @if(Route::getCurrentRoute()->getPath() == "nosotros") class="active" @endif><a href="nosotros">Nosotros</a></li>
				<li @if(Route::getCurrentRoute()->getPath() == "productos") class="active" @endif><a href="productos">Productos</a></li>
				<li @if(Route::getCurrentRoute()->getPath() == "garrafon") class="active" @endif><a href="garrafon">Garrafón</a></li>
				<li class="icon hidden-xs"><a href="/" class="icon-garrafa"></a></li>
				<li @if(Route::getCurrentRoute()->getPath() == "sucursales") class="active" @endif><a href="sucursales">Sucursales</a></li>
				<li @if(Route::getCurrentRoute()->getPath() == "eventos") class="active" @endif><a href="eventos">Eventos</a></li>
				<li @if(Route::getCurrentRoute()->getPath() == "contacto") class="active" @endif><a href="contacto">Contacto</a></li>
				<li @if(Route::getCurrentRoute()->getPath() == "bolsa-de-trabajo") class="active" @endif><a href="bolsa-de-trabajo">Bolsa de trabajo</a></li>
			</ul>
		</div>
	</div>
</nav>