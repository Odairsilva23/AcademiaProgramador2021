<?php
session_start();
include_once("conexao.php");

$chamado = filter_input(INPUT_POST, 'chamado', );
$descricao = filter_input(INPUT_POST, 'descrição', );
$equipamento = filter_input(INPUT_POST, 'equipamento', );
$data = filter_input(INPUT_POST, 'data', );


$result_produto= "INSERT INTO chamados (chamado, descrição, equipamento, data, ) VALUES ('$chamado', '$descri', '$equipamento', '$data,  NOW())";
$resultado_usuario = mysqli_query($conn, $result_chamados);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>chamado incluido com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>chamado rejeitado</p>";
	header("Location: index.php");
}
