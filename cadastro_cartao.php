<?php

include_once "conexao.php";
/*create table Cartoes_de_Credito(
id_cartao int primary key not null auto_increment,
titular_cartao varchar(120) not null,
CPF_titular_cartao varchar(50) not null,
numero_cartao varchar(100) not null,
validade_cartao varchar (15) not null,
cod_verificacao_cartao int not null,
pais_cartao varchar(120) not null,
endereco1_cartao varchar(200) not null,
endereco2_cartao varchar(200) not null,
CEP_cartao varchar(200) not null,
cidade_cartao varchar(200) not null);*/
header("Content-type: text/html; charset=utf-8");
$titular = $_POST ['titular'];
$cpf = $_POST ['cpf'];
$numero = $_POST ['numero'];
$validade = $_POST ['validade'];
$codigo = $_POST ['codigo'];
$endereco1 = $_POST ['endereco1'];
$endereco2 = $_POST ['endereco2'];


echo "<Center> Dados Cadastrados </Center><br>";
echo "Titular do cartão: $titular</br>";
echo "Cpf: $cpf</br>";
echo "Número do cartão: $numero</br>";
echo "Validade: $validade</br>";
echo "Código de Verificação: $codigo</br>";
echo "Endereço 1 do cartão: $endereco1</br>";
echo "Endereço 2 do cartão: $endereco2</br>";

$sql = "INSERT INTO Cartoes_de_Credito (titular_cartao, CPF_titular_cartao, N.+, endereco_cliente, cep_cliente,  telefone_cliente)
VALUES ('$nome','$cpf', '$email','$endereco', '$cep', '$telefone')";

if(!mysqli_query($conn, $sql)) {
	die ('Erro ao inserir os dados na tabela: '.mysqli_error($conn));
}

echo "Dados cadastrados com sucesso </br>";
mysqli_close($conn);
//Mostra a mensagem de sucesso
echo "<center>Registro inserido com sucesso</center></br>";
echo "<form method='Post'>";
	echo
	"<center>
		<button type='submit' formaction='cadastro_cliente.html'> Inserir</button>
		<button type='submit' formaction='delete_cliente.html'> Deletar</button>
		<button type='submit' formaction='select_cliente.html'> Consultar</button>
		<button type='submit' formaction='select_all_cliente.php'> Consultar Todos</button>
		<button type='submit' formaction='atualizar_cliente.html'> Atualizar</button>
	</center>
	</form>
	<br/>";
?>
