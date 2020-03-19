<!DOCTYPE html>
<html>
<head>
	<title>Maestro.com</title>
</head>
<form method="post">
	<meta charset="utf-8">
<body bgcolor="grey">
	<center><h1>Maestro</h1></center>
<h2>Ingrese sus datos</h2>
Nombre:
<input type="text" name="maestro[nombre]" required>
No. de empleado:
<input type="number" name="maestro[noempleado]"  required>
Correo:
<input type="email" name="maestro[correo]" placeholder="ejemplo@mail.com"  required>
Carrera:
<input type="text" name="maestro[carrera]" required>
Especialidad:
<input type="text" name="maestro[especialidad]"  required>
<br>
<br>
<input type="submit" name="Registrar">
</form>
<?php
include("reg_maestro.php");
  ?>

</body>
</html>
