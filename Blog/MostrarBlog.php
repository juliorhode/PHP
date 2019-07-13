<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<h2 align="center">Blog</h2>
	
<hr>
<?php
	require("datosConexion.php");
	//conectar a la base de datos
	$conexion = mysqli_connect($db_host, $db_usuario, $db_pass,$db_nombre);
	
	//Comprobar conexion
	if(!$conexion){
		echo "La conexion ha fallado " . mysqli_error();
		exit();
	}
	
	//****************************************//
	//				PAGINACION				  //
	//****************************************//
	
	$tamano_paginas = 2;
		
	//obtenemos el numero de la pagina cuando el usuario pulse en los enlaces de paginacion
	if(isset($_GET['pagina'])){
		if($_GET['pagina']==1){
			header("Location:MostrarBlog.php");
		}else{
			$pagina = $_GET['pagina'];
		}
	}else{
		$pagina = 1;//para mostrar la pagina 1
	}
	//almacenamos el registro desde el cual queremos mostrar los resultados... ejemplo: 1-1=0*5=0... si la pagina es la 3, pues 3-1=2*5=10
	$ini_pagina = ($pagina-1)*$tamano_paginas;
	
	$sql_total = "SELECT * FROM CONTENIDO";
		
	//creamos la sentencia reparada
	$resultado = mysqli_query($conexion,$sql_total);
	
	//contamos la cantidad de filas
	$total = $resultado->num_rows;

	//echo "Filas: " . $total;
	
	//calculamos cuantas paginas mostraremos... con ceil() redondeamos el valor
	$total_paginas = ceil($total/$tamano_paginas);
	

	//****************************************//
	//			  FIN PAGINACION			  //
	//****************************************//
	
	$sql = "SELECT * FROM CONTENIDO ORDER BY FECHA DESC LIMIT $ini_pagina,$tamano_paginas ";
	
	if($rsultado = mysqli_query($conexion,$sql)){
		while($registro=mysqli_fetch_assoc($rsultado)){
			echo "<h3>" . $registro['titulo'] . "</h3><br>";
			echo "<div style='width:400px'>" . $registro['comentario'] . "</div><br>";
			if($registro['imagen']!=""){
				echo "<img src='imagenes/"  . $registro['imagen'] . "' width='300px' />";
			}
			echo "<h4>Fecha de publicacion: " . $registro['fecha'] . "</h4><br>";
			echo "<hr>";
		}
	}
	
	echo "<br>";
	for($i = 1; $i <= $total_paginas; $i++){
		echo "<a href='?pagina=" . $i . "'>" .$i . "</a>  ";
	}
?>
</body>
</html>