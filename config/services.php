<?php

return [

	'mandrill' => [
		'secret' => getenv('MANDRILL_KEY')
	],

	'mailgun' => [
	    'domain' => getenv('MAILGUN_DOMAIN'),
	    'secret' => getenv('MAILGUN_KEY')
	]

];
