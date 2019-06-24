<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

	<style>
		h1{
			text-align: center;
			color: #00f;
			border-bottom: dotted #0000ff;
			width: 50%;
			margin: auto;
		}
		table{
			border: 1px solid #000000;
			padding: 20px 50px;
			margin-top: 50px;
		}
		body{
			background-color: #549BFB;
		}
		
	</style>	

</head>

<body>
	
	<h1>Registro de Articulo</h1>
	<form name="form1" method="get" action="resultadoInsertaDatos.php">
		<table border="0" align="center">
			<tr>
				<td>Codigo Articulo</td>
				<td><label for="codigo"></label><input type="text" name="codigo" id="codigo"></td>
			</tr>
			<tr>
				<td>Seccion Articulo</td>
				<td><label for="seccion"></label><input type="text" name="seccion" id="seccion"></td>
			</tr>
			<tr>
				<td>Nombre Articulo</td>
				<td><label for="nombre"></label><input type="text" name="nombre" id="nombre"></td>
			</tr>
			<tr>
				<td>Precio Articulo</td>
				<td><label for="precio"></label><input type="text" name="precio" id="precio"></td>
			</tr>
			<tr>
				<td>Fecha Articulo</td>
				<td><label for="fecha"></label><input type="text" name="fecha" id="fecha"></td>
			</tr>
			<tr>
				<td>Importado</td>
				<td><label for="importado"></label><input type="text" name="importado" id="importado"></td>
			</tr>
			<tr>
				<td>Pais Origen</td>
				<td><label for="pais"></label><input type="text" name="pais" id="pais"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="enviar" value="Enviar"</td>
			</tr>
		</table>
	</form>

</body>
</html>