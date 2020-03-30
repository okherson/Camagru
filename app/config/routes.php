<?php

return [
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],

	'logout' => [
		'controller' => 'main',
		'action' => 'logout'
	],


	'login' => [
		'controller' => 'account',
		'action' => 'login'
	],

	'registration' => [
		'controller' => 'account',
		'action' => 'registration'
	],

	'password_reset' => [
		'controller' => 'account',
		'action' => 'password_reset'
	],


	'messages/list' => [
		'controller' => 'messages',
		'action' => 'list',
	],
	
	'news/list' => [
		'controller' => 'news',
		'action' => 'list'
	]

]



?>