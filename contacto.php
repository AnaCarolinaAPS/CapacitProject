<?php include "funciones/funciones.php";?>
<!DOCTYPE html>
<html>
<head>
	<title>Contacto | <?php echo parametros()['empresa']; ?></title>
	<!-- Descrição da Página para o google-->
	<meta name="description" content="Curso de programación y diseño en CDE - PY">
	<!-- Palavras Chave da Página para o google-->
	<meta name="keywords" content="programación, cursos, desarollo web, ciudad del este">

	<!-- INICIO DEL HEADER -->
	<?php include 'includes/head.php'; ?>
	<!-- /.FIN DEL HEADER -->

</head>
<body>
	<!-- INICIO DEL HEADER -->
	<?php include 'includes/header.php'; ?>
	<!-- /.FIN DEL HEADER -->
	<?php 

		if (isset($_POST) && isset($_POST['enviar'])) {
			// $_SESSION['mensaje'] = registrar_mensaje($_POST);
			$_SESSION['mensaje'] = enviar_email($_POST);
		}
	?>
	<!-- INICIO DEL CONTENIDO -->
	<main>
		<section class="main-header">
			<div class="container">
				<h1>Contacto</h1>
				<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod empor incididunt ut labore et dolore magna aliqua.</h2>
			</div>
		</section>

		<section class="contenido">
			<div class="container">
				<?php include 'includes/mensajes.php'; ?>
				<div class="col-md-3">
					<h3>Informaciones</h3>
					<div class="media">
						<div class="media-left">
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Telefono</h4>
							<span><?php echo parametros()['telefono']; ?></span>
						</div>
					</div>	
					<div class="media">
						<div class="media-left">
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Whatsapp</h4>
							<span><?php echo parametros()['whatsapp']; ?></span>
						</div>
					</div>				
					<div class="media">
						<div class="media-left">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Email</h4>
							<span><?php echo parametros()['email']; ?></span>
						</div>
					</div>
					<div class="media">
						<div class="media-left">
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Dirección</h4>
							<span><?php echo parametros()['direccion']; ?></span>
						</div>
					</div>
					<div class="media">
						<div class="media-left">
							<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Horário de Atención</h4>
							<span><?php echo parametros()['horario']; ?></span>
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<h3>Formulario de Contacto</h3>
					<form action="" method="POST">
						<input type="email" name="email" class="form-control" placeholder="E-mail" required>

						<input type="text" name="nombre" class="form-control" placeholder="Nombre" required>

						<input type="text" name="apellido" class="form-control" placeholder="Apellido">

						<input type="text" name="asunto" class="form-control" placeholder="Asunto" required>

						<input type="text" name="telefono" class="form-control" placeholder="Telefono" required>

						<label for="mensaje">Mensaje</label>
						<textarea name="mensaje" class="form-control" required> </textarea>

						<button type="submit" name="enviar" value="enviar" class="btn btn-success">Enviar Mensaje</button>
					</form>
				</div>
			</div>
		</section>
		<section>
			<div class="container-fluid">
				<div class="container">
					<div class="row">
					<iframe src="<?php echo parametros()['google_maps']; ?>" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				</div>			
			</div>
		</section>
	</main>
	<!-- FIN DEL CONTENIDO -->

	<!-- INICIO DEL FOOTER -->
	<?php include 'includes/footer.php'; ?>
	<!-- /.FIN DEL FOOTER -->

	<?php include 'includes/scripts.php'; ?>
</body>
</html>