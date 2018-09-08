<?php 
$db = new conexion();

$calificacion=$_POST['value'];
$idpost=$_POST['post'];
$idregistro=$_SESSION['app_id'];

$sql = $db->query("SELECT calificacion FROM post_calificacion WHERE id_registro=$idregistro && id_post=$idpost");
$row = $db->recorrer($sql);
$db->liberar($sql);
if($row[0]==''){
	$sql2 = $db->query("INSERT INTO post_calificacion(id_registro,id_post,calificacion) VALUES($idregistro,$idpost,$calificacion)");


}else{
	$sql3 = $db->query("UPDATE post_calificacion SET calificacion=$calificacion 
	WHERE id_registro=$idregistro && id_post=$idpost");
	
}


 ?>