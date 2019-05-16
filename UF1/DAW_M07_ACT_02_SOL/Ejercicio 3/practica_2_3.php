<html>
<body>
	<h1>Ejercicio 3</h1>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
		Introduce un número:<input type="text" name="numero"><br/>
		<input type="submit" value="Enviar" name='enviar'>
	</form>
	
	<?php
	if(isset($_POST['enviar'])){
		$numero=$_POST['numero'];
		if(empty($numero)) {
			echo "Debes introducir un número";
		}
		else{
			if(($numero%2==0) && ($numero%5==0)){
				echo "El número introducido es multiplo de 2 y de 5";
			}
			else{
				echo "El número introducido no es multiplo de 2 y de 5";
			}
		}
	}
	?>
</body>
</html>