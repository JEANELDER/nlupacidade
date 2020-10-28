
<?php
	include_once 'conexao.php';

	$sql=$conectar->prepare("INSERT INTO prestadorservico(nome,email,telefone,whatsapp,CPFCNPJ,website,descricao,cep,endereco,cidade,bairro,estado,nro,categoria) VALUES (:NOME,:EMAIL,:TELEFONE,:WHATSAPP,:CPFCNPJ,:WEBSITE,:DESCRICAO,:CEP,:ENDERECO,:CIDADE,:BAIRRO,:ESTADO,:NRO,:CATEGORIA)");
		
		$nome=$_POST['nome'];
		$email=$_POST['email'];
		$telefone=$_POST['telefone'];
		$whatsapp=$_POST['whatsapp'];
		$cpfcnpj=$_POST['cpfcnpj'];
		$website=$_POST['website'];
		$descricao=$_POST['descricao'];
		$cep=$_POST['cep'];	
		$cidade=$_POST['cidade'];
		$endereco=$_POST['endereco'];		
		$bairro=$_POST['bairro'];
		$estado=$_POST['estado'];
		$nro=$_POST['nro'];
		$categoria=$_POST['categoria'];

		$sql->bindParam(":NOME", $nome);
		$sql->bindParam("EMAIL", $email);
		$sql->bindParam(":TELEFONE", $telefone);
		$sql->bindParam(":WHATSAPP", $whatsapp);
		$sql->bindParam(":CPFCNPJ", $cpfcnpj);
		$sql->bindParam(":WEBSITE", $website);
		$sql->bindParam(":DESCRICAO", $descricao);
		$sql->bindParam(":CEP", $cep);
		$sql->bindParam(":ENDERECO", $endereco);
		$sql->bindParam(":CIDADE", $cidade);
		$sql->bindParam(":BAIRRO", $bairro);
		$sql->bindParam(":ESTADO", $estado);
		$sql->bindParam(":NRO", $nro);
		$sql->bindParam(":CATEGORIA", $categoria);

		$sql->execute();

		echo "Inserido cadastro"		
?>