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
			background-color: #FFFFCC;
			padding: 5px;
			border: #666 5px solid;
		}
	</style>
	
</head>
<?php

?>
<body>
	<h1>Usando Operadores Comparacion</h1>
	<form action="valida.php" method="post" name="datosUsuarios" id="datosUsuarios">
	
		<table width="15%" align="center">
		
			<tr>
				<td>Nombre</td>
				<td><label for="usuario"><input type="text" name="usuario" id="usuario"></label></td>
			</tr>
			<tr>
				<td>Edad</td>
				<td><label for="edad"><input type="text" name="edad" id="edad"></label></td>
			</tr>

			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
			</tr>
		</table>
		
	</form>

<?php
	/*
	// isset() comprueba si se pulso en el boton enviar del formulario
	if( isset( $_POST["enviar"]) ){
		$usuario 	= $_POST["usuario"];
		$edad 		= $_POST["edad"];
		
		if( $usuario == "Julio" && $edad > 18){
			echo("<p class='valido'>Puedes entrar</p>");
		}else{
			echo("<p class='no_valido'>No puedes entrar</p>");
		}
	}
	*/
?>
</body>
</html>