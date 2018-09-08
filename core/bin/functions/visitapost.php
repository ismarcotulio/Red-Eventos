<?php 
$db = new conexion();
$visita=$_COOKIE['visita'];
$post = $_GET['post'];

	$sub2 = explode('.',$post);
	$idpost = $sub2[0];
$sql = $db->query("SELECT id_visita_post FROM visita_post WHERE id_visita=$visita && id_post=$idpost ORDER BY id_visita_post DESC LIMIT 1");

$row = $db->recorrer($sql);
$db->liberar($sql);
$visitapost = $row['id_visita_post'];
if($visitapost==''){
	$sql2 = $db->query('SELECT id_visita_post FROM visita_post ORDER BY id_visita_post DESC LIMIT 1');

			if($sql2){
				$row = $db->recorrer($sql2);
				$db->liberar($sql2);
				$id=$row['id_visita_post']+1;
			}else{
				$id=1;
			}
$sql3 = $db->query("INSERT INTO visita_post(id_visita_post,id_visita,id_post) VALUES($id,$visita,$idpost)");
$db->close();	
}



 ?>