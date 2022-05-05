create database ProjetoFinal;
use ProjetoFinal;

create table Clientes(
CPF_cliente varchar(120) primary key  not null,
nome_cliente varchar(120)  not null,
email_cliente varchar(120) unique not null,
endereco_cliente varchar(180) not null,
cep_cliente varchar(120) not null,
telefone_cliente varchar(30) not null);

create table Hoteis(
id_hotel int primary key not null auto_increment,
nome_hotel varchar(120) not null,
data_checkin_hotel date not null,
data_checkout_hotel date not null,
quarto_hotel varchar(120) not null,
categoria_hotel varchar (20) not null,
preco_total_hotel varchar(120) not null,
beneficios_hotel varchar(300) not null,
metodo_pagamento_hotel varchar(100) not null);

create table AluguelCarros(
id_carro int primary key not null auto_increment,
modelo_carro varchar(120) not null,
quantidade_pessoas_carro int not null,
quantidade_portas_carro int not null,
cor_carro varchar(50) not null,
tipo_cambio_carro varchar(50) not null,
abastecimento_carro varchar(100) not null,
beneficios_carro varchar(120) not null,
preco_carro decimal(10,2) not null,
metodo_pagamento_carro varchar(100) not null);

create table Voos(
id_voo int primary key not null auto_increment,
modelo_voo varchar(100) not null,
companhia_voo varchar(100) not null,
quantidade_passagens_voo varchar (100) not null,
local_origem_voo varchar(100) not null,
local_destino_voo varchar(100) not null,
data_hora_ida_voo datetime  not null,
data_hora_volta_voo datetime not null,
duracao_voo varchar (10) not null,
escalas_voo varchar (100) not null,
preco_ida_volta_voo decimal (10,2) not null,
metodo_pagamento_voo varchar(100) not null);

create table MetodoPagamento(
id_metodo_pagamento int primary key not null auto_increment,
metodo_pagamento_hotel varchar(100) not null,
metodo_pagamento_carro varchar(100) not null,
metodo_pagamento_voo varchar(100) not null);




insert into Hoteis (nome_hotel, data_checkin_hotel, data_checkout_hotel, quarto_hotel, categoria_hotel, preco_total_hotel, beneficios_hotel)
	values ('Nobile Express Aracaju', '2019-12-14', '2019-12-24', '2 adulto - 1 Cama de casal ou 2 Camas de solteiro','3 estrelas', 'R$1.000(em até 12x sem juros) por 1 quarto para 10 noites','Café da manhâ grátis - Estacionamento grátis - Piscina - Wi-fi grátis - Para não fumantes - Ar-condicionado');

insert into Hoteis(nome_hotel, data_checkin_hotel, data_checkout_hotel, quarto_hotel, categoria_hotel, preco_total_hotel, beneficios_hotel)
	values ('Hotel Pousada Colina de Pedra',  '2019-12-14', '2019-12-24', '2 adultos - 1 Cama de casal ou  1 Cama de solteiro', '2,5 estrelas', 'R$ 3.300 por 1 quarto por 10 noites', 'Café da manhâ grátis - Estacionamento grátis - Piscina - Wi-fi grátis - Para não fumantes - Ar-condicionado');

insert into Hoteis(nome_hotel, data_checkin_hotel, data_checkout_hotel, quarto_hotel, categoria_hotel, preco_total_hotel, beneficios_hotel)
	values ('Riviera Premium Hotel', '2019-12-14', '2019-12-24', '2 adultos - 1 Cama de casal', '3 estrelas', 'R$ 1.419 por 1 quarto por 10 noites',  'Café da manhâ grátis - Estacionamento grátis - Piscina - Wi-fi grátis - Academia - Para não fumantes - Ar-condicionado');


insert into Voos(modelo_voo, companhia_voo, quantidade_passagens_voo, local_origem_voo, local_destino_voo, data_hora_ida_voo, data_hora_volta_voo, duracao_voo, escalas_voo, preco_ida_volta_voo)
	values('LATAM Airlines Group 3268', 'LATAM AIRLINES BRASIL', '4 bilhetes: 2 adultos','São Paulo (GRU)', 'Aracaju (AJU)','2019/12/14 11:15:00','2019/12/24 14:45:00', '2h 40min', 'Voo direto', 2004.96 );

insert into Voos(modelo_voo, companhia_voo, quantidade_passagens_voo, local_origem_voo, local_destino_voo, data_hora_ida_voo, data_hora_volta_voo, duracao_voo, escalas_voo, preco_ida_volta_voo)
	values('Sem informações', 'Azul', '4 bilhetes: 2 adultos', 'São Paulo (GRU)', 'Porto Alegre (POA)', '2019/12/14 06:35:00', '2019/12/24 17:50:00', '1h 55min', 'Voo direto', 719.20);

insert into Voos(modelo_voo, companhia_voo, quantidade_passagens_voo, local_origem_voo, local_destino_voo, data_hora_ida_voo, data_hora_volta_voo, duracao_voo, escalas_voo, preco_ida_volta_voo)
	values('Sem informações', 'GOL Linhas Aereas S.A', '4 bilhetes: 2 adultos', 'São Paulo (GRU)', 'Salvador (SSA)','2019/12/14 10:00:00', '2019/12/24 19:25:00', '2h 35 min', 'Voo direto', 1684.80);

insert into AluguelCarros(modelo_carro, quantidade_pessoas_carro, quantidade_portas_carro, cor_carro, tipo_cambio_carro, abastecimento_carro, beneficios_carro, preco_carro)
	values('Fiat Mobi', 5, 4, 'Vermelho', 'Manual', 'Flex', 'Ar-condicionado - Rádio', 901.00);	

insert into AluguelCarros(modelo_carro, quantidade_pessoas_carro, quantidade_portas_carro, cor_carro, tipo_cambio_carro, abastecimento_carro, beneficios_carro, preco_carro)
	values('Chevrolet Onix', 5, 4, 'Branco','Manual', 'Gasolina', 'Ar-condicionado - Rádio', 759.00);

insert into AluguelCarros(modelo_carro, quantidade_pessoas_carro, quantidade_portas_carro, cor_carro, tipo_cambio_carro, abastecimento_carro, beneficios_carro, preco_carro)
	values('Renault Logan', 5, 4, 'Cinza', 'Manual', 'Gasolina', 'Ar-condicionado - Rádio', 693.00); 