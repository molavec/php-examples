<?php

/* ejemplo 1 */
$i = 1;
while ($i <= 3) {
    echo $i++."\n";  /* el valor presentado sería
                   $i antes del incremento
                   (post-incremento) */
}

/* ejemplo 2 */
$i = 1;
while ($i <= 3):
    echo $i."\n";
    $i++;
endwhile;

/* ejemplo 3 */
$i = 1;
do {
    echo $i++."\n";
} while ($i <= 3 );