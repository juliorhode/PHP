<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<?php
	//verificamos si la cookie estaba creado o existe
	if(isset($_COOKIE["prueba"])){
		echo $_COOKIE["prueba"];
	}else{
		echo "No se ha creado la cookie";
	}

?>
</body>
</html>