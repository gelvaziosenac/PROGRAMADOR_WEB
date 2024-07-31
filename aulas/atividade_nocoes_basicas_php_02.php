<?php

$html = '<h1>Atividades</h1>';
$html .= '<ul>Atividade 02 - 06-08-2024</h1>';
$html .= '<hr>';
$html .= 'Crie um arquivo para cada exercicio, no formato "Exercicio01.php, Exercicio02.php"';
$html .= '<hr>';

$html .= '01 - Crie um array com 5 posições e armazene os dados de todas elas.';
$html .= 'Ao final verifique se todas as posicoes foram inicializadas usando "isset", e escrevendo a mensagem na tela, posição iniciada.';
$html .= '<hr>';

$html .= '02 - Crie uma lista de constantes para as variáveis abaixo:<br>';
$html .= '<ul>';
$html .= '  <li>Valor de PI, 3.14.</li>';
$html .= '  <li>Taxa de Juros Cheque especial, 9%.</li>';
$html .= '  <li>Taxa de Juros Cartao de credito 18%.</li>';
$html .= '  <li>Taxa de Juros Emprestimo pessoal8%.</li>';
$html .= '</ul>';
$html .= '<hr>';

$html .= '03 - Crie um arquivo PHP que valida a sessao do usuario usando urls.<br>';
$html .= '<br>Utilize a tag html "a" com href, e passe como parametro os dados da sessao na url.';
$html .= '<br>Para isso utilize 2 arquivos em php, login.php com o link para entrar no sistema.';
$html .= '<br>home.php para mostrar o usuario logado, apos entrar no sistema.';
$html .= '<br>No arquivo home.php, criar uma funcao que vai utilizar $_GET["login"] e $_GET["senha"] para mostrar o usuario logado, apos entrar no sistema.';
$html .= '<hr>';

echo $html;
