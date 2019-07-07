<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<table width="35%" border="0" cellspacing="10">
		<tbody>
			<tr>
			  <td>Nombre Articulo</td>
			</tr>
			<?php
				foreach($matrizProducto as $registros){
					echo "<tr><td>" . $registros["NOMBRE_ARTICULO"] . "</td></tr>";
				}
			?>	
		</tbody>
	</table>
</body>
</html>