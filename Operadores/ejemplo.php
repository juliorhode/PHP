<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<form name="form1" action="" method="post">
	<p>
		<label for="num1"></label>
		<input type="text" name="num1" id="num1">
		<label for="num2"></label>
		<input type="text" name="num2" id="num2">
		<select name="operacion" id="operacion">
			<option>Suma</option>
			<option>Resta</option>
			<option>Multiplicacion</option>
			<option>Division</option>
			<option>Modulo</option>
			<option>Incremento</option>
			<option>Decremento</option>
		</select>
	</p>
	<p>
		<input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
	</p>
	</form>
	<p>&nbsp;</p>

	<?php
		include("calculadora.php");
		if(isset($_POST["button"])){//si se ha pulsado el boton
			$num1 = $_POST["num1"];
			$num2 = $_POST["num2"];
			$operacion = $_POST["operacion"];

			calcular($operacion);
		}
	?>
</body>
</html>