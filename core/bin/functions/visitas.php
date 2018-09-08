<?php

function visita(){

					date_default_timezone_set('UTC');
					if(!isset($_COOKIE['visita'])){
						//Definir el id de la pagina ------------------------------------------
					//$id =& web();
					//---------------------------------------------------------------------

					//Definir la Ip del visitante------------------------------------------
					if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) &&
							$_SERVER['HTTP_X_FORWARDED_FOR'] != ''){

							$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
						}else{
							$ip = $_SERVER['REMOTE_ADDR'];
						}
					//---------------------------------------------------------------------

					//Definir demas datos del visitante por medio de Geoplugin-------------------------
					$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
						$latitud = $meta['geoplugin_latitude'];
						$longitud = $meta['geoplugin_longitude'];
						$ciudad = $meta['geoplugin_city'];
						$fecha = date('Y/m/d H:i:s');
					//-----------------------------------------------------------------------------------

					//Definir el numero de visita--------------------------------------------------------
						//$id_visita =& visita();
						
					//-----------------------------------------------------------------------------------
						//Definir el incio de sesion--------------------------------------------------------
						//$sesion =& sesion();
						$db = new conexion();

						$sql = $db->query("SELECT MAX(Id_Visita) AS id FROM VISITA;");
    					$id_visita = $db->recorrer($sql)[0]+1;
    					$db->liberar($sql);
						
						$sql2 = $db->query("INSERT INTO VISITA (Id_Visita,Id_Web,Ip,Fecha,Ciudad,Latitud,Longitud) VALUES ($id_visita,4,'$ip','$fecha','$ciudad','$latitud','$longitud')");
						//$db->liberar($sql2);
						
    					 echo "<script>console.log( 'Debug Objects: " . $id_visita . "' );</script>";

					  

  
						
					//-----------------------------------------------------------------------------------
						
						

						if($sql2){
							setcookie("visita","$id_visita",time()+60*60*5);
							//setcookie("sesion","$sesion",time()+60*60*5);
						}

					
					$db->close();
					}

  return 'hola';
}
					
?>