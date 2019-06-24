<?php

	require("config.php");

	class Conexion{
		//Declaramos la variable 
		protected $conexion_db;

		public function Conexion(){
			//Colocamos los atributos necesarios para la conexion
			/*
			$this->conexion_db = new mysqli(DB_HOST,
											DB_USUARIO,
											DB_PASS,
											DB_NOMBRE);
			*/
			//PDO
			try{
				//datos para la conexion
				$this->conexion_db = new PDO('mysql:host=localhost;dbname=pruebas','root','');
				//captura de errores
				$this->conexion_db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				//establecemos la codificacion
				$this->conexion_db->exec("SET CHARACTER SET utf8");
				//devolvemos la conexion
				return($this->conexion_db);
					
			}catch (Exception $e){
				echo "La linea del error es: " . $e->getLine();
			}
			
			//En caso de falla de conexion
			if($this->conexion_db->connect_errno){
				echo "Fallo al conectar: " . $this->conexion_db->connect_error;
				return;
			}
			//Asignamos la codificacion de caracteres
			$this->conexion_db->set_charset(DB_CHARSET);
		}
	}

?>