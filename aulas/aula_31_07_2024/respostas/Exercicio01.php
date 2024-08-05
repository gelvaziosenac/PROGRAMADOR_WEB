<?php

/**
 * Crie um array em PHP com uma lista de 5 frutas(String).
 * Utilizando o comando "FOREACH" em PHP, percorra o array e imprima os dados na tela.
 */

$aListaFrutas = array("maçã", "pera", "uva", "banana", "abacaxi");

$count = 0;
foreach($aListaFrutas as $fruta){
    echo '<br>' . $fruta;

    $count++;
}

echo '<hr>';

foreach($aListaFrutas as $key => $fruta){
    echo '<br>' . $fruta;

    // Tratamento por chave
    if($key == 3){
        echo '<br> Fruta na posição 03: ' . $fruta;
    }
}

