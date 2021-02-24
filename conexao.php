<?php
header("Content-type: text/html; charset=utf-8");

$servidor = "localhost";
$banco = "projetofinal";
$usuario = "root";
$senha = "usbw";
$porta = "3307";

$conn = mysqli_connect($servidor, $usuario, $senha, $banco, $porta);
if (!$conn) {
	die ("Conexão falhou: " . mysqli_connect_error());
}
mysqli_set_charset($conn, 'utf-8');
echo "Conexão bem sucedida";

?>
