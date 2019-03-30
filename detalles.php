<?php include "funciones/funciones.php";
	// if (isset($_GET['id'])) {
	// 	getDetalleCurso($_GET['id']);
	// }
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo getDetalleCurso($_GET['id'])['nombre']?> | <?php echo parametros()['empresa']; ?></title>
	<!-- Descrição da Página para o google-->
	<meta name="description" content="?php echo getDetalleCurso($_GET['id'])['descripcion_corta']?>">
	<!-- Palavras Chave da Página para o google-->
	<meta name="keywords" content="programación, cursos, desarollo web, ciudad del este">
	
	<!-- INICIO DEL HEADER -->
	<?php include 'includes/head.php'; ?>
	<!-- /.FIN DEL HEADER -->

	<!-- trocando a imagem do fundo com PHP -->
	<?php $imagem = getDetalleCurso($_GET['id'])['imagen']?>
	<style type="text/css">
		#banner-medio {	
			min-height: 350px;
			background: url('imagenes/<?php echo $imagem; ?>');
			text-align: center;
			background-attachment: fixed;
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
	
</head>
<body>
	<!-- INICIO DEL HEADER -->
	<?php include 'includes/header.php'; ?>
	<!-- /.FIN DEL HEADER -->
	
	<!-- INICIO DEL CONTENIDO -->
	<main>
<!-- 		<section class="main-header">
			<div class="container">
				
			</div>
		</section>
 -->
		<section id="banner-medio">
			<div class="container">
				<div class="info-banner-medio">
					<h1><?php echo getDetalleCurso($_GET['id'])['nombre']?></h1>
				<h2><?php echo getDetalleCurso($_GET['id'])['descripcion_corta']?></h2>
				</div>
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
							<span><?php echo getDetalleCurso($_GET['id'])['precio']?></span>
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
							<span><?php echo getDetalleCurso($_GET['id'])['duracion']?></span>
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
							<span><?php echo getDetalleCurso($_GET['id'])['dias']?></span>
						</div>
					</div>
					<!-- FIN DE LA FREQUENCIA -->
				</div>
				<div class="col-md-9">
					<p>Descripción</p>
					<?php echo getDetalleCurso($_GET['id'])['descripcion_detallada']?>
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