<!DOCTYPE html>
<html>
<head>
	<title>Encuesta</title>
</head>
<body>
	<<?php
	echo "¿Esta a favor de x cosa?<br>";
	echo "1.SI<br>";
	echo "2.No<br>";
	//aqui teclea cuantos estan a favor y cuantos en contra.
	$afavor=50;
	$encontra=78;
	//una vez tecleados se suman para sacar el total.
	$Total=$afavor+$encontra;
	echo "Total entrevistadas: $Total<br>";
	//aqui abajo se hacen las divisiones para sacar el porcentaje de la entrevista.
	$totala=$afavor/$Total;
	$Totalen=$encontra/$Total;
	echo "Porcentaje a favor: $totala %<br>";
	echo "Porcentaje en contra: $Totalen %";
	//se imprime los porcentajes.

 	?>
</body>
</html>