<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	

</head>
<?php

	session_start();
	//si no hay almacenado nada en la sesion, redirigimos a la pagina de login
	if(!isset($_SESSION['usuario'])){
		header("location:login.php");
	}
	
?>
<body>
	<h1>Usuario: <?php echo $_SESSION['usuario']?></h1>
	<p><a href="cierreLogin.php">Cierra sesion</a></p>
	
	<p>Esto es información para usuarios registrados</p>
<p>&nbsp;</p>
<p><a href="usuariosRegistrados.php">Volver</a></p>
</body>
</html>