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
$nombreImagen = $_FILES["imagen"]["name"];
$tipoImagen = $_FILES["imagen"]["type"];
$tamanoImagen = $_FILES["imagen"]["size"];

//echo $_FILES["imagen"]["size"];
echo $tipoImagen;

//1Mb.
if($tamanoImagen <= 1000000){
	if($tipoImagen=="image/jpeg" || $tipoImagen=="image/png"){
		
		//Ruta de la carpeta destino en servidor
		$carpetaDestino = $_SERVER["DOCUMENT_ROOT"] . "/intranet/upload/";

		//Movemos la imagen del directorio temporal al directorio escogido
		move_uploaded_file($_FILES["imagen"] ["tmp_name"],$carpetaDestino . $nombreImagen);
		
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
		
		//Capturamos ruta de la imagen ya en la carpeta del servidor
		$imagen = $carpetaDestino . $nombreImagen;
		
		
  
  		//Evita caracteres especiales
		$foto = addslashes(file_get_contents($imagen));

		//Actualizamos el campo con la imagen
		$sql = "UPDATE PRODUCTOS SET FOTO = '$foto'  WHERE CODIGO='AR01' ";
		$resultado = mysqli_query($conexion,$sql);
		
		
		
	}else{
		echo "<br>Solo se puede subir imagenes de tipo jpeg";
	}
}else{
	echo "No permitido";
}


?>