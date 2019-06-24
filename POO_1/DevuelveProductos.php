<?php
require "Conexion.php";

//Para poder utilizar los metodos y variables dentro de nuestra clase, heredamos
class DevuelveProductos extends Conexion{
	//Definimos el constructor
	public function DevuelveProductos(){
		//llamamos el construnctor de la clase padre, o sea, de la clase Conexion para conectarnos a la base de datos
		parent::__construct();
	}
	
	//metodo
	public function getProductos(){
		//la variable conexion_db, la podemos usar gracias a la herencia que tenemos con la clase Conexion
		//Realizamos la consulta sql
		$resultado = $this->conexion_db->query('select * from productos');
		//Almacenamos los resultados en un array asociativo
		$producto = $resultado->fetch_all(MYSQLI_ASSOC);
		//devolvemos el array
		return($producto);
	}
}
?>