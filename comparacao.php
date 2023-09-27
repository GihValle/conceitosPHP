<h2>Operadores de Comparação</h2>

<?php
/*
$a == $b	Igual	true se $a é igual a $b após equalização de tipos.
$a === $b	Idêntico	true se $a é igual a $b, e eles são do mesmo tipo.
$a != $b	Diferente	true se $a não é igual a $b depois de equalização de ativos.
$a <> $b	Diferente	true se $a não é igual a $b depois de equalização de ativos.
$a !== $b	Não idêntico	true se $a não é igual a $b, ou eles não são do mesmo tipo.
$a < $b	Menor que	true se $a é estritamente menor que $b.
$a > $b	Maior que	true se $a é estritamente maior que $b.
$a <= $b	Menor ou igual	true se $a é menor ou igual a $b.
$a >= $b	Maior ou igual	true se $a é maior ou igual a $b.
*/

echo "<h3>Exemplos</h3>";
$a = 5;
$b = 3;
$c = '5';

if ($a === $c){
    echo "<br>Verdadeiro";
}
else {
    echo "<br>Falso";
}


//Valores Booleanos 1=True e 0=False
if (0 == true){
    echo"<br>Verdadeiro";
}
else{
    echo"<br>Falso";
}

?>