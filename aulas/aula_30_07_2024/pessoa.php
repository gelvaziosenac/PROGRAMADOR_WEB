<?php 
$oPessoa = new  stdClass();
$oPessoa->codigo = 1;
$oPessoa->nome = 'Adriano\'s Bar';
$oPessoa->sobrenome = "Adriano \"s Bar 2";
$oPessoa->idade = 25;

echo json_encode($oPessoa);