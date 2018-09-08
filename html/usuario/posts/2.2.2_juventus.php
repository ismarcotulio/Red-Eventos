<?php
					
					if(!isset($_SESSION["app_id"])){
						header("location: ?view=index");
					}
					?>
					
						<?php include("html/overall/header.php"); ?>
						<?php include("html/overall/topnav.php"); ?>
						<?php include("html/overall/fondoefectos.php"); ?>
						<div class="container-fluid" style="width:100vw; height:100vh; min-height:100%; position:absolute; padding:0;">
							<div class="layer" id="layer1">
								<div class="postContenedor" style="">
									<div class="posttituloContenedor" style="">
										<h1 class="postTitulo" style="">juventus</h1>
									</div>
									<hr class="postSeparador" style="">
									<div class="posterContenedor" style="">
										<div style="width:100%; height:100%; background:#c7d7ee;">
											<img class="poster" id="poster" src="http://cdn8.larepublica.pe/sites/default/files/styles/img_600x315_face/public/imagen/2016/07/29/juventus-nueva-camiseta-Noticia-789558.jpg" alt="" style="">
										</div>
									</div>
									<hr class="postSeparador2" style="">
									<div id="postContenido2" class="postContenido" style="">
										
									</div>
								</div>
							</div>
							<div class="layer" id="layer2">
								<div class="autorContenedor" style="">
									<div class="autornombreContenedor">
										<p class="autorNombre" style="">tulio1314</p>
									</div>
									<div class="autorimagenContenedor">
										<img class="autorImagen" src="http://cdn.zonarutoppuden.com/ns/naruto-shippuden-peliculas.jpg" style="">
									</div>
									<div class="autorestrellaContenedor estre" style=""  value="3">
										<?php include("../includes/estrellastotal2.php"); ?>			
									</div>
									<div class="autortablaContenedor" style="">
										<table class="table table-bordered autorTabla" style="">
											<tr>
												<th>posts</th>
												<th>votos</th>
											</tr>
											<tr>
												<td><?php include("../includes/numeropost2.php"); ?></td>
												<td><?php include("../includes/numerovotos2.php"); ?></td>
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
											<?php include("../php/postcalificacion.php"); ?>
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
					