<?php
$Extencion = substr(strrchr(__FILE__, '.'), 1);

require('core/core.'. $Extencion);

if(isset($_GET['view'])) {

  if(file_exists('controller/' . strtolower($_GET['view']) . 'Controller.'. $Extencion)) {
    include('controller/' . strtolower($_GET['view']) . 'Controller.'. $Extencion);
  } else {

    include('controller/errorController.php');
  }
} else {

  include('controller/landingController.php');
}
?>