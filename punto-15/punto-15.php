<?php
function suma($num1, $num2) {
    return $num1 + $num2;
}

function resta($num1, $num2) {
    return $num1 - $num2;
}

function multiplicacion($num1, $num2) {
    return $num1 * $num2;
}

function division($num1, $num2) {
    if ($num2 == 0) {
        return "Error: No se puede dividir por cero.";
    }
    return $num1 / $num2;
}

$num1 = 10;
$num2 = 5;
$operacion = "suma";

switch ($operacion) {
    case "suma":
        $resultado = suma($num1, $num2);
        break;
    case "resta":
        $resultado = resta($num1, $num2);
        break;
    case "multiplicacion":
        $resultado = multiplicacion($num1, $num2);
        break;
    case "division":
        $resultado = division($num1, $num2);
        break;
    default:
        echo "Error: Operación no válida.";
        exit;
}

echo "El resultado de la " . $operacion . " es: " . $resultado;
?>
