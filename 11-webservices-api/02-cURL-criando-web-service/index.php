<!--
<form method="post">
	<input type="text" name="adress" id="adress">
	<input type="submit" value="Enviar" name="acao">
</form>
!-->

<?php 
	$curl = curl_init();

	curl_setopt($curl, CURLOPT_URL, "http://localhost/phpjedai/11-webservices-api/02-cURL-criando-web-service/request.php");
	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(array('request'=>'name_return')));

	// Retorna resposta do servidor
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	$server_output = curl_exec($curl);

	curl_close($curl);


	$resultado = json_decode($server_output);

	echo $resultado->resultado

 ?>