<?php
require("DevuelveProductos.php");
//oobtenemos el valor del formulario
$pais = $_GET['pais'];
//creamos la instancia de DevuelveProductos
$productos = new DevuelveProductos();
//obtenemos los valores del array pasandole el parametro
$array_productos = $productos->getProductos($pais);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	//creamos el bucle para recorrer el array
	foreach($array_productos as $registros){
			echo "<table>";
				echo "<tr>";
					echo "<td>" . $registros['CODIGO'] . "</td>";
					echo "<td>" . $registros['NOMBRE_ARTICULO'] . "</td>";
					echo "<td>" . $registros['SECCION'] . "</td>";
					echo "<td>" . $registros['PRECIO'] . "</td>";
					echo "<td>" . $registros['PAIS_ORIGEN'] . "</td>";
				echo "</tr>";

			echo "</table>";
		
	}
	?>
	
</body>
	
</html>