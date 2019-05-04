<style>
	.resultado{
		color: #f00;
		font-weight: bold;
		font-size: 32px;
	}
</style>
<?php
	
	if(isset($_POST["button"])){//si se ha pulsado el boton
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
		$operacion = $_POST["operacion"];
		
		calcular($operacion);
	}
		/*
		
		if(!strcmp("Suma",$operacion)){
			echo "El resultado es: " . ($num1+$num2);
		}
		if(!strcmp("Resta",$operacion)){
			echo "El resultado es: " . ($num1-$num2);
		}
		if(!strcmp("Multiplicacion",$operacion)){
			echo "El resultado es: " . ($num1*$num2);
		}
		if(!strcmp("Division",$operacion)){
			echo "El resultado es: " . ($num1/$num2);
		}
		if(!strcmp("Modulo",$operacion)){
			echo "El resultado es: " . ($num1%$num2);
		}
		*/
	function calcular($calculo){
		global $num1;
		global $num2;
		$resultado;
		if(!strcmp("Suma",$calculo)){
			$resultado = $num1+$num2;
			echo "<p class='resultado'>El resultado es: $resultado </p>" ;
		}
		if(!strcmp("Resta",$calculo)){
			$resultado = $num1-$num2;
			echo "<p class='resultado'>El resultado es: $resultado </p>" ;
		}
		if(!strcmp("Multiplicacion",$calculo)){
			$resultado = $num1*$num2;
			echo "<p class='resultado'>El resultado es: $resultado </p>" ;
		}
		if(!strcmp("Division",$calculo)){
			$resultado = $num1/$num2;
			echo "<p class='resultado'>El resultado es: $resultado </p>" ;
		}
		if(!strcmp("Modulo",$calculo)){
			$resultado = $num1%$num2;
			echo "<p class='resultado'>El resultado es: $resultado </p>" ;
		}
		if(!strcmp("Incremento",$calculo)){
			$num1++;
			$resultado = $num1;
			echo "<p class='resultado'>El resultado es: $resultado </p>" ;
		}
		if(!strcmp("Decremento",$calculo)){
			$num1--;
			$resultado = $num1;
			echo "<p class='resultado'>El resultado es: $resultado </p>" ;
		}
	}
	
?>