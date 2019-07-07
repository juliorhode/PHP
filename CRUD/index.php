<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>
<?php
	include("conexion.php");
	
	//$con = $base->query("SELECT * FROM DATOSUSUARIOS");
	//creamos un array de objetos
	//$registros = $con->fetchAll(PDO::FETCH_OBJ);
	
	//----------------PAGINACION--------------------//
	$tamano_paginas = 2;
		
		//obtenemos el numero de la pagina cuando el usuario pulse en los enlaces de paginacion
		if(isset($_GET['pagina'])){
			if($_GET['pagina']==1){
				header("Location:index.php");
			}else{
				$pagina = $_GET['pagina'];
			}
		}else{
			$pagina = 1;//para mostrar la pagina 1
		}
		
		//almacenamos el registro desde el cual queremos mostrar los resultados... ejemplo: 1-1=0*5=0... si la pagina es la 3, pues 3-1=2*5=10
		$ini_pagina = ($pagina-1)*$tamano_paginas;
		

		$sql_total = "select * from datosusuarios";
		
		//creamos la sentencia reparada
		$resultado = $base->prepare($sql_total);
		//ejecutamos
		$resultado->execute(array());
		
		//contamos la cantidad de filas
		$num_filas = $resultado->rowCount();
		
		//calculamos cuantas paginas mostraremos... con ceil() redondeamos el valor
		$total_paginas = ceil($num_filas/$tamano_paginas);
	//----------------FIN PAGINACION--------------------//
	
	
	//Esto es lo mismo de lo de arriba pero en una sola linea
	$registros = $base->query("select * from datosusuarios order by 1 limit $ini_pagina,$tamano_paginas ")->fetchALL(PDO::FETCH_OBJ); 

	//esto solo lo ejecutara al pulsar el boton submit de insertar
	if(isset($_POST['cr'])){
		$nom=$_POST['Nom'];
		$ape=$_POST['Ape'];
		$dir=$_POST['Dir'];
		//creamos el sql
		$sql = "insert into datosusuarios (nombre,apellido,direccion) values(:nom,:ape,:dir)";
		//creamos la consulta preparada
		$resultado = $base->prepare($sql);
		//ejecutamos la sentencia pasandole los valores
		$resultado->execute(array(
							":nom"=>$nom,
							":ape"=>$ape,
							":dir"=>$dir));
		header("Location:index.php");
	}
?>

<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>

	
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	  <table width="50%" border="0" align="center">
		<tr >
		  <td width="7%" class="primera_fila">Id</td>
		  <td width="16%" class="primera_fila">Nombre</td>
		  <td width="19%" class="primera_fila">Apellido</td>
		  <td width="21%" class="primera_fila">Dirección</td>
		  <td width="16%" class="sin">&nbsp;</td>
		  <td width="18%" class="sin">&nbsp;</td>
		  <td width="3%" class="sin">&nbsp;</td>
		</tr> 


		<?php
		  //aqui comienza el foreach
			foreach($registros as $persona):?>	
		<tr>
		  <td><?php echo $persona->id ?></td>
		  <td><?php echo $persona->nombre ?></td>
		  <td><?php echo $persona->apellido ?></td>
		  <td><?php echo $persona->direccion ?></td>

		  <td class="bot"><a href="eliminar.php?id=<?php echo $persona->id ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
		  <td class='bot'><a href="editar.php?id=<?php echo $persona->id ?>&nom=<?php echo $persona->nombre ?>&ape=<?php echo $persona->apellido ?>&dir=<?php echo $persona->direccion ?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
		</tr> 
		<?php
			//aqui termian el forecha
			endforeach;
		?>

		<tr>
		<td></td>
		  <td><input type='text' name='Nom' size='10' class='centrado'></td>
		  <td><input type='text' name='Ape' size='10' class='centrado'></td>
		  <td><input type='text' name=' Dir' size='10' class='centrado'></td>
		  <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td>
		</tr>
	    <tr>
		  <td colspan="4" align="center">
			<?php
			//----------------PAGINACION--------------------//
				//echo "<br>";
				for($i = 1; $i <= $total_paginas; $i++){
					echo "<a href='?pagina=" . $i . "'>" .$i . "</a>  ";
				}	
			?>			  
		  </td>
	    </tr>
		  
	  </table>
  </form>

	
<p>&nbsp;</p>
</body>
</html>