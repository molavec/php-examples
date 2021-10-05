<?php

// Asignación por valor: Por defecto
$var = 'Roberto';
$Var = 'Juan';
echo "$var, $Var \n";      // imprime "Roberto, Juan"

// Asignación por referencia
$foo = 'Bob';                // Asigna el valor 'Bob' a $foo
$bar = &$foo;                // Referenciar $foo vía $bar.
$bar = "Mi nombre es $bar \n";  // Modifica $bar...
echo $bar;
echo $foo;                   // $foo también se modifica.