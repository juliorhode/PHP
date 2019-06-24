<?php

	require("config.php");

	class Conexion{
		//Declaramos la variable 
		protected $conexion_db;

		public function Conexion(){
			//Colocamos los atributos necesarios para la conexion
			$this->conexion_db = new mysqli(DB_HOST,
											DB_USUARIO,
											DB_PASS,
											DB_NOMBRE);
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