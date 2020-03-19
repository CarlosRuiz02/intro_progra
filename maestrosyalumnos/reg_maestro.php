<?php  
include("conexion.php");  
if (isset($_POST['maestro'])) {
	$array=$_POST['maestro'];
	$nombre=$array['nombre'];
	$noempleado=$array['noempleado'];
	$correo=$array['correo'];
	$carrera=$array['carrera'];
	$especialidad=$array['especialidad'];
}if (isset($_POST['Registrar'])) {
	if (strlen($nombre)>=1 && strlen($noempleado)>=1 && strlen($correo)>=1 && strlen($carrera)>=1 && strlen($especialidad)>=1 ) {
	$consulta= "INSERT INTO maestros(nombre,noempleado,correo,carrera,especialidad) VALUES ('$nombre','$noempleado','$correo','$carrera','$especialidad')";
	$resultado= mysqli_query($conex,$consulta);
	if ($resultado) {
	?>
	<h3>Datos guardados exitosamente</h3>
	
	<?php 
	}else{
		?>
		<h3>!Ups ha ocurrido un error</h3>
		<?php
	}
}

}
?>