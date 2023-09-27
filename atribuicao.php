<h2>Operadores de Atribuição</h2>

<?php
/*
$a += $b	$a = $a + $b	Adição
$a -= $b	$a = $a - $b	Subtração
$a *= $b	$a = $a * $b	Multiplicação
$a /= $b	$a = $a / $b	Divisão
$a %= $b	$a = $a % $b	Módulo
$a **= $b	$a = $a ** $b	Exponentiation
*/

    echo "<h3>Exemplos</h3>";
    $a = 5;

echo "<br>Atribuição com soma: " . $a += 3; //8
echo "<br>Atribuição com subtração: " . $a -= 2; //6
echo "<br>Atribuição com multiplicação: " . $a *= 5; //3
echo "<br>Atribuição com divisão: " . $a /= 10; //3  
echo "<br>Atribuição com módulo: " . $a %= 2;//1   
echo "<br>Atribuição com Exponenciação: " . $a **= 1024; //1
?>