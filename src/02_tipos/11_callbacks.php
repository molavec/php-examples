<?php
/*
Las llamadas de retorno, o retrollamadas, se pueden indicar con la declaración de tipo callable a partir de PHP 5.4. 
Esta documentación utilizó la información del tipo callback con el mismo propósito.

Algunas funciones como call_user_func() o usort() aceptan como parámetro funciones de llamada de retorno definidas por el usuario. 
Las funciones de llamadas de retorno no sólo pueden ser funciones simples, sino también métodos de un object, incluyendo métodos de clase estáticos.

Una función de PHP se pasa por su nombre como un string. 
Se puede utilizar cualquier función nativa o definida por el usuario, exceptuando contrucciones del lenguaje, 
tales como: array(), echo, empty(), eval(), exit(), isset(), list(), print o unset().

Un método de un object instanciado se pasa como un array que contiene un object en el índice 0 y 
el nombre del método en el índice 1. Está permitido el acceso a métodos protegidos y privados desde dentro de una clase.

Los métodos de clase estáticos también se pueden pasar sin instanciar un object de dicha clase, 
pasando el nombre de la clase en lugar de un object en el índice 0. A partir de PHP 5.2.3, 
también es posible pasar 'NombreDeClase::nombreDeMetodo'.

A parte de las funciones comunes definidas por el usuario, las funciones anónimas también 
se pueden pasar a un parámetro de llamada de retorno.

call_user_func — Llamar a una llamada de retorno dada por el primer parámetro

*/

// Un ejemplo de función de llamada de retorno
function mi_función_de_llamada_de_retorno() {
  echo "¡hola mundo desde función!\n";
}


// Un ejemplo de método de llamada de retorno
class MiClase {
  static function miMétodoDeLlamadaDeRetorno() {
      echo "¡Hola Mundo desde metodo!\n";
  }
}

// Tipo 1: Llamada de retorno simple
call_user_func('mi_función_de_llamada_de_retorno');

// Tipo 2: Llamada a un método de clase estático
call_user_func(array('MiClase', 'miMétodoDeLlamadaDeRetorno'));

// Tipo 3: Llamada al método de un objeto
$obj = new MiClase();
call_user_func(array($obj, 'miMétodoDeLlamadaDeRetorno'));

// Tipo 4: Llamada a un método de clase estático (A partir de PHP 5.2.3)
call_user_func('MiClase::miMétodoDeLlamadaDeRetorno');

// Tipo 5: Llamada a un método de clase estático relativo (A partir de PHP 5.3.0)
class A {
  public static function quién() {
      echo "A\n";
  }
}

class B extends A {
  public static function quién() {
      echo "B\n";
  }
}

call_user_func(array('B', 'parent::quién')); // A

// Tipe 6: Los objetos que implementan __invoke se pueden emplear como retrollamadas (desde PHP 5.3)
class C {
  public function __invoke($nombre) {
      echo 'Hola ', $nombre, "\n";
  }
}

$c = new C();
call_user_func($c, 'PHP!');