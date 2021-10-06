<?php

/*
Funciones variables
 */

 // 1. Ejemplo de función variable


function foo() {
  echo "En foo()\n";
}

function bar($arg = '')
{
  echo "En bar(); el argumento era '$arg'.<br />\n";
}

// Esta es una función de envoltura alrededor de echo
function hacerecho($cadena)
{
  echo "$cadena\n";
}

$func = 'foo';
$func();        // Esto llama a foo()

$func = 'bar';
$func('prueba');  // Esto llama a bar()

$func = 'hacerecho';
$func('prueba');  // Esto llama a hacerecho()