@if(Request::path() != 'sucursales')
	@include('partials.footer-branches')
@endif

<footer>
	<div class="fb-follow"></div>

	<div class="container">
		<p class="oswald cafe">
			SÍGUENOS Y <br> <span class="satisfy">ponte en contacto</span>
		</p>
		<ul class="social">
			<li><a href="https://www.facebook.com/legarraf" target="_blank" class="icon-fb"></a></li>
			<li><a href="https://www.instagram.com/legarraf/" target="_blank" class="icon-ig"></a></li>
			<li><a href="mailto:legarraf@outlook.com" target="_blank" class="icon-mail"></a></li>
		</ul>
		<div class="logo icon-garraf"></div>
		<p class="text-center">
			Guadalajara, Mex. <br>
			LE GARRAF. Todos los derechos reservados <br>
			México <?php echo date('Y') ?>
		</p>
	</div>
</footer>