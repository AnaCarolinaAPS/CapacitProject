<?php include "funciones/funciones.php";?>
<!DOCTYPE html>
<html>
<head>
	<title>Desarollo Web | <?php echo parametros()['empresa']; ?></title>
	<!-- Descrição da Página para o google-->
	<meta name="description" content="Curso de programación y diseño en CDE - PY">
	<!-- Palavras Chave da Página para o google-->
	<meta name="keywords" content="programación, cursos, desarollo web, ciudad del este">
	
	<!-- INICIO DEL HEADER -->
	<?php include 'includes/head.php'; ?>
	<!-- /.FIN DEL HEADER -->

	<!-- <style type="text/css">
		.banner {	
			min-height: 350px;
			background: url('imagenes/imagen_1552158214.jpg');
			text-align: center;
			background-attachment: fixed;
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style> -->
</head>
<body>
	<!-- INICIO DEL HEADER -->
	<?php include 'includes/header.php'; ?>
	<!-- /.FIN DEL HEADER -->

	<div class="text-center owl-carousel owl-theme">
	    <?php 
	    	foreach (banner() as $banner) {
	    	?>
		    <div class="owl-banner" style="background: url('imagenes/<?php echo $banner['imagen']; ?>'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
		    	<br>
		    	<br>
		    	<br>
		    	<br>
		    	<!-- <div style="background: white; opacity: 0.75; width: 100%; height: 100%;"> -->
		    		<h1><?php echo $banner['titulo']; ?></h1>
			    	<p><?php echo $banner['descripcion']; ?></p>
					<a class="btn btn-success" href="<?php echo $banner['url']; ?>"><?php echo $banner['titulobtn']; ?></a>
		    	<!-- </div>		    	 -->
		    </div>
		   <?php }	
	    	?>
	</div>
	<!-- <div class="container-fluid text-center" id="banner">
		<div class="container">
			<h1><?php //echo parametros()['titulo_inicio']; ?></h1>
			<p><?php //echo parametros()['desc_inicio']; ?></p>
			<a class="btn btn-success" href="contacto.php">Solicitar Informaciones!</a>
		</div>
	</div> -->

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
				<?php
					foreach (getCursosDestacados(4) as $curso) {

				?>
					<div class="col-md-3">
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
				<!-- <div class="col-md-3">
					<h3 class="text-center">Titulo del Curso</h3> -->
					<!-- para que a imagem fique de tamanho a coluna -->
					<!-- <img src="imagenes/course01.jpg" class="img-responsive">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>				
					<div class="row text-center"> 	
						<p>
							<span class="precio-curso">500.000 Gs</span><span class="mes-curso">/Mes</span>
						</p>
					</div>
					<div class="row text-center"> 
						<a href="detalles.php" class="btn btn-info">Detalles</a>
					</div>
				</div> -->
			</div>
		</section>
	</main>
	<!-- /.FIN DEL CONTENIDO -->

	<!-- INICIO DEL FOOTER -->
	<?php include 'includes/footer.php'; ?>
	<!-- /.FIN DEL FOOTER -->	

	<?php include 'includes/scripts.php'; ?>

	<script type="text/javascript">
		$(document).ready(function(){
			 $('.owl-carousel').owlCarousel({
			    loop:true,
			    margin:10,
			    nav:true,
			    responsive:{
			        0:{
			            items:1
			        },
			        600:{
			            items:1
			        },
			        1000:{
			            items:1
			        }
			    }
			})
		});
	</script>
</body>
</html>