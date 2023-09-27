<?php
/*
                    Funções de Manipulação de Array

    Array_push — Adiciona um ou mais elementos no final de um array
    Array_pop — Extrai um elemento do final do array
    Array_shift — Retira o primeiro elemento de um array
    Array_unshift — Adiciona um ou mais elementos no início de um array
    Array_splice — Remove uma parte array e a substitui por outra coisa
    Count — Conta o número de elementos de uma variável, ou propriedades de um objeto
*/

//Um Array vazio e uma Variável vazia são coisas DIFERENTES!

$array = []; //Atribuição de valores de um array vazio

$vazio = ""; //Variável vazia do tipo string

#------------------------------------------------------------

array_push($array, "Senac", "TAU");

array_push($array, ["Igor", "Samuel", "Evelyn", "Matheus", "Estevan"]);

array_push($array, "teste");

echo "<pre>"; //Formata o modo de apresentação da saída
print_r($array); //Mostra o conteúdo simpliicado do Array
echo "</pre>";

echo "<br>A variável array possui " .count($array) . " posições.";

echo "<p>----------------------------------------------------";
#------------------------------------------------------------

array_pop($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<br>A variável array possui " .count($array) . " posições.";

echo "<p>----------------------------------------------------";
#------------------------------------------------------------

array_shift($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<br>A variável array possui " .count($array) . " posições.";
echo "<p>----------------------------------------------------";
#------------------------------------------------------------

array_unshift($array, "SÃO PAULO");

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<br>A variável array possui " .count($array) . " posições.";
echo "<p>----------------------------------------------------";
#------------------------------------------------------------

array_splice($array, 1, 1, [["Senac TAU"]]);

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<br>A variável array possui " .count($array) . " posições.";
?>