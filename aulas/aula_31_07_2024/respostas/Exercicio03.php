<?php 

/**
 * Crie uma função que retorne um objeto do tipo "stdClass()".
 * O objeto deverá ser um objeto de nome "$oPessoa" e deverá conter os seguintes atributos:
 * codigo
 * nome
 * idade
 * estado
 * cidade
 * endereco
 * numero
 * telefone
 * Após isso, mostre na tela os dados do objeto, 
 * descrevendo cada um deles.
 */

 function getPessoa(){
    $oPessoa = new stdClass();
    $oPessoa->codigo = 1;
    $oPessoa->nome = "Adriano";
    $oPessoa->idade = 31;
    $oPessoa->estado = "SC";
    $oPessoa->cidade = "Lontras";
    $oPessoa->endereco = "Rua 7 de Setembro";
    $oPessoa->numero = "580";
    $oPessoa->telefone = "4798856-4578";

    return $oPessoa;
 }

 $oDadosPessoa = getPessoa();
 $sHTML = "" ; 
 $sHTML .= "<br> Código: " . $oDadosPessoa->codigo;
 $sHTML .= "<br> Nome: " . $oDadosPessoa->nome;
 $sHTML .= "<br> Idade: " . $oDadosPessoa->idade; 
 $sHTML .= "<br> Estado: " . $oDadosPessoa->estado;
 $sHTML .= "<br> Cidade: " . $oDadosPessoa->cidade;
 $sHTML .= "<br> Endereço: " . $oDadosPessoa->endereco;
 $sHTML .= "<br> Número: " . $oDadosPessoa->numero;
 $sHTML .= "<br> Telefone: " . $oDadosPessoa->telefone;

 echo $sHTML;

 echo '<hr>Respostas Romulo:';
 echo json_encode($oDadosPessoa);