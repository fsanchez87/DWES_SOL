<?php
session_start();
if(isset($_SESSION['nombre']) && isset($_SESSION['email']) ){
	echo "Hola ". $_SESSION['nombre']." tu email es ".$_SESSION['email'];
	echo "<form method='POST' action='logout.php'>
			<input type='submit' value='Logout'/>
		  </form>";
}
else{
    echo "Debes pasar antes por el formulario de entrada<br/>
			Serás redireccionado en 3 segundos.<br/>";
    header("Refresh:3; url=index.php");
}
