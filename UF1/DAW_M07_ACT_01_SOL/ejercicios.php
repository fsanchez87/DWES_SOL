<?php
//////////////////////////////////////////////// EJERCICIO 1 ////////////////////////////////////////////////
	echo "<h1>EJERCICIO 1</h1>";
	$v1=10;
	$v2=6;
	$v3=5;
	$result=$v1+$v2+$v3;
	echo "La suma de ".$v1.", ".$v2.", ".$v3." es ".$result."<br/><br/>";
	
//////////////////////////////////////////////// EJERCICIO 2 ////////////////////////////////////////////////
    echo "<h1>EJERCICIO 2</h1>";
	$base=8;
	$altura=6;
        
    $area = $base * $altura;
    $perimetro = 2*$base + 2*$altura;
    echo "Un rectángulo con ".$base." cm de base y ".$altura." cm de altura tiene un area de ".$area." cm2 y un perímetro de ".$perimetro." cm<br/><br/>";
        
//////////////////////////////////////////////// EJERCICIO 3 ////////////////////////////////////////////////
    echo "<h1>EJERCICIO 3</h1>";
	$tiempo = 5363;
    $horas = floor($tiempo/3600);
	$minutos = floor(($tiempo - ($horas*3600))/60);
	$segundos = $tiempo - ($horas*3600) - ($minutos*60);
    echo "$tiempo segundos equivalen a $horas horas, $minutos minutos, $segundos segundos<br/><br/>";
                
//////////////////////////////////////////////// EJERCICIO 4 ////////////////////////////////////////////////
    echo "<h1>EJERCICIO 4</h1>";    
	$a = 1;
    $b = -5;
    $c = 6;
    $x1 = (-$b+(sqrt((pow($b,2)-(4*$a*$c))))) / (2*$a);
    $x2 = (-$b-(sqrt((pow($b,2)-(4*$a*$c))))) / (2*$a);
    echo "Las soluciones de la ecuación de segundo grado con coeficientes $a, $b y $c son: $x1, $x2<br/><br/>";
        
//////////////////////////////////////////////// EJERCICIO 5 ////////////////////////////////////////////////
    echo "<h1>EJERCICIO 5</h1>"; 
	
	$radio = 5;
	$longitud = $radio*2*M_PI;
	$area = M_PI*(pow($radio,2));
	$volumen = (4 * M_PI * pow($radio,3))/3;
	echo"La circunferencia con un radio de $radio cm tiene un longitud de ".sprintf("%.2f",$longitud)." cm y un area de ".sprintf("%.2f",$area)." cm2.<br/>";
	echo"La esfera con un radio de $radio cm tiene un volumen de ".sprintf("%.2f",$volumen)." cm3";
?>