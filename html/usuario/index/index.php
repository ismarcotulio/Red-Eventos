<?php 

if(!isset($_SESSION['app_id'])){
	header('location: ?view=index');
}

?>
<?php
  if(isset($_GET['success'])) {
    echo '<div class="alert alert-dismissible alert-success">
      <strong>Activado!</strong> tu usuario ha sido activado correctamente.
    </div>';
  }

  if(isset($_GET['error'])) {
    echo '<div class="alert alert-dismissible alert-danger">
      <strong>Error!</strong></strong> no se ha podido activar tu usuario.
    </div>';
  }
?>


	
	<?php include('html/overall/header.php'); ?>
	<head>
		<title>Inicio|| <?php echo $_users[$_SESSION['app_id']]['Nombre_Usuario']; ?> </title>
		<link rel="stylesheet" href="views/app/css/mediaIndex.css" type="text/css">
	</head>
	<body link="#fff" vlink="#fff" alink="#fff"  style="height:100%; width:100%;">
		<div class="container-fluid" style="margin:0; padding:0;" >
		<?php include('html/overall/topnav.php'); ?>
		<?php include('html/overall/fondoefectos.php'); ?>

		
		
	</div>
	<div class="sliderContenedor" style="">
		<?php include('core/bin/functions/postslide.php'); ?>
	</div>	
<?php include('html/overall/footer.php'); ?>
	
	

	
	
