<?php
$suma = 0;

for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . "\n";
        $suma += $i;
    }
}

echo "La suma de los números pares del 0 al 100 es: " . $suma;
?>