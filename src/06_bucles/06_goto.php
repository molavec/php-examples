<?php

/*
El operador goto puede ser usado para saltar a otra sección en el programa. 
El punto de destino es especificado mediante una etiqueta seguida de dos puntos y 
la instrucción es dada como goto seguida de la etiqueta del destino deseado. 
*/

goto a;
echo 'Foo'."\n";
 
a:
echo 'Bar'."\n";


/*
Este goto no es completamente sin restricciones. 
La etiqueta de destino debe estar dentro del mismo fichero y contexto, 
lo que significa que no se puede saltar fuera de una función o método, 
ni se puede saltar dentro de uno. 
Tampoco se puede saltar dentro de cualquier clase de estructura de bucle o switch.
Se puede saltar fuera de estos y un uso común es utilizar un goto en lugar de un break multi-nivel.
*/

for($i=0,$j=50; $i<100; $i++) {
  while($j--) {
    if($j==17) goto end;
  }  
}
echo "i = $i";
end:
echo 'j alcanzó 17';