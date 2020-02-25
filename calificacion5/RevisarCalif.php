<!DOCTYPE html>
<html>
<head>
	<title>Resultados</title>
</head>
<body bgcolor="blue">
	<h1>Resultados</h1>
	<?php
	echo "Alumno 1<br>";
	if ($_POST['cal1']>=0) {
		if ($_POST['cal1']<=100) {
			if ($_POST['cal1']>69) {
			echo $_POST['nombre1']; echo " Aprobo con una calificacion de: "; echo $_POST['cal1'];
			}else{
			echo $_POST['nombre1']; echo " reprobo con una calificacion de: "; echo $_POST['cal1']; }
		}else{echo "La calificacion es mayor a 100. REVISALA";	
		}
	}else{echo "La calificacion es menor que 0. REVISALA";
	}

echo "<br>";
echo "<br>";
echo "Alumno 2<br>";
	if ($_POST['cal2']>=0) {
		if ($_POST['cal2']<=100) {
			if ($_POST['cal2']>69) {
			echo $_POST['nombre2']; echo " Aprobo con una calificacion de: "; echo $_POST['cal2'];
			}else{
			echo $_POST['nombre1']; echo " reprobo con una calificacion de: "; echo $_POST['cal2']; }
		}else{echo "La calificacion es mayor a 100. REVISALA";	
		}
	}else{echo "La calificacion es menor que 0. REVISALA";
	}
echo "<br>";
echo "<br>";
echo "Alumno 3<br>";
	if ($_POST['cal3']>=0) {
		if ($_POST['cal3']<=100) {
			if ($_POST['cal3']>69) {
			echo $_POST['nombre3']; echo " Aprobo con una calificacion de: "; echo $_POST['cal3'];
			}else{
			echo $_POST['nombre3']; echo " reprobo con una calificacion de: "; echo $_POST['cal3']; }
		}else{echo "La calificacion es mayor a 100. REVISALA";	
		}
	}else{echo "La calificacion es menor que 0. REVISALA";
	}	
echo "<br>";
echo "<br>";	
echo "Alumno 4<br>";
	if ($_POST['cal4']>=0) {
		if ($_POST['cal4']<=100) {
			if ($_POST['cal4']>69) {
			echo $_POST['nombre4']; echo " Aprobo con una calificacion de: "; echo $_POST['cal4'];
			}else{
			echo $_POST['nombre4']; echo " reprobo con una calificacion de: "; echo $_POST['cal4']; }
		}else{echo "La calificacion es mayor a 100. REVISALA";	
		}
	}else{echo "La calificacion es menor que 0. REVISALA";
	}	
echo "<br>";	
echo "<br>";
echo "Alumno 5<br>";
	if ($_POST['cal5']>=0) {
		if ($_POST['cal5']<=100) {
			if ($_POST['cal5']>69) {
			echo $_POST['nombre5']; echo " Aprobo con una calificacion de: "; echo $_POST['cal5'];
			}else{
			echo $_POST['nombre5']; echo " reprobo con una calificacion de: "; echo $_POST['cal5']; }
		}else{echo "La calificacion es mayor a 100. REVISALA";	
		}
	}else{echo "La calificacion es menor que 0. REVISALA";
	}
 ?>
 <p>Volver a consultar: <a href="calificacion.php">VOLVER</a>


</body>
</html>