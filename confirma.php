<?php
include_once "conexao.php";
header("Content-type: text/html; charset=utf-8");

if (!$conn) {
	die("Conexão falhou: " . mysqli_connect_error());
}

$hotel = $_POST['hotel'];
$voo = $_POST['voo'];
$carro = $_POST['carro'];

$sql = "INSERT INTO MetodoPagamento (metodo_pagamento_hotel, metodo_pagamento_voo, metodo_pagamento_carro)
	VALUES ('$hotel','$voo','$carro')";
if(!mysqli_query($conn, $sql)) {
	die ('Erro ao inserir os dados na tabela: '.mysqli_error($conn));
}

?>

<!DOCTYPE html>
<html>	
<title> Compra confirmada </title>
<meta charset= "utf-8">
<link rel="stylesheet" href="estilo.css">

<body>				
	<div class="main-content">
			<div class="main2">
			<h1>Sua compra foi realizada com sucesso!!!</h1>
			<h3>Agradecemos sua preferência.</h3>
			</div>		
</body>
</html>