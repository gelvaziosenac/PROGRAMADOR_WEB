<?php
echo 'FUNCOES:';

$varTeste = 14;

function soma($numero1, $numero2){
    return $numero1 + $numero2;
}

echo "<br>Resultado de 5 + 6: " . soma(5,6);

function divisaoParametroOpcional($numero1, $numero2 = 1){
    echo '<br>Valor do parametro opcional: ' . $numero2 . '<br>';
    return $numero1 / $numero2;
}

echo "<br>Resultado de 12 / 2: " . divisaoParametroOpcional(12,2);

echo "<br>Função com parametro opcional:<br>";
echo "<br>Resultado de 12 / 1: " . divisaoParametroOpcional(12);


// VARIAVEL ESTATICA
