<?php

/*
El tamaño de un integer depende de la plataforma, aunque el valor usual es un valor
máximo de aproximadamente dos mil millones (esto es, 32 bits con signo). 
Las plataformas de 64 bits normalmente tienen un valor máximo de aproximadamente 9E18, 
excepto en Windows antes de PHP 7, que siempre es de 32 bits. 
PHP no tiene soporte para el tipo integer sin signo. 
El tamaño de un integer se puede determinar mediante la constante PHP_INT_SIZE, y el valor máximo 
mediante la constante PHP_INT_MAX desde PHP 4.4.0 y PHP 5.0.5, y el valor 
mínimo mediante la constante PHP_INT_MIN desde PHP 7.0.0.
 */

$a = 1234; // número decimal
var_dump($a);
$a = -123; // un número negativo
var_dump($a);
$a = 0123; // número octal (equivale a 83 decimal)
var_dump($a);
$a = 0x1A; // número hexadecimal (equivale a 26 decimal)
var_dump($a);
$a = 0b11111111; // número binario (equivale al 255 decimal)
var_dump($a);


// desbordamiento 64-bit
$número_grande = 9223372036854775807;
var_dump($número_grande);                    // int(9223372036854775807)

$número_grande = 9223372036854775808;
var_dump($número_grande);                    // float(9.2233720368548E+18)

$millón = 1000000;
$número_grande =  50000000000000 * $millón;
var_dump($número_grande);                    // float(5.0E+19)

// redondeo: usar round();
var_dump(25/7);         // float(3.5714285714286) 
var_dump((int) (25/7)); // int(3)
var_dump(round(25/7));  // float(4) 
