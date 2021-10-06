<?php

class Foo
{
    static $staticProp = "propiedad estática\n";
    
    static function staticEcho()
    {
        echo "Método 'staticEcho' llamado\n";
    }

    function Echo()
    {
        $nombre = 'Bar';
        $this->$nombre(); // Esto llama al método Bar()
    }

    function Bar()
    {
        echo "Esto es Bar\n";
    }
}

// 1. método variable
$foo = new Foo();
$nombrefunc = "Echo";
$foo->$nombrefunc();  // Esto llama a $foo->Echo()

echo "------\n";

// 2. Ejemplo de método variable con propiedades estáticas
echo Foo::$staticProp; // Esto imprime 'propiedad estática'. No necesita una $staticProp en este ámbito.
$staticProp = "staticEcho";
Foo::$staticProp();  // Esto llama a $foo->staticEcho() leyendo $staticProp en este ámbito.

echo "------\n";

// 3. Llamables complejos
$func = array("Foo", "staticEcho");
$func(); // imprime "staticEcho"
$func = array(new Foo, "Bar");
$func(); // imprime "Bar"
$func = "Foo::staticEcho";
$func(); // imprime "staticEcho" a partrid de PHP 7.0.0; antes, emitía un error fatal
