<style>
	h1{
		text-align: center;
	}
	table{
		background-color: #FFFFCC;
		padding: 5px;
		border: #666 5px solid;
	}
	.no_valido{
		font-size: 18px;
		color: #FF0000;
		font-weight:bold;
	}
	.valido{
		font-size: 18px;
		color: #0c3;
		font-weight:bold;
	}
</style>
<?php
	
	// isset() comprueba si se pulso en el boton enviar del formulario
	if( isset( $_POST["enviar"]) ){
		$usuario 	= $_POST["usuario"];
		$edad 		= $_POST["edad"];
		
		if( $usuario == "Julio" && $edad > 18){
			echo("<p class='valido'>Puedes entrar</p>");
		}else{
			echo("<p class='no_valido'>No puedes entrar</p>");
		}
	}
	
?>