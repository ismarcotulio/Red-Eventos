<?php 
error_reporting(0);
$db = new conexion();
$post = $_GET['post'];

	$sub2 = explode('.',$post);
	$idpost = $sub2[1];

$sql = $db->query("SELECT count(post_calificacion.id_post) FROM post_calificacion INNER JOIN post ON post.id_post
= post_calificacion.id_post JOIN inicio_sesion ON post.id_inicio_sesion
= inicio_sesion.id_inicio_sesion WHERE inicio_sesion.id_usuario=$idpost");

if($sql){
	$row = $db->recorrer($sql);
	$db->liberar($sql);

	echo "

		<p>$row[0]</p>

	";	
}else{
	echo "

		<p>0</p>

	";
}
$db->close();


 ?>