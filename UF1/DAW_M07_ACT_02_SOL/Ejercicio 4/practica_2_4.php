<html>
<body>
	<h1>Ejercicio 4</h1>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
		Introduce una nota:<input type="text" name="nota"><br/>
		<input type="submit" value="Enviar" name='enviar'>
	</form>
	
	<?php
	if(isset($_POST['nota'])){
		$nota=$_POST['nota'];
		if(empty($nota)) {
			echo "Debes introducir un número";
		}
		else{
			if(($nota>=0) && ($nota<=4.99)){
				echo "Suspenso";
			}
			else if(($nota>=5) && ($nota<=6.99)){
				echo "Aprobado";
			}
			else if(($nota>=7) && ($nota<=8.99)){
				echo "Notable";
			}
			else if(($nota>=9) && ($nota<=9.99)){
				echo "Excelente";
			}
			else if($nota==10){
				echo "Matrícula de honor";
			}
			else{
				echo "La nota introducida es incorrecta";
			}
		}
	}
	?>
</body>
</html>