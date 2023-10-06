<?php
echo "<pre>";
var_dump($_POST);
echo "</pre>";

echo "<br>Num1: " . $num1 = $_POST['num1'];
echo "<br>Num2: " . $num2 = $_POST['num2'];
echo "<br>Operador: " . $operador = $_POST['operador'];

switch ($operador) {
    case '+':
        $resultado = $num1 + $num2;
        break;

    case '-':
        $resultado = $num1 - $num2;
        break;

    case '*':
        $resultado = $num1 * $num2;
        break;

    case '/':
        $resultado = $num2!=0 ? $num1 / $num2: "Não é possível divisão por 0 (zero).";
        break;
    
    default:
        $resultado = "Operador Inválido";
        break;
}

echo "<br>Resultado: $resultado";
?>