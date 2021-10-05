<?php

//if
if ($a > $b) {
  echo "a es mayor que b\n";
} elseif ($a == $b) {
  echo "a es igual que b\n";
} else {
  echo "a es menor que b\n";
}

/*
PHP ofrece una sintaxis alternativa para algunas de sus estructuras de control, 
a saber: if, while, for, foreach, y switch. 

En cada caso, la forma básica de la sintaxis alternativa es cambiar la llave de apertura por dos puntos (:) 
y la llave de cierre por endif;, endwhile;, endfor;, endforeach;, o endswitch;, respectivamente.

A continuacón, if alternativa con 2 puntos (:) - notar el 'endif'
*/

if ($a > $b):
  echo "a es mayor que b\n";
elseif ($a == $b):
  echo "a es igual que b\n";
else:
  echo "a es menor que b\n";
endif;