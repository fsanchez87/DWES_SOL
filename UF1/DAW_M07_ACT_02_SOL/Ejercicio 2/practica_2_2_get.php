<?php
	$nombre = $_GET['nombre'];
	$edad = $_GET['edad'];

	if((empty($nombre)) || (empty($edad))) {
		echo "Debes introducir tu nombre y tu edad";
	}
	else{
		if($edad<18){
			echo "Hola $nombre, eres menor de edad, no puedes pasar";
		}else {
			echo "Hola $nombre, tienes $edad a�os";
		}
	}
	echo "Ser�s redirigido al formulario en 4 segundos";
	header("refresh:4; url=practica_2_2.html");
?>