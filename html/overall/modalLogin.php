<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="modal fade" id="login-overlay" style="vertical-align:middle;" >
    <div  class="modal-dialog">
      <div id="loginErrorMsg"></div>
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Iniciar Sesion en Impactec</h4>
          </div>
          <div class="modal-body" >
              <div class="row">
                  <div class="col-lg-6 col-xs-12">
                      <div class="well">
                          <div role="form" id="loginForm" >
                              <div class="form-group">
                                  <label for="username" class="control-label">Usuario o Correo</label>
                                  <input type="text" class="form-control" id="username" name="username" value="" required="" title="ingresa tu usuario aqui" placeholder="ejemplo@gmail.com">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Contraseña</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" id="remember"> Recordar esta cuenta?
                                  </label>
                                  <p class="help-block">(ordenador privado)</p>
                              </div>
                              <button type="submit" class="btn btn-success btn-block" onclick="goLogin()">Log In</button>
                              <a href="#" class="btn btn-default btn-block">Ayuda</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-xs-12">
                      <p class="lead">Registrate Ahora <span class="text-success">Gratis</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span>Crea contenido</li>
                          <li><span class="fa fa-check text-success"></span>acceso a eventos</li>
                          <li><span class="fa fa-check text-success"></span>comparte</li>
                          <li><span class="fa fa-check text-success"></span>Descubre</li>
                          <li><span class="fa fa-check text-success"></span> Crea eventos <small>(solo Premium)</small></li>
                          <li><a href="/read-more/"><u>Leer mas</u></a></li>
                      </ul>
                      <p><a href="/new-customer/" class="btn btn-info btn-block" data-dismiss="modal" data-toggle="modal" data-target="#registro-overlay">Registrate ahora!</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>