<?php 
// Regra para numero ser par:
// Resto da divisão por 2 deve ser zero


function isImpar($numero){
    $impar = false;
    // RESTO DA DIVISAO POR 2
    if($numero % 2 != 0){
        // É NUMERO IMPAR!
        $impar = true;
    } else {
        // É NUMERO PAR!
        $impar = false;
    }

    return $impar;
}

$numero = 9;
if(isImpar($numero)){
    echo " O número " . $numero ." é impar!";
} else {
    echo " O número " . $numero ." é par!";
}

echo '<hr>';
$numero = 4;
if(isImpar($numero)){
    echo " O número " . $numero ." é impar!";
} else {
    echo " O número " . $numero ." par!";
}








