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

Output in your log (logs/ladybug.log is the path of default output):

	[2014-09-01  21:09:49] LADYBUG: array(2)
	   [0]: array(2)
	      [name]: string (4) "Raul"
	      [age]: int 29
	   [1]: array(2)
	      [name]: string (4) "John"
	      [age]: int 27

	/Users/juanber/Desktop/lady/index.php:18

If you can write the output in other file, try this:

``` php
<?php
ladybug_logger_set_path( /** your path **/ );
ladybug_logger_dump($var);
```

Install with composer:

	{
	    "require": {
        	"raulfraile/ladybug": "dev-master",,
	        "juanber84/ladybug-plugin-monolog": "dev-master"
	    }
	}
