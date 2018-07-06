<?php
 //configuramos timezone vease http://php.net/manual/en/timezones.php
 date_default_timezone_set('America/Bogota');
  
 //definimos ruta y titulo del sitio
 define('URL_VIEW','view/');
 define('TITLE_WEB','Localidad Segura');
 define('URL_WEB','/');
 define('NOMBRE_WEB','Localidad Segura');
 
 //definimos url de inicios
 $Extencion = substr(strrchr(__FILE__, '.'), 1);
 //Conexion a la bases de datos
 require_once('classConexion/conexion.' . $Extencion);
 require_once('funciones/usuario.' . $Extencion);
 //instaciamos User() para utilizarlo en el sitio
 $_usuario = User();
?>