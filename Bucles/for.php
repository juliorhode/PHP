<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	for($i = 0; $i < 10; $i++){
		echo "<p>$i) Hemos entrado en el bucle for</p>";
		if($i == 5){
			echo "<p>Bucle interrumpido</p>";
			break;
		}
	}
	echo "Hemos salido del bucle for";
	
	for($i = 10; $i >= 0; $i--){
		echo "<p>$i) Volvimos a entrar en el bucle for</p>";
	}
	echo "Hemos salido del bucle for";
	
	for($i = 0; $i <= 20; $i+=2){
		echo "<p>$i) Otra vez en el bucle for</p>";
	}
	echo "Hemos salido del bucle for <br>";
	
	echo "-----------------<br>";
	echo "- Tabla del 9 -<br>";
	echo "-----------------<br>";
	for($i = 0; $i <= 10; $i++){
		echo "9 x $i = " . 9*$i . "<br>";
	}
	echo "Hemos salido del bucle for <br>";
	
	for($i = 10; $i >= -10; $i--){
		if($i == 0){
			echo "Division por cero no es posible <br>";
			continue;//no va a ejecutar la operacion de abajo que es echo "9 / $i = " . 9/$i . "<br>";
		}
		echo "9 / $i = " . 9/$i . "<br>";
	}
?>
</body>
</html>