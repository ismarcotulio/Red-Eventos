<?php 

if(!isset($_SESSION['app_id'])){
	header('location: ?view=index');
}

?>
 <?php include('html/overall/header.php'); ?>
<head>
	<title>Perfil || <?php echo $_users[$_SESSION['app_id']]['Nombre_Usuario']; ?> </title>
	<link rel="stylesheet" href="views/app/css/mediaPerfil.css">
</head>
<body style="background-repeat: no-repeat;
    background-attachment: fixed; overflow-x:hidden;
    background-position: center; " onload="orden('reciente')">
	<?php include('html/overall/topnav.php'); ?>
	<?php include('html/overall/fondoefectos.php'); ?>
	<div class="container-fluid" style="">
		<div id="page1" ontouchstart="p1swipestart(event)" ontouchmove="p1swipemove(event)" ontouchend="p1swipeend(event)">
			<div class="portadaContenedor" style="">
				<div class="portadaVentana" style=""></div>
				<p class="portadaTitulo" style=""><?php echo $_users[$_SESSION['app_id']]['Nombre_Usuario']; ?></p>
				<img class="portadaImagen" src="http://cdn.zonarutoppuden.com/ns/naruto-shippuden-peliculas.jpg" style="">
				<div style="z-index:; width:100%; height:30%; position:absolute; top:66%;" class="estre" value="3">
					<?php include('core/bin/functions/perfilEstrellasTotal.php'); ?>
				</div>
				<div style='position:absolute; top:75%; left:22%; height:10%;'>
					<table class="table table-bordered" style="background:#3b546d; opacity:; color:white; position:absolute; width:100%; height:100%;">
						<tr>
							<th>posts</th>
							<th>votos</th>
						</tr>
						<tr>
							<td><?php include('core/bin/functions/perfilNumeroPost.php'); ?></td>
							<td><?php include('core/bin/functions/perfilNumeroVotos.php'); ?></td>
						</tr>
					</table>
					
					
				</div>
			</div>
		
			<div class="trofeosContenedor" style=" ">
				<div class="trofeosVentana" style=""></div>
						
			</div>
		</div>	
		<div id="page3" ontouchstart="p3swipestart(event)" ontouchmove="p3swipemove(event)" ontouchend="p3swipeend(event)">
			<div class="muroContenedor" style="">
				<div class="muroVentana" style=""></div>
				<div style="position:relative; width:100%; min-height:100%; padding:15px;">
					<div style="width:100%; min-height:10%; background:; padding:10px; border-radius:;">
						<input type="text" placeholder="Quieres Compartir Algo?" class="form-control">
						
					</div>
				</div>
			</div>
		</div>	
		<div id="page2" ontouchstart="p2swipestart(event)" ontouchmove="p2swipemove(event)" ontouchend="p2swipeend(event)">
			<div class="pubContenedor" style="text-align:center;" id="">
				<div class="pubVentana" style=""></div>
	  				<div class="col-lg-6" style="margin:0; padding:0;">
	    				<div class="form-group" style="margin:0;">
	      					<select data-style="btn-primary" id="orden" class="selectpicker form-control" onchange="orden(this.value)" >
	        					<option value="reciente">reciente</option>
	       					 	<option value="visita">visita</option>
	       						<option value="estrellas">estrellas</option>
	    					</select>
	    				</div>
	  				</div>
	  				<div class="col-lg-6" style="margin:0; padding:0;">
	    				<div class="form-group" style="margin:0;">
	      					<select class="selectpicker form-control" >
	        					<option >Deporte</option>
	       					 	<option >Ocio</option>
	       						<option >Comida</option>
	       						<option >Anime</option>
	       						<option >cine</option>
	       						<option >Noticias</option>
	    					</select>
	    				</div>
	  				</div>

	  				<div id="listaorden" style="position:relative; width:100%; min-height:80%; top:;" >
	  					
	  				</div>
					
			</div>
		</div>	
		<!--div style="z-index:100; position:absolute; width:20%;  height:18%; left:72.5%; top:13%; background:white; ">
			<?php include('includes/posts.php'); ?>
		</div>
		<div style="z-index:100; position:absolute; width:20%;  height:18%; left:72.5%; top:34%; background:white; ">
			<?php include('includes/postvista.php'); ?>
		</div>
		<div style="z-index:100; position:absolute; width:20%;  height:18%; left:72.5%; top:56%; background:white; ">
			<?php include('includes/postvoto.php'); ?>
		</div>
		<div style="z-index:100; position:absolute; width:20%;  height:18%; left:72.5%; top:77%; background:white; "></div-->
	</div>


	<!--script src="views/app/js/index.js"></script-->
	
	<?php include('html/overall/footer.php'); ?>
