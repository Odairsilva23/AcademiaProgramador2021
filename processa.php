<?php
session_start();
include_once("conexao.php");

$produto = filter_input(INPUT_POST, 'produto', );
$valor = filter_input(INPUT_POST, 'valor', );
$codigo = filter_input(INPUT_POST, 'codigo', );
$data = filter_input(INPUT_POST, 'data', );
$fabricante = filter_input(INPUT_POST, 'fabricante', );
//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_produto= "INSERT INTO Produtos (produto, valor, codigo, data, fabricante) VALUES ('$produto', '$valor', '$valor', '$data, '$fabricante' NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Produto cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>produto não foi cadastrado com sucesso</p>";
	header("Location: index.php");
}
