<?php 

echo '<pre>' . print_r($_POST, true) . '</pre>' ;

if($_POST["ACAO"] == "ALTERAR"){
     echo "executar update no banco de dados";
} else if($_POST["ACAO"] == "INCLUIR"){
     echo "executar inclusao no banco de dados";
} else {
     echo "ACAO INVALIDA!";
}
