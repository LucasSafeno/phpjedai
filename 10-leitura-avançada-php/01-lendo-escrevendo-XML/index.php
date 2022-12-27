<?php 

	// Ler arquivo XML

	$xml = simplexml_load_file('arquivo.xml');

	// Acessar informações (formatado objeto)
	echo $xml->informacoes->item->nome;
	echo "<br>";
	echo $xml->informacoes2->item->nome; 

	escreverXML(array('Lucas'=>'nome', '28'=>'idade'), 'arquivo.xml');

	$content = simplexml_load_file('arquivo.xml');

	echo $content->nome;

	function escreverXML($arr,$nomearquivo){
		// Escrever XML
		$arr =['Lucas'=> 'nome', '28' => 'idade'];
		$xml = new SimpleXMLElement('<root/>');
		array_walk_recursive($arr,array($xml, 'addChild'));
		file_put_contents('arquivo.xml', $xml->asXML());
	}
		

 ?>