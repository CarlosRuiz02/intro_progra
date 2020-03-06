<?php  

//se crea el array para asi poder imprimir falilmente con un for.
$calif = array(
array("Nombre:".$_POST['alumno1'],"Calificacion 1:".$_POST['calificacion1'],"Calificacion 2:".$_POST['calificacion11']),
array("Nombre:".$_POST['alumno2'],"Calificacion 1:".$_POST['calificacion2'],"Calificacion 2:".$_POST['calificacion12']),
array("Nombre:".$_POST['alumno3'],"Calificacion 1:".$_POST['calificacion3'],"Calificacion 2:".$_POST['calificacion13']),
array("Nombre:".$_POST['alumno4'],"Calificacion 1:".$_POST['calificacion4'],"Calificacion 2:".$_POST['calificacion14']),
array("Nombre:".$_POST['alumno5'],"Calificacion 1:".$_POST['calificacion5'],"Calificacion 2:".$_POST['calificacion15']),
array("Nombre:".$_POST['alumno6'],"Calificacion 1:".$_POST['calificacion6'],"Calificacion 2:".$_POST['calificacion16']),
array("Nombre:".$_POST['alumno7'],"Calificacion 1:".$_POST['calificacion7'],"Calificacion 2:".$_POST['calificacion17']),
array("Nombre:".$_POST['alumno8'],"Calificacion 1:".$_POST['calificacion8'],"Calificacion 2:".$_POST['calificacion18']),
array("Nombre:".$_POST['alumno9'],"Calificacion 1:".$_POST['calificacion9'],"Calificacion 2:".$_POST['calificacion19']),
array("Nombre:".$_POST['alumno10'],"Calificacion 1:".$_POST['calificacion10'],"Calificacion 2:".$_POST['calificacion110']),

);
//se ejecuta el for para que imprima cada fila y cada columna.

for($row=0; $row<10; $row++)
{
echo "<p><b> Alumno $row </b></p>";
echo "<ul>";
for ($col=0; $col <3 ; $col++) { 
	echo "<li>".$calif[$row][$col]."</li>";
  }
  echo "</ul>";
}

//boton para  regresar.
?>	 
 <p>Volver a formulario: <a href="arraycalif.php">Volver</a>