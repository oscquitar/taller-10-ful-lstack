<?php
$tipo_afiliacion = "A";
$num_personas = 4;
$valor_entrada = 25000;

switch ($tipo_afiliacion) {
    case "A":
        $descuento = 0.30;
        break;
    case "B":
        $descuento = 0.25;
        break;
    case "C":
        $descuento = 0.10;
        break;
    case "D":
        $descuento = 0.05;
        break;
    default:
        $descuento = 0;
}

$total_sin_descuento = $valor_entrada * $num_personas;
$total_descuento = $total_sin_descuento * $descuento;
$total_con_descuento = $total_sin_descuento - $total_descuento;

echo "El valor total de las entradas es: $" . number_format($total_con_descuento, 2);
?>