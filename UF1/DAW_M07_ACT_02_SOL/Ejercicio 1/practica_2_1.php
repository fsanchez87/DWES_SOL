<?php
	echo "<h1>Ejercicio 1</h1>";
	$menu = array('Lunes' => 'Macarrones', 'Martes' => 'Lentejas', 'Miercoles' => 'Hamburguesa', 'Jueves' => 'Paella', 'Viernes' => 'Solomillo');
	echo "<h2>Menú de la semana</h2>";
	foreach($menu as $dia => $plato){
		echo "$dia: $plato<br/>";
	}
	echo "<br/><br/>";
?>