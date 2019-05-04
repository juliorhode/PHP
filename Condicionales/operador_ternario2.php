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
		$nombre = strtoupper($_POST["nombre_usuario"]);//coloco todo en mayusculas
		$pass   = strtoupper($_POST["pass"]);//coloco todo en mayusculas
		
		$resultado  = $nombre == "JULIO"  && $pass == "1234" ? "Puedes acceder" : "No puedes acceder";
		
		echo "El resultado de la condicion es: $resultado";
	}
?>
</body>
</html>