<?php
include_once "conexao.php";
header("Content-type: text/html; charset=utf-8");

if (!$conn) {
	die("Conexão falhou: " . mysqli_connect_error());
}
$sql = "SELECT * FROM Hoteis, Voos,AluguelCarros";
$all = mysqli_query($conn,$sql) or die ("Erro ao retornar dados");

while ($registro = mysqli_fetch_array($all)) {
	/*modelo_voo varchar(100) not null,
companhia_voo varchar(100) not null,
quantidade_passagens_voo varchar (100) not null,
local_origem_voo varchar(100) not null,
local_destino_voo varchar(100) not null,
data_hora_ida_voo datetime  not null,
data_hora_volta_voo datetime not null,
duracao_voo varchar (10) not null,
escalas_voo varchar (100) not null,
preco_ida_volta_voo decimal (10,2) not null,*/
$nome_hotel = $registro ['nome_hotel'];
$quarto_hotel = $registro ['quarto_hotel'];
$categoria_hotel = $registro ['categoria_hotel'];
$preco_total_hotel = $registro ['preco_total_hotel'];
$beneficios_hotel = $registro ['beneficios_hotel'];

$modelo_voo = $registro ['modelo_voo'];
$companhia_voo = $registro ['companhia_voo'];
$quantidade_passagens_voo = $registro ['nome_hotel'];
$local_origem_voo = $registro ['local_origem_voo'];
$local_destino_voo = $registro ['local_destino_voo'];
$data_hora_ida_voo = $registro ['data_hora_ida_voo'];
$data_hora_volta_voo = $registro ['data_hora_volta_voo'];
$duracao_voo = $registro ['duracao_voo'];
$escalas_voo = $registro ['escalas_voo'];
$preco_ida_volta_voo = $registro ['preco_ida_volta_voo'];

$modelo_carro = $registro ['modelo_carro'];
$quantidade_pessoas_carro = $registro ['quantidade_pessoas_carro'];
$quantidade_portas_carro = $registro ['quantidade_portas_carro'];
$cor_carro = $registro ['cor_carro'];
$tipo_cambio_carro = $registro ['tipo_cambio_carro'];
$abastecimento_carro = $registro ['abastecimento_carro'];
$beneficios_carro = $registro ['beneficios_carro'];
$preco_carro = $registro ['preco_carro'];
}

if ($nome_hotel == "Nobile Express Aracaju") {
	$pacote = "São Paulo x Aracajú";
	$imagem = "imagens/aracaju.jpg";
}
if ($nome_hotel == "Hotel Pousada Colina de Pedra") {
	$pacote = "São Paulo x Gramado";
	$imagem = "imagens/gramado.jpg";
}
else{
	$pacote = "São Paulo x Salvador";
	$imagem = "imagens/salvador.jpg";
}
?>

<!DOCTYPE html>
<html>	
<title> Pagamento </title>
<meta charset= "utf-8">
<link rel="stylesheet" href="estilo.css">

<body>
	<div class="titulo">
			<h1>Verifique o pacote selecionado e selecione os métodos de pagamento</h1>
	</div>
	<div class="barra"></div>				
	<div class="main-content">
			<div class="main1">
			<img src=<?php echo "$imagem"; ?>>
				<h2>Opção selecionada: <?php echo "$pacote"; ?></h2>
				<p><h3>Hotel</h3><?php echo "$nome_hotel"; ?><br><?php echo "$quarto_hotel"; ?> <br><?php echo "$categoria_hotel"; ?><br> <?php echo "$preco_total_hotel"; ?> <br><?php echo "$beneficios_hotel"; ?>
				
				<h3>Voo</h3>
				Modelo: <?php echo "$modelo_voo"; ?><br>Companhia aérea: <?php echo "$companhia_voo"; ?><br><?php echo "$quantidade_passagens_voo"; ?><br>Ida: <?php echo "$local_origem_voo"; ?> - <?php echo "$data_hora_ida_voo"; ?><br>Volta:  <?php echo "$local_destino_voo"; ?> - <?php echo "$data_hora_volta_voo"; ?><br>Duração: <?php echo "$duracao_voo"; ?><br><?php echo "$escalas_voo"; ?><br>R$<?php echo "$preco_ida_volta_voo"; ?>
				
				<h3>Carro</h3>Modelo: <?php echo "$modelo_carro"; ?><br>Pessoas: <?php echo "$quantidade_pessoas_carro"; ?><br>Portas: <?php echo "$quantidade_portas_carro"; ?><br>Cor: <?php echo "$cor_carro"; ?><br>Câmbio: <?php echo "$tipo_cambio_carro"; ?><br>Combustível: <?php echo "$abastecimento_carro"; ?><br>Benefícios: <?php echo "$beneficios_carro"; ?><br>R$<?php echo "$preco_carro"; ?>
				</p>
			</div>			
		</div>
		<div class="barra"></div>
		<div class="form">
		<form id="select" name="select" method = "POST" action="confirma.php" >

		Selecione o método de pagamento do Hotel: &nbsp
		<input type="radio" name="hotel" id="hotel" value= "Dinheiro" checked="checked" />Dinheiro &nbsp &nbsp
		<input type="radio" name="hotel" id="hotel" value= "Cartão de débito" />Cartão de débito &nbsp &nbsp
		<input type="radio" name="hotel" id="hotel" value= "Cartão de crédito" />Cartão de crédito<br><br> 

		Selecione o método de pagamento do Voo: &nbsp
		<input type="radio" name="voo" id="voo" value= "Dinheiro" checked="checked" />Dinheiro &nbsp &nbsp
		<input type="radio" name="voo" id="voo" value= 2 />Cartão de débito &nbsp &nbsp
		<input type="radio" name="voo" id="voo" value= 3 />Cartão de crédito<br><br>

		Selecione o método de pagamento do Aluguel de Carro: &nbsp
		<input type="radio" name="carro" id="carro" value= "Dinheiro" checked="checked" />Dinheiro &nbsp &nbsp
		<input type="radio" name="carro" id="carro" value= "Cartão de débito" />Cartão de débito &nbsp &nbsp
		<input type="radio" name="carro" id="carro" value= "Cartão de crédito" />Cartão de crédito<br><br>
		<input name="Submit" type="submit" value="Confirmar">
		</form>
	</div>
	</div>
</body>
</html>	




