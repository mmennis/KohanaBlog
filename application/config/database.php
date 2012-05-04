<?php defined('SYSPATH') or die('No direct script access.'); 

return array
(
	'default' => array
	(
		'type'	=> 'mysql',
		'connection'  => array(
			'hostname'		=> 'localhost',
			'database'		=> 'kohana_blog',
			'username'		=> 'root',
			'password'		=> 'root',
			'persistent'	=> FALSE		
		),
		'table_prefix'	=> '',
		'charset'		=> 'utf8',
		'caching'		=> FALSE,
		'profiling'		=> TRUE,
	)	
);