<?php 
// array de Strings
$aDadosPessoas = array('Adriano', 'Cauê', 'Bruna');
 
echo '<pre>' . print_r($aDadosPessoas, true) . '</pre>';

echo '<hr>';

// pega o valor do array pela posicao dele
echo '<br>valor do array na posicao 02: ' . $aDadosPessoas[2];

// usando list - opcao 01
list($pessoa1, $pessoa2, $pessoa3) = $aDadosPessoas;
echo '<br>Pessoa 01:' . $pessoa1;
echo '<br>Pessoa 02:' . $pessoa2;
echo '<br>Pessoa 03:' . $pessoa3;

/**
 * Retorna uma lista de pessoas
 */
function getPessoas(){
    return array('Romulo', 'Vinicius', 'Jessica');
}

echo '<hr>';

// usando list - opcao 02 - com retorno de funcao
list($pessoa1, $pessoa2, $pessoa3) = getPessoas();
echo '<br>Pessoa 01:' . $pessoa1;
echo '<br>Pessoa 02:' . $pessoa2;
echo '<br>Pessoa 03:' . $pessoa3;


// usando list - opcao 03 - com retorno de funcao
/**
 * Retorna uma lista de pessoas
 */
function getDadosApi(){
    $salario = 1500;
    $nome = 'Romulo';
    $recebeuSalario = false;

    $salarioFuncionario = new stdClass();
    $salarioFuncionario->salarioBruto = 2500;
    $salarioFuncionario->inss = 200;
    $salarioFuncionario->salarioLiquido = 2300;

    return array($salario, $nome, $recebeuSalario, $salarioFuncionario);
    // list     ($salario, $nome, $recebeuSalario, $salarioFuncionario) = getDadosApi();
}

echo '<hr>';
echo '#################FOLHA DE PAGAMENTO####################';
list($salario, $nome, $recebeuSalario, $salarioFuncionario) = getDadosApi();
echo '<br>Salário:' . $salario;
echo '<br>Nome da Pessoa:' . $nome;

$mensagemRecebeuSalario = "NÃO";
if($recebeuSalario){
    $mensagemRecebeuSalario = "SIM";
}

echo '<br>Recebeu salario?' . $mensagemRecebeuSalario;
echo '<br>Dados do salario: ' . json_encode($salarioFuncionario);
echo '<br>Dados do salario - Objeto - liquido: ' . $salarioFuncionario->salarioLiquido;
// usando objeto

// percorrendo array
echo '<hr>';
echo 'Percorrendo array de Strings:';
$aListaPessoas = getPessoas();
foreach($aListaPessoas as $key => $value){
    echo '<br>Chave:' . $key;
    echo '<br>Valor:' . $value;
}

echo '<hr>';
function getPessoaObjeto(){
    $aListaPessoasFn = array();
    
    $oPessoa = new  stdClass();
    $oPessoa->codigo = 1;
    $oPessoa->nome = 'Adriano\'s Bar';
    $oPessoa->idade = 25;

    // Adicionando o objeto atual no array de dados
    $aListaPessoasFn[] = $oPessoa;

    $oPessoa = new  stdClass();
    $oPessoa->codigo = 2;
    $oPessoa->nome = 'Cauê';
    $oPessoa->idade = 45;

    // Adicionando o objeto atual no array de dados
    $aListaPessoasFn[] = $oPessoa;

    $oPessoa = new  stdClass();
    $oPessoa->codigo = 3;
    $oPessoa->nome = 'Bruna';
    $oPessoa->idade = 18;

    // Adicionando o objeto atual no array de dados
    $aListaPessoasFn[] = $oPessoa;

    return $aListaPessoasFn;
}

echo 'Percorrendo array de Objeto:';
$aListaPessoas = getPessoaObjeto();

echo '<br>Dados das pessoas:<br>';
foreach($aListaPessoas as $key => $oPessoa){
    echo '<br>JSON ENCODE DO OBJETO: ' . json_encode($oPessoa) . '<br>';

    echo '<br>Chave: ' . $key;    
    echo '<br>Código: ' . $oPessoa->codigo;
    echo '<br>Nome:' . $oPessoa->nome;

    echo '<br>Idade:' . $oPessoa->idade;
}

echo '<hr>';

try {
    $retorno = inserindoDados();
} catch(Exception $ex){
    echo $ex->getMessage();
} finally{
    // sempre executa
    // fecha a conexao com banco de dados
}

function inserindoDados(){
    // valida dados

    $valida = false;

    if(!$valida){
        Throw new Exception();
    }

    return true;    
}

// Atribuindo valores em um array
$aDados = array();
$aDados[] = "Gelvazio";
$aDados[] = "Bruna";
$aDados[] = "Romulo";

foreach($aDados as $key => $values){
    echo '<br>Nome:' . $values . ' - posição:' . $key;
}

echo '<br>';

// Atribuindo valores em um array com posicao
$aDados = array();
$aDados[3] = "Bruna";
$aDados[1] = "Gelvazio";
$aDados[6] = "Romulo";

// ordenando array pela chave
ksort($aDados);

echo '<br>Setando dados array - 02';
foreach($aDados as $key => $values){
    echo '<br>Nome:' . $values . ' - posição:' . $key;
}



