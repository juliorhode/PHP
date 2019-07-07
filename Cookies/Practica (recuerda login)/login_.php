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
	
	$autenticado = false;
	
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
				
				$autenticado = true;
				
				if(isset($_POST['recordar'])){
					//si activo la casilla, creamos la cookie
					setcookie("nombreUsuario",$_POST['login'],time()+86400);
				}
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
	//si no se ha logueado y si no hay cookie, muestro el formulario
	if($autenticado==false){
		if(!isset($_COOKIE['nombreUsuario'])){
			include("formulario.html");
		}
	}
	
	if(isset($_COOKIE['nombreUsuario'])){
		echo "Hola " . $_COOKIE['nombreUsuario'];
	}else if($autenticado==true){
		echo "Hola " . $_POST['login'];
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
<?php
	if($autenticado==true || isset($_COOKIE['nombreUsuario'])){
		include("zonaRegistrados.html");
	}
?>
</body>
</html>