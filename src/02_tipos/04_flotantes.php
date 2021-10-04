<?php

$a = 1.234; 
var_dump($a);
$b = 1.2e3;
var_dump($b);
$c = 7E-10;
var_dump($c);
$d = 1_234.567; // a partir de PHP 7.4.0
var_dump($d);

// No es recomendable realizar comparaciones con números flotante debido a la presición
// aunque para números dentro de los lítmites no hay mayor problema.
$a = 1.23456789;
$b = 1.23456780;
$c = 0.00001;
var_dump($a-$b);
var_dump($c);
if(abs($a-$b) < $c) {
    echo "true\n";
}
