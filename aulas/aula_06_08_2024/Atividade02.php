<?php 

echo 'LETRA B:<br>';
echo 'Ip do servidor: ' . $_SERVER["HTTP_HOST"];
echo '<hr>';

echo 'LETRA C:<br> Nome arquivo atual:' . $_SERVER["SCRIPT_NAME"];
echo '<hr>';

echo 'LETRA D:<br>';
echo 'url do servidor: ' . $_SERVER["HTTP_HOST"] . $_SERVER["SCRIPT_NAME"];
echo '<hr>';

echo 'LETRA A:<br>';
echo 'Informações do Servidor:<br>';
echo '<pre>' . print_r($_SERVER, true) . '</pre>';
echo '<hr>';
