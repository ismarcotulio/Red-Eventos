<?php 

function posts(){
	$db = new conexion();
	$sql = $db->query("SELECT * FROM POST");
	if($db->rows($sql)>0){
		while($d = $db->recorrer($sql)) {
	      $posts[$d['Id_Usuario']] = array(
	        'Id_Usuario' => $d['Id_Usuario'],
	        'Nombre_Usuario' => $d['Nombre_Usuario'],
	        'pass' => $d['pass'],
	        'Email' => $d['Email'],
	       'Id_Rango' => $d['Id_Rango']
	      );
	    }
	} else {
	    $posts = false;
	}
	$db->liberar($sql);
  	$db->close();

  	return $users;
}


?>