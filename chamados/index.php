<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Cadastrar</title>		
	</head>
	<body>
		<h1>Chamados</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php">
			<label>Nome chamado: </label>
			<input type="text" name="nome" placeholder="Digite o nome do Produto"><br><br>
			
			<label>Descrição do chamado: </label>
			<input type="number" name="valor" placeholder="Digite o valor do produto"><br><br>

			<label>equipamento: </label>
			<input type="text" name="codigo" placeholder="Digite o numero de serie do produto"><br><br>

			<label>data: </label>
			<input type="date" name="data" placeholder="Digite a data de fabricação do produto"><br><br>
			
			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>