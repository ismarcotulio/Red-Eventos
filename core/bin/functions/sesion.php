<?php

function sesion($visita,$registro){
	$db = new conexion();
	$sql = $db->query("SELECT MAX(Id_Inicio_Sesion) AS id FROM Inicio_Sesion;");
    $id_sesion = $db->recorrer($sql)[0]+1;
    $db->liberar($sql);

    $sql = $db->query("INSERT INTO inicio_sesion(id_inicio_sesion,id_visita,id_usuario)
		 		VALUES($id_sesion,$visita,$registro)");
    $db->close();

    return $id_sesion;
}

?>