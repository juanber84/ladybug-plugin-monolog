<?php

// helpers

function ladybug_logger_dump(/*$var1 [, $var2...$varN]*/)
{
    $ladybug = getLadybug();
    echo call_user_func_array(array($ladybug,'dump'), func_get_args());
}
