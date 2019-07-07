<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<?php

	try{
		$base = new PDO('mysql:host=localhost;
					 	dbname=pruebas',
    					'root',
    					'');
		$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$base->exec("SET CHARACTER SET UTF8");
		//echo "Conexion OK!";
		
		//$sql_total = "select nombre_articulo, seccion, precio, pais_origen from productos where seccion='DEPORTES'";
		
		
		
		$tamano_paginas = 10;
		
		//obtenemos el numero de la pagina cuando el usuario pulse en los enlaces de paginacion
		if(isset($_GET['pagina'])){
			if($_GET['pagina']==1){
				header("Location:index.php");
			}else{
				$pagina = $_GET['pagina'];
			}
		}else{
			$pagina = 1;//para mostrar la pagina 1
		}
		
		//almacenamos el registro desde el cual queremos mostrar los resultados... ejemplo: 1-1=0*5=0... si la pagina es la 3, pues 3-1=2*5=10
		$ini_pagina = ($pagina-1)*$tamano_paginas;
		
		
		
		
		$sql_total = "select nombre_articulo, seccion, precio, pais_origen from productos";
		
		//creamos la sentencia reparada
		$resultado = $base->prepare($sql_total);
		//ejecutamos
		$resultado->execute(array());
		
		//contamos la cantidad de filas
		$num_filas = $resultado->rowCount();
		
		//calculamos cuantas paginas mostraremos... con ceil() redondeamos el valor
		$total_paginas = ceil($num_filas/$tamano_paginas);
		
		echo "Numero de registros de la consulta: " . $num_filas . "<br>";
		echo "Mostramos " . $tamano_paginas . " registros por pagina" . "<br>";
		echo "Mostrando la pagina " . $pagina . " de " . $total_paginas . "<br><br>";
		/*
		while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){
			echo "Nombre Articulo: " . $registro['nombre_articulo'] . " Seccion: " . $registro['seccion'] . " Precio : " . $registro['precio'] ." Pais: " . $registro['pais_origen'] . "<br>";
		}
		*/
		//cerramos el cursor
		$resultado->closeCursor();
		
		//la palabra reservada limit recibe dos parametros, el primero es desde donde va a mostrar los registros y el segundo es de cuanto en cuanto va a mostrar... en este caso es de 5 en 5
		//$sql_total = "select nombre_articulo, seccion, precio, pais_origen from productos limit 0,5";
		
		$sql_limite = "select nombre_articulo, seccion, precio, pais_origen from productos limit $ini_pagina,$tamano_paginas";
		
		$resultado = $base->prepare($sql_limite);
		//ejecutamos
		$resultado->execute(array());
		
		while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){
			echo "Nombre Articulo: " . $registro['nombre_articulo'] . " Seccion: " . $registro['seccion'] . " Precio : " . $registro['precio'] ." Pais: " . $registro['pais_origen'] . "<br>";
		}
		
	}catch (Exception $e){
		echo "Linea del error " . $e->getLine();
		die('Error: ' . $e->getMessage());
		
	}

	//----------------PAGINACION--------------------//
	echo "<br>";
	for($i = 1; $i <= $total_paginas; $i++){
		echo "<a href='?pagina=" . $i . "'>" .$i . "</a>  ";
	}

	
?>
	

</body>
</html>