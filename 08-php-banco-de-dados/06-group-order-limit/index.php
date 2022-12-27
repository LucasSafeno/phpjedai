<?php 
	// Conexão com banco de dados
	$pdo = new PDO('mysql:host=localhost;dbname=novobd', 'root', 'root');


	$sql = $pdo->prepare("SELECT * FROM clientes ORDER BY  nome  LIMIT 4"); // GROUP BY cargo
	$sql->execute();
	$clientes = $sql->fetchAll();

	foreach ($clientes as $key => $value) {
		echo $value['nome'];
		echo '<hr>';

	}

 ?>