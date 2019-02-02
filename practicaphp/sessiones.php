<?php
	session_start();

	$_SESSION['nombre'] = "Juan";
	$_SESSION['email'] = "juan@gmail.com";

	//imprimir variable de session
	echo $_SESSION['nombre'];
?>