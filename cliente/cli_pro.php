<?php 
session_start();
include_once("../conexao.php");// cria a conexão com o BD

$cod = filter_input(INPUT_POST, 'cod', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
$tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING);

$resultado_cliente = "INSERT INTO e1_clientes(codigo, nome, cpf, rg, telefone) values ('$cod', '$nome', '$cpf', '$rg', '$tel')";

$resultado = mysqli_query($conn, $resultado_cliente);

if($conn->affected_rows ==1){
	$_SESSION['msg'] = "<h2>Usuário cadastrado com sucesso!</h2>";
}else{
	$_SESSION['msg'] = "<h2> Usuário não cadastrado</h2>";
}

header("Location: cli_cad.php");


 ?>