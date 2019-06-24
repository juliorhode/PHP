<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	$valorBusqueda = $_GET["buscar"];
	//datos para la conexion 

	try{
		$base = new PDO('mysql:host=localhost;
					 dbname=pruebas',
    				'root',
    				'');
		$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$base->exec("SET CHARACTER SET utf8");
		
		//creamos la sql
		$sql = "select * from productos where codigo=?";
		//creamos la consulta
		$resultado = $base->prepare($sql);
		//ejecutamos la consulta
		$resultado->execute(array($valorBusqueda));
		
		while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){
			echo "<table><tr><td>";
		echo $registro['CODIGO'] . "</td><td>";
		echo $registro['NOMBRE_ARTICULO'] . "</td><td>";
		echo $registro['SECCION'] . "</td><td>";
		echo $registro['PRECIO'] . "</td><td>";
		echo $registro['PAIS_ORIGEN'] . "</td><td></tr></table>";
		echo "<br>";
		}
		
	}catch (Exception $e){
		die('Error: ' . $e->getMessage());
	}finally{
		$base = null;
		$resultado->closeCursor();
	}
?>
</body>
</html>