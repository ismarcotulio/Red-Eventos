<?php 
error_reporting(0);
$db = new conexion();
$direccion=$_SERVER['REQUEST_URI'];
	$sub2 = explode('=',$direccion);
	$post = explode('.',$sub2[2]);
	$idpost = intval($post[1]);

$sql =  $db->query("SELECT count(id_post) FROM post WHERE id_usuario=$idpost");

if($sql){
	$row = $db->recorrer($sql);
	$db->liberar($sql);
	echo "

		<p>$row[0]</p>

	";
}else{
	echo "

		<p>$idpost</p>

	";
}

$db->close();
?>