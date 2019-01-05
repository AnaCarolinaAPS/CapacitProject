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

	<div class="container-fluid text-center" id="banner">
		<div class="container">
			<h1>Titulo de mi pagina</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
			<a class="btn btn-success" href="">Solicitar Informaciones!</a>
		</div>
	</div>

	<!-- INICIO DEL CONTENIDO -->
	<main>
		<section class="contenido" id="home">
			<div class="container">
				<div class="col-md-12 text-center titulo-seccion">
					<h2>Porque estudiar con nosotros?</h2>
					<hr>
					<!-- <div class="linhah"></div> -->
				</div>
				<div class="col-md-4 text-center">
					<h2>Titulo de Seccion</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
				</div>
				<div class="col-md-4 text-center">
					<h2>Titulo de Seccion</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
				</div>
				<div class="col-md-4 text-center">
					<h2>Titulo de Seccion</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
				</div>
			</div>
		</section>

		<section id="banner-medio">
			<div class="container">
				<div class="info-banner-medio">
					<h2>Los mejores cursos están aqui!!</h2>
					<a href="head.php" class="btn btn-success"> Inscribirme ahora</a>
				</div>
			</div>
		</section>

		<section class="contenido" id="cursos-destacados">
			<div class="container">
				<div class="col-md-12 text-center titulo-seccion">
					<h2>Cursos Destacados</h2>
					<hr>
					<!-- <div class="linhah"></div> -->
				</div>
				<div class="col-md-3">
					<h3 class="text-center">Titulo del Curso</h3>
					<!-- para que a imagem fique de tamanho a coluna -->
					<img src="imagenes/course01.jpg" class="img-responsive">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>				
					<div class="row text-center"> 	
						<p>
							<span class="precio-curso">500.000 Gs</span><span class="mes-curso">/Mes</span>
						</p>
					</div>
					<div class="row text-center"> 
						<a href="detalles.php" class="btn btn-info">Detalles</a>
					</div>
				</div>
				<div class="col-md-3">
					<h3 class="text-center">Titulo del Curso</h3>
					<!-- para que a imagem fique de tamanho a coluna -->
					<img src="imagenes/course01.jpg" class="img-responsive">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>				
					<div class="row text-center"> 	
						<p>
							<span class="precio-curso">500.000 Gs</span><span class="mes-curso">/Mes</span>
						</p>
					</div>
					<div class="row text-center"> 
						<a href="detalles.php" class="btn btn-info">Detalles</a>
					</div>
				</div>
				<div class="col-md-3">
					<h3 class="text-center">Titulo del Curso</h3>
					<!-- para que a imagem fique de tamanho a coluna -->
					<img src="imagenes/course01.jpg" class="img-responsive">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>				
					<div class="row text-center"> 	
						<p>
							<span class="precio-curso">500.000 Gs</span><span class="mes-curso">/Mes</span>
						</p>
					</div>
					<div class="row text-center"> 
						<a href="detalles.php" class="btn btn-info">Detalles</a>
					</div>
				</div>
				<div class="col-md-3">
					<h3 class="text-center">Titulo del Curso</h3>
					<!-- para que a imagem fique de tamanho a coluna -->
					<img src="imagenes/course01.jpg" class="img-responsive">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>				
					<div class="row text-center"> 	
						<p>
							<span class="precio-curso">500.000 Gs</span><span class="mes-curso">/Mes</span>
						</p>
					</div>
					<div class="row text-center"> 
						<a href="detalles.php" class="btn btn-info">Detalles</a>
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