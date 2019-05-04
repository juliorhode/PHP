<?php
class Coche{//creamos la clase
	var $ruedas; //propiedad o atributo
	var $color;  //propiedad o atributo
	var $motor;  //propiedad o atributo

	function __construct(){//metodo constructor para version 7
		$this->ruedas = 4;
		$this->color  = "";
		$this->motor  = 1600;
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

	function setColor($colorCoche, $nombreCoche){
		$this->color = $colorCoche;//asignamos el valor
		echo "El color del $nombreCoche es: $this->color <br>";
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