<?php



// helpers

/**
 * Gets the ladybug dumper
 *
 * @return Ladybug\Dumper
 */
function getLadybug()
{
    global $ladybug;

    if (is_null($ladybug)) {
        $ladybug = new \Ladybug\Dumper();
    }

    return $ladybug;
}

function ladybug_logger_dump(/*$var1 [, $var2...$varN]*/)
{
    $ladybug = getLadybug();
    echo call_user_func_array(array($ladybug,'dump'), func_get_args());
}
