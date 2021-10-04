<?php

$variable = 'texto en variable';

// comillas simples
echo 'Texto entre comillas simples'."\n";
echo 'Carácteres especiales \\ y \''."\n";
echo 'Texto con variable entre comillas simples: $variable'."\n";

// comillas dobles
echo "Texto entre comillas dobles\n";
echo "Carácteres especiales \\ y \"\n";
echo "Texto con variable entre comillas dobles: $variable\n";

// heredoc: Sirve para textos largos. 
// * evalúa variables y caráteres especiales.
// * es como utilizar comillas dobles
// * desde 5.3 es posible usar commillas dobles 
// * se abre y se cierra con una palabra en mayúsculas
echo <<<EOT
variable en EOT: $variable.\n
EOT;

echo <<<"FOO"
variable en FOO: $variable.\n
FOO;

// newdoc
// * No evalúa variables y caráteres especiales. Útil para textos en otros lenguajes como HTML o CSS.
// * es como utilizar comillas simple
// * desde 5.3 es posible usar commillas simples 
// * se abre y se cierra con una palabra en mayúsculas
echo <<<'FOO'
<p>variable en FOO: $variable.</p>
FOO;
echo "\n";


// End of Line
echo "Esta línea está seguida de un PHP_EOL.".PHP_EOL;

// Sintaxis simple
echo "variable: ${variable}\n";

// Sintaxis compleja: útil para objetos más complejos como Arreglos o clases
// Notar como envuelven los corchetes.
echo "variable: {$variable}\n";

// arreglos
$array = ['uno', 'dos', 3];
echo "variable: $array[0]\n";
echo "variable: ${array[0]}\n"; // funciona pero no queda bien destacado en los editores de código.
echo "variable: {$array[0]}\n";

// clases
class Persona {
  public $firstname = "Jisus";
  public $lastname = "Craist";
  public $age = "33";
}

$persona = new Persona();
echo "Propiedad clase: $persona->firstname\n";
//echo "Propiedad clase: ${persona}->firstname\n";
echo "Propiedad clase: {$persona->firstname}\n";


