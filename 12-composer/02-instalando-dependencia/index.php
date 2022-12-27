<?php 

	require('vendor/autoload.php');
	use Carbon\Carbon;

	
	printf("Now: %s", Carbon::now());
	$amanha = Carbon::now()->addDay();
	echo "<br>";
	echo date('d/m/Y',strtotime($amanha));
 ?>