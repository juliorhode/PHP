<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	$codigo 	= $_POST["codigo"];
	$seccion 	= $_POST["seccion"];
	$nombre 	= $_POST["nombre"];
	$precio 	= $_POST["precio"];
	$fecha 		= $_POST["fecha"];
	$importado 	= $_POST["importado"];
	$pais 		= $_POST["pais"];
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
		$sql = "insert into productos (
					CODIGO,
					SECCION,
					NOMBRE_ARTICULO,
					PRECIO,
					FECHA,
					IMPORTADO,
					PAIS_ORIGEN
					) values(
					:codigo,
					:seccion,
					:nombre,
					:precio,
					:fecha,
					:importado,
					:pais
					)";
		//creamos la consulta
		$resultado = $base->prepare($sql);
		//ejecutamos la consulta
		
		//Aqui colocamos el marcador que colocamos en la consulta preparada (:cod) luego colocamos el operador fecla (=>) y por ultimo colocamos la variable que guardamos lo que obtenemos del formulario.
		$resultado->execute(array(
							":codigo"=>$codigo,
							":seccion"=>$seccion,
							":nombre"=>$nombre,
							":precio"=>$precio, 
							":fecha"=>$fecha,
							":importado"=>$importado,
							":pais"=>$pais));
		echo "Registro insertado";
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