<?php 

//Array de anaimales que recorremos.

$animales = array("perro", "gato", "conejo", "loro", "pez");   
//Recorremos el array con un foreach 
foreach ($animales as $key => $animal) {
    $animales[$key] = ucfirst($animal); //Convierte la primera letra de cada animal en mayuscula 

}
print_r($animales); //Imprime el array con los animales en mayuscula

?>
