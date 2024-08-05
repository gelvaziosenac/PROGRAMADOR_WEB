<?php

/**
 * Transforma um valor separado por virgula em float, separado por ponto
 * @param String $num
*/
function formataNumFloat($num){
    // substitui virgula por ponto
    $newNum = str_replace(',', '.', $num);

    return floatval($newNum);
}
