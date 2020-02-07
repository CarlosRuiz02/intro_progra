<!DOCTYPE html>
<html>
<head>
	<title>NUMERO MAYOR</title>
</head>
<body>
	<h1> Numero mayor. <h1>
<?php

//NUM1=A,NUM2=B Y NUM3=C.
	$num1=144; //A
	$num2=21;//B
	$num3=22;//C
	if ($num1>$num2 && $num1>$num3) {
		echo "A=$num1",PHP_EOL;
		if ($num2>$num3) {
			echo "B=$num2",PHP_EOL;
			echo "C=$num3",PHP_EOL;
		} else {
			echo "C=$num3",PHP_EOL;
			echo "B=$num2",PHP_EOL;
		}
	} else {
		if ($num2>$num1 && $num2>$num3) {
			echo $num2,PHP_EOL;
			if ($num1>$num3) {
				echo "A=$num1",PHP_EOL;
				echo "C=$num3",PHP_EOL;
			} else {
				echo"C=$num3",PHP_EOL;
				echo $num1,PHP_EOL;
			}
		} else {
			echo "C=$num3",PHP_EOL;
			if ($num1>$num2) {
				echo "A=$num1",PHP_EOL;
				echo "B=$num2",PHP_EOL;
			} else {
				echo "B=$num2",PHP_EOL;
				echo "A=$num1",PHP_EOL;
			}
		}
	}
?>
</body>
</html>
