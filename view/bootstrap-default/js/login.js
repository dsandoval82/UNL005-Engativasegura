function goLogin() {
  var connect, form, response, result, user, pass, sesion;
  user = __('email').value;
  pass = __('password').value;
  sesion = __('sesion').checked ? true : false;
  form = 'email=' + user + '&password=' + pass + '&sesion=' + sesion;
  connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
  connect.onreadystatechange = function() {
    if(connect.readyState == 4 && connect.status == 200) {
      if(connect.responseText == 1) {
        result = '<div class="alert alert-form alert-success text-xs-center">';
        result += '<span>Conectado..!';
        result += '<strong> Estamos redireccionando...</strong></span>';
        result += '</div>';
		__('_AJAX_LOGIN_').innerHTML = result;
		//location.replace("?view=index");
		window.top.location.href = "?view=index"; 
      } else {
        __('_AJAX_LOGIN_').innerHTML = connect.responseText;
      }
    } else if(connect.readyState != 4) {
      result = '<div class="alert alert-form alert-warning text-xs-center">';
      result += '<span>Procesando...';
      result += '<strong> espere porfavor....   </strong> <img src="view/bootstrap-default/img/ajax-loader.gif"> </span>';
      result += '</div>';
      __('_AJAX_LOGIN_').innerHTML = result;
    }
  }
  connect.open('POST','ajax.php?mode=login',true);
  connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
  connect.send(form);
}


function goRegistro() {
  var connect, form, response, result, email, pass, nombre, apellido, telefono, direccion, documento ;
  user = __('email').value;
  pass = __('password').value;
  nombre = __('nombre').value;
  apellido = __('apellido').value;
  telefono = __('telefono').value;
  direccion = __('direccion').value;
  documento = __('documento').value;
  
  form = 'email=' + user + '&password=' + pass + '&nombre='+ nombre +'&apellido=' + apellido + '&telefono=' + telefono + '&direccion=' + direccion + '&documento=' + documento;
  connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
  connect.onreadystatechange = function() {
    if(connect.readyState == 4 && connect.status == 200) {
      if(connect.responseText == 1) {
        result = '<div class="alert alert-form alert-success text-xs-center">';
        result += '<span>Usuario Registrado Exitosamente..!</span>';
        result += '</div>';
		__('_AJAX_REG_').innerHTML = result;
		//location.replace("?view=index");
		//window.top.location.href = "?view=index"; 
      } else {
        __('_AJAX_REG_').innerHTML = connect.responseText;
      }
    } else if(connect.readyState != 4) {
      result = '<div class="alert alert-form alert-warning text-xs-center">';
      result += '<span>Procesando...';
      result += '<strong> espere porfavor....   </strong> <img src="view/bootstrap-default/img/ajax-loader.gif"> </span>';
      result += '</div>';
      __('_AJAX_REG_').innerHTML = result;
    }
  }
  connect.open('POST','ajax.php?mode=registro',true);
  connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
  connect.send(form);
}

function runScriptLogin(e) {
  if(e.keyCode == 13) {
    goLogin();
  }
}



