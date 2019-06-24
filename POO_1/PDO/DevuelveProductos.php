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
	public function getProductos($dato){
		//creamos la instruccion sql
		$sql = "select * from productos where pais_origen = '" . $dato . "'" ;
		//preparamos la consulta
		$sentencia = $this->conexion_db->prepare($sql);
		//ejecutamos la sentencia
		$sentencia->execute(array());
		//leemos el array
		$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
		//cerramos la consulta
		$sentencia->closeCursor();
		//devolvemos los resultados obtenidos
		return($resultado);
		//vaciamos la memoria
		$this->conexion_db = null;
	}
}
?>