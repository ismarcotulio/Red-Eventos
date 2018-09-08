function goReg() {
  var connect, form, response, result, user, pass, email, tyc, pass_dos;
  user = __('reg_username').value;
  pass = __('reg_pass').value;
  email = __('reg_email').value;
  pass_dos = __('reg_passdos').value;
  tyc = __('reg_tyc').checked ? true : false;

  if(true == tyc) {
    if(user != '' && pass != '' && pass_dos != '' && email != '') {
      if(pass == pass_dos) {
        form = 'user=' + user + '&pass=' + pass + '&email=' + email;
        connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        connect.onreadystatechange = function() {
          if(connect.readyState == 4 && connect.status == 200) {
            if(connect.responseText == 1) {
              result = '<div class="alert alert-dismissible alert-success">';
              result += '<h4>Registro completado!</h4>';
              result += '<p><strong>Estamos redireccionandote...</strong></p>';
              result += '</div>';
              __('regErrorMsg').innerHTML = result;
              location.reload();
            } else {
              __('regErrorMsg').innerHTML = connect.responseText;
            }
          } else if(connect.readyState != 4) {
            result = '<div class="alert alert-dismissible alert-warning">';
            result += '<button type="button" class="close" data-dismiss="alert">x</button>';
            result += '<h4>Procesando...</h4>';
            result += '<p><strong>Estamos procesando tu registro...</strong></p>';
            result += '</div>';
            __('regErrorMsg').innerHTML = result;
          }
        }
        connect.open('POST','ajax.php?mode=reg',true);
        connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        connect.send(form);
      } else {
        result = '<div class="alert alert-dismissible alert-danger">';
        result += '<button type="button" class="close" data-dismiss="alert">x</button>';
        result += '<h4>ERROR</h4>';
        result += '<p><strong>Las contraseñas no coinciden.</strong></p>';
        result += '</div>';
        __('regErrorMsg').innerHTML = result;
      }
    } else {
      result = '<div class="alert alert-dismissible alert-danger">';
      result += '<button type="button" class="close" data-dismiss="alert">x</button>';
      result += '<h4>ERROR</h4>';
      result += '<p><strong>Todos los campos deben estar llenos.</strong></p>';
      result += '</div>';
      __('regErrorMsg').innerHTML = result;
    }
  } else {
    result = '<div class="alert alert-dismissible alert-danger">';
    result += '<button type="button" class="close" data-dismiss="alert">x</button>';
    result += '<h4>ERROR</h4>';
    result += '<p><strong>Los términos y condiciones deben ser aceptados.</strong></p>';
    result += '</div>';
    __('regErrorMsg').innerHTML = result;
  }

}

function runScriptReg(e) {
  if(e.keyCode == 13) {
    goReg();
  }
}