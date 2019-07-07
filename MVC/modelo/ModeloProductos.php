<?php

	class ModeloProductos{
		//variable para la conexion
		private $con;
		//variable para los productos
		private $productos;
		
		//creamos el constructor
		public function __construct(){
			//incluimos el archivo conexion
			require_once("Conexion.php");
			//indicamos que la variable de aqui va a ser igual a la clase conectar, y llamamos al metodo conexion
			$this->con = Conectar::conexion();
			
			//especificamos que esta variable es un array porque no sabemos cuantos registros vamos a recibir
			$this->productos = array();
			
			
		}
		
		//metodo getter que devuelve los productos
		public function getProductos(){
			//creamos la sentencia y la ejecutamos
			$consulta = $this->con->query("select * from productos");
			
			//recorremos todos los productos almacenados en consulta
			while($filas = $consulta->fetch(PDO::FETCH_ASSOC)){
				$this->productos[] = $filas;
			}
			return($this->productos);
		}
		
		
	}
?>