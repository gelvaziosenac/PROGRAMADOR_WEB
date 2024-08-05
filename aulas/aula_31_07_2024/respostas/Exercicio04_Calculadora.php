<?php
/**
 * Crie um arquivo PHP de nome "calculadora.php", utilize o metodo auxiliar "formataNumFloat()", 
 * fazendo "require_once()" do arquivo Utils.php.
 * Deve ter uma função de nome "calcular()" para somar,dividir,subtrair,multiplicar.
 * Neste arquivo na função de nome "calcular()", recebam como parametro 3 valores:
 * $numero1
 * $numero2
 * $operacao 
 * Ao final, deve chamar esta função, passando 2 numeros e a operação, 
 * e deve mostrar o resultado.Pode passar os valores fixos, 
 * mas deve mostrar o resultado correto.
 * Deve fazer todas as operações, somar, dividir, subtrair, multiplicar.
 */

 require_once("Utils.php");

 function calcular($numero1, $numero2, $operacao){
    $resultado = "Inválido!";

    $numero1 = formataNumFloat($numero1);
    $numero2 = formataNumFloat($numero2);

    if($operacao == "SOMAR"){
        $resultado = $numero1 + $numero2;
    }

    if($operacao == "DIVIDIR"){
        $resultado = $numero1 / $numero2;
    }

    if($operacao == "SUBTRAIR"){
        $resultado = $numero1 - $numero2;
    }

    if($operacao == "MULTIPLICAR"){
        $resultado = $numero1 * $numero2;
    }

    return $resultado;
 }
 
 echo "<br>Conta - SOMAR - 2 e 3 - Resultado=> " . calcular(2, 3, "SOMAR");
 echo "<br>Conta - SOMAR - 2,68 e 3,43 - Resultado=> " . calcular("2,68", "3,43", "SOMAR");

 echo "<br>Conta - DIVIDIR - 2,68 e 3,43 - Resultado=> " . calcular("2,68", "3,43", "DIVIDIR");
 echo "<br>Conta - SUBTRAIR - 2,68 e 3,43 - Resultado=> " . calcular("2,68", "3,43", "SUBTRAIR");
 echo "<br>Conta - MULTIPLICAR - 2,68 e 3,43 - Resultado=> " . calcular("2,68", "3,43", "MULTIPLICAR");
 echo "<br>Conta - INVALIDO - 2,68 e 3,43 - Resultado=> " . calcular("2,68", "3,43", "S");

