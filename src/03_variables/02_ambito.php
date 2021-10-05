<?php

// Las funciones por defecto tienen un ambito local
$a = 1; /* ámbito global */
function test() {
  echo "test1 -> $a\n"; /* referencia a una variable del ámbito local */
}
test();

//global: se puede utilizar 'global' para que la variable sea global
$a = 1; /* ámbito global */
function test2() {
  global $a;
  echo "test2 -> $a\n"; /* referencia a una variable del ámbito local */
}
test2();


//static: se puede utilizar static para mantener disponible el valor de la variable
function test3() {
    static $b = 4;
    echo "test3 -> $b\n";
    $b++;
}
test3();
test3();
test3();

