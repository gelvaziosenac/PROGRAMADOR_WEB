<?php 

echo "Usuario logado: " . $usuario_login;
echo "<hr>";
echo "Senha do usuario logado: " . $usuario_password;
echo "<hr>";

// validacao de usuario e senha
if($usuario_login == "admin" && $usuario_password == "123"){
    echo "<h1>Bem vindo ao sistema!</h1>";
} else {
    echo "<h1>Acesso invalido!</h1>";
}