<?php
/*
    1-Crie uma varíavel do tipo array com o nome de frutas
        esse array deve ter os seguintes elementos:
        mamão, maçã, melão.

    2- Utilizando as funções de array faça:
        a) inclusão de uma nova fruta no inínio do array;
        b) inclusão de uma nova fruta no final do array;
        c) exclusão da fruta que está na posição 1;
        d) exclusão da fruta que está na última posição;
        e) alteração da fruta que está na posição 01 por maracujá.

    3- A cada alteração no array, realize um print_r ou var_dump
        para comprovar os resultados obtidos.
*/

$frutas = ["mamão", "maçã", "melão"];

echo "<pre>";
print_r($frutas);
echo "</pre>";

echo "<p>----------------------------------------------------";
#------------------------------------------------------------

array_unshift($frutas, "morango");

echo "<pre>";
print_r($frutas);
echo "</pre>";

echo "<p>----------------------------------------------------";
#------------------------------------------------------------

array_push($frutas, "ameixa");

echo "<pre>";
print_r($frutas);
echo "</pre>";

echo "<p>----------------------------------------------------";
#------------------------------------------------------------

array_splice($frutas, 1, 1);

echo "<pre>";
print_r($frutas);
echo "</pre>";

echo "<p>----------------------------------------------------";
#------------------------------------------------------------

array_pop($frutas);

echo "<pre>";
print_r($frutas);
echo "</pre>";

echo "<p>----------------------------------------------------";
#------------------------------------------------------------

array_splice($frutas, 1, 1, ["maracuja"]);

echo "<pre>";
print_r($frutas);
echo "</pre>";

echo "<p>----------------------------------------------------";
?>