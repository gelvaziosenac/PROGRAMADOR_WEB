<?php

/**
 * 05 - Crie uma função que retorne um array com uma lista de 5 funcionarios, 
 * usando objeto do tipo "stdClass()".
 * O objeto deverá ser um objeto de nome "$oSalario" e deverá conter os seguintes atributos:
 
 * funcionario - Deve ter o nome do funcionario
 * funcao - Programador, Advogado, Engenheiro, etc
 * salarioBruto
 * imposto
 * salarioLiquido
 
 * Após isso, utilizando o comando "FOREACH" em PHP, 
 * percorra os dados e mostre na tela as informações de cada funcionario.
 */

 require_once("Utils.php");
 function getSalarios(){
    $aListaFuncionario = array();

    // Funcionario 01
    $oSalario = new stdClass();
    $oSalario->funcionario = "Adriano";
    $oSalario->funcao = "Programador";
    $oSalario->salarioBruto = formataNumFloat("5500,56");
    $oSalario->imposto = 14; // INSS
    $oSalario->salarioLiquido = $oSalario->salarioBruto - ($oSalario->salarioBruto * ($oSalario->imposto / 100));

    // Adicionando funcionario 01 no array de funcionarios
    $aListaFuncionario[] = $oSalario;
    
    // Funcionario 02
    $oSalario = new stdClass();
    $oSalario->funcionario = "Cauê";
    $oSalario->funcao = "Estagiário";
    $oSalario->salarioBruto = formataNumFloat("500,56");
    $oSalario->imposto = 0; // INSS
    $oSalario->salarioLiquido = $oSalario->salarioBruto - ($oSalario->salarioBruto * ($oSalario->imposto / 100));

    // Adicionando funcionario 02 no array de funcionarios
    $aListaFuncionario[] = $oSalario;

    // Funcionario 03
    $oSalario = new stdClass();
    $oSalario->funcionario = "David";
    $oSalario->funcao = "Estagiário";
    $oSalario->salarioBruto = formataNumFloat("500,76");
    $oSalario->imposto = 0; // INSS
    $oSalario->salarioLiquido = $oSalario->salarioBruto - ($oSalario->salarioBruto * ($oSalario->imposto / 100));

    // Adicionando funcionario 03 no array de funcionarios
    $aListaFuncionario[] = $oSalario;
    
    // Funcionario 04
    $oSalario = new stdClass();
    $oSalario->funcionario = "Ryan";
    $oSalario->funcao = "Programador Junior";
    $oSalario->salarioBruto = formataNumFloat("1500,76");
    $oSalario->imposto = 7.5; // INSS
    $oSalario->salarioLiquido = $oSalario->salarioBruto - ($oSalario->salarioBruto * ($oSalario->imposto / 100));

    // Adicionando funcionario 04 no array de funcionarios
    $aListaFuncionario[] = $oSalario;

    // Funcionario 05
    $oSalario = new stdClass();
    $oSalario->funcionario = "Vinicius";
    $oSalario->funcao = "Programador Master";
    $oSalario->salarioBruto = formataNumFloat("9500,76");
    $oSalario->imposto = 20; // IR
    $oSalario->salarioLiquido = $oSalario->salarioBruto - ($oSalario->salarioBruto * ($oSalario->imposto / 100));

    // Adicionando funcionario 05 no array de funcionarios
    $aListaFuncionario[] = $oSalario;

    return $aListaFuncionario;
 }

 $aListaDadosFuncionario = getSalarios();

 echo 'Dados funcionarios:<hr>';
 foreach($aListaDadosFuncionario as $oDados){
    $sHTML = "Funcionário: " . $oDados->funcionario;    
    $sHTML .= "<br>Função: " . $oDados->funcao;
    $sHTML .= "<br>Salario Bruto: " . $oDados->salarioBruto;
    $sHTML .= "<br>Imposto: " . $oDados->imposto . " %";
    $sHTML .= "<br>Salário Líquido: " . $oDados->salarioLiquido;
    
    $sHTML .= "<hr>";
    
    echo $sHTML;
 }



