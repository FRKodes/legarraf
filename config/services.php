<?php

return [

	'mandrill' => [
		'secret' => getenv('MANDRILL_KEY')
	],

	'mailgun' => [
	    'domain' => $_ENV['MAILGUN_DOMAIN'],
	    'secret' => $_ENV['MAILGUN_KEY'],
	]

];
