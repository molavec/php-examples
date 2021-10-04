<?php
/*
PHP también permite la etiqueta de apertura abreviada <? (la cual está desaconsejada debido a que sólo está disponible si se habilita con la directiva short_open_tag del fichero de configuración php.ini, o si PHP se configuró con la opción --enable-short-tags).

Si un fichero contiene solamente código de PHP, es preferible omitir la etiqueta de cierre de PHP al final del mismo. Así se previene la adición de espacios en blanco o nuevas líneas accidentales después de la etiqueta de cierre, lo cual causaría efectos no deseados debido a que PHP comenzará la salida del búfer cuando no había intención por parte del programador de enviar ninguna salida en ese punto del script.
*/

echo("HELLO WORLD\n");