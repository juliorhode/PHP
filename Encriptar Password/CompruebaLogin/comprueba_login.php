<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>


<?php

try{
	
	$login=htmlentities(addslashes($_POST["login"]));
	
	$password=htmlentities(addslashes($_POST["password"]));
	
	$contador = 0;
	
	$base=new PDO("mysql:host=localhost; dbname=pruebas" , "root", "");
	
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	

	$sql="SELECT * FROM USUARIOS_PASS WHERE usuarios= :login";
	
	$resultado=$base->prepare($sql);	
		
	$resultado->execute(array(":login"=>$login));
		
		while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){			
			
			//echo "Usuario: " . $registro['usuarios'] . " Contraseña: " . $registro['password'] . "<br>";	
			
			//password_verify() devuelve true o false si es igual o no la contraseña
			if(password_verify($password,$registro['password'])){
				$contador++;
			}
					
			
		}
		if($contador>0){
			echo "Usuario registrado";
		}else{
			echo "Usuario no registrado";
		}
							
		
		
		$resultado->closeCursor();

	
	
}catch(Exception $e){
	
	die("Error: " . $e->getMessage());
	
	
	
}




?>
</body>
</html>