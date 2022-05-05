<?php

include_once "conexao.php";
$cpf = $_POST['cpf'];
$sql = "DELETE FROM tb_gustavo WHERE CPF_cliente = '".$cpf."'";

//Caso haja algum erro na string SQL finaliza a operação
if (!mysqli_query($conn, $sql)) {
	die('Erro ao excluir o registro: ' . mysqli_error($conn));
}
// Caso esteja tudo  correto com a string SQL imprima mensagem para o usuario
echo "<center> Registro deletado com sucesso.<br/></center>";
mysqli_close($conn);
// Redireciona para a página que mostra dos os registros cadastrados
header("Location: select_all_cliente.php?mensagem=ok");
//Header ("Location: select_all_variavel.php");
?>
