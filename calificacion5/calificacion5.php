<!DOCTYPE html>
<html>
<head>
	<title>Calificaciones</title>
</head>

<form action="RevisarCalif.php" method="post"/>

<body bgcolor="blue">
	<center><h1>CALIFICACIONES</h1></center>
<CENTER><h3>Ingrese las calificaciones. "0-100"</h3>
<p>Nombre 1:
<input type="text" size="25" name="nombre1"></p>	
<p>Calificacion:
<input type="number" name="cal1" min="0" max="100"></p>
<br>
<p>Nombre 2:
<input type="text" size="25" name="nombre2"></p>	
<p>Calificacion:
<input type="number" name="cal2" min="0" max="100"></p>
<br>
<p>Nombre 3:
<input type="text" size="25" name="nombre3"></p>	
<p>Calificacion:
<input type="number" name="cal3" min="0"  max="100"></p>
<br>
<p>Nombre 4:
<input type="text" size="25" name="nombre4"></p>	
<p>Calificacion:
<input type="number" name="cal4" min="0" max="100"></p>
<br>
<p>Nombre 5:
<input type="text" size="25" name="nombre5"></p>	
<p>Calificacion:
<input type="number" name="cal5" min="0" max="100"></p>
<br>


<input type="submit" name="Consultar">
<input type="reset" value="Borrar">
</form>
</CENTER>

</body>
</html>