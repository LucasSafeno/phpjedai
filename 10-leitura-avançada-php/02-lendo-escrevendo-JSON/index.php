<?php 

	//$json = '{"a":"Lucas","b":{"0":"Thauanna", "1":"Daniel"},"c":3,"d":4,"e":5}';

	// Encode Json
	//var_dump(json_encode($json));
	

	/*
		Decodifica JSOM
	$obj = json_decode($json);
	$arr = json_decode($json, true);


	echo $arr['b'][0]; */

	/* transformar array em json
	$arr = array('nome'=>'Lucas', 'cidade'=>'Recife');
	$json = json_encode($arr);

	echo $json;
	*/

 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>PHP Jedai</title>
 	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 	<script type="text/javascript">
 		$(function(){
 			$.ajax({
 				url:'request.php',
 				dataType:'json'
 			}).done(function(data){
 				console.log(data);
 			})
 		})
 	</script>
 </head>
 <body>
 	
 </body>
 </html>