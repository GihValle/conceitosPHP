<?php
//Laço de repetição FOR

for( $i=1 ; $i<100 ; $i+=2 ){
// inicial  compara  saída

    echo "<br>i = " . $i;
    if ($i == 11){
        //break - interrompe o laço

        $i = 100;
        //$i passou a valer 100!
        //quando verificar se a condição é verdadeira mais uma vez, $i vai receber o valor de +=2!
        //Então, na realidade, $i = 102! Por isso, sairá do laço
    }
}

echo "<p>--------------------------------------------------------";
#----------------------------------------------------------------

for( $i=1 ; $i<=10 ; $i++ ){
    // inicial  compara  saída
    
        if ($i == 5 || $i == 8){
            //break - interrompe o laço
            //Neste caso, como 5 não tem ECHO, ele não aparecerá no laço!
            // 'or' ou '||' é um OU lógico! Ou seja podemos trabalhar com dois valores dentro do laço de repetição.

            continue;
            //Continua o laço de repetição!
            //Tudo o que for colocado após o 'continue' não irá aparecer, pois ele voltará para o início do laço!
        }
        else{
            echo "<br>i = " . $i;
        }
    }

?>