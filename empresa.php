<?php include "funciones/funciones.php";?>
<!DOCTYPE html>
<html>
<head>
	<title>Empresa | <?php echo parametros()['empresa']; ?></title>
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
		<section class="contenido">
			<div class="container">
				<div class="row">
					<img src="imagenes/blog04.jpg" style="width: 100%">
				</div>

				<div class="col-md-12">
					<div class="row">
						<h3>Sobre Nosotros</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
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