<h2>Desvio Condicional (IF e ELSE)</h2>

<?php
/*
Sintaxe - Desvio Condicional Simples

if (expr)
  statement
  Caso tenha somente uma linha de comando abaixo do If não há necessidade de usar { }

  Para a estrutura abaixo é obrigatório o uso de { }
if (expr){
    código1
    código2
    código3
}
*/

echo "<h3>Exemplos</h3>";
echo "<h4>Desvio Condicional Simples</h4>";
$idade = 20;

if($idade >=18)
    echo "Você tem " . $idade . " anos, então é maior de idade";

echo "<p>";

if($idade >=18){
    echo "Você tem " . $idade . " anos, então é maior de idade";
    echo "<br>Se for preso, vai dormir na cadeia";
}

//-----------------------------------------------------------
echo "<p>";

echo "<h4>Desvio Condicional Composto</h4>";
$idade1 = 15;

if ($idade1 >= 18)
    echo "Você tem " . $idade1 . " anos, então é maior de idade!";
else
    echo "Você tem " . $idade1 . " anos, então é menor de idade!";

echo "<p>";

if ($idade1 >= 18){
    echo "Você tem " . $idade1 . " anos, então é maior de idade!";
    echo "<br>Se for preso, vai dormir na cadeia";
}

else{
    echo "Você tem " . $idade1 . "anos, então é menor de idade";
    echo "<br>Se for preso, não precisa dormir na cadeia";
}

//-----------------------------------------------------------
echo "<p>";

echo "<h4>Desvio Condicional Encadeado</h4>";
$idade2 = 5;

if ($idade2 >= 18)
    echo "Você tem " . $idade1 . " anos, então é maior de idade!";

else if ($idade2 >=6)
    echo "Você tem " . $idade1 . " anos, então é menor de idade!";

else
    echo "Você é bebê!!!";

echo "<p>";

if ($idade1 >= 18){
    echo "Você tem " . $idade1 . " anos, então é maior de idade!";
    echo "<br>Se for preso, vai dormir na cadeia";
}

else if ($idade2 >=6) {
    echo "Você tem " . $idade1 . "anos, então é menor de idade";
    echo "<br>Se for preso, não precisa dormir na cadeia";
}

else{
    echo "Você é bebê!!!";
}

//-----------------------------------------------------------
echo "<p>";

echo "<h4>Operador Ternário</h4>";
echo "<p>O operador ternário é uma forma resumida de utilizar o IF</p>";
$idade3 = 5;

echo $idade3<= 5 ? "Você é bebê" : "Você é Xóvem...";
//      Condição ?    Verdadeiro : Falso

?>