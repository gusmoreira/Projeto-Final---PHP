<?php


include_once "conexao.php";

if (!$conn) {
	die("Conexão falhou: " . mysqli_connect_error());
}

else{
	$opcao = $_POST['opcao'];
	include_once "delte.php";
	set_time_limit(300);
	var_dump($opcao);
	if ($opcao == 1) {
	$sql =  "INSERT INTO Hoteis (nome_hotel, data_checkin_hotel, data_checkout_hotel, quarto_hotel, categoria_hotel, preco_total_hotel, beneficios_hotel)
VALUES ('Nobile Express Aracaju', '2019-12-14', '2019-12-24', '2 adulto - 1 Cama de casal ou 2 Camas de solteiro','3 estrelas', 'R$1.000(em até 12x sem juros) por 1 quarto para 10 noites','Café da manhâ grátis - Estacionamento grátis - Piscina - Wi-fi grátis - Para não fumantes - Ar-condicionado')";

	if(!mysqli_query($conn, $sql)) {
	die ('Erro ao inserir os dados na tabela: '.mysqli_error($conn));}

	$sql =  "INSERT INTO Voos(modelo_voo, companhia_voo, quantidade_passagens_voo, local_origem_voo, local_destino_voo, data_hora_ida_voo, data_hora_volta_voo, duracao_voo, escalas_voo, preco_ida_volta_voo)
VALUES ('LATAM Airlines Group 3268', 'LATAM AIRLINES BRASIL', '4 bilhetes: 2 adultos','São Paulo (GRU)', 'Aracaju (AJU)','2019/12/14 11:15:00','2019/12/24 14:45:00', '2h 40min', 'Voo direto', 2004.96 )";

	if(!mysqli_query($conn, $sql)) {
	die ('Erro ao inserir os dados na tabela: '.mysqli_error($conn));}

	$sql = "INSERT INTO AluguelCarros(modelo_carro, quantidade_pessoas_carro, quantidade_portas_carro, cor_carro, tipo_cambio_carro, abastecimento_carro, beneficios_carro, preco_carro)
	values('Fiat Mobi', 5, 4, 'Vermelho', 'Manual', 'Flex', 'Ar-condicionado - Rádio', 901.00)";

	if(!mysqli_query($conn, $sql)) {
	die ('Erro ao inserir os dados na tabela: '.mysqli_error($conn));}	

}

if ($opcao == 2) {
	$sql =  "INSERT INTO Hoteis(nome_hotel, data_checkin_hotel, data_checkout_hotel, quarto_hotel, categoria_hotel, preco_total_hotel, beneficios_hotel)
	values ('Hotel Pousada Colina de Pedra',  '2019-12-14', '2019-12-24', '2 adultos - 1 Cama de casal ou  1 Cama de solteiro', '2,5 estrelas', 'R$ 3.300 por 1 quarto por 10 noites', 'Café da manhâ grátis - Estacionamento grátis - Piscina - Wi-fi grátis - Para não fumantes - Ar-condicionado')";

	if(!mysqli_query($conn, $sql)) {
	die ('Erro ao inserir os dados na tabela: '.mysqli_error($conn));}

$sql =  "INSERT INTO Voos(modelo_voo, companhia_voo, quantidade_passagens_voo, local_origem_voo, local_destino_voo, data_hora_ida_voo, data_hora_volta_voo, duracao_voo, escalas_voo, preco_ida_volta_voo)
	values('Sem informações', 'Azul', '4 bilhetes: 2 adultos', 'São Paulo (GRU)', 'Porto Alegre (POA)', '2019/12/14 06:35:00', '2019/12/24 17:50:00', '1h 55min', 'Voo direto', 719.20)";

	if(!mysqli_query($conn, $sql)) {
	die ('Erro ao inserir os dados na tabela: '.mysqli_error($conn));}

$sql =  "INSERT INTO AluguelCarros(modelo_carro, quantidade_pessoas_carro, quantidade_portas_carro, cor_carro, tipo_cambio_carro, abastecimento_carro, beneficios_carro, preco_carro)
	values('Chevrolet Onix', 5, 4, 'Branco','Manual', 'Gasolina', 'Ar-condicionado - Rádio', 759.00)";

	if(!mysqli_query($conn, $sql)) {
	die ('Erro ao inserir os dados na tabela: '.mysqli_error($conn));}

}

if ($opcao == 3) {
	$sql =  "INSERT INTO Hoteis(nome_hotel, data_checkin_hotel, data_checkout_hotel, quarto_hotel, categoria_hotel, preco_total_hotel, beneficios_hotel)
	values ('Riviera Premium Hotel', '2019-12-14', '2019-12-24', '2 adultos - 1 Cama de casal', '3 estrelas', 'R$ 1.419 por 1 quarto por 10 noites',  'Café da manhâ grátis - Estacionamento grátis - Piscina - Wi-fi grátis - Academia - Para não fumantes - Ar-condicionado')";

	if(!mysqli_query($conn, $sql)) {
	die ('Erro ao inserir os dados na tabela: '.mysqli_error($conn));}


	$sql =  "INSERT INTO Voos(modelo_voo, companhia_voo, quantidade_passagens_voo, local_origem_voo, local_destino_voo, data_hora_ida_voo, data_hora_volta_voo, duracao_voo, escalas_voo, preco_ida_volta_voo)
	values('Sem informações', 'GOL Linhas Aereas S.A', '4 bilhetes: 2 adultos', 'São Paulo (GRU)', 'Salvador (SSA)','2019/12/14 10:00:00', '2019/12/24 19:25:00', '2h 35 min', 'Voo direto', 1684.80)";

	if(!mysqli_query($conn, $sql)) {
	die ('Erro ao inserir os dados na tabela: '.mysqli_error($conn));}


	$sql =  "INSERT INTO AluguelCarros(modelo_carro, quantidade_pessoas_carro, quantidade_portas_carro, cor_carro, tipo_cambio_carro, abastecimento_carro, beneficios_carro, preco_carro)
	VALUES('Renault Logan', 5, 4, 'Cinza', 'Manual', 'Gasolina', 'Ar-condicionado - Rádio', 693.00)";

	if(!mysqli_query($conn, $sql)) {
	die ('Erro ao inserir os dados na tabela: '.mysqli_error($conn));}
 
}

echo "Dados cadastrados com sucesso </br>";
mysqli_close($conn);
}
header("Location: pagamento.php");
?>