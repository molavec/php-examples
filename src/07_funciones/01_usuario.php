<?php
// 1. función definida por el usuario.
function hello(string $name = "Mundo"): string {
  return "Hola $name\n";
}

echo hello();
echo hello('Miguel');

$valor = -1; 
var_dump(aumentar($valor));
var_dump($valor);

$valor = 0; 
var_dump(aumentar($valor));
var_dump($valor);

// 2. función con parametro por referencia.
function aumentar(int &$value): ?int {
  return ($value >=0) ? ++$value: null;
}