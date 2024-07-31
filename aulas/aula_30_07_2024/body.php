<?php

$idade = 38;
$Idade = 39;

// padrao camelCase
$idadePessoa = 25;

// padrao snakeCase - Python
$idade_pessoa = 25;
$salario_pessoa = 1500;

$mensagemPHP = 'Hello PHP!Minha idade é: ' . $idade . ' idade dois: ' . $Idade;

$body = '<html>
                <head>
                    <title>Script de exemplo</title>
                    <meta charset="UTF-8"></meta>
                </head>
                <body>		
                    ' . $mensagemPHP . '
                </body>
            </html>';

echo $body;

// Padrao IPM
// tipos de dados

// Inteiro
$iIdade = 35;

// Objeto
// $oPessoa = new Pessoa();

// String
$sNomePessoa = 'João';

// Float
$fSaldo = 1500;

// Array
$aDados = array(1,2,3);

// Indefinido-objeto,string,inteiro,indefinido, null, falso
// $xDados = getDadosAPITerceiros();

// Booleano-false/true
$bValida = false;

// Logica de escrita de String interpretação de dados
$nomeProfessorInformatica = $idade . 'Gelvazio';

$nomeProfessorMatematica = "$idade - Neuza";

// Comentario de uma linha

/**
 * 
 * Comentario de varias linhas
 * Comentario de varias linhas
 * Comentario de varias linhas
 * Comentario de varias linhas
 * Comentario de varias linhas
 * Comentario de varias linhas
 * 
 */

 $aDadosPessoas = array('Adriano', 'Cauê', 'Bruna');


 // quebrar linha
echo '<br>';
// array formatado
echo '<pre>' . print_r($aDadosPessoas, true) . '</pre>';

echo 'VAR DUMP:';
echo '<br>';

$salario = "1500,89";
var_dump($salario);

echo '<br>';
$salario = floatval($salario);
var_dump($salario);

// funcao de conversao de valor com replace

/** 
 * Transforma um valor separado por virgula em float, separado por ponto
 * @param String $num
*/
function formataNumFloat($num){
    // substitui virgula por ponto
    $newNum = str_replace(',', '.', $num);
    return $newNum;
}

$salario = "1500,45";
echo '<br>SALARIO FORMATADO:';
echo '<br>';

$salario = formataNumFloat($salario);
$salario = floatval($salario);
var_dump($salario);

echo '<br>OBJETO:<br>';
$oPessoa = new  stdClass();
$oPessoa->codigo = 1;
$oPessoa->nome = 'Adriano\'s Bar';
$oPessoa->sobrenome = "Adriano \"s Bar 2";
$oPessoa->idade = 25;

echo json_encode($oPessoa);

//echo '<pre>' . var_dump($oPessoa) . '</pre>';








