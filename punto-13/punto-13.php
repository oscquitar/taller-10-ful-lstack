<?php
$numeros = array(1, 2, 3, 4, 5);
$suma = 0;

for ($i = 0; $i < count($numeros); $i++) {
    $suma += $numeros[$i];
}

echo "La suma de los números del arreglo es: " . $suma;
?>
