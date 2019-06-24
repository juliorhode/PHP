<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	$codigo 	= $_POST["codigo"];
	
	//datos para la conexion 

	try{
		$base = new PDO('mysql:host=localhost;
					 dbname=pruebas',
    				'root',
    				'');
		
		//se asignan los atributos PDO::ATTR_ERRMODE y PDO::ERRMODE_EXCEPTION para que si surje algun error, cree dichos objetos
		//Esto en pocas palabras, es lo que nos ayuda a capturar los errores
		$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$base->exec("SET CHARACTER SET utf8");
		
		//creamos la sql
		
		//Sustituimos el ? por :<nombre_cualquier>
		$sql = "delete from productos where codigo = :codigo";
		//creamos la consulta
		$resultado = $base->prepare($sql);
		//ejecutamos la consulta
		
		//Aqui colocamos el marcador que colocamos en la consulta preparada (:cod) luego colocamos el operador fecla (=>) y por ultimo colocamos la variable que guardamos lo que obtenemos del formulario.
		$resultado->execute(array(":codigo"=>$codigo));
		echo "Registro eliminado";
	}catch (Exception $e){
		//die('Error: ' . $e->getMessage());
		echo "Codigo: " . $e->getCode();
		echo "<br>";
		echo "Linea: " . $e->getLine();
		echo "<br>";
		echo "Mensaje: " . $e->getMessage();
	}finally{
		$base = null;
		$resultado->closeCursor();
	}
?>
</body>
</html>