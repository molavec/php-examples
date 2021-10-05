<?php

/*
Iterable es un seudotipo introducido en PHP 7.1. Acepta cualquier array u objeto que implemente la interfaz Traversable. 
Estos dos tipos se recorren con foreach y se pueden emplear con yield from dentro de un generador.

* Iterable se puede usar como tipo de parámetro para indicar que una función requiere un conjunto de valores, 
pero que no importa la forma del dicho conjunto ya que se utiizará con foreach. Si un valor no es un array o 
una instancia de Traversable, se lanzará un TypeError.

* Los parámetros declarados como iterable pueden usar null o un array como valor predeterminado.

* Iterable se puede usar como tipo de retorno para indicar que una función devolverá un valor iterable. 
Si el valor devuelto no es un array o una instancia de Traversable, se lanzará un TypeError.


*/


function foo(iterable $iterable = []): iterable {
  foreach ($iterable as $valor) {
      echo "$valor\n";
  }
  return $iterable;
}

$array = array("foo", "bar", "hello", "world");
foo($array);