<!DOCTYPE html>
<html>
<head>
	<title>CONVERSION MENOR A 100</title>
</head>
<body>

	<?php 
	//2. construye yun coduigo en el que ingresando una cantidad, que sea menor o igual a 100 dolares realize el tipo de cambio a pesos.

	echo "Teclea la cantidad de dolares<br>";
	$dolares=10;
	if ($dolares<100) {
		$pesos=$dolares*18.66;
		echo "$dolares dolares<br>";
		echo "La cantidad de $dolares a pesos son: $pesos<br>";
	} else {
			echo "Cantidad de dolares mayor o igual a 100.<br>";

	}
	 ?>

</body>
</html>