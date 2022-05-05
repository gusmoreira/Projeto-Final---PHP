<?php
include_once"conexao.php";

// criando tabela e cabeçalho de dados
echo '<div class="selectall"';
echo "<center><table border=1>";
echo "<tr>";
echo "<th>CPF</th>";
echo "<th>NOME</th>";
echo "<th>E-MAIL</th>";
echo "<th>ENDEREÇO</th>";
echo "<th>CEP</th>";
echo "<th>TELEFONE</th>";
echo "</tr>";

$sql = "SELECT * FROM tb_gustavo";
$resultado = mysqli_query($conn,$sql) or die ("Erro ao retornar dados");

while ($registro =  mysqli_fetch_array($resultado)) {
	$cpf = $registro ['cpf_cliente'];
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
echo '</div>';
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-cale=1">
	<title>Clientes cadastrados</title>
	<link rel="stylesheet" href="estilocrud.css" type="text/css">
</head>
<body>
	<h2>Tabela com todos os usuários cadastrados no sistema</h2>
</body>
</html>
