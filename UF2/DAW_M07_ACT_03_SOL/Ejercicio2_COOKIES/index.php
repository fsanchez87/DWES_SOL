<?php
session_start();
?>
<h2>Introduce los siguientes datos</h2>
<form method="POST" action="comprobar.php">
	Nombre<input type="text" name="nombre"><br/>
	Email<input type="text" name="email"><br/>
	<input type="submit" value="Enviar">
</form>

<?php
if(isset($_COOKIE['ckError'])){
	echo "<p style=color:red>".$_COOKIE['ckError']."</p>";
	unset($_COOKIE['ckError']);
	//Borro las cookies ckNombre y ckEmail, por si ya existen de anteriores ejecuciones de la aplicación
	unset($_COOKIE['ckNombre']);
	unset($_COOKIE['ckEmail']);
	setcookie('ckNombre', "", time()-1);
	setcookie('ckEmail', "", time()-1);
}
?>