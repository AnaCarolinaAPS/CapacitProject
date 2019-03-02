<?php include "funciones/funciones.php";?>
<!DOCTYPE html>
<html>
<head>
	<title>Cursos | <?php echo parametros()['empresa']; ?></title>
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
				<h1>Cursos</h1>
				<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod empor incididunt ut labore et dolore magna aliqua.</h2>
			</div>
		</section>

		<section class="contenido" id="cursos-destacados">
			<div class="container">
				<?php
					foreach (getCursosDestacados(0) as $curso) {
				?>

					<div class="col-md-3" style="min-height: 400px;">
						<h3 class="text-center"><?php echo $curso['nombre'];?></h3>
						<!-- para que a imagem fique de tamanho a coluna -->
						<img src="imagenes/<?php echo $curso['imagen'];?>" class="img-responsive">
						<p><?php echo $curso['descripcion_corta'];?></p>		
						<div class="row text-center"> 	
							<p>
								<span class="precio-curso"><?php echo $curso['precio'];?></span><span class="mes-curso">/Mes</span>
							</p>
						</div>
						<div class="row text-center"> 
							<a href="detalles.php?id=<?php echo $curso['id'];?>" class="btn btn-info">Detalles</a>
						</div>
					</div>
				<?php } ?>				
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