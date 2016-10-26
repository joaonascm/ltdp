<html lang="pt-br">
	<head>
		<title>Quiz</title>
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
	
	<form action="verificacao-resposta.php" method="post">
		<div class="wrapper">
			<div id="quiz">			
				<?php
					include 'conexao.php';
	
					
					$sqlRandomica = "SELECT idquestao, questao, enunciado, materia FROM questao ORDER BY RAND() LIMIT 1";
					$query = mysql_query($sqlRandomica);
					
					
					while($dados = mysql_fetch_assoc($query)){
						$idQuestao = $dados['idquestao'];
				
						$textoQuestao = $dados['questao'];
						$textoEnunciado = $dados['enunciado'];
						$materia = $dados['materia'];
					}
					echo "<p class='questions'>".$materia."</p>";
					
					echo "<h1>".$textoQuestao."</h1>";
					
					echo "<p class='questions'>".$textoEnunciado."</p>";
					
					$query = mysql_query("SELECT * FROM alternativas WHERE id_questao=$idQuestao");
					while($resultado = mysql_fetch_array($query)){
						$alternativa = $resultado['texto'];
						$idAlternativa = $resultado['id_alternativa'];
						$justificativa = $resultado['justificativa'];
						
						echo "<div class='radio'>
								<label>
									<input type='radio' value='".$idAlternativa."' id='opcao' name='opcao' />"	.$alternativa.
							  	"</label>
							  </div>";
			
					
					}
					//include 'index-quiz.html';
				?>
				<br />
				 <div id="botao">
				<br /><input class="button" type="reset" value="Cancelar" />
  				<input class="button" type="submit" value="Confirmar" />
				</div>
			</div>
		</div>
	</form>
	<footer class="row footer">
	
	</footer>	


	</body>
</html>
