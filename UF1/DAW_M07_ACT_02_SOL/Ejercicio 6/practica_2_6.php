<?php
	echo "<h1>EJERCICIO 6</h1>";
	$valores = array(2, 5, 7, 2, 5, 2, 4, 8);
	$suma = 0;
	echo "Dado el array con los valores:<br/>";
	foreach($valores as $valor){
		echo "$valor<br/>";
		$suma = $suma + $valor;
	}
	$media = $suma / count($valores);
	$frecuencias = array_count_values($valores);
	arsort($frecuencias);
	echo "Su media es $media y su moda es ".key($frecuencias)."<br/>";
?>