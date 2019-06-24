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
	<h1>Introduce Datos</h1>
	<form action="comprueba_login.php" method="post">
	
		<table>
			<tr>
				<td class="izq">Login</td>
				<td class="der"><input type="text" name="login"></td>
			</tr>
			<tr>
				<td class="izq">Password</td>
				<td class="der"><input type="password" name="password"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="enviar" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>