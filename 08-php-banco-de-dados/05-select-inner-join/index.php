<?php 

	// Conexão Banco de dados
	$pdo = new PDO('mysql:host=localhost;dbname=modulo08', 'root', 'root');

	/*
	$sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = ?");
	$sql->execute(array($_GET['categoria_id']));

	// Recupera dados da consultar
	$info = $sql->fetchAll();

	
	echo '<pre>';
	print_r($info);
	echo '</pre>';


	foreach($info as $key => $value){
		echo 'Titulo : '.$value['titulo'];
		echo '<br>';
		echo 'Noticia : '.$value['conteudo'];
		echo '<hr>';
	}

	for($i = 0; $i < count($info); $i++){
		echo 'Titulo'. $info[$i]['titulo'];
		echo 'Conteudo : '.$info[$i]['conteudo'];
		echo '<hr>';
	}
*/


/*
	$sql = $pdo->prepare("SELECT * FROM categorias WHERE id = ?");
	$sql->execute(array($_GET['categoria_id']));

	// Recupera dados da consultar
	$info = $sql->fetchAll();

	foreach($info as $key => $value){
		$categoria_id = $value['id'];
		echo 'Exibindo posts de : '.$value['nome'];
		echo '<br>';


		$sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = $categoria_id");
		$sql->execute();

		$info_posts = $sql->fetchAll();
		foreach($info_posts as $key => $value){
			echo 'Titulo : '.$value['titulo'];
			echo '<br>';
			echo 'Noticia : '.$value['conteudo'];
			echo '<hr>';
		}
	}
*/


	$sql = $pdo->prepare("SELECT posts.*, categorias.*, posts.id AS post_id FROM posts INNER JOIN categorias ON posts.categoria_id  = categorias.id");
	$sql->execute();

	// Recupera dados da consultar
	$info = $sql->fetchAll(PDO::FETCH_ASSOC);

	
	echo '<pre>';
	print_r($info);
	echo '</pre>';

/*
	foreach($info as $key => $value){
		echo 'Titulo : '.$value['titulo'];
		echo '<br>';
		echo 'Noticia : '.$value['conteudo'];
		echo '<hr>';
	}
*/
 ?>