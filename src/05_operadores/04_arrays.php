<?php
$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

$c = $a + $b; // Unión de $a y $b
echo "Unión de \$a y \$b: \n";
var_dump($c);

$c = $b + $a; // Unión de $b y $a
echo "Unión de \$b y \$a: \n";
var_dump($c);

$a += $b; // Unión de $a += $b es $a y $b
echo "Unión de \$a += \$b: \n";
var_dump($a);

//$a == $b	Igualdad	true si $a i $b tienen las mismas parejas clave/valor.
//$a === $b	Identidad	true si $a y $b tienen las mismas parejas clave/valor en el mismo orden y de los mismos tipos.
// NOTA: no parece funcionar para este caso, cuando se asigna la clave no númerica.
$d = array( "a" => "apple", "b" => "banana");
var_dump($a == $d);
var_dump($a === $d);


$a = array("apple", "banana");
$b = array(1 => "banana", "0" => "apple");
var_dump($a == $b); // bool(true)
var_dump($a === $b); // bool(false)