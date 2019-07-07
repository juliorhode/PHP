<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<?php
	try{
		//pasamos los atributos para la conexion
		$base = new PDO("mysql:host=localhost;dbname=pruebas","root","");
		//propiedadeds de la conexion para captura de errores
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//creamos la instruccion sql con marcadores
		$sql = "select * from usuarios_pass where usuarios= :login and password = :password";
		//creamos consulta preparada con marcadores
		$resultado = $base->prepare($sql);
		//rescatamos los valores de la pagina
		//htmlentities --> convierte cualquier simbolo en html, por ejemplo unas comillas, guion bajo
		//addslashes --> escapar cualquier barra invertida,comilla, punto y coma y asi las evite para que no suceda inyeccion sql
		$login = htmlentities(addslashes($_POST['login']));
		$password = htmlentities(addslashes($_POST['password']));
		//bindValue --> es para marcadores
		//binParam --> cuando se usa ? como parametros
		
		$resultado->bindValue(":login",$login);
		$resultado->bindValue(":password",$password);
		
		//ejecutamos la consulta
		$resultado->execute();
		
		//indica el numero de registros que se obtiene de una consulta (devuleve 0 o 1)
		$numero_registro = $resultado->rowCount();
		if($numero_registro!=0){
			//echo "<h2>adelante</h2>";
			
			
			//iniciamos una sesion
			session_start();
			$_SESSION["usuario"] = $_POST['login'];
			
			header("location:usuariosRegistrados.php");
		}else{
			//redirigimos a la pagina de login nuevamente
			header("location:login.php");
			
		}
	}catch(Exception $e){
		die("Error: " . $e->getMessage());
	}
?>
</body>
</html>