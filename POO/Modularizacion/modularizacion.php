<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	
	include("modularizacion_clases.php");
	
	$mazda = new Coche();//instanciamos la clase
	$mack  = new Camion();//instanciamos la clase
	
	echo "El Mazda tiene " . $mazda->getRuedas() . " ruedas.<br>";
	
	echo "El Mack tiene " . $mack->getRuedas() . "<br>";
	
	echo "El motor del Mazda es de " . $mazda->getMotor() . "<br>";
	
	echo "El motor del Mack es de " . $mack->getMotor() . "<br>";
	
	
	
?>
</body>
</html>