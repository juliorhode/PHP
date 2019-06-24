<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<style>
		table{
			width: 300px;
			margin: auto;
			background-color: rgba(220,178,0,1.00);
			border: 2px solid rgba(236,2,6,1.00);
			padding: 5px;
		}
		td{
			text-align: center;
		}
	</style>
</head>

<body>
	<form action="busqueda_pdo.php" method="post">
		<table>
			<tr>
				<td>Seccion</td>
				<td><input type="text" name="seccion"></td>
			</tr>
			<tr>
				<td>Pais</td>
				<td><input type="text" name="pais"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Enviar" name="enviar"></td>
			</tr>
		</table>
	</form>
</body>
</html>