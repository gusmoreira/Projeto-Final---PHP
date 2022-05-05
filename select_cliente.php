<?php


include_once "conexao.php";
header("Content-type: text/html; charset=utf-8");

if (!$conn) {
	die("Conexão falhou: " . mysqli_connect_error());
}
/*create table Clientes(
CPF_cliente varchar(50) primary key  not null,
nome_cliente varchar(120)  not null,
email_cliente varchar(120) unique not null,
endereco_cliente varchar(180) not null,
cep_cliente varchar(120) not null,
telefone_cliente varchar(30) not null,
fk_id_cartao int);*/
else{
	$cpf = $_POST['cpf'];

	$cpfconvertido = intval($cpf);

	$sql = "SELECT nome_cliente, email_cliente, endereco_cliente, cep_cliente, telefone_cliente FROM tb_gustavo WHERE CPF_cliente=".$cpfconvertido;

	$rs = mysqli_query($conn, $sql);

	echo "<fieldset><legend>Dados do cliente</legend><form method='post'>";


while ($dados = mysqli_fetch_array($rs)) {
	echo "<tr>
			<td width='69' >CPF: </td>
			<td width='546' ></b><input name='cpf' type='text' id='cpf' size='20' maxlenght='60' readonly = 'readonly' disable = 'disabled' value = '".$cpf."'/>
			</td>
			</tr>
			<br/>";
			echo "<tr>
					<td width='69'>Nome: </td>
					<td width'546'><input name='name' type='text' id='name' size='45' maxlenght='60' readonly = 'readonly' value='".$dados['nome_cliente']."'/>
					<span class ='style1'</span>
					</td>
					</tr>
					<br/>";

			echo "<tr>
					<td width='69'>E-mail: </td>
					<td width'546'><input name='email' type='text' id='email' size='45' maxlenght='60' readonly = 'readonly' value='".$dados['email_cliente']."'/>
					<span class ='style1'</span>
					</td>
					</tr>
					<br/>";

			echo "<tr>
			<td width='69'>Endereço: </td>
			<td width'546'><input name='endereco' type='text' id='endereco' size='45' maxlenght='60' readonly = 'readonly' value='".$dados['endereco_cliente']."'/>
			<span class ='style1'</span>
			</td>
			</tr>
			<br/>";

			echo "<tr>
			<td width='69'>CEP: </td>
			<td width'546'><input name='cep' type='text' id='cep' size='45' maxlenght='60' readonly = 'readonly' value='".$dados['cep_cliente']."'/>
			<span class ='style1'</span>
			</td>
			</tr>
			<br/>";

			echo "<tr>
			<td width='69'>Telefone: </td>
			<td width'546'><input name='telefone' type='text' id='telefone' size='45' maxlenght='60' readonly = 'readonly' value='".$dados['telefone_cliente']."'/>
			<span class ='style1'</span>
			</td>
			</tr>
			<br/>";
	}

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
}
?>