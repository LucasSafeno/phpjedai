<?php 

	// Conexão com banco de dados
	$pdo = new PDO("mysql:host=localhost;dbname=modulo08", 'root', 'root');

	$id = 2;

	$sql = $pdo->prepare("DELETE FROM clientes WHERE id = $id");
	if($sql->execute()){
		echo "Cliente deletado";
	}

 ?>