<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	$num1 = rand();
	echo "El numero aleatorio es $num1 <br>";
	$num1 = rand(10,50);
	echo "El numero aleatorio es $num1 <br>";
	$num2 = pow(5,3);
	echo "El numero  es $num2 <br>";
	$num3 = 5.257926;
	echo "El numero redondeado es " . round($num3) . "<br>";
	echo "El numero redondeado es " . round($num3,2) . "<br>";//le damos presicion de 2 decimales
	
	//casting implicito
	$num4 = "5";//string
	echo "El valor es $num4 <br>";
	$num4+=2;//implicitamente lo coloca numerico
	echo "El valor es $num4 <br>";
	
	//casting exlicito
	$num5 = "5"
	$resultado = (int)$num5;//lo colocamo como entero
?>
</body>
</html>