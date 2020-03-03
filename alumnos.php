<h1>INGRESA LOS DATOS</h1>
<form action="alumnos.php" method="POST">
	Alumno:
	<input type="text" name="alumno[nombre]" required>
	<br>
	Matricula:
	<input type="text" name= "alumno[matricula]" required>
	<br>
	Edad:
	<input type="number" name="alumno[matricula]" required>
	<br>
	Carrera:
	<input type="text" name ="alumno[carrera]" required>
	<br>
	Email:
	<input type="text" name ="alumno[email]" required>
	<br>
	Telefono:
	<input type="text" name ="alumno[telefono]" required>
	<br>
	Tutor:
	<input type="text" name ="alumno[tutor]" required>
	<input type="submit" value="enviar">
</form>
<?php 
if (isset($_POST['alumno'])){
	$array=$_POST['alumno'];
	$nombre=$array['nombre'];
	$matricula=$array['matricula'];
	$carrera=$array['carrera'];
	$email=$array['email'];
	$telefono=$array['telefono'];
	$tutor=$array['tutor'];
}

if ($matricula>99) {
	if ($matricula<1001) {
		echo "Los datos del alumno son:<br>";
		echo "Nombre: $nombre <br>";
		echo "Matricula: $matricula <br>";
		echo "Carrera: $carrera <br>";
		echo "Email: $email <br>";
		echo "Telefono: $telefono <br>";
		echo "Tutor: $tutor <br>";
	}else{
		echo "La matricula esta fuera de rango. Matricula:$matricula";
	}

}else{
	echo "La matricula esta fuera de rango. Matricula:$matricula";
}


?>