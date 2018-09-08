<?php 

error_reporting(0);
$db = new conexion();

$idregistro=$_SESSION['app_id'];
$idpost=$_GET['value'];


if($idpost==''){
		$post = $_GET['post'];

	$sub2 = explode('.',$post);
	$idpost = $sub2[0];


	$sql = $db->query("SELECT calificacion FROM post_calificacion WHERE id_registro=$idregistro && id_post=$idpost");
	$row = $db->recorrer($sql);
	$db ->liberar($sql);

	if($row[0]==''){
			$sql2 = $db->query("SELECT count(calificacion),sum(calificacion) FROM post_calificacion WHERE id_post=$idpost");
			
			$row2 = $db->recorrer($sql2);
			$db->liberar($sql2);
			$total=$row2[1];
			$count=$row2[0];
			$promedio=$total/$count;
			$diferencia=5-round($promedio);
		
			for($i=1;$i<=$promedio;$i++){
	      		echo "<i id='estrella$i' class='estrella big star icon' style='  color:red;' value='$i'></i>";
			}
			for($i=$promedio+1;$i<=$diferencia+$promedio;$i++){
		      		echo "<i id='estrella$i' class='estrella big star icon' style=' color:#CECBCB;' value='$i'></i>";
			}
	}else{
		$diferencia=5-round($row[0]);
		for($i=1;$i<=$row[0];$i++){
	      	echo "<i id='estrella$i' class='estrella big star icon' style=' color:#E6C808;' value='$i'></i>";
		}
		for($i=$row[0]+1;$i<=$diferencia+$row[0];$i++){
	      	echo "<i id='estrella$i' class='estrella big star icon' style='  color:#CECBCB;' value='$i'></i>";
		}
	}
}else{
	$sql = $db->query("SELECT calificacion FROM post_calificacion WHERE id_registro=$idregistro && id_post=$idpost");

$row = $db->recorrer($sql);
$db->liberar($sql);
if($row[0]==''){

}else{
	$diferencia=5-round($row[0]);
		for($i=1;$i<=$row[0];$i++){
	      	echo "<i id='estrella$i' class='estrella big star icon' style=' color:#E6C808;' value='$i'></i>";
		}
		for($i=$row[0]+1;$i<=$diferencia+$row[0];$i++){
	      	echo "<i id='estrella$i' class='estrella big star icon' style='  color:#CECBCB;' value='$i'></i>";
		}
}
}



$db->close();
?>