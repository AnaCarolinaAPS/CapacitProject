<?php
  session_start();
  if (!isset($_SESSION['logueado'])) {
    header('Location: login.php');
  }

  require "../conexion/conexion.php";

  $total = 0;

  if (isset($_GET['id']) && isset($_GET['id']) != '') {
    $id = $_GET['id'];

    try {
      $sql = "SELECT * FROM cursos WHERE id = '$id'";
      $query = $connection->prepare($sql);
      $query->execute();
      $total= $query->rowCount();     
    } catch (Exception $e) {
      echo $e;
    }
  }

  if (isset($_POST) && isset($_POST['actualizar']) == 'actualizar') {
     if($_POST['nombre'] != '' && $_POST['descripcion_corta'] != '' && $_POST['descripcion_detallada'] != '' && $_POST['imagen'] != '' && $_POST['precio'] != '' && $_POST['duracion'] != '' && $_POST['dias'] != '') {
        //Capturar os dados recebido do formuário via post e guardar em variables
        $nombre = $_POST['nombre'];
        $descripcion_corta = $_POST['descripcion_corta'];
        $descripcion_detallada = $_POST['descripcion_detallada'];
        $imagen = $_POST['imagen'];
        $precio = $_POST['precio'];
        $duracion = $_POST['duracion'];
        $dias = $_POST['dias'];
        $activo = $_POST['activo'];

        $sql = "UPDATE cursos SET nombre = :nombre, descripcion_corta = :descripcion_corta, descripcion_detallada = :descripcion_detallada, imagen = :imagen , precio = :precio, duracion = :duracion, dias = :dias, activo = :activo, fecha_update = NOW() WHERE id = '$id'";

        $data = array(
          'nombre' => $nombre,
          'descripcion_corta' => $descripcion_corta,
          'descripcion_detallada' => $descripcion_detallada,
          'imagen' => $imagen,
          'precio' => $precio,
          'duracion' =>$duracion,
          'dias' => $dias,
          'activo' => $activo
        );

        $query = $connection->prepare($sql);

        try {
          $query->execute($data);
          $mensaje = '<p class="alert alert-success"> Registro ACTUALIZADO correctamente</p>';
          $_SESSION['mensaje'] = $mensaje;
          //var_dump($_SESSION['mensaje']);
          //Redirecionamos al listado de usuários com javascript
          echo '<script> window.location = "cursos.php"; </script>';
        } catch (Exception $e) {
          $mensaje = '<p class="alert alert-danger">' . $e . '</p>';
        }
      }
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <script>
    function subir_imagen(input, carpeta){
          self.name = 'opener';
          var name = document.getElementsByName("nombre")[0].value;
          remote = open('gestor/subir_imagen.php?name='+name+'&input='+input+'&carpeta='+carpeta ,'remote', 'align=center,width=600,height=300,resizable=yes,status=yes');
          remote.focus();
        }
  </script>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <?php include 'includes/header.php'; ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include 'includes/aside.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Registro de Usuarios   <a href="cursos.php" class="btn btn-success">Lista de Cursos</a>      
      </h1>
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>

    </section>
    <!-- Main content -->
    <section class="content container-fluid">
       
    <!-- Formulário -->
    <div class="col-sm-12">       
      <div class="panel row">            
        <?php 
            //include 'includes/mensajes.php';
            if ($total > 0) {
              $curso = $query->fetch();

              //var_dump($curso);
            }
        ?>
        <form action="" method="POST" name="form">
          <div class="form-group col-md-6">
            <label>Nombre del Curso</label>
            <input type="text" name="nombre" value="<?php echo $curso['nombre']; ?>" class="form-control" required>

            <label>Descripción Corta</label>
            <input type="text" name="descripcion_corta" value="<?php echo $curso['descripcion_corta']; ?>" class="form-control" required>

            <label>Descripción Detallada</label>
            <input type="text" name="descripcion_detallada" value="<?php echo $curso['descripcion_detallada']; ?>"class="form-control" required>
            
            <label>Precio</label>
            <input type="text" name="precio" value="<?php echo $curso['precio']; ?>" class="form-control">

            <label>Duración</label>
            <input type="text" name="duracion" value="<?php echo $curso['duracion']; ?>" class="form-control">

            <label>Días</label>
            <input type="text" name="dias" value="<?php echo $curso['dias']; ?>" class="form-control">

            <label>Imagen</label>
            <input type="text" name="imagen" class="form-control" id="imagen"  onclick="subir_imagen('imagen', 'imagenes')" value="<?php echo $curso['imagen']; ?>">
            <!-- <input type="text" name="imagen" value="<?php //echo $curso['imagen']; ?>" class="form-control"> -->

            <label>Activo</label>
            <select class="form-control" name="activo">
              <option value="1" <?php if ($curso['activo'] == '1') { echo " selected";} ?> >Sí</option>
              <option value="0" <?php if ($curso['activo'] == '0') { echo " selected";} ?> >No</option>
            </select>
            
            <br>
            <input type="submit" class="btn btn-success" name="actualizar" value="actualizar">
          </div>
        </form>          
      </div> 
    </div>             
 
    <!-- / FIN Formulário DE DATOS -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?php include 'includes/footer.php'; ?>  
 
 </div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>  