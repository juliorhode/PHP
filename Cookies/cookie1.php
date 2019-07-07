<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<?php
	//creamos la cookie
	//primer parametro: nombre de la cookie
	//segundo parametro: el contenido que vamos a almacenar en la cookie
	//tercer parametro: es el tiempo que va a durar la cookie... time()+30 le decimos que va a durar 30 seg.
	//60 seg * 60min * 24 horas * 30 dias = 2592000 (un mes)
	//cuarto parametro: la ruta donde la vamos a almacenar
	
	//setcookie("prueba","Esta es la informacion de nuestra primera cookie",time()+30);
	
	setcookie("prueba","Esta es la informacion de nuestra primera cookie",time()+300,"/PHP/Cookies/zona%20contenido/lee_cookie2.php");
	//con el cuarto parametro, como la cookie se va a almacenar en un lugar en concreto, la zona de actuacion sera solo en la carpeta zona contenido, el cual lee_cookie1.php no va a poder localizarlo pero lee_cookie2.php si, ya que se encuentra ahi. si no se colocara ninguna ruta, ahi si pudiese acceder a la informacion. A esto se le denomina ZONA DE ACTUACION
?>	
	
</body>
</html>