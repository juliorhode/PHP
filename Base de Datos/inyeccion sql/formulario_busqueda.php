<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<form action="busqueda.php" method="get">
		<label>Buscar:<input type="text" name="buscar"></label>
		<input type="submit" name="enviar" value="Consultar">
	</form>
</body>
</html>

<!-- 
Inyeccion Sql
or 'z'='z'

$sql = "select * from productos where NOMBRE_ARTICULO like '%$busqueda%' or 'z'='z'";

1) en el input se introduce or '1'='1 luego de lo que se quiere buscar. Ejemplo: cenicero' or '1'='1

-->	














