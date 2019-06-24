<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	
	require("datosConexion.php");
	
	//conectar a la base de datos
	//$conexion = mysqli_connect($db_host, $db_usuario, $db_pass, $db_nombre);
	$conexion = mysqli_connect($db_host, $db_usuario, $db_pass);
	
	//analiza si tiene caracteres extraños y los evita, al igual que los codigo ascii
	$usuario = mysqli_real_escape_string($conexion,$_GET["usuario"]);
	$pass = mysqli_real_escape_string($conexion,$_GET["pass"]);
	
	//si no se consigue conectarse a la base de datos
	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la base de datos";
		exit();
	}
	
	//si no se consigue la base de datos
	mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
	
	//incluya los caracteres latinos
	mysqli_set_charset($conexion, "utf8");
	
	//consulta a la base de datos	
	$sql = "delete from usuarios where usuario = '$usuario' and pass = '$pass' ";
	echo "$sql <br><br>";

	//ejecutamos la consulta y lo almacenamos en un recordset

	mysqli_query($conexion, $sql);
	if (mysqli_affected_rows($conexion)>0){
			echo "Baja procesada"; 
		}else{
			echo "No se ha encontrado ningun registro";
		}
		
	
	
	
	//cerramos la conexion
	mysqli_close($conexion);
	
	
	
	
?>
</body>
</html>