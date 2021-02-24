<?php

include_once "conexao.php";

header("Content-type: text/html; charset=utf-8");
$nome = $_POST ['nome'];
$cpf = $_POST ['cpf'];
$email = $_POST ['email'];
$endereco = $_POST ['endereco'];
$cep = $_POST ['cep'];
$telefone = $_POST ['telefone'];
echo "$cpf";

$cpfconvertido = intval($cpf);

echo "<Center> Dados Cadastrados </Center><br>";
echo "Nome: $nome</br>";
echo "Cpf: $cpfconvertido</br>";
echo "endereco: $endereco</br>";
echo "cep: $cep</br>";
echo "E-mail: $email</br>";
echo "Telefone: $telefone</br>";

$sql = "INSERT INTO clientes (nome_cliente, cpf_cliente, email_cliente, endereco_cliente, cep_cliente,  telefone_cliente)
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
