<?php
include_once"conexao.php";

// criando tabela e cabeçalho de dados

echo "<center><table border=1>";
echo "<tr>";
echo "<th>CPF</th>";
echo "<th>NOME</th>";
echo "<th>E-MAIL</th>";
echo "<th>ENDEREÇO</th>";
echo "<th>CEP</th>";
echo "<th>TLEFONE</th>";
echo "</tr>";

$sql = "SELECT * FROM Clientes";
$resultado = mysqli_query($conn,$sql) or die ("Erro ao retornar dados");

// Mostra a mensagem de sucesso
echo "<center>Registro cadastrados na base de dados.<br/></center>";
echo "</br>";

// Extraindo os dados armazenado na base de dados por meio de um loop while
while ($registro =  mysqli_fetch_array($resultado)) {
	$cpf = $registro ['CPF_cliente'];
	$nome = $registro ['nome_cliente'];
	$email = $registro ['email_cliente'];
	$endereco = $registro ['endereco_cliente'];
	$cep = $registro ['cep_cliente'];
	$telefone = $registro ['telefone_cliente'];

echo "<tr>";
echo "<td>".$cpf."</td>";
echo "<td>".$nome."</td>";
echo "<td>".$email."</td>";
echo "<td>".$endereco."</td>";
echo "<td>".$cep."</td>";
echo "<td>".$telefone."</td>";
echo "</tr>";

}

mysqli_close($conn);
echo "</table></center>";
echo "</br>";
echo "<center><a href='select_variavel.html'> Consulta Individual</a>
	<a href='select_all_variavel.php'> Consultar Todos </a>
	<!--<a href='delete_variavel.php'> Deletar e consultar</a>-->
	<a href='insert_variavel.php'> Inserir outro usuário </a></center>";
echo "</br>";

echo "<form method='post'>";
		
		echo
		"<center>
		<button type='submit' formaction='cadastro_cliente.html'> Inserir</button>
		<button type='submit' formaction='delete_cliente.html'> Deletar</button>
		<button type='submit' formaction='select_cliente.html'> Consultar</button>
		<button type='submit' formaction='select_all_cliente.php'> Consultar Todos</button>
		<button type='submit' formaction='atualizar_cliente.html'> Atualizar</button>
	</center>

	</form><br/>";