<?php
/*
	MODIFICADORES DE ACCESO

	Para encapsular las propiedades utilizamos los siguientes modificadores de acceso:
	
	public --- accesible desde cualquier parte
	private --- accesible desde la propia clase
	protected --- accesible desde la propia clase y de clases heredadas
*/
/*
	VARIABLES Y METODOS ESTATICOS
	
	
	
*/
class Coche{//creamos la clase
	//se coloca protected para que pueda ser modificado por la clase camion al invocar el metodo getRuedas() ya que es heredado, porque si lo dejamos en private, la clase camion no podra mostrar su cantidad de ruedas
	protected $ruedas; //propiedad o atributo
	protected $color;  //propiedad o atributo
	protected $motor;  //propiedad o atributo

	function __construct(){//metodo constructor para version 7
		$this->ruedas = 4;
		$this->color  = "";
		$this->motor  = 1600;
	}

	
	//metodo getter
	function getRuedas(){
		return $this->ruedas;
	}
	
	//metodo getter
	function getMotor(){
		return $this->motor;
	}
	
	//metodo setter
	function setColor($colorCoche, $nombreCoche){
		$this->color = $colorCoche;//asignamos el valor
		echo "El color del $nombreCoche es: $this->color <br>";
	}
	
	function arrancar(){ //metodo o funcionalidad
		echo "Estoy arrancando<br>";
	}

	function girar(){ //metodo o funcionalidad
		echo "Estoy girando<br>";
	}

	function frenar(){ //metodo o funcionalidad
		echo "Estoy frenando<br>";
	}
	
}

	
/********************************************/
class Camion extends Coche{//creamos la clase

	function __construct(){//metodo constructor para version 7
		$this->ruedas = 8;
		$this->color  = "Gris";
		$this->motor  = 2600;
	}

	//sobrecarga de metodo
	function setColor($colorCamion, $nombreCamion){
		$this->color = $colorCamion;//asignamos el valor
		echo "El color del $nombreCamion es: $this->color <br>";
	}

	//parent llama al metodo de la clase padre, para no hacer sobrecarga sino utilizarlo y poder agregar cosas nuevas
	function arrancar(){ //metodo o funcionalidad
		//ejecuta todo el metodo de la clase padre y luego podemos darle cosas nuevas particulares
		parent::arrancar();
		echo "El camion ya ha arrancado<br>";
	}
}

?>