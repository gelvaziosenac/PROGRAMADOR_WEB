<?php 

$enunciado = "Crie uma função que receba como parametro dois numeros.<br>";
$enunciado .= "A função deve verificar se o primeiro numero é maior, menor, ou igual ao segundo e imprimir:<br>";

$enunciado .= "<ol>";
$enunciado .= "     <li>Se maior: 'O primeiro valor(10) é maior que o segundo valor(5)'</li>";
$enunciado .= "     <li>Se menor: 'O primeiro valor(10) é menor que o segundo valor(5)'</li>";
$enunciado .= "     <li>Se igual: 'O primeiro valor(10) é igual ao segundo valor(5)'</li>";
$enunciado .= "</ol>";

echo $enunciado;

$resposta = "<hr>";

function verificaNumeros($numero1, $numero2){
    $respostaVerificada = "Inválida";

    if($numero1 > $numero2){
        $respostaVerificada = "O primeiro valor(" . $numero1 . ") é maior que o segundo valor(" . $numero2 . ")";
    } else if($numero1 < $numero2){
        $respostaVerificada = "O primeiro valor(" . $numero1 . ") é menor que o segundo valor(" . $numero2 . ")";
    } else if($numero1 == $numero2){
        $respostaVerificada = "O primeiro valor(" . $numero1 . ") é igual ao segundo valor(" . $numero2 . ")";
    }    
    
    return $respostaVerificada;
}

$resposta .= "<br>Verificação dos numeros 5 e 10: " . verificaNumeros(5, 10) . ".";
$resposta .= "<br>Verificação dos numeros 55 e 3: " . verificaNumeros(55, 3) . ".";
$resposta .= "<br>Verificação dos numeros 78 e 23: " . verificaNumeros(78, 23) . ".";
$resposta .= "<br>Verificação dos numeros 6 e 6: " . verificaNumeros(6,6) . ".";

echo $resposta;


