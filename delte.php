<?php

include_once "conexao.php";
header("Content-type: text/html; charset=utf-8");

// Para que o TRUNCATE funcione, é necessário que as tabelas já armazenem qualquer dado.
$sql =  "INSERT INTO Hoteis (nome_hotel, data_checkin_hotel, data_checkout_hotel, quarto_hotel, categoria_hotel, preco_total_hotel, beneficios_hotel)
VALUES ('Nobile Express Aracaju', '2019-12-14', '2019-12-24', '2 adulto - 1 Cama de casal ou 2 Camas de solteiro','3 estrelas', 'R$1.000(em até 12x sem juros) por 1 quarto para 10 noites','Café da manhâ grátis - Estacionamento grátis - Piscina - Wi-fi grátis - Para não fumantes - Ar-condicionado')";

$sql =  "INSERT INTO Voos(modelo_voo, companhia_voo, quantidade_passagens_voo, local_origem_voo, local_destino_voo, data_hora_ida_voo, data_hora_volta_voo, duracao_voo, escalas_voo, preco_ida_volta_voo)
VALUES ('LATAM Airlines Group 3268', 'LATAM AIRLINES BRASIL', '4 bilhetes: 2 adultos','São Paulo (GRU)', 'Aracaju (AJU)','2019/12/14 11:15:00','2019/12/24 14:45:00', '2h 40min', 'Voo direto', 2004.96 )";

$sql = "INSERT INTO AluguelCarros(modelo_carro, quantidade_pessoas_carro, quantidade_portas_carro, cor_carro, tipo_cambio_carro, abastecimento_carro, beneficios_carro, preco_carro)
	values('Fiat Mobi', 5, 4, 'Vermelho', 'Manual', 'Multicombustível', 'Ar-condicionado - Rádio', 901.00)";	

//Sendo assim, após os insert's, os TRUNCATE's funcionarão corretamente.
$sql = "TRUNCATE TABLE `Hoteis`";
mysqli_query($conn, $sql);
$sql = "TRUNCATE TABLE `Voos`";
mysqli_query($conn, $sql);
$sql = "TRUNCATE TABLE `AluguelCarros`";
mysqli_query($conn, $sql);
$sql = "TRUNCATE TABLE `MetodoPagamento`";
mysqli_query($conn, $sql);

?>