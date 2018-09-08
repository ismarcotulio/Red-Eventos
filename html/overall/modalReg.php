<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="modal fade" id="registro-overlay" style="vertical-align:middle;">
    <div  class="modal-dialog">
      <div id="regErrorMsg"></div>
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Registrate en impactec</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-lg-6 col-xs-12">
                      <div class="well">
                          <div role="form" id="loginForm" >
                              <div class="form-group">
                                  <label for="reg_username" class="control-label">Usuario</label>
                                  <input type="text" class="form-control" id="reg_username" name="reg_username" value="" required="" title="ingresa tu usuario aqui" placeholder="">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="reg_username" class="control-label">Correo</label>
                                  <input type="text" class="form-control" id="reg_email" name="reg_email" value="" required="" title="ingresa tu correo aqui" placeholder="ejemplo@gmail.com">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="reg_pass" class="control-label">Contraseña</label>
                                  <input type="password" class="form-control" id="reg_pass" name="reg_pass" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="reg_passdos" class="control-label">Repetir Contraseña</label>
                                  <input type="reg_password" class="form-control" id="reg_passdos" name="reg_passdos" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="reg_tyc" class="control-label">Acepto terminos y Condiciones</label>
                                  <input type="checkbox" class="form-control" id="reg_tyc" name="reg_tyc"  title="">
                                  <span class="help-block"></span>
                              </div>
                              <div id="loginErrorMsg" class="alert alert-error hide">Incorrecto usuario o contraseña</div>
                              <button type="submit" onclick="goReg();" class="btn btn-success btn-block">Registrarme</button>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-xs-12">
                      <p class="lead">Tienes Cuenta? <span class="text-success">Inicia Sesion</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span>Crea contenido</li>
                          <li><span class="fa fa-check text-success"></span>acceso a eventos</li>
                          <li><span class="fa fa-check text-success"></span>comparte</li>
                          <li><span class="fa fa-check text-success"></span>Descubre</li>
                          <li><span class="fa fa-check text-success"></span> Crea eventos <small>(solo Premium)</small></li>
                          <li><a href="#"><u>Leer mas</u></a></li>
                      </ul>
                      <p><a href="" class="btn btn-info btn-block" data-dismiss="modal" data-toggle="modal" data-target="#login-overlay">Iniciar Sesion!</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>