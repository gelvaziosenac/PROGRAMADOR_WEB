<?php 
// INICIANDO SESSAO
session_start();

function validaSessao(){
    $valida = false;
    if(isset($_SESSION)){
        // Se existe a sessao
        // valida usuario e senha
        if(!isset($_SESSION["usuario"])){
            // seta a sessao
            $oUsuario = new stdClass();
            // pega os dados da tela e seta na sessao
            $oUsuario->codigo = 1;
            $oUsuario->login = "admin";
            $oUsuario->senha = "123";
        
            $_SESSION["usuario"] = $oUsuario;
        }

        $oUsuario = $_SESSION["usuario"];

        $usuarioBancoDados = "admin";
        $senhaBancoDados = "123";
        // SE LOGIN == LOGIN DO BANCO DE DADOS
        // E SENHA == SENHA DO BANCO DE DADOS 
        if($oUsuario->login == $usuarioBancoDados && 
            $oUsuario->senha == $senhaBancoDados){
            $valida = true;
        }
    } else {
        throw new Exception("Sessão inválida!");
    }
    
    // SE NAO VALIDA, FAZ ALGO...
    
    // SE   NAO VALIDA, FAZ ALGO...
       if (  !  $valida   ){
        throw new Exception("Usuario nao logado!");
    }

    return true;
}
validaSessao();

define('PI', 3.14);
echo PI;

define('TAXA_IMPOSTO_INSS', 5.89);
echo TAXA_IMPOSTO_INSS;

$taxa = 10;
if($taxa == TAXA_IMPOSTO_INSS){
    // bloco de codigo
}

echo '<br>$_SERVER: <br>';
echo '<pre>' . print_r($_SERVER, true) . '</pre>';

echo 'HTTP_HOST: ' . $_SERVER["HTTP_HOST"];

echo '<br>$_SESSION: <br>';

if(isset($_SESSION)){
    echo "<br>SESSAO SEM DADOS<br>";
    echo '<pre>' . print_r($_SESSION, true) . '</pre>';

    $oUsuario = new stdClass();
    // pega os dados da tela e seta na sessao
    $oUsuario->codigo = 1;
    $oUsuario->login = "admin";
    $oUsuario->senha = "123";

    $_SESSION["usuario"] = $oUsuario;

    echo '<pre>' . print_r($_SESSION, true) . '</pre>';
} else {
    echo '<br>SESSAO NAO INICIADA!';   
}

$valor = 10;
$valor += 5;

// resultado = 15

$valor_inicial = 10;
$valor_novo = $valor_inicial + 5;
// resultado = 15

