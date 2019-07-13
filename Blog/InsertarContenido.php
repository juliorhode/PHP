<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php
	
	//***************************************//
	// ESTA ES LA FROMA QUE LO MANEJA DRUPAL //
	//***************************************//
	
	require("datosConexion.php");
	//conectar a la base de datos
	$conexion = mysqli_connect($db_host, $db_usuario, $db_pass,$db_nombre);
	
	//Comprobar conexion
	if(!$conexion){
		echo "La conexion ha fallado " . mysqli_error();
		exit();
	}
	
	//Errores si suceden al subir la imagen
	if($_FILES['imagen']['error']){
		switch($_FILES['imagen']['error']){
			//excede la directiva upload_max_filesize de php.ini	
			case 1:
				echo "El tamaño excede lo permitido";
				break;
			//excede la directiva MAX_FILE_SIZE especificada en el formulario
			case 2:
				echo "El tamaño del archivo excede 2MB";
				break;
			//El fichero fue solo parcialmente subido
			case 3:
				echo "Archivo corrupto... Se interrumpio la subida del archivo";
				break;
			//no se subio el archivo
			case 4:
				echo "No se ha enviado ningun archivo";
				break;
		}
	}else{
		echo "Entrada subida correctamente<br>";
		//si todo esta bien
		if((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error'] == UPLOAD_ERR_OK))){
			
			$destinoRuta = "imagenes/";
			
			//movemos el archivo desde el directorio temporal a imagenes
			move_uploaded_file($_FILES['imagen']['tmp_name'],$destinoRuta . $_FILES['imagen']['name']);
			
			echo "El archivo " . $_FILES['imagen']['name'] . " se ha copiado en el directorio imagenes";
		}else{
			echo "No se ha podido copiar al directorio imagenes";
		}
	}
	
	$titulo = $_POST['titulo'];
	$comentario = $_POST['comentarios'];
	//// 2001-03-10 17:16:18 (el formato DATETIME de MySQL)
	$fecha = date("Y-m-d H:i:s");
	$imagen = $_FILES['imagen']['name'];
	//sentencia sql
	$sql = "INSERT INTO CONTENIDO (TITULO,FECHA,COMENTARIO,IMAGEN) VALUES('" . $titulo . "','" . $fecha . "','" . $comentario . "','" . $imagen . "')";
	
	//ejecutar la sentencia sql
	$resultado = mysqli_query($conexion,$sql);
	
	//cerramos la conexion
	mysqli_close($conexion);
	
	echo "<br>Se ha agregado con exito<br><br>";
	
	echo "<a href='Formulario.php'>Formulario del blog</a><br>";
	
	echo "<a href='MostrarBlog.php'>Página de visualización del blog</a><br>";




?>	
</body>
</html>

