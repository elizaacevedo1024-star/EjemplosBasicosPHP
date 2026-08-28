<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio #1 - Cálculo de Círculo</title>
    <!-- Estilos CSS requeridos por la rúbrica -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            color: #333;
            margin: 50px;
            text-align: center;
        }
        .container {
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
            display: inline-block;
        }
        input[type="number"] {
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #00529B;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #003d73;
        }
        .resultado {
            margin-top: 20px;
            font-weight: bold;
            color: #00529B;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cálculo de Área y Perímetro de un Círculo</h1>
        
        <!-- Formulario para ingresar el radio -->
        <form method="GET" action="">
            <label for="radio">Ingrese el valor del radio:</label><br>
            <input type="number" step="any" name="radio" id="radio" required><br>
            <button type="submit">Calcular</button>
        </form>

        <?php
        // Comprobamos si el parámetro 'radio' ha sido enviado por GET y no está vacío
        if (isset($_GET['radio']) && $_GET['radio'] !== "") {
            $r = floatval($_GET['radio']); // Convertimos el valor a número decimal (casting)
            
            if ($r >= 0) {
                // Cálculo del área y perímetro usando la constante M_PI de PHP
                $area = M_PI * pow($r, 2);
                $perimetro = 2 * M_PI * $r;
                
                echo "<div class='resultado'>";
                echo "<strong>Radio ingresado:</strong> $r <br><br>";
                echo "Área = " . round($area, 2) . "<br>";
                echo "Perímetro = " . round($perimetro, 2);
                echo "</div>";
            } else {
                echo "<p style='color:red;'>Por favor, ingresa un radio positivo.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
