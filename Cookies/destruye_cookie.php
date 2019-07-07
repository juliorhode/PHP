<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	//con tan solo colocar time()-1, destruimos la cookie
	setcookie("prueba","Esta es la informacion de nuestra primera cookie",time()-1,"/PHP/Cookies/zona%20contenido/lee_cookie2.php");	
?>
</body>
</html>