<?php 

$db = new conexion();
$registro=$_SESSION['app_id'];
$sql = $db->query("SELECT count(post_calificacion.id_post) FROM post_calificacion INNER JOIN post ON post.id_post
= post_calificacion.id_post JOIN inicio_sesion ON post.id_inicio_sesion
= inicio_sesion.id_inicio_sesion WHERE inicio_sesion.id_usuario=$registro");
$row = $db->recorrer($sql);

echo "

	<h4>$row[0]</h4>

";


 ?>