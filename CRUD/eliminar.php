<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	include("conexion.php");
	$id = $_GET['id'];
	$base->query("delete from datosusuarios where id = '$id' ");
	header("Location:index.php");
?>
</body>
</html>