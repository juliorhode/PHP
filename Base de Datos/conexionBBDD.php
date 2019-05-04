<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>
	table{
		width: 60%;
		border: 1px dashed red;
		margin: auto;
	}	
	table td{
		border: .5px solid rgba(0,0,0,1.00);
	}
</style>
</head>

<body>
<?php
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
	$sql = "select * from productos where PAIS_ORIGEN = 'ESPA?A' ";
	
	//ejecutamos la consulta y lo almacenamos en un recordset
	$resultados = mysqli_query($conexion, $sql);
	
	//ejecutamos mientras haya registros. aqui mira fila a fila y lo almacena en un array ($fila)
	echo "<table>";
	while($fila = mysqli_fetch_row($resultados)){
		echo "<tr>";
		//mostramos la informacion
		for($i = 0; $i < count($fila); $i++){
			echo "<td>";
			echo $fila[$i] . "  ";
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	//cerramos la conexion
	mysqli_close($conexion);
	
	
	
	
?>
</body>
</html>