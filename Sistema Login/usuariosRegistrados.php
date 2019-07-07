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
	<h1>Bienvenido: <?php echo $_SESSION['usuario']?></h1>
	
<p>Esto es información para usuarios registrados</p>
<p><a href="cierreLogin.php">Cierra sesion</a></p>
<table width="409" height="104" border="1">
  <tbody>
    <tr>
      <td colspan="2" align="center">Zona de usuarios Registrados</td>
    </tr>
    <tr>
      <td align="center"><a href="usuariosRegistrados2.php">Pagina 1</a></td>
      <td align="center"><a href="usuariosRegistrados3.php">Pagina 2</a></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
</body>
</html>