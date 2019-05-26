<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
	.form-control{
		width: auto;
		font-weight: bold;
	}

	select{
		margin: 2% 5%;
	}

	#contenedor{
		border: 1px solid rgba(0,0,0,1.00);
		width: 300px;
		margin: 50px auto;
	}
</style>
</head>

<body>
<div id="contenedor">
	<div class="form-group">
		<?php
			$elemetos = 10;
			//Esto es un array que simula datos provenientes de BBDD
			//$datos = array("Juez1","Juez2","Juez3","Juez4");
			
			require("datosConexion.php");
			// crear conexion con BBDD
			$conexion = mysqli_connect($db_host, $db_usuario, $db_pass);
			//si no se consigue conectarse a la base de datos
			if(mysqli_connect_errno()){
				echo "Fallo al conectar con la base de datos";
				exit();
			}
			//si no se consigue la base de datos
			mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
			//incluya los caracteres latinos
			mysqli_set_charset($conexion, "utf8");
			//consulta a la base de datos
			$sql = "SELECT empresa FROM `clientes` ";
			//ejecutamos la consulta y lo almacenamos en un recordset
			$resultados = mysqli_query($conexion, $sql);
			
			//creo un array
			$datos = array(); 
			//cuento cuantos resutlados arroja mi busqueda 
			$cantidad = mysqli_num_rows($resultados); 

			//contruyo el array 
			while ($filas = mysqli_fetch_array($resultados)) { 
				//almacenos los valores
				$datos[] = $filas['empresa'] ; 
			} 
			
			//construccion de elementos y asignar valores
			for($i = 0; $i < $elemetos; $i++){ // Este for crea tantos elementos se necesiten
				echo "<select class='form-control'>";
				echo "<option>Seleccione una opcion</option>";
				for($j = 0; $j < $cantidad; $j++){ //Este for llena los option con los datos de BBDD
					echo "<option>" . $datos[$j] . "</option>";
				}
				
				echo "</select>";
			}
		?>
	</div>
</div>
	
</body>
</html>
