<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	//reanudamos la session y asi leindicamos a session_destroy() cual es la que debe destruir
	session_start();
	//destruimos la session
	session_destroy();
	//redirigimos a la pagina de inicio
	header("location:login.php");
?>
</body>
</html>