<?php 

$db = new conexion();
$registro=$_SESSION['app_id'];

$sql = $db->query("SELECT count(id_post) FROM post INNER JOIN inicio_sesion ON post.id_inicio_sesion
= inicio_sesion.id_inicio_sesion WHERE post.id_usuario=$registro");

$row = $db->recorrer($sql);
echo "

	<h4>$row[0]</h4>

";
 ?>