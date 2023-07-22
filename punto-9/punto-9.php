<?php
$numero = 5;
$contador = 0;

while ($contador <= 30) {
    $resultado = $numero * $contador;
    echo $numero . " x " . $contador . " = " . $resultado . "\n";
    $contador++;
}
?>