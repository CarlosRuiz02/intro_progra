<?php  
include("conexion.php");  
if (isset($_POST['alumno'])) {
	$array=$_POST['alumno'];
	$nombre=$array['nombre'];
	$matricula=$array['matricula'];
	$carrera=$array['carrera'];
	$correo=$array['correo'];
	$fecha=$array['fecha'];
}if (isset($_POST['Guardar'])) {
	if (strlen($nombre)>=1  && strlen($matricula)>=1 && strlen($carrera)>=1 && strlen($correo)>=1 && strlen($fecha)>=1) {
	$consulta= "INSERT INTO alumnos(nombre,matricula,carrera,correo,fecha) VALUES ('$nombre','$matricula','$carrera','$correo','$fecha')";
	$resultado= mysqli_query($conex,$consulta);
	if ($resultado) {
	?>
	<h3>Datos guardados correctamente</h3>
	<?php 
	}else{
		?>
		<h3>Ha ocurrido un error</h3>
		<?php
	}
}

}
?>