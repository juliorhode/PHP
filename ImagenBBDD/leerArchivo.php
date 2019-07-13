<?php
$id="";
$contenido="";
$nombre="";
$tipo="";
require("datosConexion.php");

//conectar a la base de datos
$conexion = mysqli_connect($db_host, $db_usuario, $db_pass, $db_nombre);
//$conexion = mysqli_connect($db_host, $db_usuario, $db_pass);

//si no se consigue conectarse a la base de datos
if(mysqli_connect_errno()){
	echo "Fallo al conectar con la base de datos";
	exit();
}

//si no se consigue la base de datos
mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");

//incluya los caracteres latinos
mysqli_set_charset($conexion, "utf8");

$sql = "SELECT * FROM ARCHIVOS WHERE ID='18'";

$resultado = mysqli_query($conexion,$sql);

while($fila = mysqli_fetch_array($resultado)){
	$id = $fila["id"];
	$contenido = $fila["contenido"];
	$nombre = $fila["nombre"];
	$tipo = $fila["tipo"];
	
}

echo "id: " . $id;
echo "<br>";
echo "nombre: " . $nombre;
echo "<br>";
echo "tipo: " . $tipo;
echo "<br>";
//decodificar la imagen que esta en base64
//para mostrar la imagen necesitamos un contenedor img... si fuera un pdf, podemos usar un iframe o un div
echo "<img src='data:image/jpeg;base64," . base64_encode($contenido) . "'>";


?>