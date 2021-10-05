<?php

// 1. clásico
for ($i = 1; $i <= 3; $i++) {
  echo $i."\n";
}

// 2. sin límites 
echo "--------\n";
$i = 1;
for (; ; ) {
  if ($i > 3) {
      break;
  }
  echo $i."\n";
  $i++;
}

// 3. todo en parámetros
echo "--------\n";
for ($i = 1, $j = 0; $i <= 3; $j += $i, print $i."\n", $i++);

// 4. foreach para array
echo "--------\n";
$array = array(1, 2, 3);
foreach ($array as $valor) {
  echo "$valor\n";
}

// 5. foreach - modifica los valores del arreglo - notar el '&'
echo "--------";
foreach ($array as &$valor) {
  $valor = $valor * 2;
}