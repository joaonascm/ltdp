<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";

/*configurco de acesso o banco de ddos*/
$nome_banco = "bd-questao";

$conexao = mysql_connect($servidor, $usuario, $senha);

/*verifica se a conexao realmente foi criada*/
/*se (nao conexao) entao, ou seja, conexao e falsa*/

if (!$conexao) {
	echo "N�o foi poss�vel connectar ao servidor";
	exit;
}else{/*senao*/
	"<h1>Conectou</h1>";
}

/*Selecione o banco de dados ou morra*/
$banco = mysql_select_db($nome_banco, $conexao) or die ("N�o foi poss�vel conectar ao banco de dados");


$comandosql = "SELECT  resposta FROM tb_resposta WHERE id_questao-um = ".$opcao1;
	$resultado = mysql_query($comandosql);
	
	if (mysql_errno()) {
		$error = "MySQL error ".mysql_errno().": ".mysql_error()."\n<br>Quando executou:<br>\n$comandosql\n<br>";
		echo $error;
	}
	$itembancodados = mysql_fetch_array($resultado);
	$qtdevagas1 = $itembancodados['quantidade_vagas'];
	
	
	$comandosql = "SELECT count(*) as total FROM tb_inscricao WHERE opcao_um=".$opcao1;
	$resultado = mysql_query($comandosql);
	$itembancodados = mysql_fetch_assoc($resultado);
	$qtdeinscritosc1 = $itembancodados['total'];
	
	if ($qtdeinscritosc1 >= $qtdevagas1){
		echo "<h1>N�o existem vagas na sua primeira op��o, tente novamente</h1>";
		echo "<a href='inscricao.html'>Clique aqui para voltar</a>";
		$podeinserir=false;
	} 
	?>		