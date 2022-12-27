<?php 

	$pdo = new PDO('mysql:host=localhost;dbname=modulo08', 'root', 'root');


	$id = 3;

	$sql = $pdo->prepare("UPDATE clientes SET nome = 'Thauanna' WHERE id = $id");
	if($sql->execute()){
		echo 'Cliente atualizado com sucesso';
	}



 ?>