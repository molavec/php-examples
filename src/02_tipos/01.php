<?php

/*
PHP admite diez tipos primitivos.

Cuatro tipos escalares:

* boolean
* integer
* float (número de punto flotante, también conocido como double)
* string

Cuatro tipos compuestos:

* array
* object
* callable
* iterable

Y finalmente dos tipos especiales:

* resource
* NULL

Puede que existan aún algunas referencias al tipo "double" en el manual. Considere al tipo double como float; los dos nombres existen sólo por razones históricas.

El tipo de una variable usualmente no lo declara el programador; al contrario, es decidido en tiempo de ejecución por PHP dependiendo del contexto en el que se emplea dicha variable.



**Nota:** Para comprobar el tipo y el valor de una expresión, utilice la función var_dump().

Para obtener una representación legible por humanos de un tipo con propósitos de depuración, use la función gettype(). Para comprobar un cierto tipo, no emplee gettype(), si no las funciones is_tipo. Algunos ejemplos:

*/


$un_bool = TRUE;   // un valor booleano
$un_str  = "foo";  // una cadena de caracteres
$un_str2 = 'foo';  // una cadena de caracteres
$un_int  = 12;     // un número entero

echo gettype($un_bool)."\n"; // imprime: boolean
echo gettype($un_str)."\n";  // imprime: string

// Si este valor es un entero, incrementarlo en cuatro
if (is_int($un_int)) {
    $un_int += 4;
}
echo $un_int."\n";

// Si $un_str es una cadena, imprimirla
if (is_string($un_str)) {
    echo "Cadena: $un_str\n";
}

// Si $un_bool es una cadena, imprimirla
if (is_bool($un_bool)) {
  echo "Un Boolean: $un_bool\n";
}


