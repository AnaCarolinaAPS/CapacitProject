<!DOCTYPE html>
<html>
<head>
	<title>GoAna Bootstrap - Contacto</title>
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
				<div class="col-md-3">
					<h3>Informaciones</h3>
					<div class="media">
						<div class="media-left">
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Telefono</h4>
							<span>0983112965</span>
						</div>
					</div>
					<div class="media">
						<div class="media-left">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Email</h4>
							<span>miemail@mipagina.com</span>
						</div>
					</div>
					<div class="media">
						<div class="media-left">
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Dirección</h4>
							<span>Av. San Blas. Km 3 1/2 <br> Ciudad del Este - PY</span>
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<h3>Formulario de Contacto</h3>
					<form>
						<input type="text" name="nombre" class="form-control" placeholder="Nombre" required>

						<input type="text" name="apellido" class="form-control" placeholder="Apellido">

						<input type="text" name="asunto" class="form-control" placeholder="Asunto" required>

						<input type="text" name="telefono" class="form-control" placeholder="Telefono" required>

						<label for="mensaje">Mensaje</label>
						<textarea name="mensaje" class="form-control" required> </textarea>

						<button type="submit" name="enviar" class="btn btn-success">Enviar Mensaje</button>
					</form>
				</div>
			</div>
		</section>
		<section>
			<div class="container-fluid">
				<div class="container">
					<div class="row">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14403.860518913816!2d-54.628910154492175!3d-25.506209456037062!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb12fbfc9747b41e3!2sCapacit!5e0!3m2!1spt-BR!2spy!4v1546711618368" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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