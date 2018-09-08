<?php
$db = new conexion();
$value=$_GET['value'];
$a=0;
if($value=="reciente"){
$registro=$_SESSION['app_id'];
$script = $db->query("SELECT id_post,url_imagen,direccion_web,titulo,descripcion FROM post
INNER JOIN inicio_sesion ON post.id_inicio_sesion=inicio_sesion.id_inicio_sesion WHERE inicio_sesion.id_usuario=$registro ORDER BY id_post DESC limit 8");


while($row = $db->recorrer($script)){
	
	?>
	<div class="postContenedor" style="width:100%; position:relative;">
				<div class="post" id="post<?php echo $row['id_post']; ?>" style="margin:13px; box-shadow: 0 0 7px #888; overflow:auto; float:left; z-index:100; position:relative; width:240px;  height:120px;  ?>px;  background:black; ">
					<div style="box-shadow: 0 0 14px #888; overflow:; z-index:; position:absolute; width:100%;  height:100%; left:; top:; opacity:0.05; background:white;"></div>
					<a href="<?php echo '?view=post&post='.$row['direccion_web']; ?>">
					<div id="despost<?php echo $row['id_post']; ?>" style="width:100%; opacity:0; height:100%; position:absolute; display:; top:-70%; background:black; align:center; vertical-align:middle;">
						<h4 style="color:white; opacity:1; "><?php echo $row['titulo']; ?></h4>
						<p style="color:white; opacity:1;  font-size:0.7vw; line-height:1.6875;"><?php echo $row['descripcion']; ?></p>	
					</div>
					<img id="imgpost<?php echo $row['id_post']; ?>" style="display:; width:100%; height:100%; position:absolute; left:0; top:;" src="<?php echo $row['url_imagen'] ?>" alt="">		
					</a>	
				</div>
	<hr style="height: 10px;
	border: 0;
	box-shadow: 0 10px 10px -10px #a5abab inset; margin:0; padding:0; float:left; z-index:1000; position:relative; width:100%;">
	</div>
	<?php
	$a=$a+25;
}
$db->liberar($script);

	

}

if($value=="estrellas"){
$registro=$_SESSION['app_id'];
$sql = $db->query("SELECT post.id_post,sum(post_calificacion.calificacion)/count(post_calificacion.id_post),
url_imagen,direccion_web,titulo,descripcion FROM post_calificacion INNER JOIN post ON post.id_post=post_calificacion.id_post
WHERE post.id_usuario=$registro GROUP BY post_calificacion.Id_Post 
ORDER BY sum(post_calificacion.calificacion)/count(post_calificacion.id_post) DESC LIMIT 8
");

while($row = $db->recorrer($sql)){
	
	?>
	
	<div class="postContenedor" style="width:100%; position:relative;">
				<div class="post" id="post<?php echo $row['id_post']; ?>" style="margin:13px; box-shadow: 0 0 7px #888; overflow:auto; float:left; z-index:100; position:relative; width:240px;  height:120px;  ?>px;  background:black; ">
					<div style="box-shadow: 0 0 14px #888; overflow:; z-index:; position:absolute; width:100%;  height:100%; left:; top:; opacity:0.05; background:white;"></div>
					<a href="<?php echo '?view=post&post='.$row['direccion_web']; ?>">
					<div id="despost<?php echo $row['id_post']; ?>" style="width:100%; opacity:0; height:100%; position:absolute; display:; top:-70%; background:black; align:center; vertical-align:middle;">
						<h4 style="color:white; opacity:1; "><?php echo $row['titulo']; ?></h4>
						<p style="color:white; opacity:1;  font-size:0.7vw; line-height:1.6875;"><?php echo $row['descripcion']; ?></p>	
					</div>
					<img id="imgpost<?php echo $row['id_post']; ?>" style="display:; width:100%; height:100%; position:absolute; left:0; top:;" src="<?php echo $row['url_imagen'] ?>" alt="">		
					</a>	
				</div>
	<hr style="height: 10px;
	border: 0;
	box-shadow: 0 10px 10px -10px #a5abab inset; margin:0; padding:0; float:left; z-index:1000; position:relative; width:100%;">
	</div>
	<?php
	$a=$a+25;
}
$db->liberar($sql);


}
if($value=="visita"){
	$registro=$_SESSION['app_id'];
 	$sql2 = $db->query("SELECT visita_post.Id_Post,count(visita_post.id_post),url_imagen,post.Id_Post AS
 	 id_post,direccion_web,titulo,descripcion FROM visita_post 
 	 INNER JOIN post ON post.Id_Post=visita_post.Id_Post WHERE id_usuario=$registro
 	 GROUP BY visita_post.Id_Post ORDER BY count(visita_post.Id_Post) DESC LIMIT 8");

while($row = $db->recorrer($sql2)){
	
	?>
	
	<div class="postContenedor" style="width:100%; position:relative;">
				<div class="post" id="post<?php echo $row['id_post']; ?>" style="margin:13px; box-shadow: 0 0 7px #888; overflow:auto; float:left; z-index:100; position:relative; width:240px;  height:120px;  ?>px;  background:black; ">
					<div style="box-shadow: 0 0 14px #888; overflow:; z-index:; position:absolute; width:100%;  height:100%; left:; top:; opacity:0.05; background:white;"></div>
					<a href="<?php echo '?view=post&post='.$row['direccion_web']; ?>">
					<div id="despost<?php echo $row['id_post']; ?>" style="width:100%; opacity:0; height:100%; position:absolute; display:; top:-70%; background:black; align:center; vertical-align:middle;">
						<h4 style="color:white; opacity:1; "><?php echo $row['titulo']; ?></h4>
						<p style="color:white; opacity:1;  font-size:0.7vw; line-height:1.6875;"><?php echo $row['descripcion']; ?></p>	
					</div>
					<img id="imgpost<?php echo $row['id_post']; ?>" style="display:; width:100%; height:100%; position:absolute; left:0; top:;" src="<?php echo $row['url_imagen'] ?>" alt="">		
					</a>	
				</div>
	<hr style="height: 10px;
	border: 0;
	box-shadow: 0 10px 10px -10px #a5abab inset; margin:0; padding:0; float:left; z-index:1000; position:relative; width:100%;">
	</div>
	<?php
	$a=$a+25;


}
$db->liberar($sql2);
}

 ?>