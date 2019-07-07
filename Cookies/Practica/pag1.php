<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	//verificamos si esta creada o no la cookie
	if(isset($_COOKIE['idiomaSeleccionado'])){
		if($_COOKIE['idiomaSeleccionado']=='es'){
			header('Location:spanish.php');
		}else if($_COOKIE['idiomaSeleccionado']=='in'){
			header('Location:english.php');
		}
	}
?>
<table width="328" height="183" border="0" align="center">
  <tbody>
    <tr>
      <td height="54" colspan="2" align="center" style="font-weight: bold; font-style: normal; font-size: 18px;">Elige un Idioma</td>
    </tr>
    <tr>
      <td width="166" height="123" align="center"><a href="creaCookie.php?idioma=es"><img src="imagenes/epañol.jpg" width="100" height="100" /></a></td>
      <td width="146" align="center"><a href="creaCookie.php?idioma=in"><img src="imagenes/ingles.jpg" width="100" height="100" /></a></td>
    </tr>
  </tbody>
</table>
	

</body>
</html>