<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
/*
	== --> igual que
	=== --> identico que y si son del mismo tipo
	!= --> diferente que
	<> --> diferente que y tambien el tipo
	< --> menor que
	> --> mayor que
	<= --> menor o igual que
	>= --> mayor o igual que
*/
	$variable1=8;
	$variable2 = "8";
	$variable3 = "Julio";
	
	if($variable1==$variable2){
		echo "Son iguales";
	}else{
		echo "No son iguales";
	}
	echo "<br>";
	if($variable2==$variable3){
		echo "Son iguales";
	}else{
		echo "No son iguales";
	}
	echo "<br>";
	if($variable1===$variable2){
		echo "Son iguales";
	}else{
		echo "No son iguales";
	}
	echo "<br>";
	if($variable1!=$variable3){
		echo "Son diferentes";
	}else{
		echo "No son diferentes";
	}
?>
</body>
</html>