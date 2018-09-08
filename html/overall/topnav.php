
	<div class="row" style="opacity:; position:relative; ">
		<nav class="navbar  navbar-fixed-top navbar-inverse" style="padding-top:5px;  index:10000000;" >
			<div class="container-fluid">
				<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
				<span class="sr-only">Menu</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand"><span style="font-size:50px; ">Impactec</span></a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-1">
<?php 
			if(isset($_SESSION['app_id'])){
				echo '<ul class="nav navbar-nav">
					<li><a href="?view=index">Inicio</a></li>
					<li><a href="?view=perfil">Perfil</a></li>
					<li><div style="position:relative; margin:10%;"><a href="?view=postear"><button class="btn btn-success" style="position:relative;">Postear</button></a></div></li>
					
				</ul>';
			}
 ?>

				
				<ul class="navbar-nav nav navbar-right">
					
<?php 
						if (!isset($_SESSION['app_id'])) {
							echo '<li><p class="navbar-text">Ya Tienes una Cuenta?</p></li>
									<li class="dropdown">
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
										<ul id="login-dp" class="dropdown-menu" style="index:20000;">
											<li>
												 <div class="row" style="index:20000;">
														<div class="col-md-12" style="index:20000;">
															Login via
															<div class="social-buttons" style="index:20000;">
																<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
																<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
															</div>
							                                or
															 <div class="form" role="form" accept-charset="UTF-8" id="login-nav" style="index:20000;">
																	<div class="form-group">
																		 <label class="sr-only" for="username">Email address</label>
																		 <input type="email" class="form-control" id="username" placeholder="Email address" required>
																	</div>
																	<div class="form-group" style="index:20000;">
																		 <label class="sr-only" for="password">Password</label>
																		 <input type="password" class="form-control" id="password" placeholder="Password" required>
							                                             <div id="loginErrorMsg"></div>
							                                             <div class="help-block text-right"><a href="#">Olvido Contraseña ?</a></div>
																	</div>
																	<div class="form-group" style="index:20000;">
																		 <button type="submit" class="btn btn-primary btn-block" onclick="goLogin()">Sign in</button>
																	</div>
																	<div class="checkbox" style="index:20000;">
																		 <label>
																		 <input type="checkbox"> Recordar esta cuenta?
																		 </label>
																	</div>
															 </div>
														</div>
														<div class="bottom text-center">
															<small style="color:gray;">Nuevo Aqui?</small> <a href="#" data-toggle="modal" data-target="#registro-overlay"><b>Registrate</b></a>
														</div>
												 </div>
											</li>
										</ul>
							        </li>';

						}else{
							echo '<li><p class="navbar-text">'.strtoupper($_users[$_SESSION['app_id']]['Nombre_Usuario']).'</p></li>
								  <li><a href="?view=logout">Cerrar</a></li>';
						}
?>
			        
					<!--li style="padding:10px;">
						<button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#registro-overlay">Registro</button>
					</li-->
					<!--li><a href="#" data-toggle="modal" data-target="#login">login</a></li>
					<li><a href="#" data-toggle="modal" data-target="#sigin">Sigin<span class="icon-user"></span></a></li-->
			</ul>

			</div>
		</div>
		</nav>
	</div>
	<?php 

	if (!isset($_SESSION['app_id'])) {
		 include('html/overall/modales.php');
		 include('html/overall/modalLogin.php');
		 include('html/overall/modalReg.php');
	}
	 ?>
