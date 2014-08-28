<?php

// helpers

function ladybug_logger_dump(/*$var1 [, $var2...$varN]*/)
{
    $ladybug = getLadybug();
    ladybug_set_format('text');
    echo call_user_func_array(array($ladybug,'dump'), func_get_args());
    ladybug_set_format('html');
}
