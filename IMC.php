<?php
echo "<pre>";
var_dump($_POST);
echo "</pre>";

    $peso = floatval($_POST['peso']);
    $altura = floatval($_POST['altura']);

    $imc = $peso / $altura**2;
    echo "<br>Resultado: $imc ";

//Validações (campos vazios, altura = 0), redirecionamento e resultado final

/*
    IMC (kg/m²)	Classificação
    Menor que 18,5	Baixo peso
    De 18,5 a 24,9	Peso normal
    De 25 a 29,9	Sobrepeso
    De 30 a 34,9	Obesidade grau I
    De 35 a 39.9	Obesidade grau II
    Igual ou maior que 40	Obesidade grau III
*/

switch($imc){
    case ($imc <= 18.5):
        //processamento
        $msg = "Baixo Peso";
        break;

    case ($imc <= 24.9):
        //processamento
        $msg = "Peso Normal";
        break;

    case($imc <= 29.9):
        //processamento
        $msg = "Sobrepeso";
        break;

    case($imc <= 34.9):
        //processamento
        $msg = "Obesidade grau I";
        break;

    case($imc <= 39.9):
        //processamento
        $msg = "Obesidade grau II";
        break;
    
    default:
        $msg = "Obesidade grau III";
}

echo "<br>" . $msg;
?>