<?php
  require "../conexion/conexion.php";

    if (isset($_SESSION['usuario_id'])) {
      $id = $_SESSION['usuario_id'];

      //$user['nombre'] = $id;
      try {
        $sqlus = "SELECT * FROM usuarios WHERE id = '$id'";
        $queryus = $connection->prepare($sqlus);
        $queryus->execute();
        $user= $queryus->fetch();
        //$total= $query->rowCount();     
      } catch (Exception $e) {
        echo $e;
      }
    }

  
?>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../imagenes/<?php echo $user['avatar']; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user['nombre']; ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Inicio</span></a></li>
        <li><a href="cursos.php"><i class="fa fa-link"></i> <span>Cursos</span></a></li>
        <li><a href="mensajes.php"><i class="fa fa-link"></i> <span>Mensajes</span></a></li>
        <li><a href="usuarios.php"><i class="fa fa-link"></i> <span>Usuarios</span></a></li>
        <li><a href="enlaces.php"><i class="fa fa-link"></i> <span>Enlaces</span></a></li>
        <li><a href="parametros.php"><i class="fa fa-link"></i> <span>Parametros</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>