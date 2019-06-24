<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	//obtenemos los valores
	$codigo 	= $_GET["codigo"];
	$seccion 	= $_GET["seccion"];
	$nombre 	= $_GET["nombre"];
	$precio 	= $_GET["precio"];
	$fecha 		= $_GET["fecha"];
	$importado 	= $_GET["importado"];
	$pais 		= $_GET["pais"];
	
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
	$sql = "insert into productos (codigo,seccion,nombre_articulo,precio,fecha,importado,pais_origen) values(?,?,?,?,?,?,?)";
	
	//preparamos la consulta
	$resultado = mysqli_prepare($conexion,$sql );
	
	//con esto unimos la sentencia sql con el tipo de dato que corresponde el campo de texto y parametro de busqueda. "i" es de tipo entero, "d" es de tipo double, "s" es de tipo string, "b" es un blob y se envía en paquetes.
	
	//NOTA: las variable se deben colocar en el mismo orden que la sentencia sql
	$ok = mysqli_stmt_bind_param($resultado,"sssdsss",$codigo,$seccion ,$nombre,$precio,$fecha,$importado,$pais );
	
	
	//ejecutamos la instruccion
	$ok = mysqli_stmt_execute($resultado);
	
	//aqui verificamos si todo salio bien
	if($ok==false){
		echo "Error al ejecutar la consulta";
	}else{
		
		echo "Agregado el Articulo Nuevo <br><br>";
		
		mysqli_stmt_close($resultado);
	}
?>
</body>
</html>