<!DOCTYPE html>
<html>
<head>
	<title>Alumno</title>
</head>
<meta charset="utf-8">
<body bgcolor="grey">
	<form method="post">
		<center><h1>Alumno</h1></center>
<h1>Ingrese los datos</h1>


Nombre:
<input type="text" name="alumno[nombre]"required>
Matricula:
<input type="number" name="alumno[matricula]"required>
Carrera:
<input type="text" name="alumno[carrera]"required>

Correo:
<input type="email" name="alumno[correo]" placeholder="ejemplo@mail.com" required >
Fecha de nacimiento:
<input type="text" name="alumno[fecha]"required>
<br>
<br>
<input type="submit" name="Guardar"><input type="reset" value="Borrar">
</form>
<?php
include("reg_alumno.php");
  ?>
</body>
</html>