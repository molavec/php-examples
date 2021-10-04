<?php
/* 
* Para especificar un literal de tipo boolean se emplean las constantes true o false. Ambas no son susceptibles a mayúsculas y minúsculas.
* var_dump: muestra información de la variables. https://www.php.net/manual/es/function.var-dump.php
*/
$foo = True; // asigna el valor TRUE a $foo
var_dump($foo);

//False
var_dump((bool) "");        // bool(false)
var_dump((bool) array());   // bool(false)
var_dump((bool) 0);         // bool(false)
var_dump((bool) 0.0);       // bool(false)
var_dump((bool) -0);        // bool(false)

//true
var_dump((bool) "false");   // bool(true)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)