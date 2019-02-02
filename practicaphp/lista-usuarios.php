<?php
	session_start();
	//variable de session creada en el archivo sesiones.php
	echo $_SESSION['nombre'].'<br>';
	echo "<a href='salir.php'>Salir</a> <br>";

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
					<?php foreach ($result as $row) { ?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['nombre']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['password']; ?></td>
							<td>
								<a href="">Eliminar</a>
								<a href="">Actualizar</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>	
			</table>
		</div>
	</main>
	<!-- /.FIN DEL CONTENIDO -->
</body>
</html>