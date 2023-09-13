<?php

$operacao = "+";
$numero1 = 10;
$numero2 = 5;

switch ($operacao) {
    case "+":
        $resultado = $numero1 + $numero2;
        echo "A soma é: " . $resultado;
        break;
    case "-":
        $resultado = $numero1 - $numero2;
        echo "A subtração é: " . $resultado;
        break;
    case "*":
        $resultado = $numero1 * $numero2;
        echo "A multiplicação é: " . $resultado;
        break;
    case "/":
        if ($numero2 != 0) {
            $resultado = $numero1 / $numero2;
            echo "A divisão é: " . $resultado;
        } else {
            echo "Não é possível dividir por zero.";
        }
        break;
    default:
        echo "Operação não reconhecida.";
}
