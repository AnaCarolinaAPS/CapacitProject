<?php
  session_start();
  if (!isset($_SESSION['logueado'])) {
    header('Location: login.php');
  }

  require "../conexion/conexion.php";

  $total = 0;

  $id = 1; //vamos a usar solamente el id 1
  try {
    $sql = "SELECT * FROM parametros WHERE id = '$id'";
    $query = $connection->prepare($sql);
    $query->execute();
    $total= $query->rowCount();     
  } catch (Exception $e) {
    echo $e;
  }

  if ($total == 0) {
    $sql = "INSERT INTO parametros (id, empresa, logo, favicon, telefono, whatsapp, direccion, email, horario, facebook, instagram, twitter, youtube, google_maps, descripcion) VALUES ('1', 'Empresa', 'empresa-logo.jpg', 'empresa-favico.jpg', '0000 000 000', '+595 000 000 000', 'Ciudad del Este', 'empresa@gmail.com', '00:00 hasta 00:00 ', 'empresa-facebook', 'empresa-instagram', 'empresa-twitter', 'empresa-youtube', '', 'Descripcion de la empresa');";
    $query = $connection->prepare($sql);
    $query->execute();
  }

  if (isset($_POST) && isset($_POST['actualizar']) == 'actualizar') {
     if($_POST['empresa'] != '' && $_POST['logo'] != '' && $_POST['favicon'] != '' && $_POST['telefono'] != '' && $_POST['whatsapp'] != '' && $_POST['direccion'] != '' && $_POST['email'] != '' & $_POST['horario'] != '' & $_POST['descripcion'] != '') {
        //Capturar os dados recebido do formuário via post e guardar em variables
        $empresa = $_POST['empresa'];
        $logo = $_POST['logo'];
        $favicon = $_POST['favicon'];
        $telefono = $_POST['telefono'];
        $whatsapp = $_POST['whatsapp'];
        $direccion = $_POST['direccion'];
        $email = $_POST['email'];
        $horario = $_POST['horario'];
        $facebook = $_POST['facebook'];
        $instagram = $_POST['instagram'];
        $twitter = $_POST['twitter'];
        $youtube = $_POST['youtube'];
        $google_maps = $_POST['google_maps'];
        $descripcion = $_POST['descripcion'];
        $titulo_inicio = $_POST['titulo_inicio'];
        $desc_inicio = $_POST['desc_inicio'];
        $sobre_nosotros = $_POST['sobre_nosotros'];
        
        $sql = "UPDATE parametros SET empresa = :empresa, logo = :logo, favicon = :favicon, telefono = :telefono, whatsapp = :whatsapp, direccion = :direccion, email = :email, horario = :horario, facebook = :facebook, instagram = :instagram, twitter = :twitter, youtube = :youtube, google_maps = :google_maps, descripcion = :descripcion, titulo_inicio = :titulo_inicio,  desc_inicio = :desc_inicio, sobre_nosotros = :sobre_nosotros  WHERE id = '$id'";

        $data = array(
          'empresa' => $empresa,
          'logo' => $logo,
          'favicon' => $favicon,
          'telefono' => $telefono,
          'whatsapp' => $whatsapp,
          'direccion' => $direccion,
          'email' => $email,
          'horario' => $horario,
          'facebook' => $facebook,
          'instagram' => $instagram,
          'twitter' => $twitter,
          'youtube' => $youtube,
          'google_maps' => $google_maps,
          'descripcion' => $descripcion,
          'titulo_inicio' => $titulo_inicio,
          'desc_inicio' => $desc_inicio,
          'sobre_nosotros' => $sobre_nosotros
        );

        $query = $connection->prepare($sql);

        try {
          $query->execute($data);
          $mensaje = '<p class="alert alert-success"> Parametros ACTUALIZADOS correctamente</p>';
          $_SESSION['mensaje'] = $mensaje;
          //var_dump($_SESSION['mensaje']);
          //Redirecionamos al listado de usuários com javascript
          echo '<script> window.location = "parametros.php"; </script>';
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

  <script src="bower_components/jQuery/dist/jquery.min.js"></script>

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
          var name = document.getElementsByName("empresa")[0].value;
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
        Parametros
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
            include 'includes/mensajes.php';
            //var_dump($total);
            if ($total > 0) {
              $parametro = $query->fetch();
              $total = 0;
              //var_dump($parametro);
            }
        ?>
        <form action="" method="POST" name="form">
          <div class="form-group col-md-6">
            <label>Nombre de la Empresa</label>
            <input type="text" name="empresa" value="<?php echo $parametro['empresa']; ?>" class="form-control" required>

            <label>Descripcion</label>
            <input type="text" name="descripcion" value="<?php echo $parametro['descripcion']; ?>" class="form-control" required>

            <!-- <label>Logo</label> -->
            <!-- <div class="form-group col-md-12"> -->
            <label>Logo</label>
            <input type="text" name="logo" class="form-control" id="imagen"  onclick="subir_imagen('imagen', 'imagenes')" value="<?php echo $parametro['logo']; ?>">
            <!-- </div> -->
            <!-- <input type="text" name="logo" value="<?php echo $parametro['logo']; ?>" class="form-control" required> -->

            <label>Favicon</label>
            <input type="text" name="favicon" value="<?php echo $parametro['favicon']; ?>" class="form-control" required>

            <label>Telefono</label>
            <input type="text" name="telefono" value="<?php echo $parametro['telefono']; ?>" class="form-control" required>

            <label>Whatsapp</label>
            <input type="text" name="whatsapp" value="<?php echo $parametro['whatsapp']; ?>" class="form-control" required>

            <label>Direccion</label>
            <input type="text" name="direccion" value="<?php echo $parametro['direccion']; ?>" class="form-control" required>

            <label>Email</label>
            <input type="text" name="email" value="<?php echo $parametro['email']; ?>" class="form-control" required>

            <label>Horario</label>
            <input type="text" name="horario" value="<?php echo $parametro['horario']; ?>" class="form-control" required>

            <label>Facebook</label>
            <input type="text" name="facebook" value="<?php echo $parametro['facebook']; ?>" class="form-control">

            <label>Instagram</label>
            <input type="text" name="instagram" value="<?php echo $parametro['instagram']; ?>" class="form-control">

            <label>Twitter</label>
            <input type="text" name="twitter" value="<?php echo $parametro['twitter']; ?>" class="form-control">

            <label>Youtube</label>
            <input type="text" name="youtube" value="<?php echo $parametro['youtube']; ?>" class="form-control">

            <label>Google Maps</label>
            <input type="text" name="google_maps" value="<?php echo $parametro['google_maps']; ?>" class="form-control">

            <label>Titulo del Inicio</label>
            <input type="text" name="titulo_inicio" value="<?php echo $parametro['titulo_inicio']; ?>" class="form-control" required>

            <label>Descrición del Inicio</label>
            <input type="text" name="desc_inicio" value="<?php echo $parametro['desc_inicio']; ?>" class="form-control" required>

            <label>Sobre Nosotros</label>
            <input type="text" name="sobre_nosotros" value="<?php echo $parametro['sobre_nosotros']; ?>" class="form-control" required>

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