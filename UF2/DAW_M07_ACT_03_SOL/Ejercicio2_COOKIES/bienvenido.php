<?php
session_start();
if(isset($_COOKIE['ckNombre']) && isset($_COOKIE['ckEmail'])){
	echo "Hola ". $_COOKIE['ckNombre']." tu email es ".$_COOKIE['ckEmail'];
	echo "<form method='POST' action='logout.php'>
			<input type='submit' value='Logout'/>
		  </form>";
}
else{
    echo "Debes pasar antes por el formulario de entrada<br/>
			Serás redireccionado en 3 segundos.<br/>";
    header("Refresh:3; url=index.php");
}
