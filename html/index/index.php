

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
	<body link="#fff" vlink="#fff" alink="#fff"  style="height:100%; width:100%;">
		<div class="container-fluid" style="margin:0; padding:0;" >
		<?php include('html/overall/topnav.php'); ?>
		<?php include('html/overall/fondoefectos.php'); ?>
		<div id="texto" class="animacion8" style="text-align:center; z-index:1; top:60%; left:30%; position:absolute; width:40%;">
			<p class="p1" style="z-index:2; color:#A8A9A9; font-size:3.5vw;">El mundo en tus manos</p>
			<p class="p2" style="z-index:2; color:#A8A9A9; font-family:''; font-size:2.5vw;">Crea, Descubre, Comparte</p>
		</div>
		<div id="animacion" class="animacion" style="z-index:;">
			<div class="animacion1" style="">
			<img class="logo" src="views/app/images/sol_itec4.png" style=" opacity:0.8; width:100%; height:100%;" alt="">
			</div>
			<div class="animacion2" style="">
				<img class="" src="views/app/images/elipse2.png" style="opacity:; width:100%; height:100%;" alt="">
			</div>
			<div class="animacion3" style="">
				<a href="#"><img class="" src="views/app/images/dinero.png" style="width:100%; height:100%;" alt=""></a>
			</div>	
			<div class="animacion4" style="">
				<a href="#"><img class="" src="views/app/images/ciencia.png" style="opacity:; width:100%; height:100%;" alt=""></a>
			</div>
			<div class="animacion5" style="">
				<a href="#"><img class="" src="views/app/images/juegos.png" style="opacity:; width:100%; height:100%;" alt=""></a>
			</div>
			<div class="animacion6" style="">
				<a href="#"><img class="" src="views/app/images/tierra.png" style="opacity:; width:100%; height:100%;" alt=""></a>
			</div>	
			<div class="animacion7" style="">
				<a href="#"><img class="" src="views/app/images/deporte2.png" style="opacity:; width:100%; height:100%;" alt=""></a>
			</div>
		</div>
		<div id="botones" class="botones animacion9" style="z-index:20;">
			<a onclick="" href="#" class="btn btn-comenzar" style=" width:100%; height:100%; z-index:21;" data-toggle="modal" data-target="#registro-overlay">
				<p style="position:absolute; font-size:3vw; font-size:3vh; margin:0; top:30%; left:35%;">Comenzar</p>
			</a>
		</div>
		
		
	</div>	
	<?php include('html/overall/footer.php'); ?>
	
	

	
	
