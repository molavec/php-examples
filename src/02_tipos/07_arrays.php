<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);
var_dump($array);

// a partir de PHP 5.4
$array = [
    "foo" => "bar",
    "bar" => "foo",
];
var_dump($array);

$array = array(
  "foo" => "bar",
  "bar" => "foo",
  100   => -100,
  -100  => 100,
  6  => 60,
  "Después del index 6 el índice continúa al mayor",
);
var_dump($array);


// Arrays indexados sin clave
$array = array("foo", "bar", "hello", "world");
var_dump($array);