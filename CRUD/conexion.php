<?php

	try{
		$base = new PDO('mysql:host=localhost;
					 	dbname=pruebas',
    					'root',
    					'');
		$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$base->exec("SET CHARACTER SET UTF8");
		//echo "Conexion OK!";
	}catch (Exception $e){
		echo "Linea del error " . $e->getLine();
		die('Error: ' . $e->getMessage());
		
	}


?>
