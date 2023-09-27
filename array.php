<?php

    $array01 = ['SENAC', 20, TRUE, ['teste', 'posição  array']];
    //             0     1     2     3
    //                               0              1   

    echo "<pre>";
    var_dump($array01);
    echo "</pre>";

    echo "<p>";

    echo "<pre>";
    print_r($array01);
    echo "</pre>";

    echo "<br>Posição 0 do Array01: " . $array01[0]; //SENAC

    echo "<br>Posição 1 do Array01: " . $array01[1]; //20

    echo "<br>Posição 3.0 do Array01: " . $array01[3][0]; //Array, TESTE

    echo "<br>Posição 2 do Array01: " . $array01[2]; //TRUE, 1

    echo "<br>Posição 3.1 dp Array01: " . $array01 [3][1]; //Array, POSIÇÃO ARRAY

?>