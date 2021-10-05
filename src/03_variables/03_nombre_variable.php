<?php
/*
A veces es conveniente tener nombres de variables variables.
Una variable variable toma el valor de una variable y lo trata como el nombre de una variable. 
En el ejemplo, 'hola' se puede usar como el nombre de una variable utilizando dos signos de dólar.
*/
$a = 'hola';
$$a = 'mundo';
echo "$a $hola\n";