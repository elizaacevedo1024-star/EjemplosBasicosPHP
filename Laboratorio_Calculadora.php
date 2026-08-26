<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Básica</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        .resultado { background: #f4f4f4; padding: 10px; border-left: 5px solid #333; margin-top: 15px; }
    </style>
</head>
<body>
    <h2>Calculadora de Operaciones</h2>
 
    <form method="GET" action="">
        <label>Número 1:</label><br>
        <input type="number" step="any" name="num1" required><br><br>
        
        <label>Número 2:</label><br>
        <input type="number" step="any" name="num2" required><br><br>
        
        <input type="submit" name="calcular" value="Calcular Operaciones">
    </form>
    <?php 
    if (isset($_GET['calcular'])) {
        $n1 = floatval($_GET['num1']);
        $n2 = floatval($_GET['num2']);
        $suma = $n1 + $n2;
        $resta = $n1 - $n2;
        $multiplicacion = $n1 * $n2;
        $division = ($n2 != 0) ? ($n1 / $n2) : "Error (división por cero)";
 
    echo "<div class='resultado'>";
    echo "<h3>Resultados (Redondeados a 2 decimales):</h3>";
    echo "Suma: " . round($suma, 2) . "<br>";
    echo "Resta: " . round($resta, 2) . "<br>";
    echo "Multiplicación: " . round($multiplicacion, 2) . "<br>";
    
    if (is_numeric($division)) {
        echo "División: " . round($division, 2) . "<br>";
    } else {
        echo "División: $division <br>";
    }
    echo "</div>";
}
?>
</body>
</html>