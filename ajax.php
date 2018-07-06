<?php

if($_POST) {
  
  require('core/core.php');

  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'login':
      require('public/user/ajax/login.php');
    break;
	case 'registro':
      require('public/user/ajax/registro.php');
    break;
    default:
      header('location: ./');
    break;
  }
} else {
  //si no se envia por post redireccionamos al index
  header('location: ./');
}
?>