<?php
if($_POST['nombre'] == "" || $_POST['apellido'] == "" || $_POST['email'] == "" || $_POST['comentarios'] == ""){
	echo "no puede dejar campos en blancos";
	die();
}else{
	$textoMail 			= $_POST['comentarios'];
	$destinatarioMail 	= $_POST['email'];
	$asuntoMail 		= $_POST['asunto'];
	$headers 			= "MIME-Version: 1.0\r\n";
	//concatenamos lo que esta ya en su interior con otro valor que vayamos a agregar
	$headers.="Content-type: text/html; charset=utf8\r\n";
	$headers.="From: Prueba < juliorhode@gmail.com >\r\n";

	$exito = mail($destinatarioMail,$asuntoMail,$textoMail,$headers);

	if($exito){
		echo "Mensaje enviado con exito";
	}else{
		echo "Se produjo un error";
}	
}




?>