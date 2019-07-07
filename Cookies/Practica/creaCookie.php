<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	//rescatamos de la barra de direccion, es el idioma seleccionado
	setcookie("idiomaSeleccionado",$_GET['idioma'],time()+86400);
	header("Location:verCookie.php");
?>	
</body>
</html>