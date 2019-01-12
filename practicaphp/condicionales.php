<?php 
	//CONDICIONALES
	echo "<h1>CONDICIONALES EN PHP </h1>";

	/* 
	operadores de comparación
	=	IGUAL QUE
	>	MAYOR QUE
	< 	MENOR QUE
	>=	MAYOR IGUAL QUE
	<=	MENOR IGUAL QUE
	*/

	//Ejemplo1
	$edad=19;
	if ($edad>18) {
		echo "ES MAYOR DE EDAD";
	}

	echo "<br>";

	//Ejemplo2
	$hora=12;
	if ($hora<=12) {
		echo "Buen dia";
	} else {
		echo "Buenas tardes";
	}

	echo "<br>";

	//Ejemplo3
	if ($hora<12) {
		echo "La hora es menor a 12";
	} else if ($hora>=12 && $hora <=13) {
		echo "Medio dia";
	} else {
		echo "La hora es mayor a 13";
	} 

?>