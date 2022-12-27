<form method="post">
	<input type="text" name="adress" id="adress">
	<input type="submit" value="Enviar" name="acao">
</form>


<?php 

if(isset($_POST['acao'])){

	$url = urlencode($_POST['adress']);

	$str = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$url.'&sensor=false
');

	echo "<pre>";
	var_dump($str);
	echo "</pre>";


}


 ?>