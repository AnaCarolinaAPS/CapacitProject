<?php 
	//ARRAYS
	echo "<h1>ARRAYS</h1>";
	//Array com todos os dias da semana (7)
	$aDias=array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado", "Domingo");
	echo "El primer día es: ".$aDias[0]."<br/>";

	//Array com 4 elementos com um número em cada posição
	$aNumeros=array(33,12,83,55);
	echo "El segundo numero es: ".$aNumeros[1]."<br/>";

	//Arrays Asociativos
	echo "<h2>Arrays Asociativos</h2>";
	$aColores=array("color1" => "rojo", "color2" => "verde", "color3" => "azul");
	echo "Color 3: ".$aColores["color3"]."<br/>";

	$aCosas=array("color1" => "rojo", "importe" => 300, "activo" => true, 3 =>55 );
	echo "Activo: ".$aCosas["activo"]."<br/>";
	echo "3: ".$aCosas[3]."<br/>";

	//Arrays Multidimensionales
	echo "<h2>Arrays Multidimensionales</h2>";
	$colores=array(
		'frutas' => array("manzana" => "roja", "ciruela" => "púrpura"), 
		'flores' => array("rosa" => "rosada", "violeta" => "azul")
	);
	echo "Una ciruela es ".$colores["frutas"]["ciruela"]." y una violeta es ".$colores["flores"]["violeta"]."<br/>";

	echo "<h3>var_dump(array)</h3>";
	var_dump($aColores);
	
	echo "<h3>print_r(array)</h3>";
	print_r($aColores);
?>