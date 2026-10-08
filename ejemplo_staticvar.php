<?php
function modificarArreglo ($datos) {
    $datos['nuevo'] = 'Naranjas';
}

$miArreglo = ['a' => 1];
modificarArreglo($miArreglo);

print_r($miArreglo);
?>