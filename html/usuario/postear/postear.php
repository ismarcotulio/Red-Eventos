<?php 

if(!isset($_SESSION['app_id'])){
	header('location: ?view=index');
}

?>
	
		<?php include('html/overall/header.php'); ?>
		<head>
			<title>Editor || <?php echo $_users[$_SESSION['app_id']]['Nombre_Usuario']; ?> </title>
			<link rel="stylesheet" href="views/app/css/mediaAgregar.css" type="text/css">
		</head>
		<body link="#fff" vlink="#fff" alink="#fff"  style="height:100%; width:100%;">
		<?php include('html/overall/topnav.php'); ?>
		<?php include('html/overall/fondoefectos.php'); ?>
		<div  class="container-fluid" style="position:absolute; width:100%; height:100%; overflow:hidden;">
			<form action="" id="agregar_post" method="post" style="height:; position:;">
				<div class="postear" id="categoria" style="text-align:center;  max-height:; overflow:hidden; height:;  left:;">
						<input type="text" class="form-control" id="filtro" placeholder="buscar categoria" style="position:absolute; left:68%; top:5%; width:30%; height:8%;">
						<input type="text" class="btn btn-warning" value="Solicitar Categoria" style="position:absolute; left:52.5%; top:5%; width:15%; height:8%; margin:0; padding:0;">
						<div id="catcont" style="position:absolute; top:22%; background:; height:60%; max-height:60%; width:100%;  overflow:hidden;"></div>
						<input id="listo" type="button" value="listo" class="btn btn-primary listo"style="margin:0% 2% 0% 4%; position:relative; top:87%; left:0%; float:right; width:15%; height:10%; font-size:2vw; padding:0.2%;">
				</div>

				<div class="postear" id="crear" style="min-height:80%; left:115%;">
					<div class="crear"></div>
						<input id="volver" type="button" value="Volver" class="btn btn-primary" style="position:absolute; top:87%; left:67%; width:15%; height:10%; font-size:2vw; padding:0.2%;">
						<input id="submit" type="submit" value="Crear" class="btn btn-success" style="position:absolute; top:87%; left:83%; width:15%; height:10%; font-size:2vw; padding:0.2%;">
					
				</div>
			</form>
		
		
			
		</div>
<?php include('html/overall/footer.php'); ?>
