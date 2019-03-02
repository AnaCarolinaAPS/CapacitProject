<?php
	function parametros() {
		include 'conexion/conexion.php';

		$sql = "SELECT * FROM parametros WHERE id = 1";
		$query = $connection->prepare($sql);
		$query->execute();

		//Caso não exista a linha de parametros
		if (!$query->rowCount() > 0) {
			$sql = "INSERT INTO parametros SET id VALUES 1";
			$query2 = $connection->prepare($sql);
			$query2->execute();
		}

		//Devolve o Array com os dados
		return $query->fetch();
	}

	function getDetalleCurso($id) {
		include 'conexion/conexion.php';

		$sql = "SELECT * FROM cursos WHERE id = ".$id;
		$query = $connection->prepare($sql);
		$query->execute();

		//Caso exista a linha de parametros
		if ($query->rowCount() > 0) {
			//Devolve o Array com os dados
			return $query->fetch();
		}		
		return 0;
	}

	function getCursosDestacados($cantidad) {
		include 'conexion/conexion.php';

		if ($cantidad == 0) {
			$limit = '';
		} else {
			$limit = 'LIMIT '.$cantidad;
		}

		$sql = "SELECT * FROM cursos ".$limit;
		$query = $connection->prepare($sql);
		$query->execute();

		//Caso exista a linha de parametros
		if ($query->rowCount() > 0) {
			//Devolve o Array com os dados
			return $query->fetchAll();
		}		
		return 0;
	}
	function getLinks() {
		include 'conexion/conexion.php';

		$sql = "SELECT * FROM links WHERE visible = 1";
		$query = $connection->prepare($sql);
		$query->execute();

		//Caso exista links
		if ($query->rowCount() > 0) {
			//Devolve o Array com os dados
			return $query->fetchAll();
		}		
		return 0;
	}
?>