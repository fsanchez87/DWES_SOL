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
if(isset($_SESSION['error'])){
	echo "<p style=color:red>".$_SESSION['error']."</p>";
	unset($_SESSION['error']);
	//Podemos eliminar todo lo que hay en la sesión, para eliminar 'nombre' y 'email' anteriores
	session_destroy();
}
?>
