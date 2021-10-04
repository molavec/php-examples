<?php

/*
 Al ejecutar php todo lo que este fuera de las etiquetas php se mostrará en consola.
*/
?>

Este es un texto que se mostrará sí o sí.

<?php if ($expresión == true): ?>
  Esto se mostrará si la expresión es verdadera.
<?php else: ?>
  En caso contrario se mostrará esto.
<?php endif; ?>


