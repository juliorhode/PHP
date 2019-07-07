<?php
	//estas rutas parten desde la principal(index)
	require_once("/modelo/ModeloProductos.php");
	
	//llamamos al constructor
	$producto = new ModeloProductos();
	//obtenemos los datos
	$matrizProducto = $producto->getProductos();
	//estas rutas parten desde la principal(index)
	require_once("/vista/VistaProductos.php");
	
	

?>