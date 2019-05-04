<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	//Array Asociativo de dos dimensiones
	$alimentos = array("Fruta" => array("Tropical" => "Kiwi",
										"Citrico" => "Mandarina",
										"Otros" => "Manzana"),
					   
					   "Leche" => array("Animal" => "Vaca",
										"Vegetal" => "Coco"),
					   
					   "Carne" => array("Vacuno"=> "Lomo",
									   	"Porcino" => "Pata"));
	//Accedemos a un elemento del array
	//echo $alimentos["Carne"]["Vacuno"];
	//echo "<br>";
	
	//PASOS PARA RECORRER ARRAY DE DOS DIMENSIONES
	/*
	foreach( $alimentos as $array1 => $array2){
		echo "$array1: <br>";
		//listamos lo que esta en el interior
		
		while(list($clave,$valor) = each($array2)){
			echo "$clave = $valor <br>";
		}
		
		
		echo "<br>";
	}
	*/
	
	//Esta fue la forma que resolvi el problema anterior, ya que esta Deprecated el uso del each() en el while
	
	//recorremos el primer array
	
	foreach( $alimentos as $clave => $valor ){
		echo "$clave :". "<br>" ;
		echo "********<br>" ;
		//recorremos el segundo array
		foreach($valor as  $clave1 => $valor1){
			echo "$clave1 : $valor1<br>";
		}
		echo "<br>" ;
	}
	
	//echo var_dump($alimentos);
	/*ESTE ES EL RESULTADO DE LA FUNCION var_dump();
	D:\wamp64\www\Curso PHP\Arrays\arrayMultidimensional.php:53:
	array (size=3)
	  'Fruta' => 
		array (size=3)
		  'Tropical' => string 'Kiwi' (length=4)
		  'Citrico' => string 'Mandarina' (length=9)
		  'Otros' => string 'Manzana' (length=7)
	  'Leche' => 
		array (size=2)
		  'Animal' => string 'Vaca' (length=4)
		  'Vegetal' => string 'Coco' (length=4)
	  'Carne' => 
		array (size=2)
		  'Vacuno' => string 'Lomo' (length=4)
		  'Porcino' => string 'Pata' (length=4)
	*/
	
?>
</body>
</html>