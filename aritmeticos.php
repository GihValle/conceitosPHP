<?php
    echo "Hello World!"; 
    //Mostra na tela

    //variáveis
    //toda variável em PHP inicia com $ (cifrão)

    $a = 10;
    $b = 20;
    //Operador de atribuição '='

    $soma = $a + $b;

    echo "<br>Soma: " . $soma; 
    //HTML concatenado com variável PHP

//-----------------------------------------------------------------------------

    /* Operadores Aritméticos 
    $a + $b	Adição	Soma de $a e $b.
    $a - $b	Subtração	Diferença entre $a e $b.
    $a * $b	Multiplicação	Produto de $a e $b.
    $a / $b	Divisão	Quociente de $a e $b.
    $a % $b	Módulo	Resto de $a dividido por $b.
    $a ** $b Exponencial Resultado de $a elevado a $b.

    Exemplos:
    */

    $sub = $a - $b;
    echo "<br>Subtração: " . $sub;
    // -10

    $mult = $a * $b;
    echo "<br>Multiplicação: " . $mult;
    // 200

    $div = $a / $b;
    echo "<br>Divisão: " . $div;
    //0.5

    $modulo = $a % $b;
    echo "<br>Módulo: " . $modulo;
    //10

    $exp = $a ** 3;
    echo "<br>Exponenciação: " . $exp;
    //1000

//-----------------------------------------------------------------------------    
    //Desvio condicional

    //Laços de repetição

    //Função

    //Vetor e Matriz
?>