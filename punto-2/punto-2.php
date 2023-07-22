<?php
// Definir una constante
define('CONSTANTE', 10);

// Declarar una variable
$variable = 5;


$suma = CONSTANTE + $variable;

echo "La suma es: " . $suma . "<br>";

// Cambiar el valor de la variable
$variable = 3;

// Sumar la constante y la variable nuevamente
$suma_nueva = CONSTANTE + $variable;

// Mostrar el nuevo resultado
echo "La nueva suma es: " . $suma_nueva;
?>