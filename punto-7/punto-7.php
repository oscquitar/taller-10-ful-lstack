<?php
$num1 = 10;
$num2 = 5;
$operacion = "suma";

switch ($operacion) {
    case "suma":
        $resultado = $num1 + $num2;
        break;
    case "resta":
        $resultado = $num1 - $num2;
        break;
    case "multiplicacion":
        $resultado = $num1 * $num2;
        break;
    case "division":
        if ($num2 == 0) {
            echo "Error: No se puede dividir por cero.";
            exit;
        }
        $resultado = $num1 / $num2;
        break;
    default:
        echo "Error: Operación no válida.";
        exit;
}

echo "El resultado de la " . $operacion . " es: " . $resultado;
?>
