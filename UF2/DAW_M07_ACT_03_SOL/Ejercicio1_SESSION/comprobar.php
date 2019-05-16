<?php
session_start();
$nombre = $_POST["nombre"];
$email = $_POST["email"];

if(empty($nombre) || empty($email)){
	echo "Debes introducir un nombre y un email<br/>
			Serás redireccionado al formulario en 3 segundos.<br/>";
	header("Refresh:3; url=index.php");
}
else{
    $_SESSION['nombre'] = $nombre;
    $_SESSION['email'] = $email;
	header("Location: bienvenido.php");
}


