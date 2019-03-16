<?php 
	//include "funciones/funciones.php";
?>
<header>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" style="padding: 8px 10px;"> <img src="imagenes/<?php echo parametros()['logo']; ?>" class="img-responsive" style="height: 100%;"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      	<?php
          if ($menu_padre = getMenuPadre(1)) {
              foreach ($menu_padre as $fila) {
                if($menu_hijo = getMenuHijo($fila['id'])) { ?>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspoup="true" aria-expanded="false"><?php echo $fila['nombre']?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <?php foreach ($menu_hijo as $fila_hijo) {
                        ?>
                        <li><a href="<?php echo $fila_hijo['url']?>"><?php echo $fila_hijo['nombre']?></a></li>                        
                      <? }

                      ?>
                    </ul>

                  </li>
                <?php
                }
                else { ?>
                  <li><a href="<?php echo $fila['url']?>"><?php echo $fila['nombre']?></a></li>
                <?php   
                }
              }
          }
      	?>
        	<!-- <li><a href="<?php //echo $link['url']?>"><?php //echo $link['nombre']?></a></li> -->        
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li> -->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<!-- <div class="container-fluid" id="menu-principal">
		<div class="container">
			<nav>
				<a href="index.php" class="logo"> <img src="imagenes/<?php //echo parametros()['logo']; ?>"></a>
				<ul>
					<li>
						<a href="index.php">Inicio</a>
					</li>
					<li>
						<a href="cursos.php">Cursos</a>
					</li>
					<li>
						<a href="empresa.php">Empresa</a>
					</li>
					<li>
						<a href="contacto.php">Contacto</a>
					</li>
				</ul>
			</nav>
		</div>
	</div> -->
</header>