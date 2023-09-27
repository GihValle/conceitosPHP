<?php
/*
while (expr)
    statement

    O propósito da declaração while é simples. Ele dirá ao PHP para executar as declarações aninhadas repetidamente, enquanto a expressão do while forem avaliadas como true. O valor da expressão é checado a cada vez que o laço é iniciado, então, mesmo seu valor mude durante a a execução das declarações aninhadas, a execução não será interrompida até o final da iteração ( cada vez que o PHP executa as declarações dentro do laço é uma iteração). Se a expressão do while for avaliada como false desde o início, as declarações aninhadas não serão executadas nenhuma vez.

    Similar a declaração if, pode-se agrupar múltiplas declarações no mesmo laço while delimitando o grupo de declarações por chaves, ou utilizando a sintaxe alternativa:

while (expr):
    statement
    ...
endwhile;
*/

$i = 1;

while($i <= 10){
    echo "<br>Dentro do laço, contador = " . $i;

    $i++;
}

echo "<p>--------------------------------------------------------";
#----------------------------------------------------------------

$a = 1;

while($a < 1){
    //No caso, esse laço de repetição não acontecerá, pois não é <= 1!
    //$a é literalmente 1, logo a condição não é verdadeira.
    //Este While testa, se for verdadeiro, ele faz o laço!

    echo "<br>Dentro do laço, contador = " . $i;

    $i++;
}

echo "<p>--------------------------------------------------------";
#----------------------------------------------------------------

$b = 1;

do{
    echo "<br>Dentro do laço, contador = " . $b;
    $i++;
    //Incrementa em 1

    //Neste DO, ele faz o laço pelo menos uma vez, se for verdadeiro, ele continua o laço!
}

while ($b < 1);

?>