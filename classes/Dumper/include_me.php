<?php

function dump()
{
    // Dumper\Dumper::dump(...func_get_args());
    call_user_func_array('Dumper\Dumper::dump', func_get_args());
}

function dd()
{
    // Dumper\Dumper::dd(...func_get_args());
    call_user_func_array('Dumper\Dumper::dd', func_get_args());
}