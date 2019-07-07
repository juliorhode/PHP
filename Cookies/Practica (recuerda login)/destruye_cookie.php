<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	//con tan solo colocar time()-1, destruimos la cookie
	setcookie("nombreUsuario","juferrer",time()-1);	
	echo "Cookie destruida";
?>
</body>
</html>