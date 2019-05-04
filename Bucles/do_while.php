<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	$var1 = 7;
	
	do{
		echo "$var1) Estamos ejecutando el codigo del bucle <br>";
		$var1++;
		
	}while($var1 < 6);
	
	echo "Hemos salido del bucle";
?>
</body>
</html>