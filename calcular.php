<!DOCTYPE html>
<html>
<head>
	<title>Resultados</title>
</head>
<body>
	
	<h1>Resultados:</h1>

<?php 
echo "tabla:",PHP_EOL,PHP_EOL;
echo "multiplicador:",PHP_EOL,PHP_EOL;
echo "Resultado";
echo "<br>";
echo "<br>";
echo $_POST['tabla'],PHP_EOL;
echo " ";
echo " X ";
echo " ";
echo $_POST['multiplicador'],PHP_EOL;
echo " = ";
echo $_POST['tabla']*$_POST['multiplicador'],PHP_EOL;
?>

</body>
</html>