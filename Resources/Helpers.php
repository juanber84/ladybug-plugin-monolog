<?php

// helpers

/**
 * Gets the logger
 *
 * @return Monolog\Logger
 */
function getMonolog()
{
    $monolog = new \Monolog\Logger('logger');
    return $monolog;
}

function ladybug_logger_dump(/*$var1 [, $var2...$varN]*/)
{
    $ladybug = getLadybug();
    ladybug_set_format('text');
    $r = call_user_func_array(array($ladybug,'dump'), func_get_args());
    $log = getMonolog();
    $log->pushHandler(new \Monolog\Handler\StreamHandler('logs/prueba.log'));
    $log->debug($r);
    ladybug_set_format('html');
}