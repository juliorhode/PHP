<?php
class Coche{//creamos la clase
	var $ruedas; //propiedad o atributo
	var $color;  //propiedad o atributo
	var $motor;  //propiedad o atributo

/*
	Error:
	Deprecated: Methods with the same name as their class will not be constructors in a future version of PHP; Coche has a deprecated constructor in D:\wamp64\www\Curso PHP\POO\POO1.php on line 10

	Esto se debe que los metodos con el mismo nombre seran eliminados en versiones nuevas de PHP. Para corregir esto, debemos colocar en la funcion constructor, lo siguiente

	function __construct(){

	}

	con el $this nos referimos a la propia clase
	con -> referenciamos un metodo o una propiedad perteneciente a la clase Coche
*/
	/*
	function Coche(){ //metodo constructor para version 5

		$this->ruedas = 4;
		$this->color  = "";
		$this->motor  = 1600;
	}
	*/
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
class Camion{//creamos la clase
	var $ruedas; //propiedad o atributo
	var $color;  //propiedad o atributo
	var $motor;  //propiedad o atributo

/*
	Error:
	Deprecated: Methods with the same name as their class will not be constructors in a future version of PHP; Coche has a deprecated constructor in D:\wamp64\www\Curso PHP\POO\POO1.php on line 10

	Esto se debe que los metodos con el mismo nombre seran eliminados en versiones nuevas de PHP. Para corregir esto, debemos colocar en la funcion constructor, lo siguiente

	function __construct(){

	}

	con el $this nos referimos a la propia clase
	con -> referenciamos un metodo o una propiedad perteneciente a la clase Coche
*/
	/*
	function Coche(){ //metodo constructor para version 5

		$this->ruedas = 4;
		$this->color  = "";
		$this->motor  = 1600;
	}
	*/
	function __construct(){//metodo constructor para version 7
		$this->ruedas = 8;
		$this->color  = "Gris";
		$this->motor  = 2600;
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

?>