<!DOCTYPE html>
<html>
<head>
	<title>Conversor de monedas.</title>
</head>
<body>
	<?php 
	echo "Que quieres hacer?<br>";
	echo "1.Convertir pesos a dolares<br>";
	echo "2.Convertir pesos a Euros<br>";
	echo "3.Convertir dolares a pesos<br>";
	echo "4.Convertir Euros a pesos<br><br>";
	//aqui se selecciona lo que se debe de hacer.
	$Respuesta=3;
	switch ($Respuesta)
	 {
		case '1':
			echo "Tecleaste la opcion 1 (Pesos a Dolares)<br>";
			echo "Teclea cuantos pesos quieres convertir a dolares.<br>";
			//se selecciona los pesos que quiera convertir aqui abajo.
			$pesos=15;
			$Totalp=$pesos / 18.79;
			echo "Los $pesos pesos son $Totalp Dolares";
			break;
		case '2':
			echo "Tecleaste la opcion 2 (Pesos a Euros)<br>";
			echo "Teclea cuantos pesos quieres convertir a Euros<br>";
			//se selecciona los pesos que quiera convertir aqui abajo.
			$pesos1=15;
			$totale=$pesos1 / 20.54;
			echo "Los $pesos1 pesos son $totale Euros";
			break;
		case '3':
			echo "Tecleaste la opcion 3 (Dolares a Pesos)<br>";
			echo "Cuantos dolares quieres convertir a pesos?<br>";
			//aqui selecciona los dolares que quiera convertir.
			$dolares=1;
			$totald=$dolares*18.76;	
			echo "los $dolares dolares son $totald pesos<br>";
			break;
		case '4':
			echo "Tecleaste la opcion 4 (Euros a Pesos)<br>";
			echo "Cuantos Euros quieres convertir a Pesos<br>";
			//Aqui selecciona los euros a convertir
			$euros=5;
			$totals=$euros*20.54;
			echo "los $euros Euros son $totals Pesos";
				break;	
		default:
		//si no se selecciona del 1 al 4 marca esto.
			echo "Opcion no valida, teclea una opcion del 1 al 4";
			break;
	}


	 ?>

</body>
</html>