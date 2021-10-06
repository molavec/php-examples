<?php

// https://www.php.net/manual/es/functions.arrow.php

/*

* Las funciones de flecha fueron introducidas en PHP 7.4 como una sintaxis más concisa para las funciones anónimas.

* Tanto las funciones anónimas como las funciones de flecha se implementan utilizando la clase Closure.

* Las funciones de las flechas tienen la forma básica fn (argument_list) => expr.

* Las funciones de las flechas soportan las mismas características que las funciones anónimas, 
excepto que el uso de variables del ámbito padre siempre es automático.

* Cuando una variable utilizada en la expresión se define en el ámbito padre será implícitamente 
capturada por valor. 

*/


// 1. En el siguiente ejemplo, las funciones $fn1 y $fn2 se comportan de la misma manera.
$y = 1;
$fn1 = fn($x) => $x + $y;
// equivalent to using $y by value:
$fn2 = function ($x) use ($y) {
    return $x + $y;
};

var_dump($fn1(3));

// 2. Las funciones de flecha capturan variables por valor automáticamente, incluso cuando están anidadas
$z = 1;
$fn = fn($x) => fn($y) => $x * $y + $z;
// Outputs 51
var_dump($fn(5)(10));