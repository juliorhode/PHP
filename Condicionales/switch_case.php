<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>
</head>

<body>
<h1>USANDO OPERADOR TERNARIO</h1>

<form action="" method="post" name="datos_usuario" id="datos_usuario">
  <table width="15%" align="center">
    <tr>
      <td>Nombre:</td>
      <td><label for="nombre_usuario"></label>
      <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td>Password:</td>
      <td><label for="pass"></label>
      <input type="text" name="pass" id="pass"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>
<?php
	if(isset($_POST["enviando"])){
		$nombre = $_POST["nombre_usuario"];
		$pass   = $_POST["pass"]; 
		
		//A continuacion, voy a realizar la sintaxis del switch case... Son dos formas que sepuede realizar
		
		//Esta forma evalua una unica condicion que es el nombre
		switch($nombre):
			case "Julio":
				echo "Usuario autorizado. Hola Julio";
				break;
			case "Cesar":
				echo "Usuario autorizado. Hola Cesar";
				break;
			case "Adrianno":
				echo "Usuario autorizado. Hola Adrianno";
				break;
			default:
				echo "Usuario no autorizado";
		endswitch;
		
		echo "<br>";
		
		//Esta forma es para evaluar multiples condiciones como el usuario y pass
		switch(true){
			case $nombre == "Julio" && $pass == "1234":
				echo "Autorizado.";
				break;
			case $nombre == "Cesar" && $pass == "1234":
				echo "Autorizado.";
				break;
			case $nombre == "Adrianno" && $pass == "1234":
				echo "Autorizado.";
				break;
			default:
				echo "No autorizado";
		}
		/*
		if($edad < 18){
			echo "Eres menor de edad, no tienes acceso";
		}else{
			echo "Eres mayor de edad, puedes acceder";
		}*/
	}
?>
</body>
</html>