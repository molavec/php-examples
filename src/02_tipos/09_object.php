<?php
class foo
{
    function hacer_algo()
    {
        echo "Haciendo algo.\n"; 
    }
}

$bar = new foo;
$bar->hacer_algo();

var_dump($bar);