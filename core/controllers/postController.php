<?php 

if($_GET['post']){
	$post=$_GET['post'];
	include("html/usuario/posts/$post.php");
}


?>