<?php 

require('core/core.php');



if (isset($_GET['view'])) {
	if($_GET['view'] == 'index'){
		if(isset($_SESSION['app_id'])){
			include('core/controllers/indexUserController.php');
		}else{
			include('core/controllers/indexController.php');	
		}
	}else{
		if (file_exists('core/controllers/'.strtolower($_GET['view']).'Controller.php')) {
			include('core/controllers/'.strtolower($_GET['view']).'Controller.php');
		}else{
			include('core/controllers/errorController.php');
		}
	}
	
}else{
	if(isset($_SESSION['app_id'])){
		include('core/controllers/indexUserController.php');
	}else{
		include('core/controllers/indexController.php');	
	}
	
}
 ?>