<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php
	
	$nombre = "Julio";
	
	
	function dameNombre(){
		//esta variable es solo de la funcion y es diferente a la que se encuentra afuera
		//$nombre = "Cesar";
		 /*Para poder acceder a la variable externa, debemos realizar la declaracion de global*/
		global $nombre;
		$nombre = "El nombre es " . $nombre;
	}
	/*solo muestra el valor que esta en la variable externa para que no fuese sobreescrita ya que php lo hace asi.
	*/	
	
	dameNombre();
	
	echo $nombre;
	
?>
<body>
</body>
</html>