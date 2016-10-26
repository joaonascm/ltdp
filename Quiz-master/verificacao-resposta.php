<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Verificação Resposta</title>
		
		<meta charset="utf-8">
		  <meta name="viewport" content="width=device-width">
		  
		<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
		<link href="http://fontawesome.io/icon/barcode/">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
		<link href="style-index_quiz.css" rel="stylesheet" />
		
		
	</head>
	<body>
		<div class="wrapper">
			<div id="quiz">	
					<?php
						
						$idAlternativaSelecionada = (int)$_POST['opcao'];
						
						
						
						include 'conexao.php';

						
						
						$sql = "SELECT certo, justificativa FROM alternativas WHERE id_alternativa = $idAlternativaSelecionada";
						$query = mysql_query($sql);
						
						
						
						
						while($dados = mysql_fetch_assoc($query)){
							$certo = (int)$dados['certo'];
							$justificativa = $dados['justificativa'];
						}
						
						
						if ($certo){
							echo "<h1>Voce acertou!<br /><br />
									$justificativa</h1>
									";
						}else{
							echo "<h1>Voce errou!<br /><br />
									$justificativa</h1>
									";
						}
						
						
						
						
						?>
						<a href="index.php">Clique aqui para uma nova questão </a>
				</div>
			
			<footer class="row footer">
			
			</footer>	

		</div>
	
		
	</body>
</html>
