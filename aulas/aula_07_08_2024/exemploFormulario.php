
<?php
// URL enviando dados via GET //
// http://127.0.0.1/ exemploFormulario.php?codigoPessoa=1&codigoCidade=15

//mostraParametro.php
echo '<pre>' . print_r($_GET, true) . '</pre>' ;

// Array ( [codigoPessoa] => 1 [codigoCidade] => 15 );
