<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php
	$usuario = $_GET["usuario"];
	$pass = $_GET["pass"];
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
	
	//consulta a la base de datos
	//$sql = "select * from productos where NOMBRE_ARTICULO = '$busqueda' ";
	//$sql = "select * from productos where NOMBRE_ARTICULO like '%$busqueda%' ";
	
	$sql = "select * from usuarios where usuario = '$usuario' and pass = '$pass' ";
	echo "$sql <br><br>";

	//ejecutamos la consulta y lo almacenamos en un recordset
	$resultados = mysqli_query($conexion, $sql);
	
	//ejecutamos mientras haya registros. aqui mira fila a fila y lo almacena en un array ($fila)
	
	while($fila = mysqli_fetch_array($resultados,MYSQL_ASSOC)){
		//con mysqli_fetch_array($resultados,MYSQL_ASSOC) trabajamos con arrays asociativos. Con esto logramos ir directamente al nombre de los campos que queremos mostrar. Con MYSQL_ASSOC es aociativo al nombre del campo, MYSQL_NUM es por indice como el mysqli_fetch_row(), y el MYSQL_BOTH es la combinacion de ambos, para asi trabajar por indice o por asociacion.
		echo "Bienvenido $usuario <br> Estos son tus datos:<br>";
		echo "<table><tr><td>";
		echo $fila['usuario'] . "</td><td>";
		echo $fila['pass'] . "</td><td>";
		echo $fila['telefono'] . "</td><td>";
		echo $fila['direccion'] . "</td><td></tr></table>";
		echo "<br>";
		}
	
	
	//cerramos la conexion
	mysqli_close($conexion);
	
	
	
	
?>
<body>
</body>
</html>