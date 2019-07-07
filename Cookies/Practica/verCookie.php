<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	//verificar si no se ha creado la cookie
	if(!$_COOKIE['idiomaSeleccionado']){
		header('Location:pag1.php');
	}else if($_COOKIE['idiomaSeleccionado']=='es'){
		header('Location:spanish.php');
	}else if($_COOKIE['idiomaSeleccionado']=='in'){
		header('Location:english.php');
	}
?>
</body>
</html>