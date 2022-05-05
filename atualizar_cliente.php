<?php
include_once "conexao.php";

$codigo = $_POST['id'];

$nome = $_POST ['nome'];
$cpf = $_POST ['cpf'];
$email = $_POST ['email'];
$endereco = $_POST ['endereco'];
$cep = $_POST ['cep'];
$telefone = $_POST ['telefone'];

//Convertendo Data
$data = implode("",array_reverse(explode("/",$data)));
/*nome_cliente varchar(120) not null,
CPF_cliente varchar(50) not null,
email_cliente varchar(120) not null,
endereco_cliente varchar(180) not null,
cep_cliente varchar(120) not null,
telefone_cliente varchar(30) not null,
fk_id_cartao int);*/

$sql= "UPDATE tb_gustavo SET nome_cliente = '$nome', email_cliente = '$email', endereco_cliente = '$endereco', cep_cliente= '$cep', telefone_cliente = '$telefone' WHERE CPF_cliente= '$cpf'";

//Caso esteja algum erra na string SQL ou na conexao do banco dados finaliza a operação
if(!mysqli_query($conn, $sql)){
	die('Erro ao atualizar o registro:' . mysqli_error($conn));
}
//Caso esteja tudo correto com a string SQL e na conexão com a banco de dados imprime uma mensagem para o  usuario
echo "Registro atualiza com sucesso.<br/>";
//Fecha conexão
mysqli_close($conn);
//Redireciona para a página de consulta
header("Location: select_all_cliente.php");


?>