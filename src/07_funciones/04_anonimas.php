<?php

// https://www.php.net/manual/es/functions.anonymous.php

/*
Las funciones anónimas implementan la clase 'Closure'
*/

// 1. Ejemplo de asignación de variable de una función anónima
$saludo = function($nombre)
{
    printf("Hola %s\r\n", $nombre);
};

$saludo('Mundo');
$saludo('PHP');


echo "--------\n";

// 2. Heredar variables de un ámbito padre

$mensaje = 'hola';

// Sin "use"
$ejemplo = function () {
    var_dump($mensaje);
};
$ejemplo();

// Heredar $mensaje
$ejemplo = function () use ($mensaje) {
    var_dump($mensaje);
};
$ejemplo();

// El valor de la variable heredada está cuando la función
// está definida, no cuando se le invoca
$mensaje = 'mundo';
$ejemplo();

// Reiniciar el mensaje
$mensaje = 'hola';

// Heredar por referencia
$ejemplo = function () use (&$mensaje) {
    var_dump($mensaje);
};
$ejemplo();

// El valor cambiado en el ámbito padre
// se refleja dentro de la llamada a la función
$mensaje = 'mundo';
$ejemplo();

// Los cierres también aceptan argumentos normales
$ejemplo = function ($arg) use ($mensaje) {
    var_dump($arg . ' ' . $mensaje);
};
$ejemplo("hola");

echo "--------\n";

// 3. Cierres y ámbito

// Un carro de compras básico que contiene una lista de productos añadidos
// y la cantidad de cada producto. Incluye un método que
// calcula el precio total de los artículos del carro usando un
// cierre como llamada de retorno.
class Carro
{
    const PRECIO_MANTEQUILLA = 1.00;
    const PRECIO_LECHE       = 3.00;
    const PRECIO_HUEVOS      = 6.95;

    protected $productos = array();

    public function añadir($producto, $cantidad)
    {
        $this->productos[$producto] = $cantidad;
    }

    public function obtenerCantidad($producto)
    {
        return isset($this->productos[$producto]) ? $this->productos[$producto] :
               FALSE;
    }

    public function obtenerTotal($impuesto)
    {
        $total = 0.00;

        $llamadaDeRetorno =
            function ($cantidad, $producto) use ($impuesto, &$total)
            {
                $precioUnidad = constant(__CLASS__ . "::PRECIO_" .
                    strtoupper($producto));
                $total += ($precioUnidad * $cantidad) * ($impuesto + 1.0);
            };

        array_walk($this->productos, $llamadaDeRetorno);
        return round($total, 2);
    }
}

$mi_carro = new Carro;

// Añadir algunos artículos al carro
$mi_carro->añadir('mantequilla', 1);
$mi_carro->añadir('leche', 3);
$mi_carro->añadir('huevos', 6);

// Imprimir el total con un impuesto de venta del 5%.
print $mi_carro->obtenerTotal(0.05) . "\n";
// El resultado es 54.29

echo "--------\n";

// 5. Vinculación automática de $this

class Test
{
    public function testing()
    {
        return function() {
            var_dump($this);
        };
    }
}

$object = new Test;
$function = $object->testing();
$function();

echo "--------\n";


