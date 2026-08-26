<?php 
$_REQUEST['nombre'];

if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
} else {
    $nombre = 'No se ha ingresado un nombre correctamente';
}
echo "El nombre ingresado es: " . $nombre;
?>
