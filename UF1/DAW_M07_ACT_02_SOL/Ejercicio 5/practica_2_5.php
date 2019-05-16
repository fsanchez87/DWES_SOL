<html>
<body>
	<h1>Ejercicio 5</h1>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
		Introduce tu nombre:<input type="text" name="nombre"><br/>
		Introduce numero horas:<input type="text" name="horas"><br/>
		<input type="submit" value="Enviar" name='enviar'>
	</form>
	
	<?php
	define("PRECIO1",16);
	define("PRECIO2",20);
	
	if(isset($_POST['enviar'])){
		$nombre=$_POST['nombre'];
		$horas=$_POST['horas'];
		if(empty($nombre) || empty($horas)){
			echo "Debes introducir tu nombre y las horas trabajadas<br/>";
		}
		else{
			if($horas<=40){
				$sueldo = $horas * PRECIO1;
				
			}
			else{
				$horasExtra = $horas - 40;
				$sueldo = (40*PRECIO1) + ($horasExtra*PRECIO2);
			}
			echo "$nombre has trabajado $horas horas, tu sueldo es $sueldo euros";
		}
	}
	?>
</body>
</html>