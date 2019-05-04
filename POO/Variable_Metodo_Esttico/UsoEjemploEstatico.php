<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php 
	//incluimos el archivo externo php
	include("ejemploEstatico.php");
	/*
		accedemos al campo estatico de la siguiente forma:
		CompraVehiculo::$descuento = 10000;
		
		pero esto es un problema ya que no esta encapsulado y asi puede ser manipulado 
	*/
	
	$compraAntonio = new CompraVehiculo("compacto");
	//invocamos el metodo estatico 
	CompraVehiculo::descuentoGobierno();
	
	$compraAntonio->climatizador();
	$compraAntonio->tapiceriaCuero("blanco");
	echo $compraAntonio->precioFinal();

	$compraJulio = new CompraVehiculo("compacto");
	$compraJulio->climatizador();
	$compraJulio->tapiceriaCuero("rojo");
	
	echo $compraJulio->precioFinal();
	
	echo date("D d M Y h:m:s");
	echo "<br>";
	echo date("d-m-Y");
?>
</body>
</html>