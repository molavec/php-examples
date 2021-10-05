<?php

/*
'require' es idéntico a include excepto que en caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR. 
En otras palabras, éste detiene el script mientras que include sólo emitirá una advertencia (E_WARNING) 
lo cual permite continuar el script.

La sentencia 'require_once' es idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido 
y si es así, no se incluye (require) de nuevo.
*/

//require('05_test.php');
include('05_test.php');
require_once('05_test.php');
include_once('05_test.php');

test();
test("hola");
test("test");