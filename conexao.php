<?php
header("Content-type: text/html; charset=utf-8");

$servidor = "tads3b.mysql.dbaas.com.br";
$banco = "tads3b";
$usuario = "tads3b";
$senha = "UMC!tads3B";

$conn = mysqli_connect($servidor, $usuario, $senha, $banco, $porta);
if (!$conn) {
	die ("Conexão falhou: " . mysqli_connect_error());
}
mysqli_set_charset($conn, 'utf-8');

?>
