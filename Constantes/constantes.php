<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	/*
		1) deben ir en mausculas por convenio
		2) no levan el simbolo $
		3) se debe usar la funcion define() para definirlas
		4) el ambito de las constantes es global
		5) son valores escalares, o sea, que no se usan array
	*/
	
	//nombre_constante, valor, tru or false para indicar si es sensitivo a mayusculas o minusculas
	define("AUTOR","Julio");
	
	//para usarla
	echo "El autor es " . AUTOR;
	//esto no se puede hacer con las constante
	//echo "El autor es  AUTOR";
	echo "<br>";
	
	//constantes predefinidas
	echo "La linea de esta instruccion es " . __LINE__ . "<br>";
	echo "Estamos trabjando con este fichero " . __FILE__;
?>
</body>
</html>