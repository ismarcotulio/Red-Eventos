<?php 
$db = new conexion();
$sql = $db->query("SELECT visita_post.Id_Post,count(visita_post.id_post),titulo,descripcion,url_imagen,direccion_web FROM visita_post INNER JOIN post 
ON post.Id_Post=visita_post.Id_Post GROUP BY visita_post.Id_Post ORDER BY count(visita_post.Id_Post) DESC LIMIT 20");

$id=1;
?>
<div class="slider" style="">
	<div Class="posterContenedor" style="">
		<div class="poster" id="poster1" style="">
		<div class="posterTitulo" style=""><h3 style="color:#B1B4B6;">Mas Visitados</h3></div>
		<?php
		while($row = $db->recorrer($sql)){
			if(!isset($left)){
				$left=3;
			}
			?>
			
			<div class="post" id="post<?php echo $id; ?>" style="">
					<div class="postVentana" style=""></div>
					<a href="<?php echo '?view=post&post='.$row['direccion_web']; ?>">
					<div class="postDescripcion" id="despost<?php echo $id; ?>" style="">
						<h4 style="color:white; opacity:1; "><?php echo $row['titulo']; ?></h4>
						<p style="color:white; opacity:1;  font-size:0.7vw; line-height:1.6875;"><?php echo $row['descripcion']; ?></p>	
					</div>
					<img class="imagenPost" id="imgpost<?php echo $id; ?>" style="" src="<?php echo $row['url_imagen'] ?>" alt="">		
					</a>	
				</div>
			<?php
			$left=$left+232;
			$id=$id+1;
		}
		$db->liberar($sql);
		?>
		</div>
	</div>	
	<i class="large icons icon1 iconLeft" style='' >
		  <i class="big thin circle icon"></i>
		  <i class="chevron left icon"></i>
		</i>
		<i class="large icons icon1 iconRight" style='' >
		  <i class="big thin circle icon"></i>
		  <i class="chevron right icon"></i>
		</i>
</div>
<div class="slider" style="">
	<div Class="posterContenedor" style="">
		<div class="poster" id="poster2" style="">
		<div class="posterTitulo" style=""><h3 style="color:#B1B4B6;">Recientes</h3></div>
<?php


$sql2 = $db->query("SELECT id_post,url_imagen,direccion_web,titulo,descripcion FROM post
 ORDER BY id_post DESC limit 20");

$id=21;
while($row = $db->recorrer($sql2)){
	if(!isset($left2)){
		$left2=3;
	}
	?>
	
				<div class="post" id="post<?php echo $id; ?>" style="">
					<div class="postVentana" style=""></div>
					<a href="<?php echo '?view=post&post='.$row['direccion_web']; ?>">
					<div class="postDescripcion" id="despost<?php echo $id; ?>" style="">
						<h4 style="color:white; opacity:1; "><?php echo $row['titulo']; ?></h4>
						<p style="color:white; opacity:1;  font-size:0.7vw; line-height:1.6875;"><?php echo $row['descripcion']; ?></p>	
					</div>
					<img class="imagenPost" id="imgpost<?php echo $id; ?>" style="" src="<?php echo $row['url_imagen'] ?>" alt="">		
					</a>	
				</div>
	<?php
	$left2=$left2+232;
	$id=$id+1;
}
$db->liberar($sql2);
?>
</div>
	</div>	
	<i class="large icons icon2 iconLeft" style='' >
		  <i class="big thin circle icon"></i>
		  <i class="chevron left icon"></i>
		</i>
		<i class="large icons icon2 iconRight" style='' >
		  <i class="big thin circle icon"></i>
		  <i class="chevron right icon"></i>
		</i>
</div>
<div class="slider" style="">
	<div Class="posterContenedor" style="">
		<div class="poster" id="poster3" style="">
		<div class="posterTitulo" style=""><h3 style="color:#B1B4B6;">Mejor Valorados</h3></div>
<?php



$sql3 = $db->query("SELECT visita_post.Id_Post,count(visita_post.id_post),post.id_post,sum(post_calificacion.calificacion)/count(post_calificacion.id_post),
url_imagen,direccion_web,titulo,descripcion FROM post_calificacion INNER JOIN post ON post.id_post=post_calificacion.id_post
INNER JOIN visita_post ON post.Id_Post=visita_post.Id_Post
 GROUP BY post_calificacion.Id_Post 
ORDER BY sum(post_calificacion.calificacion)/count(post_calificacion.id_post) DESC,count(visita_post.id_post) DESC LIMIT 20");

$id=41;
while($row = $db->recorrer($sql3)){
	if(!isset($left3)){
		$left3=3;
	}
	?>

				<div class="post" id="post<?php echo $id; ?>" style="">
					<div class="postVentana" style=""></div>
					<a href="<?php echo '?view=post&post='.$row['direccion_web']; ?>">
					<div class="postDescripcion" id="despost<?php echo $id; ?>" style="">
						<h4 style="color:white; opacity:1; "><?php echo $row['titulo']; ?></h4>
						<p style="color:white; opacity:1;  font-size:0.7vw; line-height:1.6875;"><?php echo $row['descripcion']; ?></p>	
					</div>
					<img class="imagenPost" id="imgpost<?php echo $id; ?>" style="" src="<?php echo $row['url_imagen'] ?>" alt="">		
					</a>	
				</div>
	<?php
	$left3=$left3+232;
	$id=$id+1;
}
$db->liberar($sql3);
$db->close();
?>
</div>
	</div>	
	<i class="large icons icon3 iconLeft" style='' >
		  <i class="big thin circle icon"></i>
		  <i class="chevron left icon"></i>
		</i>
		<i class="large icons icon3 iconRight" style='' >
		  <i class="big thin circle icon"></i>
		  <i class="chevron right icon"></i>
		</i>
</div>