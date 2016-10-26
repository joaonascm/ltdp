<?php


	$servidor = "localhost";
	$usuario = "root";
	$senha = "";

	/*configurco de cesso o bnco de ddos*/
	$nome_banco = "bd_quiz";

	$conexao = mysql_connect($servidor, $usuario, $senha);

	/*verifica se a conexao realmente foi criada*/
	/*se (nao conexao) entao, ou seja, conexao e falsa*/
	if (!$conexao) {
		echo "Nгo foi possнvel connectar ";
		exit;
	}else{/*senao*/
		/*Selecione o banco de dados ou morra*/
		
		$banco = mysql_select_db($nome_banco, $conexao) or die ("Nгo foi possнvel conectar ao banco de dados");
		// Corrige a codificaзгo
		mysql_query("SET NAMES 'utf8'");
		mysql_query('SET character_set_connection=utf8');
		mysql_query('SET character_set_client=utf8');
		mysql_query('SET character_set_results=utf8');
						
		
	}
?>