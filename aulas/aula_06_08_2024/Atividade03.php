<?php 
function soma($n1,$n2){
    return $n1 + $n2;
}

function subtrair($n1,$n2){
    return $n1 - $n2;
}

function dividir($n1,$n2){
    return $n1 / $n2;
}

function multiplicar($n1,$n2){
    return $n1 * $n2;
}

echo '<hr>';
echo 'A soma de 5 + 8 é: ' . soma(5, 8);
echo '<hr>';

echo '<hr>';
echo 'A divisão de 12 por 2 é: ' . dividir(12, 2);
echo '<hr>';

echo '<hr>';
echo 'A multiplicação de 5 * 8 é: ' . multiplicar(5, 8);
echo '<hr>';

echo '<hr>';
echo 'A subtracao de 45 - 25 é: ' . subtrair(45,25);
echo '<hr>';





