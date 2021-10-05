<?php

/* Error intencional de archivo */
$my_file = @file ('non_existent_file') or
    die ("La apertura de archivo ha fallado: el error fue '$error'");

// esto funciona con cualquier expresión, no solo con funciones:
$value = @$cache[$key];
// no producirá una anotación si el índice $key no existe.