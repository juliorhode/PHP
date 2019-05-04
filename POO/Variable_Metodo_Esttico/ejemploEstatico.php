<?php
	class CompraVehiculo{
		private $precioBase;
		//private static $descuento = 4500;//esto no pertenece a ningun objeto (propia copia) sino que pertenece a la clase y nadie tendra una copia, sino que sera compartida. De esta forma (private static $descuento) nadie podra acceder a este campo. Aparte que de esta forma sea lo que sea, siempre se aplicara a todos los objetos instanciados
		//solucion para la descripcion anterior
		private static $descuento = 0;
		
		function __construct($gama){
			if($gama=="urbano"){
				$this->precioBase = 10000;
			}elseif($gama=="compacto"){
				$this->precioBase = 20000;
			}elseif($gama=="berlina"){
				$this->precioBase = 30000;
			}
		}//fin constructor
		
		//hasta que no sea invocado, no se va a ejecutar
		static function descuentoGobierno(){
			//para que trabajen bien las fechas, se debe colocar la nomenglatura m-d-y
			
			//aparentemente lo hace bien
			if( date("d-m-y") > "01-05-19"){
				self::$descuento = 4500;
			}
			
		}
			

		function climatizador(){
			$this->precioBase += 2000;
		}//fin climatizador
		
		function navegadorGPS(){
			$this->precioBase += 2500;
		}//fin navegadorGPS
		
		function tapiceriaCuero($color){
			if($color == "blanco"){
				$this->precioBase += 3000;
			}elseif($color == "beige"){
				$this->precioBase += 3500;
			}else{
				$this->precioBase += 5000;
			}
		}//fin tapiceriaCuero
		
		function precioFinal(){
			//para hacer referencia a un campo estatico, se utiliza self:: (self::$descuento;) ya que el this es para referirse a los campos de los objetos
			$valorFinal = $this->precioBase - self::$descuento;
			return $valorFinal . "<br>";
		}//fin precioFinal
		
	}//fin clase CompraVehiculo
?>