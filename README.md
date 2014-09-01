ladybug-plugin-monolog
======================

Monolog helper for ladybug:

	<?php
	$var = array(
	    array(
	        'name' => 'Raul',
	        'age' => 29
	    ),
	    array(
	        'name' => 'John',
	        'age' => 27
	    )
	);

	ladybug_logger_dump($var);

Output in your log:

	[2014-09-01  21:09:49] LADYBUG: array(2)
	   [0]: array(2)
	      [name]: string (4) "pepe"
	      [age]: int 29
	   [1]: array(2)
	      [name]: string (4) "John"
	      [age]: int 27

	/Users/juanber/Desktop/lady/index.php:18