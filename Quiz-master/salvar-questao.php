<?php
	
	$questao = $_POST['questao'];
	$enunciado = $_POST['enunciado'];
	$materia = $_POST['materia'];
	
	$alternativacinco = $_POST['alternativacinco'];
	$justificativacinco = $_POST['justificativacinco'];
	
	$alternativaum = $_POST['alternativaum'];
	$justificativaum= $_POST['justificativaum'];
	
	$alternativadois = $_POST['alternativadois'];
	$justificativadois = $_POST['justificativadois'];
	
	$alternativatres = $_POST['alternativatres'];
	$justificativatres = $_POST['justificativatres'];
	
	$alternativaquatro = $_POST['alternativaquatro'];
	$justificativaquatro = $_POST['justificativaquatro'];
	
	$alternativacorreta = $_POST['alternativacorreta'];
	
	
	/*configurco de enderecmento do bnco de ddos*/
	include 'conexao.php';
	
	
	
	
	//Inserir a questao 
	$sql = "INSERT INTO questao VALUES ('', '$questao', '$enunciado', '$materia')";
	$sqlexecutado = mysql_query($sql);
	
	if (mysql_errno()) {
		$error = "MySQL error ".mysql_errno().": ".mysql_error()."\n<br>When executing:<br>\n$sql\n<br>";
	
		echo $error;
	}
	//pegar o id que foi inserido
	$idquestao = mysql_insert_id();
	
	
	switch ($alternativacorreta) {
	    case "alternativaum":
	    	inserirAlternativa ($idquestao, $alternativaum, $justificativaum, true);
	    	inserirAlternativa ($idquestao, $alternativadois, $justificativadois,false);
	    	inserirAlternativa ($idquestao, $alternativatres, $justificativatres,false);
	    	inserirAlternativa ($idquestao, $alternativaquatro, $justificativaquatro,false);
	    	inserirAlternativa ($idquestao, $alternativacinco, $justificativacinco,false);
	        break;
	    case "alternativadois":
	        inserirAlternativa ($idquestao, $alternativaum, $justificativaum,false);
	    	inserirAlternativa ($idquestao, $alternativadois, $justificativadois, true);
	    	inserirAlternativa ($idquestao, $alternativatres, $justificativatres,false);
	    	inserirAlternativa ($idquestao, $alternativaquatro, $justificativaquatro,false);
	    	inserirAlternativa ($idquestao, $alternativacinco, $justificativacinco,false);
	        break;
	    case "alternativatres":
	       inserirAlternativa ($idquestao, $alternativaum, $justificativaum,false);
	    	inserirAlternativa ($idquestao, $alternativadois, $justificativadois,false);
	    	inserirAlternativa ($idquestao, $alternativatres, $justificativatres, true);
	    	inserirAlternativa ($idquestao, $alternativaquatro, $justificativaquatro,false);
	    	inserirAlternativa ($idquestao, $alternativacinco, $justificativacinco,false);
	        break;
	     
	    case "alternativaquatro";
		    inserirAlternativa ($idquestao, $alternativaum, $justificativaum, false);
	    	inserirAlternativa ($idquestao, $alternativadois, $justificativadois, false);
	    	inserirAlternativa ($idquestao, $alternativatres, $justificativatres, false);
	    	inserirAlternativa ($idquestao, $alternativaquatro, $justificativaquatro, true);
	    	inserirAlternativa ($idquestao, $alternativacinco, $justificativacinco, false);
		    break;
	    case "alternativacinco";
		    inserirAlternativa ($idquestao, $alternativaum, $justificativaum, false);
	    	inserirAlternativa ($idquestao, $alternativadois, $justificativadois, false);
	    	inserirAlternativa ($idquestao, $alternativatres, $justificativatres, false);
	    	inserirAlternativa ($idquestao, $alternativaquatro, $justificativaquatro,false);
	    	inserirAlternativa ($idquestao, $alternativacinco, $justificativacinco, true);
		    break;
	}

	//Repetir isso 5 vezes
	
	
	
	
	
	function inserirAlternativa ($idquestao, $alternativa, $justificativa, $certo)
	{
					//Inserir a alternativa um 
			$sql = "INSERT INTO alternativas VALUES ('', $idquestao, '$alternativa', '$justificativa', '$certo')";
			$sqlexecutado = mysql_query($sql);
			$msg="";
			if (mysql_errno()) {
				$error = "MySQL error ".mysql_errno().": ".mysql_error()."\n<br>When executing:<br>\n$sql\n<br>";
				
				echo $error;
			} 
			
	}
	mysql_close($conexao);

?>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style-global.css" />
		<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css" />
	
        
		<title>Questão Salva</title>
	</head>
	
	<body>
		<form>
		<div class="testbox container">
				<h3>Questão inserida com sucesso!</h3>
				<a href="inscricao.html">Clique aqui para inserir uma nova</a>
		</div>
		</form>
	</body>
	
</html>

