<?php

include_once "conexao.php";

header("Content-type: text/html; charset=utf-8");
$nome = $_POST ['nome'];
$cpf = $_POST ['cpf'];
$email = $_POST ['email'];
$endereco = $_POST ['endereco'];
$cep = $_POST ['cep'];
$telefone = $_POST ['telefone'];

$cpfconvertido = intval($cpf);

$sql = "INSERT INTO tb_gustavo (nome_cliente, cpf_cliente, email_cliente, endereco_cliente, cep_cliente,  telefone_cliente)
VALUES ('$nome','$cpf', '$email','$endereco', '$cep', '$telefone')";

if(!mysqli_query($conn, $sql)) {
	die ('Erro ao inserir os dados na tabela: '.mysqli_error($conn));
}

echo "Dados cadastrados com sucesso </br>";
mysqli_close($conn);
	header("Location: select_all_cliente.php");
?>
