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

  <script>
    function subir_imagen(input, carpeta){
          self.name = 'opener';
          var name = document.getElementsByName("titulo")[0].value;
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

  <?php 
    if (isset($_POST) && isset($_POST['guardar'])) {

      if($_POST['titulo'] != '' && $_POST['descripcion'] != '' && $_POST['imagen'] != '' && $_POST['posicion'] != '' ) {
        //Capturar os dados recebido do formuário via post e guardar em variables
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $imagen = $_POST['imagen'];
        $posicion = $_POST['posicion'];
        $titulobtn = $_POST['titulobtn'];
        $url = $_POST['url'];
        $activo = $_POST['activo'];

        $sql = 'INSERT INTO banner (titulo, descripcion, imagen, posicion, titulobtn, url, activo) VALUES (:titulo, :descripcion, :imagen, :posicion, :titulobtn, :url, :activo)';

        $data = array(
          'titulo' => $titulo,
          'descripcion' => $descripcion,
          'posicion' => $posicion,
          'imagen' => $imagen,
          'titulobtn' => $titulobtn,
          'url' =>$url,
          'activo' => $activo
        );

        //var_dump($data);
        $query = $connection->prepare($sql);

        //var_dump($query);

        try {
          $query->execute($data);
          $mensaje = '<p class="alert alert-success"> Registro INSERIDO correctamente</p>';
          $_SESSION['mensaje'] = $mensaje;
          //Redirecionamos al listado de usuários com javascript
          echo '<script> window.location = "banner.php"; </script>';
        } catch (Exception $e) {
          $mensaje = '<p class="alert alert-danger">' . $e . '</p>';
          echo '<script> window.location = "banner.php"; </script>';
        }

        // var_dump($mensaje);
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
        Registro de Banner   <a href="banner.php" class="btn btn-success">Lista de Banner</a>      
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
            <label>Imagen</label>
            <input type="text" name="imagen" class="form-control" id="imagen"  onclick="subir_imagen('imagen', 'imagenes')">

            <label>Titulo</label>
            <input type="text" name="titulo" class="form-control" required>

            <label>Descripción</label>
            <input type="text" name="descripcion" class="form-control" required>

            <label>Titulo Botón</label>
            <input type="text" name="titulobtn" class="form-control" required>

            <label>Url</label>
            <input type="text" name="url" class="form-control">

            <label>Posición</label>
            <input type="text" name="posicion" class="form-control">

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