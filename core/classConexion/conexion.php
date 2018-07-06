<?php
  // validamos el request para el login del sitio.
  if (!isset($_SESSION)) {
    session_start();
  }
  #Constantes de conexión
  define('DB_HOST','us-cdbr-iron-east-04.cleardb.net');
  define('DB_USER','b6ac746646d61e');
  define('DB_PASS','408d705d');
  define('DB_NAME','heroku_811eba59026acd7');
 
  //creamos la conexion
  class Conexion extends mysqli {
      public function __construct() {
        parent::__construct(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        $this->connect_errno ? die('Error en la conexión a la base de datos2') : null;
        $this->set_charset("utf8");
      }
     
  }
?>