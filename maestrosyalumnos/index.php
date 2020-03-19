<!DOCTYPE html>
<html>
<head>
	<title>SELECCION.COM</title>
</head>
<form action="#" method="POST">
<body bgcolor="Grey">
<CENTER><h1>SELECCIONE SI ES ALUMNO O MAESTRO</h1></CENTER>
<center><select onchange="window.location.href=this.options[this.options.selectedIndex].value" name="elige" size="1">
    <option value="#">Elija su profesion</option>
    <option value="Alumno.php">Alumno</option>
    <option value="Maestro.php">Maestro</option>
</select></center>
</body>
</form>
</html>