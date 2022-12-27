<?php 

	/* verifica se o arquivo existe
	if(file_exists('file.txt')){
		echo 'Arquivo existe';
	} */

	// Criar Arquivo Novo
		$content = 'Meu novo conteúdo\r\n Teste outra linha\r\n outra linha';
		file_put_contents('file.txt', $content);
	

	// Ler arquivo
	$content = file_get_contents('file.txt');

	echo nl2br($content);


 ?>