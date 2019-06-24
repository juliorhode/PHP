<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>



</head>

<body>
	
<?php
	$codigo = $_GET["codigo"];
	$seccion = $_GET["seccion"];
	$nombre = $_GET["nombre"];
	$precio = $_GET["precio"];
	$fecha = $_GET["fecha"];
	
	require("datosConexion.php");
	
	//conectar a la base de datos
	//$conexion = mysqli_connect($db_host, $db_usuario, $db_pass, $db_nombre);
	$conexion = mysqli_connect($db_host, $db_usuario, $db_pass);
	
	//si no se consigue conectarse a la base de datos
	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la base de datos";
		exit();
	}
	
	//si no se consigue la base de datos
	mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
	
	//incluya los caracteres latinos
	mysqli_set_charset($conexion, "utf8");
	
	//sentencia sql para eliminar
	$sql = "delete from productos where codigo= '$codigo'";
	
	//ejecutamos la consulta y lo almacenamos en un recordset
	$resultados = mysqli_query($conexion, $sql);
	
	//
	if($resultados==false){
		echo "Error en la consulta";
	}else{
		//La funcion mysqli_affected_rows() indica si se ha visto afectada alguna fila en la BBDD
		if (mysqli_affected_rows($conexion)==0){
			echo "No hay informacion a eliminar"; 
		}else{
			echo "Se ha eliminado " . mysqli_affected_rows($conexion) . " registro";
		}
	}
	//cerramos la conexion
	mysqli_close($conexion);
?>
	

</body>
</html>