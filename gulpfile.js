var elixir = require('laravel-elixir');
require('laravel-elixir-stylus');
require('laravel-elixir-livereload');

elixir(function(mix) {
	 mix.stylus('main.styl')
		.styles([
			'public/css/bootstrap.min.css',
			'public/css/icons-font.css',
			'public/css/magic.min.css',
			'public/css/slick.css',
			'public/css/jquery-ui.min.css',
			'public/css/jquery-ui.theme.min.css',
			'public/css/jquery-ui.structure.min.css',
			'public/css/main.css'
		],'public/css/all.min.css', 'public/css')
		.scripts([
			'public/js/jquery.js',
			'public/js/bootstrap.min.js',
			'public/js/slick.js',
			'public/js/jquery-ui.min.js',
			// 'public/js/maps.google.js',
			'public/js/custom.js'
		],'public/js/custom-scripts.min.js', 'public/js')
		.version(['public/css/all.min.css', 'public/js/custom-scripts.min.js']);
});