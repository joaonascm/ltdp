<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Lista de Questões</title>

<!--  Nucleo do jquery -->
<link href="../bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" />

</head>
<body>
	<div class="container-fluid">


		<section class="container">
			<h1 id="admin">Listar Questões</h1>
			<div class="thumbnail" id="conteudo">
				<form id="mainform" action="">
					<table width="100%" class="table-striped" id="product-table">
						<thead>
							<tr>
								<th>Cod. da Questão</th>
								<th>Questão</th>
								<th>Enunciado</th>
								<th>Matéria</th>
								<th>Opção</th>
							</tr>
						</thead>
						<tbody>
								<?php
								include '../conexao.php';
								
								// Corrige a codificação
								mysql_query ( "SET NAMES 'utf8'" );
								mysql_query ( 'SET character_set_connection=utf8' );
								mysql_query ( 'SET character_set_client=utf8' );
								mysql_query ( 'SET character_set_results=utf8' );
								
								$sql = mysql_query ( "SELECT * FROM questao" );
								while ( $resultado = mysql_fetch_array ( $sql ) ) {
									$idquestao = $resultado ['idquestao'];
									$questao = $resultado ['questao'];
									$enunciado = $resultado ['enunciado'];
									$materia = $resultado ['materia'];
									
									echo "<tr>
												<td>" . $idquestao . "</td>
												<td>" . $questao . "</td>
												<td>" . $enunciado . "</td>
												<td>" . $materia . "</td>
												<td>
													<a href='deletar_questao.php?id=".$idquestao."' id='link-delete' title='Deletar' class='glyphicon glyphicon-minus-sign options-delet' data-title='Exclusão'></a>
													
											
												</td>
											  </tr>";
								}
								
								?>
							</tbody>
					</table>
				</form>
			</div>
			<footer class="row footer">
				<a href="inscricao-questao.html"> Clique aqui para cadastrar uma nova questão</a>
			</footer>
		</section>
		

	</div>


</body>
</html>
