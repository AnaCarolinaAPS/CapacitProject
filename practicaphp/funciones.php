<?php 

	// echo "<h1>Funciones</h1>";

	function saludar ($nombre) {
		echo "Hola ".$nombre;
	}

	function sumar ($val1, $val2) {
		$resultado= $val1 + $val2;
		return $resultado;
	}

	function restar ($val1, $val2) {
		$resultado= $val1 - $val2;
		return $resultado;
	}

	function multiplicar ($val1, $val2) {
		$resultado= $val1 * $val2;
		return $resultado;
	}

	function dividir ($val1, $val2) {
		$resultado= $val1 / $val2;
		return $resultado;
	}

?>