<?php

// helpers

$GLOBALS['PATHLADYBUGPLUGINMONOLOG'] = 'logs/ladybug.log';

/**
 * Gets the logger
 * @return Monolog\Logger
 */
function getMonolog()
{
    $dateFormat = "Y-m-d  H:m:i";
    // This is the original format of monolog documentation
    // https://github.com/Seldaek/monolog/blob/master/doc/usage.md#customizing-log-format
    // $output = "%datetime% > %level_name% > %message% %context% %extra%\n";
    $output = "[%datetime%] LADYBUG: %message% %context% %extra%\n";
    $formatter = new \Monolog\Formatter\LineFormatter($output, $dateFormat, true);
    $stream = new \Monolog\Handler\StreamHandler($GLOBALS['PATHLADYBUGPLUGINMONOLOG'], \Monolog\Logger::DEBUG);
    $stream->setFormatter($formatter);
    $ladyLogger = new \Monolog\Logger('ladybug');
    $ladyLogger->pushHandler($stream);

    return $ladyLogger;
}

/**
 * Set the path of log
 */
function ladybug_logger_set_path($path)
{
    $GLOBALS['PATHLADYBUGPLUGINMONOLOG'] = $path;
}

function ladybug_logger_dump(/*$var1 [, $var2...$varN]*/)
{
    $ladybug = getLadybug();
    ladybug_set_format('text');
    $r = call_user_func_array(array($ladybug,'dump'), func_get_args());
    $log = getMonolog();
    $log->addDebug($r);
    ladybug_set_format('html');
}