<?php
/*
When a string needs to be evaluated as number (e.g. arithmetic operations, int type declaration, etc.) 
the following steps are taken to determine the outcome:

* If the string is numeric, resolve to an int if the string is an integer numeric 
string and fits into the limits of the int type limits (as defined by PHP_INT_MAX), otherwise resolve to a float.

* If the context allows leading numeric strings and the string is one, resolve to an int 
if the leading part of the string is an integer numeric string and fits into the limits of
the int type limits (as defined by PHP_INT_MAX), otherwise resolve to a float. Additionally an error
of level E_WARNING is raised.
The string is not numeric, throw a TypeError.

*/
$foo = 1 + "10.5";                // $foo is float (11.5)
var_dump($foo);
$foo = 1 + "-1.3e3";              // $foo is float (-1299)
var_dump($foo);
$foo = 1 + "bob-1.3e3";           // TypeError as of PHP 8.0.0, $foo is integer (1) previously
var_dump($foo);
$foo = 1 + "bob3";                // TypeError as of PHP 8.0.0, $foo is integer (1) previously
var_dump($foo);
$foo = 1 + "10 Small Pigs";       // $foo is integer (11) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
var_dump($foo);
$foo = 4 + "10.2 Little Piggies"; // $foo is float (14.2) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
var_dump($foo);
$foo = "10.0 pigs " + 1;          // $foo is float (11) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
var_dump($foo);
$foo = "10.0 pigs " + 1.0;        // $foo is float (11) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
var_dump($foo);
