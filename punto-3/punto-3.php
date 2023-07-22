<?php
// DECLARACION DE LAS VARIABLES DE ENTRADA

$firstNumber = 0;
$secondNumber = 0;

//PROCESO

echo "Ingrese el primer numero a sumar :";
fscanf(STDIN, "%d" , $firstNumber);
echo "Ingrese el segundo numero a sumar :";
fscanf(STDIN, "%d" , $secondNumber);

$add = $firstNumber + $secondNumber;

//SALIDA

echo "La suma es :" . $add;

?>