<?php 
$i = 1;
while ($i <= 10) {
    $i++; // el valor presentado seria $i antes del incremento (post-incremento)
}
?>
//Ejemplo 2
<?php
$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;
?>