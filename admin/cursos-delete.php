<?php
	require "../conexion/conexion.php";
	session_start();
	$total = 0;

	if (isset($_GET['id']) && isset($_GET['id']) != '') {
		$id = $_GET['id'];

		try {
			$sql = "SELECT * FROM cursos WHERE id = '$id'";
			$query = $connection->prepare($sql);
			$query->execute();
			$total= $query->rowCount();			
		} catch (Exception $e) {
			echo $e;
		}
	}

	if ($total > 0) {
		try {
			$sql = "DELETE FROM cursos WHERE id = '$id'";
			$query = $connection->prepare($sql);
			$query->execute();
		} catch (Exception $e) {
			echo $e;
		}

		$mensaje = '<p class="alert alert-success"> Registro DELETADO correctamente</p>';
		$_SESSION['mensaje'] = $mensaje;

		echo '<script> window.location = "cursos.php"; </script>';

		//header('Location:mensajes.php');
	} else {
		header('Location:cursos.php?error=true');
	}
?>