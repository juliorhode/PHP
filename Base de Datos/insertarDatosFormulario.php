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
	
	//sentencia sql para insertar
	$sql = "INSERT INTO productos (CODIGO,SECCION,NOMBRE_ARTICULO,PRECIO,FECHA)values('$codigo','$seccion','$nombre','$precio','$fecha')";
	
	//ejecutamos la consulta y lo almacenamos en un recordset
	$resultados = mysqli_query($conexion, $sql);
	
	//
	if($resultados==false){
		echo "Error en la consulta";
	}else{
		echo "Se ha insertado la informacion con exito <br><br>";
		echo "<table><tr><td>$codigo</td></tr>";
		echo "<tr><td>$seccion</td></tr>";
		echo "<tr><td>$nombre</td></tr>";
		echo "<tr><td>$precio</td></tr>";
		echo "<tr><td>$fecha</td></tr></table>";
	}
	//cerramos la conexion
	mysqli_close($conexion);
?>
	

</body>
</html>