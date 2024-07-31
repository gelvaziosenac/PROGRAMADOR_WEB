<?php

$html = '<h1>Atividades</h1>';
$html .= '<ul>Atividade 01 - 31-07-2024</h1>';
$html .= '<hr>';
$html .= 'Crie um arquivo para cada exercicio, no formato "Exercicio01.php, Exercicio02.php"';
$html .= '<hr>';

$html .= '<li>';
$html .= '01 - Crie um array em PHP com uma lista de 5 frutas(String)';
$html .= 'Utilizando o comando "FOREACH" em PHP, percorra o array e imprima os dados na tela.';
$html .= '</li>';

$html .= '<hr>';

$html .= '<li>';
$html .= '02 - Crie uma função que retorna um array em PHP com uma lista de 5 nomes(String)<br>';
$html .= 'Após isso, utilizando o comando "FOREACH" em PHP, mostre os dados retornados na tela.';
$html .= '</li>';

$html .= '<hr>';
$html .= '<li>';
$html .= '03 - Crie uma função que retorne um objeto do tipo "stdClass()".<br>';
$html .= 'O objeto deverá ser um objeto de nome "$oPessoa" e deverá conter os seguintes atributos:<br>';

$html .= '<ul>';
$html .= '  <li>codigo</li>';
$html .= '  <li>nome</li>';
$html .= '  <li>idade</li>';
$html .= '  <li>estado</li>';
$html .= '  <li>cidade</li>';
$html .= '  <li>endereco</li>';
$html .= '  <li>numero</li>';
$html .= '  <li>telefone</li>';
$html .= '</ul>';

$html .= 'Após isso, mostre na tela os dados do objeto, descrevendo cada um deles.<br>';
$html .= '</li>';

$html .= '<hr>';

$html .= '<li>';
$html .= '04 - Crie um arquivo PHP de nome "calculadora.php", utilize o metodo auxiliar "formataNumFloat()", fazendo "require_once()" do arquivo Utils.php.<br>';
$html .= 'Neste arquivo crie 4 funcoes que recebam como parametro 3 valores:';
$html .= '<ul>';
$html .= '</ul>';
$html .= '  <li>$numero1</li>';
$html .= '  <li>$numero2</li>';
$html .= '  <li>$operacao</li>';
$html .= '</li>';
$html .= 'Deve ter uma função de nome "calcular()" para somar,dividir,subtrair,multiplicar.';
$html .= 'Ao final, deve chamar esta função, passando 2 numeros e a operação, e deve mostrar o resultado.';
$html .= 'Pode passar os valores fixos, mas deve mostrar o resultado correto.';
$html .= 'Deve fazer todas as operações, somar, dividir, subtrair,multiplicar.';

$html .= '<hr>';
$html .= '<li>05 - Crie uma função que retorne um array com uma lista de 5 funcionarios, usando objeto do tipo "stdClass()".<br>';
$html .= 'O objeto deverá ser um objeto de nome "$oSalario" e deverá conter os seguintes atributos:<br>';

$html .= '<ul>';
$html .= '  <li>funcionario - Deve ter o nome do funcionario</li>';
$html .= '  <li>funcao - Programador, Advogado, Engenheiro, etc</li>';
$html .= '  <li>salarioBruto</li>';
$html .= '  <li>imposto</li>';
$html .= '  <li>salarioLiquido</li>';
$html .= '</ul>';

$html .= 'Após isso, utilizando o comando "FOREACH" em PHP, percorra os dados e mostre na tela as informações de cada funcionario.<br>';
$html .= '</li>';
$html .= '</ul>';

echo $html;
