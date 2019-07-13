<?php

//Recibir los datos de la imagen

/**********************************************
name para el nombre
type para el tipo
size el tamaño
tmp_name informacion del directorio temporal
error almacena un codigo de error por si no hay exito
**********************************************/
//esto es del input
$nombreArchivo = $_FILES["archivo"]["name"];
$tipoArchivo = $_FILES["archivo"]["type"];
$tamanoArchivo = $_FILES["archivo"]["size"];

//echo $_FILES["imagen"]["size"];
//echo $tipoImagen;

//1Mb.
if($tamanoArchivo <= 1000000){
	
	//Ruta de la carpeta destino en servidor
	$carpetaDestino = $_SERVER["DOCUMENT_ROOT"] . "/intranet/upload/";

	//Movemos la imagen del directorio temporal al directorio escogido
	move_uploaded_file($_FILES["archivo"] ["tmp_name"],$carpetaDestino . $nombreArchivo);


}else{
	echo "<br>El tamaño es muy grande";
}

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

//apuntamos al archivo mediante solo lectura ("r");
$archivoObjetivo = fopen($carpetaDestino . $nombreArchivo, "r");
//leer los bytes del archivo
$contenido = fread($archivoObjetivo,$tamanoArchivo);

$contenido = addslashes($contenido);
//cerramos la lectura del archivo
fclose($archivoObjetivo);

//Actualizamos el campo con la imagen
$sql = "INSERT INTO ARCHIVOS (NOMBRE, TIPO, CONTENIDO) VALUES('$nombreArchivo','$tipoArchivo','$contenido')";
$resultado = mysqli_query($conexion,$sql);

//si afectamos una fila... si inserto
if(mysqli_affected_rows($conexion)>0){
	echo "Se ha insertado con exito";
}else{
	echo "No se inserto el registro";
}
		
		



?>