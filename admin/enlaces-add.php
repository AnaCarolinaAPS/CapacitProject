<?php
session_start();
if (!isset($_SESSION['logueado'])) {
  header('Location: login.php');
}

require "../conexion/conexion.php";
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

  <?php 
    if (isset($_POST) && isset($_POST['guardar'])) {

      if($_POST['nombre'] != '' && $_POST['padre'] != '' && $_POST['posicion'] != '' && $_POST['url'] != '' && $_POST['activo']) {
        //Capturar os dados recebido do formuário via post e guardar em variables
        $nombre = $_POST['nombre'];
        $id_padre = $_POST['padre'];
        $posicion = $_POST['posicion'];
        $url = $_POST['url'];
        $visible = $_POST['activo'];

        $sql = 'INSERT INTO links (nombre, id_padre, posicion, url, visible, target, fecha_add, fecha_update) VALUES (:nombre, :id_padre, :posicion, :url, :visible, "_parent", NOW(), NOW() )';

        $data = array(
          'nombre' => $nombre,
          'id_padre' => $id_padre,
          'posicion' => $posicion,
          'url' => $url,
          'visible' => $visible
        );

        //var_dump($data);
        $query = $connection->prepare($sql);

        //var_dump($query);

        try {
          $query->execute($data);
          $mensaje = '<p class="alert alert-success"> Registro INSERIDO correctamente</p>';
          //Redirecionamos al listado de usuários com javascript
          echo '<script> window.location = "enlaces.php"; </script>';
        } catch (Exception $e) {
          $mensaje = '<p class="alert alert-danger">' . $e . '</p>';
        }

        $_SESSION['mensaje'] = $mensaje;

        //var_dump($mensaje);
      }

    }    
  ?>

  <!-- Left side column. contains the logo and sidebar -->
  <?php include 'includes/aside.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Registro de Enlaces   <a href="enlaces.php" class="btn btn-success">Lista de Enlaces</a>      
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
            //var_dump($data);
            // if (isset($mensaje)) {
            //   echo $mensaje;
            // }
        ?>
        <form action="" method="POST" name="form">
          <div class="form-group col-md-6">
            <label>Nombre del Enlace</label>
            <input type="text" name="nombre" class="form-control" required>

            <label>Enlace Padre</label>
            <select class="form-control" name="padre">                 
              <?php
                $sql = "SELECT id, nombre FROM links WHERE visible = 1";
                $query2 = $connection->prepare($sql);
                $query2->execute();   
                $link_padre= $query2->fetchAll();

                echo "<option value=0>-</option>";
                foreach ($link_padre as $link) {
                  echo "<option value=".$link['id'].">".$link['nombre']."</option>";
                }
              ?>  
            </select>

            <label>Posicion en Submenu</label>
            <input type="number" name="posicion" value="0" class="form-control" required>

            <label>URL</label>
            <input type="text" name="url" value="#" class="form-control">

            <label>Activo</label>
            <select class="form-control" name="activo">
              <option value="1">Sí</option>
              <option value="0">No</option>
            </select>
            
            <br>
            <input type="submit" class="btn btn-success" name="guardar" value="guardar">
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