<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio #1 - Cálculo de Círculo</title>
    <!-- Estilo CSS requerido -->
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
    </style>
</head>
<body>
    <h1>Cálculo de Área y Perímetro de un Círculo</h1>
    
    <!-- Formulario para que el usuario le ingrese el valor del radio -->
    <form method="GET" action="">
        <label for="radio">Ingrese el valor del radio:</label>
        <input type="number" step="any" name="radio" id="radio" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    // Comentario: Declaración del radio y validación según la guía
    if (isset($_GET['radio']) && $_GET['radio'] !== "") {
        $r = floatval($_GET['radio']); // convertimos el valor a número decimal
        if ($r >= 0) {
            // Comentario: Cálculo del área y perímetro usando la constante M_PI
            $area = M_PI * pow($r, 2);
            $perimetro = 2 * M_PI * $r;
            
            echo "<strong>Radio ingresado:</strong> $r <br><br>";
            echo "Área = " . round($area, 2) . "<br>";
            echo "Perímetro = " . round($perimetro, 2);
        } else {
            echo "<span style='color:red;'>Por favor, ingresa un radio positivo.</span>";
        }
    }
    ?>
</body>
</html>
