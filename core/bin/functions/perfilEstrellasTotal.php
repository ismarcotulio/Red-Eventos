<?php 

$db = new conexion();
$registro=$_SESSION['app_id'];
$sql = $db->query("SELECT count(calificacion),sum(calificacion) FROM post_calificacion INNER JOIN post ON post.id_post
= post_calificacion.id_post JOIN inicio_sesion ON post.id_inicio_sesion
= inicio_sesion.id_inicio_sesion WHERE inicio_sesion.id_usuario=$registro");
			
			$row2 = $db->recorrer($sql);
			$total=round($row2[1]);
			$count=round($row2[0]);
			if($count==0){
				for($i=1;$i<=5;$i++){
		      		echo "<i id='estrellaa$i' class='estrellaa large star icon' style='  color:#CECBCB;' value='$i'></i>";
				}
			}else{
				$promedio=round($total)/round($count);
				$diferencia=5-round($promedio);
			
				for($i=1;$i<=round($promedio);$i++){
		      		echo "<i id='estrellaa$i' class='estrellaa large star icon' style='  color:red;' value='$i'></i>";
				}
				for($i=round($promedio)+1;$i<=round($diferencia)+round($promedio);$i++){
			      		echo "<i id='estrellaa$i' class='estrellaa large star icon' style=' color:#CECBCB;' value='$i'></i>";
				}  
			}
			
 ?>