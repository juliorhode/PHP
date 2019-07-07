<?php
	class Conectar{
		
		//los metodos estaticos no se instancian, se coloca la clase y se accede al metodo
		public static function conexion(){
			try{
				$conexion = new PDO('mysql:host=localhost;
					 				dbname=pruebas',
    								'root',
    								'');
				$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				//juego de caracteres
				$conexion->exec("SET CHARACTER SET UTF8");
				
			}catch(Exception $e){
				echo "Linea del error " . $e->getLine();
				die('Error: ' . $e->getMessage());
			}
			return($conexion);
		}
		
	}
?>