ladybug-plugin-monolog
======================

Monolog helper for ladybug:

``` php
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
```

Output in your log:

	[2014-09-01  21:09:49] LADYBUG: array(2)
	   [0]: array(2)
	      [name]: string (4) "pepe"
	      [age]: int 29
	   [1]: array(2)
	      [name]: string (4) "John"
	      [age]: int 27

	/Users/juanber/Desktop/lady/index.php:18

If you can put the output in other file try:

``` php
<?php
ladybug_logger_set_path( /** your path **/ );
ladybug_logger_dump($var);
```

Install with composer:

	{
	    "require": {
	        "juanber84/ladybug-plugin-monolog": "dev-master"
	    }
	}
