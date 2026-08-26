<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio #1 - Círculo</title>
</head>
<body>
    <h1>Cálculo de Área y Perímetro de un Círculo</h1>
    //Formulario para que el usuario le ingrese el valor del radio
    <form method="GET" action="">
        <label for="radio">Ingrese el valor del radio:</label>
        <input type="number" name="radio" id="radio" required>
        <button type="submit">Calcular</button>
</form>
<?php 
if (isset($_GET['radio']) && $_GET['radio'] !== "") {
        $r = floatval($_GET['radio']); // Convertimos el valor a número decimal
        if ($r >= 0) {
            $area = M_PI * pow($r, 2);
            $perimetro = 2 * M_PI * $r;
        echo "<strong>Radio ingresado:</strong> $r <br><br>";
            echo "Área = " . round($area, 2) . "<br><br>";
            echo "Perímetro = " . round($perimetro, 2) . "<br>";
        } else {
            echo "<span style='color:red;'>Por favor, ingresa un radio positivo.</span>";
        }
    }
?>
</body>
</html>