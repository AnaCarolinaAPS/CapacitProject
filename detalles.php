<!DOCTYPE html>
<html>
<head>
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
				<h1>Titulo del Curso</h1>
				<h2>Descripción Corta del Curso: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod empor incididunt ut labore et dolore magna aliqua.</h2>
			</div>
		</section>

		<section class="contenido">
			<div class="container">
				<div class="col-md-3">
					<h3>Detalles</h3>
					<!-- INICIO DEL PRECIO -->
					<div class="media">
						<div class="media-left">
							<!-- <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> -->
						</div>
						<div class="media-body">
							<h4 class="media-heading">Precio</h4>
							<span>500.000 GS</span>
						</div>
					</div>
					<!-- FIN DEL PRECIO -->

					<!-- INICIO DE LA DURACION -->
					<div class="media">
						<div class="media-left">
							<!-- <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> -->
						</div>
						<div class="media-body">
							<h4 class="media-heading">Duración</h4>
							<span>5 meses</span>
						</div>
					</div>
					<!-- FIN DE LA DURACION -->

					<!-- INICIO DE LA FREQUENCIA -->
					<div class="media">
						<div class="media-left">
							<!-- <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> -->
						</div>
						<div class="media-body">
							<h4 class="media-heading">Días</h4>
							<span>Lunes y Viernes</span>
						</div>
					</div>
					<!-- FIN DE LA FREQUENCIA -->
				</div>
				<div class="col-md-9">
					<p>Descripción</p>
				</div>
			</div>
			
		</section>
	</main>
	<!-- /.FIN DEL CONTENIDO -->

	<!-- INICIO DEL FOOTER -->
	<?php include 'includes/footer.php'; ?>
	<!-- /.FIN DEL FOOTER -->	

	<?php include 'includes/scripts.php'; ?>
</body>
</html>