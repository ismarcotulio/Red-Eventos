function goLogin() {
  var connect, form, response, result, user, pass, sesion;
  user = __('username').value;
  pass = __('password').value;
 /*sesion = __('session_login').checked ? true : false;*/
  form = 'user=' + user + '&pass=' + pass;
  connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
  connect.onreadystatechange = function() {
    if(connect.readyState == 4 && connect.status == 200) {
      if(connect.responseText == 1) {
        result = '<div class="alert alert-dismissible alert-success">';
        result += '<h4>Conectado!</h4>';
        result += '<p><strong>Estamos redireccionandote...</strong></p>';
        result += '</div>';
        __('loginErrorMsg').innerHTML = result;
        location.reload();
      } else {

        __('loginErrorMsg').innerHTML = connect.responseText;
        console.log(connect.responseText);
      }
    } else if(connect.readyState != 4) {
      result = '<div class="alert alert-dismissible alert-warning">';
      result += '<button type="button" class="close" data-dismiss="alert">x</button>';
      result += '<h4>Procesando...</h4>';
      result += '<p><strong>Estamos intentando logearte....</strong></p>';
      result += '</div>';
      __('loginErrorMsg').innerHTML = result;
    }
  }
  connect.open('POST','ajax.php?mode=login',true);
  connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
  connect.send(form);
}

function runScriptLogin(event) {
  if(e.keyCode == 13) {
    
    
  }
}

