<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversión de centimetros a pulgadas</title>
</head>
<body>
    <h2> Conversión de centimetros a pulgadas</h2>
    <form method="GET" action="">
        <label for="pulgadas">Leer las pulgadas:</label> <br>
        <input type="number" step="any" name="pulgadas" id="pulgadas" required> <br> <br>
        <input type="submit" value="Convertir a Centímetros">
    </form>
    <hr>
    <?php
if (isset($_GET['pulgadas'])) {
    $pulgadas = floatval($_GET['pulgadas']);
 
    $centimetros = $pulgadas * 2.54;
 
    echo "Resultado: " . $pulgadas . " pulgadas equivalen a " . round($centimetros, 2) . " centímetros.<br>";
}
?>
</body>
</html>