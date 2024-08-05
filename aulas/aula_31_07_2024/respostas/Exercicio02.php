<?php 

/**
 * Crie uma função que retorna um array em PHP com uma lista de 5 nomes(String)
 * Após isso, utilizando o comando "FOREACH" em PHP, mostre os dados retornados na tela.
 */

$aListaNomes = array("Cauê", "Bruna", "Ryan", "Vinicius", "Rômulo");

foreach($aListaNomes as $nome){
    echo '<br>' . $nome;    
}