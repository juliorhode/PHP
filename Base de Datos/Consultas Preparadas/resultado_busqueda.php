<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	$pais = $_GET["buscar"];
	
	require("datosConexion.php");
	//conectar a la base de datos
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
	
	//creamos la sentencia sql
	$sql = "select codigo, nombre_articulo, precio, pais_origen from productos where pais_origen=?";
	
	//preparamos la consulta
	$resultado = mysqli_prepare($conexion,$sql );
	
	//con esto unimos la sentencia sql con el tipo de dato que corresponde el campo de texto y parametro de busqueda. "s" significa que es string
	$ok = mysqli_stmt_bind_param($resultado,"s",$pais);
	
	//ejecutamos la instruccion
	$ok = mysqli_stmt_execute($resultado);
	
	//aqui verificamos si todo salio bien
	if($ok==false){
		echo "Error al ejecutar la consulta";
	}else{
		//asociamos los valores del resultado a las variables que queramos
		$ok = mysqli_stmt_bind_result($resultado,$codigo,$nombre,$precio,$pais);
		echo "Articulos Encontrados <br><br>";
		//recorremos los valores obtenidos
		while( mysqli_stmt_fetch($resultado)){
			echo $codigo . " " . $nombre . " " .  $precio . " " .  $pais .  "<br>";
			
		}
		mysqli_stmt_close($resultado);
	}
?>
</body>
</html>