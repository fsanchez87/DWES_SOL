<?php
	$nombre = $_POST['nombre'];
	$edad = $_POST['edad'];

	if((empty($nombre)) || (empty($edad))) {
		echo "Debes introducir tu nombre y tu edad<br/>";
	}
	else{
		if($edad<18){
			echo "Hola $nombre, eres menor de edad, no puedes pasar<br/>";
		}else {
			echo "Hola $nombre, tienes $edad años<br/>";
		}
	}
	echo "Serás redirigido al formulario en 4 segundos";
	header("refresh:4; url=practica_2_2.html");
?>