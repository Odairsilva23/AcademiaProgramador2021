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
		<h1>Cadastrar Produtos</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php">
			<label>Produto: </label>
			<input type="text" name="nome" placeholder="Digite o nome do Produto"><br><br>
			
			<label>valor: </label>
			<input type="number" name="valor" placeholder="Digite o valor do produto"><br><br>

			<label>codigo: </label>
			<input type="text" name="codigo" placeholder="Digite o numero de serie do produto"><br><br>

			<label>data: </label>
			<input type="date" name="data" placeholder="Digite a data de fabricação do produto"><br><br>

			<label>fabricante: </label>
			<input type="nome" name="fabricante" placeholder="Digite o fabricante"><br><br>
			
			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>