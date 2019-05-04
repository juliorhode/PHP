<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	/*
		Paso de parametros por valor y por referencia:
		
		cuando a una funcion se le envia un parametro por valor, se coloca como una variable cualquiera "$parametro".
		En este caso la funcion no sabe nada de lo que hay fuera de ella, el valor recibido se encapsula dentro y no sabe que es eso de la variable numero
		
		cuando a una funcion se le envia un parametro por referencia, se coloca asi "&$parametro". 
		Aqui lo que se crea es una conexion o referencia con el origen, en este caso es la variable numero, por ende, aqui la funcion si sabe que hay fuera de ella.
		
		En el ejemplo por parametro, el valor 5 viaja a la funcion, luego se incrementa y devuelve el resultado (6) pero $numero sigue siendo = 5.
		
		Pero por referencia, hace todo igual salvo que en este caso $numero ya no es  = 5, ahora al retornar el valor, actualiza $numero = 6 porque esta vinculado
	*/
	
	//funcion con parametro por valor
	echo "Funcion por parametro<br>";
	echo "*******************<br>";
	
	function incrementa($valor1){
		$valor1++;
		return $valor1;
	}
	$numero = 5;
	echo "Valor inicial de la variable: $numero<br>";
	echo "Resultado de la funcion por parametro: " . incrementa($numero) . "<br>";
	echo "Valor final de la variable: $numero <br>";
	
	/****************************************/
	echo "<br>";
	echo "Funcion por referencia<br>";
	echo "*******************<br>";
	
	function incrementa1(&$valor1){
		$valor1++;
		return $valor1;
	}
	$numero1 = 5;
	echo "Valor inicial de la variable: $numero1<br>";
	echo "Resultado de la funcion por referencia: " . incrementa1($numero1) . "<br>";
	echo "Valor final de la variable: $numero1 <br>";
	
	/****************************************/
	//Otro ejemplo
	
	echo "<br>";
	echo "Funcion por parametro<br>";
	echo "*******************<br>";
	function cambiaMayuscula($param){
		$param = strtolower($param);//minuscula
		$param = ucwords($param);//primera letra en mayuscula
		return $param;
	}
	$cadena = "hOlA tOdOs";
	echo "Cadena original: " . $cadena . "<br>";
	echo "Cadena modificada: " . cambiaMayuscula($cadena) . "<br>";
	echo "Cadena final: " . $cadena;
	
	echo "<br><br>";
	echo "Funcion por referencia<br>";
	echo "*******************<br>";
	function cambiaMayuscula2(&$param){
		$param = strtolower($param);//minuscula
		$param = ucwords($param);//primera letra en mayuscula
		return $param;
	}
	$cadena2 = "hOlA tOdOs";
	echo "Cadena original: " . $cadena2 . "<br>";
	echo "Cadena modificada: " . cambiaMayuscula2($cadena2) . "<br>";
	echo "Cadena final: " . $cadena2;
?>
</body>
</html>