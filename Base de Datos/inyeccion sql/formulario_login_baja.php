<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<form action="baja_usuario.php" method="get">
		<label>Usuario: <input type="text" name="usuario"></label>
		<label>Contraseña: <input type="text" name="pass"></label>
		<input type="submit" name="enviar" value="Login">
	</form>
</body>
</html>

<!-- 
colocamos un valor falso en el campo usuario y en el pass, colocamos lo siguiente:
' or '1'='1
Ejemplo:

login: 123141
pass: ' or '1'='1
-->