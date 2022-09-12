<?php
/* a * x + b = 0
x = - b / a
*/

$a = 2;
$b = 5;

if ($a != 0) {
    $x = -$b / $a;
    echo "<span span style = \" color: blue;\">Корень рівння:</span>" . $x; 
} else {
    echo "Помилка";
}



