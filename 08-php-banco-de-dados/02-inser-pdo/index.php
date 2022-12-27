<?php 
date_default_timezone_set('America/Sao_Paulo');

// Conexão com banco de dados
 $pdo = new PDO('mysql:host=localhost;dbname=modulo08;','root','root');


	if(isset($_POST['acao'])){
		$nome = $_POST['nome'];
	 	$sobrenome = $_POST['sobrenome'];
	 	$momento_registro = date('Y-m-d H:i:s');

	 	  // Insert
	 	$sql = $pdo->prepare("INSERT INTO clientes SET nome = :nome, sobrenome = :sobrenome, data = :momento_registro");
	 	$sql->bindValue(':nome', $nome);
	 	$sql->bindValue(':sobrenome', $sobrenome);
	 	$sql->bindValue(':momento_registro', $momento_registro);
	 	$sql->execute();

	 	echo "Cliente Inserido com Sucesso";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro No banco</title>
</head>
<body>
	<form method="post">
		<input type="text" name="nome" id="nome" required>
		<input type="text" name="sobrenome" id="sobrenome" required>
		<input type="submit" value="Enviar" name="acao">
	</form>
</body>
</html>