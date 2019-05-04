<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<!-- 
Con las funciones nos permite automatizr tareas y eleminamos codigo repetitivo.

Existen funciones predefinidas por el lenguaje PHP y las funciones proprias.

Las funciones de PHP las podemos visualizar en https://php.net/manual/es/indexes.functions.php
-->
<?php
	//funcion predefinida
	$palabra = "JUAN";
	echo "<p>Mostramos el resultado en minusculas: " . (strtolower($palabra)) . "</p>";
	
	//funcion propia
	function suma($num1,$num2){
		$resultado = $num1 + $num2;
		return $resultado;//devolvemos el valor
	}
	
	echo(suma(5,2));
	//parametro o argumento por defecto "$conversion = true"
	function fraseMayuscula($frase,$conversion = true){
		$frase = strtolower($frase);//pasamos a minusculas
		if($conversion == true){
			//esto coloca la primera letra de cada palabra en mayuscula
			$resultado = ucwords($frase);
		}else{
			//esto coloca todo en mayuscula
			$resultado = strtoupper($frase);
		}
		return $resultado;
	}
	echo "<p>" . (fraseMayuscula("esto es una prueba")) . "</p>";//aqui solo le estamos pasando un solo argumento cuando recibe 2
	
	echo "<p>" . (fraseMayuscula("esto es una prueba",false)) . "</p>";//aqui le pasamos los dos argumentos
	/*
		el valor que le estamos pasando, viaja a la funcion y se almacena en $frase, como no le pasamos el segundo argumento, pues la funcion toma el valor por defecto que es $conversion = true. En caso contrario, que si se lo pasemos, pues actualiza el valor.
	*/
?>
</body>
</html>