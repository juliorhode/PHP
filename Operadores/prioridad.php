<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	/*
		&& --> Y logico
		AND --> Y logico
		|| --> O logico
		OR --> O logico
		XOR --> O exclusivo
		! --> negacion (NOT)
	*/
	$var1 = true;
	$var2 = false;
	$resultado = $var1 && $var2;//almacena en resultado la operacion entre verdadero por falso = falso
	
	if($resultado == true){
		echo "Verdadero";
	}else{
		echo "Falso";
	}
	echo "<br>";
	$resultado1 = $var1 and $var2;//almacena en resultado la operacion entre verdadero por falso = falso
	
	if($resultado == true){
		echo "Verdadero";
	}else{
		echo "Falso";
	}
?>
</body>
</html>