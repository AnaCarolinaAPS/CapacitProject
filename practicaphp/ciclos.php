<?php 
	echo "<h1>Ciclos</h1>";
	//Ciclo While
	echo "<h2>While</h2>";
	$x=1;
	while ($x <= 5) {
		echo "El valor de x es ".$x."<br/>";
		$x++;
		// if ($x==5) {
		// 	exit;
		// }
	}

	//Ciclo While
	echo "<h2>Do While</h2>";
	$i=1;
	do {
		echo "El numero i es ".$i."<br/>";
		$i++;
	} while ($i <= 5);

	//Ciclo For
	echo "<h2>For</h2>";
	for ($i=0; $i < 10; $i++) { 
		echo "El numero es ".$i."<br/>";
	}

	//Ciclo Foreach
	echo "<h2>Foreach</h2>";
	$personas=array("Juan","Luis", "Maria", "Jose", "Bernardo", "Julio");
	foreach ($personas as $row) {
		echo $row."<br>";
	}

?>