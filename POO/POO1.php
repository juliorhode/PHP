<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	include("POO1_clases.php");
	
	$mazda = new Coche();//instanciamos la clase
	$mack  = new Camion();//instanciamos la clase
	
	echo "El Mazda tiene " . $mazda->ruedas . " ruedas <br>";//accedemos a la propiedad
	
	echo "El Mack tiene " . $mack->ruedas . " ruedas <br>";//accedemos a la propiedad
	
	$mazda->setColor("Rojo", "Mazda");
	echo "El color de fabrica del camion es "  . $mack->color;//accedemos al metodo
	
	/*
		
	*/
?>
</body>
</html>