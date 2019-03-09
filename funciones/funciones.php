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

		$sql = "SELECT * FROM cursos WHERE activo = 1 ".$limit;
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

	function registrar_mensaje ($post){
		include 'conexion/conexion.php';

		try {
			$sql = "INSERT INTO mensajes (nombre, email, asunto, telefono, mensaje, fecha_add) VALUES (:nombre, :email, :asunto, :telefono, :mensaje, NOW())";

			$data = array(
				'nombre' => $post['nombre'],
				'email' => $post['email'],
				'asunto' => $post['asunto'],
				'telefono' => $post['telefono'],
				'mensaje' => $post['mensaje']
			);

			$query = $connection->prepare($sql);
			if ($query->execute($data)) {
				$mensaje = '<p class="alert alert-success"> Mensaje REGISTRADO correctamente</p>';
			}
			else {
				$mensaje = '<p class="alert alert-success"> No se pudo insertar en la base de datos</p>';
			}
		}
		catch (PDOException $e) {
			$mensaje = "Error >>>> ".$e;
		}

		return $mensaje;
	}

	function enviar_email($post) {
		$headers = "From: ".$post['email'];
		if (mail('sac@gmail.com', $post['asunto'], $post['mensaje'], $headers)){
			$mensaje = '<p class="alert alert-success"> Email ENVIADO correctamente</p>';
		} else {
			$mensaje = '<p class="alert alert-danger"> Email NO pudo ser enviado correctamente</p>';
		}
		return $mensaje;
	}
?>