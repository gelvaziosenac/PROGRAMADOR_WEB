<?php 

$frase = "Seja Bem Vindo ao nosso site senhor João, conheça todos os nossos serviços.";

echo '<hr>';
echo 'LETRA A:<br>';
echo mb_strtoupper($frase);
echo '<hr>';

echo '<hr>';
echo 'LETRA B: <br>';
echo mb_strtolower($frase);
echo '<hr>';

echo '<hr>';
echo 'LETRA C: <br>';
echo ucfirst($frase);
echo '<hr>';
