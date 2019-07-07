<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<style>
		h1{
			text-align: center;
		}
		table{
			width: 25%;
			background-color: rgba(1,40,110,1.00);
			border: 2px dotted rgba(255,255,255,1.00);
			margin: auto;
			color: white;
		}
		.izq{
			text-align: 
		}
		.der{
			text-align: left;
		}
		td{
			text-align: center;
			padding: 10px;
		}
	</style>
</head>

<body>

<?php
	if(isset($_POST['enviar'])){
		
	
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
				//guardo el usuario en la session
				$_SESSION["usuario"] = $_POST['login'];

				//header("location:usuariosRegistrados.php");
			}else{
				//redirigimos a la pagina de login nuevamente
				//header("location:login.php");
				
				echo "Usuario o contraseña incorrectos";

			}
		}catch(Exception $e){
			die("Error: " . $e->getMessage());
		}
	}
?>

<?php
	if(!isset($_SESSION['usuario'])){
		include("formulario.html");
	}else{
		echo "Usuario: " . $_SESSION['usuario'];
	}
	 
?>
	<h1> Contenido de la web</h1>
	
<table width="46%" border="1" align="center">
      <tbody>
        <tr>
          <td><img src="1.jpg" width="180" height="130" alt=""/></td>
          <td><img src="2.jpg" width="180" height="130" alt=""/></td>
        </tr>
        <tr>
          <td><img src="3.jpg" width="180" height="130" alt=""/></td>
          <td><img src="4.jpg" width="180" height="130" alt=""/></td>
        </tr>
  </tbody>
</table>
<p>&nbsp;</p>
</body>
</html>