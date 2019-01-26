<?php
	require "../conexion/conexion.php";

	$sql = "SELECT * FROM usuarios";
	$query = $connection->prepare($sql);
	$query->execute();

	$result = $query->fetchAll();

	//var_dump($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Practica PHP</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
	
	<!-- INICIO DEL CONTENIDO -->
	<main>
		<div class="col-sm-12 text-right">
			<a href="index.php">Volver</a>
		</div>
		
		<div class="col-sm-12">
			<h1>Lista de Usuários</h1>
			<table class="table table-bordered">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Email</th>
					<th>Password</th>
					<th>Acciones</th>
				</thead>
				<tbody>
					<tr>
						<td>--</td>
						<td>--</td>
						<td>--</td>
						<td>--</td>
						<td>
							<a href="">Eliminar</a>
							<a href="">Actualizar</a>
						</td>
					</tr>

				</tbody>	
			</table>
		</div>
	</main>
	<!-- /.FIN DEL CONTENIDO -->
</body>
</html>