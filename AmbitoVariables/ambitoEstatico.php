<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php
	function incrementaVariable(){
		//$contador = 0;// variable normal
		static $contador = 0;//variable estatica
		$contador ++;
		echo $contador . "<br>";
	}
	
	incrementaVariable();
	incrementaVariable();
	/*
		no muestra el incremento de la variable normal, y es debido a que el valor de sus variables locales se destruye al terminar. Para que no se destruya, se debe realizar una variable estatica  para que el valor de la variable se conserve.
	*/
?>
<body>
</body>
</html>