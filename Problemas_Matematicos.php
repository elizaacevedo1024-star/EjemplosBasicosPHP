// Suma 
<?php
$num1 = 22;
$num2 = 33;
$suma = $num1 + $num2;

echo "La suma de $num1 y $num2 es: $suma<br><br>";

//Rseta 
$num1= 7899;
$num2= 3576;
$resta = $num1 - $num2;

echo "<br> La resta de $num1 y $num2 es: $resta<br><br>";

//Multiplicacion 
$num1= 34;
$num2= 56;
$multiplicacion = $num1 * $num2;

echo "<br> La multiplicación de $num1 y $num2 es: $multiplicacion<br><br>";

//Division
$num1= 144;
$num2= 12;
$division= $num1 / $num2;

echo "<br> La división de $num1 y $num2 es: $division<br><br>";

//Potencia 
$base= 9;
$exponente= 5;
$potencia= $base ** $exponente;

echo "<br> La potencia de $base elevado a $exponente es: $potencia<br><br>";   

//Modulo 
$num1= 15;
$num2= 6;
$modulo= $num1 % $num2;

echo "<br> El modulo de $num1 y $num2 es: $modulo<br><br>";

//Redondeo
$numero = 4.6;
 
$redondeo = round($numero);
$redondeo_arriba = ceil($numero);
$redondeo_abajo = floor($numero);
 
echo "El numero redondeado es: $redondeo<br>";
echo "El numero redondeado hacia arriba es: $redondeo_arriba<br>";
echo "El numero redondeado hacia abajo es: $redondeo_abajo<br><br>";
 
//Operador módulo % con signos
echo (5 % 3) . "<br>";
echo (-5 % 3) . "<br>";
echo (5 % -3) . "<br>";
echo (-5 % -3) . "<br><br>";
 
// Valor absoluto: abs()
$numero = -7;
$valor_absoluto = abs($numero);
echo "El valor absoluto de $numero es: $valor_absoluto<br>";
?>
