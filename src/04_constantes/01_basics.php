<?php

// Nombres de constantes correctos
define("FOO",     "something");
define("FOO2",    "something else");
define("FOO_BAR", "something more");

// Tambien es posible con const
const FOO3 = "another something";

// Nombres de constantes incorrectos
define("2FOO",    "something");

// Esto es válido, pero debe evitarse:
// PHP podría cualquier día proporcionar una constante mágica 
// que rompiera el script
// Notación utilizada por variables de PHP
define("__FOO__", "something"); 

echo "FOO\n";
echo FOO."\n";
echo FOO2."\n";
echo FOO_BAR."\n";

echo FOO3."\n";

//echo 2FOO."\n";

echo __FOO__."\n";
