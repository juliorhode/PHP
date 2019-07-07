<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	//borramos la cookie
	setcookie("idiomaSeleccionado","in",time()-1);
	header("Location:verCookie.php");
?>
</body>
</html>