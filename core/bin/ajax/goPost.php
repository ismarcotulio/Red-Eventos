<?php 

$titulo=$_POST['agregar_titulo'];
$descripcion=$_POST['agregar_descripcion'];
$contenido=$_POST['a'];
$url=$_POST['agregar_url'];
$poster=$_POST['agregar_url_poster'];
$sesion=$_SESSION['sesion'];
$estado='activo';
$registro=$_SESSION['app_id'];

$db = new conexion();


$script = $db->query('SELECT MAX(Id_Post) AS id FROM POST;');

			

			if($script){
				$id = $db->recorrer($script)[0]+1;
    			$db->liberar($script);
			}
			if($id){
				$post = $id.'.'.$registro.'.'.$sesion.'_'.$titulo;
				$codigo = 'mvc:8080/usuario/posts/'.$id.'.'.$registro.'.'.$sesion.'_'.$titulo.'.php';
				$script2 = $db->query("INSERT INTO post(id_post,titulo,descripcion,url_imagen,contenido,estado,id_inicio_sesion,direccion_web,id_usuario) 
				VALUES($id,'$titulo','$descripcion','$url','$contenido','$estado',$sesion,'$post',$registro)");
		
				if($script2){
					foreach($_POST['categoria'] as $categoria) {
					        $script3 =  $db->query("INSERT INTO post_categoria(id_post,id_categoria) VALUES($id,$categoria)");
					}

					 if($poster===''){
								$open = fopen("html/usuario/posts/$post.php", 'w+');
								fwrite($open,'<?php
								
								if(!isset($_SESSION["app_id"])){
									header("location: ?view=index");
								}
								?>
								
									<?php include("html/overall/header.php"); ?>
									<head>
										<title>'.$_users[$_SESSION["app_id"]]["Nombre_Usuario"].' || '.$titulo.'</title>
										<link rel="stylesheet" href="views/app/css/mediaPost.css" type="text/css">
									</head>
									<body link="#fff" vlink="#fff" alink="#fff"  style="height:100%; width:100%;">
									<?php include("html/overall/topnav.php"); ?>
									<?php include("html/overall/fondoefectos.php"); ?>
									<?php include("core/bin/functions/visitapost.php"); ?>
									<div class="container-fluid" style="width:100vw; height:100vh; min-height:100%; position:absolute; padding:0;">
										<div class="layer" id="layer1">
											<div class="postContenedor" style="">
												<div class="posttituloContenedor" style="">
													<h1 class="postTitulo" style="">'.$titulo.'</h1>
												</div>
												<hr class="postSeparador" style="">
												<div id="postContenido1" class="postContenido" style="">
													'.nl2br($contenido).'
												</div>
											</div>
										</div>
										<div class="layer" id="layer2">
											<div class="autorContenedor" style="">
												<div class="autornombreContenedor">
													<p class="autorNombre" style="">'.$_users[$_SESSION['app_id']]['Nombre_Usuario'].'</p>
												</div>
												<div class="autorimagenContenedor">
													<img class="autorImagen" src="http://cdn.zonarutoppuden.com/ns/naruto-shippuden-peliculas.jpg" style="">
												</div>
												<div class="autorestrellaContenedor estre" style=""  value="3">
													<?php include("core/bin/functions/estrellasTotal2.php"); ?>			
												</div>
												<div class="autortablaContenedor" style="">
													<table class="table table-bordered autorTabla" style="">
														<tr>
															<th>posts</th>
															<th>votos</th>
														</tr>
														<tr>
															<td><?php include("core/bin/functions/numeroPost2.php"); ?></td>
															<td><?php include("core/bin/functions/numeroVotos2.php"); ?></td>
														</tr>
													</table>
													
													
												</div>
											
											</div>
											<div class="contactoContenedor" style="">
												<i class="contactoIcono icon add user large" id="contactoAgregar" style=""></i>
												<i class="contactoIcono icon unhide large" id="contactoSeguir" style=""></i>
												<i class="contactoIcono icon inbox large" id="contactoInbox" style=""></i>
												<i class="contactoIcono icon user large" id="contactoPerfil" style=""></i>
											</div>
											<div class="calificarContenedor" style="">
												<div class="calificartituloContenedor">
													<h3 class="calificarTitulo" style="">calificar!</h3>
												</div>
												<hr class="calificarSeparador" id="separador2" style="">
												<div class="calificarestrellaContenedor">
													<div class="estrellaEfecto estre" style=""  value="3">
														 <i id="estrella1" class="estrellas big star icon" style="" value="1"></i><i id="estrella2" class="estrellas big star icon" style="" value="2"></i><i id="estrella3" class="estrellas big star icon" style="" value="3"></i><i id="estrella4" class="estrellas big star icon" style="" value="4"></i><i id="estrella5" class="estrellas big star icon" style="" value="5"></i>
													</div>
													<div class="estrellaResultado estre2" style="display:;"  value="3">
														<?php include("core/bin/functions/postCalificacion.php"); ?>
													</div>
												</div>
												<hr class="calificarSeparador" id="separador1" style="">
												<div class="postestadisticasContenedor">
													<i class="postEstadisticas icon circle" id="estadistica1" style="">3ra posicion</i><i class="postEstadisticas icon circle" id="estadistica2" style="">20 visitas</i><i class="postEstadisticas icon circle" id="estadistica3" style="">14 votos</i>	
												</div>
											</div>
										</div>	
									</div>
								<?php include("html/overall/footer.php"); ?>
								');
					}else{
					$open = fopen("html/usuario/posts/$post.php", 'w+');
					fwrite($open,'<?php
					
					if(!isset($_SESSION["app_id"])){
						header("location: ?view=index");
					}
					?>
					
						<?php include("html/overall/header.php"); ?>
						<head>
							<title>'.$_users[$_SESSION["app_id"]]["Nombre_Usuario"].' || '.$titulo.'</title>
							<link rel="stylesheet" href="views/app/css/mediaPost.css" type="text/css">
						</head>
						<body link="#fff" vlink="#fff" alink="#fff"  style="height:100%; width:100%;">
						<?php include("html/overall/topnav.php"); ?>
						<?php include("html/overall/fondoefectos.php"); ?>
						<?php include("core/bin/functions/visitapost.php"); ?>
						<div class="container-fluid" style="width:100vw; height:100vh; min-height:100%; position:absolute; padding:0;">
							<div class="layer" id="layer1">
								<div class="postContenedor" style="">
									<div class="posttituloContenedor" style="">
										<h1 class="postTitulo" style="">'.$titulo.'</h1>
									</div>
									<hr class="postSeparador" style="">
									<div class="posterContenedor" style="">
										<div style="width:100%; height:100%; background:#c7d7ee;">
											<img class="poster" id="poster" src="'.$poster.'" alt="" style="">
										</div>
									</div>
									<hr class="postSeparador2" style="">
									<div id="postContenido2" class="postContenido" style="">
										'.nl2br($contenido).'
									</div>
								</div>
							</div>
							<div class="layer" id="layer2">
								<div class="autorContenedor" style="">
									<div class="autornombreContenedor">
										<p class="autorNombre" style="">'.$_users[$_SESSION['app_id']]['Nombre_Usuario'].'</p>
									</div>
									<div class="autorimagenContenedor">
										<img class="autorImagen" src="http://cdn.zonarutoppuden.com/ns/naruto-shippuden-peliculas.jpg" style="">
									</div>
									<div class="autorestrellaContenedor estre" style=""  value="3">
										<?php include("core/bin/functions/estrellasTotal2.php"); ?>			
									</div>
									<div class="autortablaContenedor" style="">
										<table class="table table-bordered autorTabla" style="">
											<tr>
												<th>posts</th>
												<th>votos</th>
											</tr>
											<tr>
												<td><?php include("core/bin/functions/numeroPost2.php"); ?></td>
												<td><?php include("core/bin/functions/numeroVotos2.php"); ?></td>
											</tr>
										</table>
										
										
									</div>
								
								</div>
								<div class="contactoContenedor" style="">
									<i class="contactoIcono icon add user large" id="contactoAgregar" style=""></i>
									<i class="contactoIcono icon unhide large" id="contactoSeguir" style=""></i>
									<i class="contactoIcono icon inbox large" id="contactoInbox" style=""></i>
									<i class="contactoIcono icon user large" id="contactoPerfil" style=""></i>
								</div>
								<div class="calificarContenedor" style="">
									<div class="calificartituloContenedor">
										<h3 class="calificarTitulo" style="">calificar!</h3>
									</div>
									<hr class="calificarSeparador" id="separador2" style="">
									<div class="calificarestrellaContenedor">
										<div class="estrellaEfecto estre" style=""  value="3">
											 <i id="estrella1" class="estrellas big star icon" style="" value="1"></i><i id="estrella2" class="estrellas big star icon" style="" value="2"></i><i id="estrella3" class="estrellas big star icon" style="" value="3"></i><i id="estrella4" class="estrellas big star icon" style="" value="4"></i><i id="estrella5" class="estrellas big star icon" style="" value="5"></i>
										</div>
										<div class="estrellaResultado estre2" style="display:;"  value="3">
											<?php include("core/bin/functions/postCalificacion.php"); ?>
										</div>
									</div>
									<hr class="calificarSeparador" id="separador1" style="">
									<div class="postestadisticasContenedor">
										<i class="postEstadisticas icon circle" id="estadistica1" style="">3ra posicion</i><i class="postEstadisticas icon circle" id="estadistica2" style="">20 visitas</i><i class="postEstadisticas icon circle" id="estadistica3" style="">14 votos</i>	
									</div>
								</div>
							</div>	
						</div>
					<?php include("html/overall/footer.php"); ?>
					');
					

					}
					       
					header("location: ?view=post&post=$post");
				}else{
					echo 'Problema al insertar';
					echo '<br>';
					echo $titulo;
					echo '<br>';
					echo $descripcion;
					echo '<br>';
					echo $contenido;
					echo '<br>';
					echo $url;
					echo '<br>';
					echo $poster;
					echo '<br>';
					echo $sesion;
					echo '<br>';
					echo $estado;
					echo '<br>';
					echo $registro;
					echo '<br>';
					echo $id;
				}	
			}else{
				echo 'problema con el id';
			}

 ?>
