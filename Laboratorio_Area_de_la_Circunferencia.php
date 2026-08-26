<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Área de una Circunferencia</title>
</head>
<body>
    <h2>Cálculo del área de una circunferencia</h2>
 
    <form method="GET" action="">
        <label for="radio">Introduzca el radio (dato real):</label><br>
        <input type="number" step="any" name="radio" id="radio" required><br><br>
        <input type="submit" value="Calcular Área">
    </form>
    <hr>
 
<?php
if (isset($_GET['radio'])) {
    $radio = floatval($_GET['radio']);
 
    $area = M_PI * pow($radio, 2);
 
    echo "Para un radio de <strong>" . $radio . "</strong>, el área de la circunferencia es: <strong>" . round($area, 2) . "</strong><br>";
}
?>
</body>
</html>