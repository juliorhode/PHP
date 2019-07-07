<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	$usuario= $_POST["usu"];
	$contrasenia= $_POST["contra"];
	//Con esto encriptamos el password y el segundo parametro es el añadido que le hace al cifrado de forma automatica
	//$passCifrado = password_hash($contrasenia,PASSWORD_DEFAULT);
	
	//con el argumento cost, lo que hacemos es subir la fuerza del cifrado
	$passCifrado = password_hash($contrasenia,PASSWORD_DEFAULT,array("cost"=>12));
				
	try{
		//pasamos los atributos para la conexion
		$base = new PDO("mysql:host=localhost;dbname=pruebas","root","");
		
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$base->exec("SET CHARACTER SET utf8");		

		
		$sql="INSERT INTO USUARIOS_PASS (USUARIOS, PASSWORD) VALUES (:usu, :contra)";
		
		$resultado=$base->prepare($sql);		
		
		
		$resultado->execute(array(":usu"=>$usuario, ":contra"=>$passCifrado));		
		
		
		echo "Registro insertado";
		
		$resultado->closeCursor();

	}catch(Exception $e){			
		
		
		echo "Línea del error: " . $e->getLine();
		
	}finally{
		
		$base=null;
		
		
	}

?>
</body>
</html>